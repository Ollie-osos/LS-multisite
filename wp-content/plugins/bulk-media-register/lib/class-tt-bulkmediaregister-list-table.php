<?php
/**
 * Bulk Media Register
 *
 * @package    Bulk Media Register
 * @subpackage BulkMediaRegister List Table
 * reference   Custom List Table Example
 *             https://wordpress.org/plugins/custom-list-table-example/
/*
	Copyright (c) 2020- Katsushi Kawamori (email : dodesyoswift312@gmail.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; version 2 of the License.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-screen.php' );
	require_once( ABSPATH . 'wp-admin/includes/screen.php' );
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	require_once( ABSPATH . 'wp-admin/includes/template.php' );
}

/** ==================================================
 * List table
 */
class TT_BulkMediaRegister_List_Table extends WP_List_Table {

	/** ==================================================
	 * Max items
	 *
	 * @var $max_items  max_items.
	 */
	public $max_items;

	/** ==================================================
	 * Construct
	 *
	 * @since 1.10
	 */
	public function __construct() {

		if ( ! class_exists( 'BulkMediaRegister' ) ) {
			require_once dirname( __FILE__ ) . '/class-bulkmediaregister.php';
		}

		global $status, $page;
		/* Set parent defaults */
		parent::__construct(
			array(
				'singular'  => 'files',
				'ajax'      => false,
			)
		);

	}

	/** ==================================================
	 * Read data
	 *
	 * @since 1.10
	 */
	private function read_data() {

		$files = get_user_option( 'bulkmediaregister_files', get_current_user_id() );

		$bulkmediaregister = new BulkMediaRegister();

		$bulkmediaregister_settings = get_user_option( 'bulkmediaregister', get_current_user_id() );
		delete_user_option( get_current_user_id(), 'bulkmediaregister_lists_break' );
		@set_time_limit( $bulkmediaregister_settings['max_execution_time'] );
		$start_time = time();
		$exe_stop_diff_time = intval( ini_get( 'max_execution_time' ) * 0.8 );

		$listtable_array = array();
		if ( ! empty( $files ) ) {
			$count = 0;
			foreach ( $files as $file ) {
				if ( time() - $start_time >= $exe_stop_diff_time ) {
					update_user_option( get_current_user_id(), 'bulkmediaregister_lists_break', true );
					break;
				}

				++$count;

				$upload_path = wp_normalize_path( $bulkmediaregister->upload_dir );
				$url = $bulkmediaregister->upload_url . str_replace( $upload_path, '', $file );
				list( $title, $mime_type ) = $this->input_html( $file, $url, $count );
				$date = get_date_from_gmt( gmdate( 'Y-m-d H:i:s', filemtime( $file ) ) );

				$listtable_array[] = array(
					'ID'       => $count,
					'title'    => $title,
					'filename' => $file,
					'url'      => $url,
					'datetime' => $date,
					'filetype' => $mime_type,
				);
			}

			wp_enqueue_script( 'jquery' );
			$handle  = 'bulkmediaregister-js';
			$action1 = 'bulkmediaregister-ajax-action';
			$action2 = 'bulkmediaregister_message';
			wp_enqueue_script( $handle, plugin_dir_url( __DIR__ ) . 'js/jquery.selectmediaregister.js', array( 'jquery' ), '1.00', false );

			wp_localize_script(
				$handle,
				'bulkmediaregister',
				array(
					'ajax_url' => admin_url( 'admin-ajax.php' ),
					'action' => $action1,
					'nonce' => wp_create_nonce( $action1 ),
				)
			);
			wp_localize_script(
				$handle,
				'bulkmediaregister_mes',
				array(
					'ajax_url' => admin_url( 'admin-ajax.php' ),
					'action' => $action2,
					'nonce' => wp_create_nonce( $action2 ),
				)
			);
			wp_localize_script(
				$handle,
				'bulkmediaregister_data',
				array(
					'uid' => get_current_user_id(),
				)
			);

			wp_localize_script(
				$handle,
				'bulkmediaregister_text',
				array(
					'stop_button' => __( 'Stop', 'bulk-media-register' ),
					'stop_message' => __( 'Stopping now..', 'bulk-media-register' ),
					'select_error' => __( 'Please choose the file.', 'bulk-media-register' ),
				)
			);

		}

		return $listtable_array;

	}

	/** ==================================================
	 * Input html
	 *
	 * @param string $file  file.
	 * @param string $url  url.
	 * @param string $postcount  postcount.
	 * @return string $input_html  input_html.
	 * @since 1.10
	 */
	private function input_html( $file, $url, $postcount ) {

		$filetype = wp_check_filetype( $file );
		$ext = $filetype['ext'];
		$mime_type = $filetype['type'];

		$file_size = size_format( filesize( $file ) );
		if ( 'image' === wp_ext2type( $ext ) || 'pdf' === strtolower( $ext ) ) {
			$view_thumb_url = $this->create_cash( $ext, $file, $url );
		} else if ( 'audio' === wp_ext2type( $ext ) ) {
			$view_thumb_url = $this->siteurl() . '/' . WPINC . '/images/media/audio.png';
			$metadata_audio = wp_read_audio_metadata( $file );
			$file_size = size_format( $metadata_audio['filesize'] );
			$length = $metadata_audio['length_formatted'];
		} else if ( 'video' === wp_ext2type( $ext ) ) {
			$view_thumb_url = $this->siteurl() . '/' . WPINC . '/images/media/video.png';
			$metadata_video = wp_read_video_metadata( $file );
			$file_size = size_format( $metadata_video['filesize'] );
			$length = $metadata_video['length_formatted'];
		} else {
			$filetype2 = wp_ext2type( $ext );
			if ( empty( $filetype2 ) ) {
				$filetype2 = 'default';
			}
			$view_thumb_url = $this->siteurl() . '/' . WPINC . '/images/media/' . $filetype2 . '.png';
		}
		$input_html = '<img width="40" height="40" src="' . $view_thumb_url . '" style="float: left; margin: 5px;">';

		$input_html .= '<div style="overflow: hidden;">';
		$input_html .= '<div><a href="' . $url . '" target="_blank" rel="noopener noreferrer" style="text-decoration: none; word-break: break-all;">' . $url . '</a></div>';

		$input_html .= '<div>' . __( 'File size:' ) . ' ' . $file_size . '</div>';
		if ( 'audio' === wp_ext2type( $ext ) || 'video' === wp_ext2type( $ext ) ) {
			$input_html .= '<div>' . __( 'Length:' ) . ' ' . $length . '</div>';
		}
		$input_html .= '</div>';

		return array( $input_html, $mime_type );

	}

	/** ==================================================
	 * Create cache
	 *
	 * @param string $ext  ext.
	 * @param string $file  file.
	 * @param string $url  url.
	 * @return string $view_thumb_url
	 * @since 1.10
	 */
	private function create_cash( $ext, $file, $url ) {

		$bulkmediaregister = new BulkMediaRegister();

		$cash_thumb_key = md5( $url );

		$ext = strtolower( $ext );

		if ( 'pdf' === $ext ) {
			$cash_thumb_filename = $bulkmediaregister->plugin_tmp_dir . '/' . $cash_thumb_key . '-pdf.jpg';
		} else {
			$cash_thumb_filename = $bulkmediaregister->plugin_tmp_dir . '/' . $cash_thumb_key . '.' . $ext;
		}

		$value_cash = get_transient( $cash_thumb_key );
		if ( false <> $value_cash ) {
			if ( ! file_exists( $cash_thumb_filename ) ) {
				delete_transient( $cash_thumb_key );
				$value_cash = false;
			}
		}
		if ( ! $value_cash ) {
			$filetype2 = wp_ext2type( $ext );
			if ( empty( $filetype2 ) ) {
				$filetype2 = 'default';
			}
			if ( ! file_exists( $cash_thumb_filename ) ) {
				$cash_thumb = wp_get_image_editor( $file );
				if ( ! is_wp_error( $cash_thumb ) ) {
					if ( 'pdf' === $ext ) {
						$cash_thumb->generate_filename( 'image', null, 'jpg' );
						$cash_thumb->save( $cash_thumb_filename );
						$cash_thumb2 = wp_get_image_editor( $cash_thumb_filename );
						if ( ! is_wp_error( $cash_thumb2 ) ) {
							$cash_thumb2->resize( 40, 40, true );
							$cash_thumb2->save( $cash_thumb_filename );
							$view_thumb_url = $bulkmediaregister->plugin_tmp_url . '/' . $cash_thumb_key . '-pdf.jpg';
						} else {
							$view_thumb_url = $this->siteurl() . '/' . WPINC . '/images/media/' . $filetype2 . '.png';
						}
					} else {
						$cash_thumb->resize( 40, 40, true );
						$cash_thumb->save( $cash_thumb_filename );
						$view_thumb_url = $bulkmediaregister->plugin_tmp_url . '/' . $cash_thumb_key . '.' . $ext;
					}
				} else {
					$view_thumb_url = $this->siteurl() . '/' . WPINC . '/images/media/' . $filetype2 . '.png';
				}
			} else {
				if ( file_exists( $cash_thumb_filename ) ) {
					$view_thumb_url = $bulkmediaregister->plugin_tmp_url . '/' . $cash_thumb_key . '.' . $ext;
				} else {
					$view_thumb_url = $this->siteurl() . '/' . WPINC . '/images/media/' . $filetype2 . '.png';
				}
			}
			set_transient( $cash_thumb_key, $view_thumb_url, DAY_IN_SECONDS );
		} else {
			$view_thumb_url = $value_cash;
			set_transient( $cash_thumb_key, $value_cash, DAY_IN_SECONDS );
		}

		return $view_thumb_url;

	}

	/** ==================================================
	 * Site url
	 *
	 * @return $siteurl
	 * @since 1.10
	 */
	private function siteurl() {
		if ( is_multisite() ) {
			global $blog_id;
			$siteurl = get_blog_details( $blog_id )->siteurl;
		} else {
			$siteurl = site_url();
		}
		return $siteurl;
	}

	/** ==================================================
	 * Column default
	 *
	 * @param array  $item  item.
	 * @param string $column_name  column_name.
	 * @since 1.00
	 */
	public function column_default( $item, $column_name ) {
		switch ( $column_name ) {
			case 'datetime':
				return $item[ $column_name ];
			case 'filetype':
				return $item[ $column_name ];
			default:
				return print_r( $item, true ); /* Show the whole array for troubleshooting purposes */
		}
	}

	/** ==================================================
	 * Column title
	 *
	 * @param array $item  item.
	 * @since 1.10
	 */
	public function column_title( $item ) {
		/* Return the title contents */
		return sprintf(
			'%1$s <span style="color:silver"></span>',
			/*$1%s*/ $item['title']
		);
	}

	/** ==================================================
	 * Column checkbox
	 *
	 * @param array $item  item.
	 * @since 1.10
	 */
	public function column_cb( $item ) {
		return sprintf(
			'<input type="checkbox" name="%1$s[%2$s]" value="%3$s" form="selectmediaregister_forms" />',
			/*%1$s*/ $this->_args['singular'],
			/*%2$s*/ $item['ID'],
			/*%3$s*/ $item['filename']
		);
	}

	/** ==================================================
	 * Get Columns
	 *
	 * @since 1.10
	 */
	public function get_columns() {
		$columns = array(
			'cb'       => '<input type="checkbox" />', /* Render a checkbox instead of text */
			'title'    => __( 'File', 'bulk-media-register' ),
			'datetime' => __( 'Date/time' ),
			'filetype' => __( 'File type:' ),
		);
		return $columns;
	}

	/** ==================================================
	 * Get Sortable Columns
	 *
	 * @since 1.10
	 */
	public function get_sortable_columns() {
		$sortable_columns = array(
			'title'     => array( 'title', false ),
			'datetime'  => array( 'datetime', false ),
			'filetype'  => array( 'filetype', false ),
		);
		return $sortable_columns;
	}

	/** ************************************************************************
	 * REQUIRED! This is where you prepare your data for display. This method will
	 * usually be used to query the database, sort and filter the data, and generally
	 * get it ready to be displayed. At a minimum, we should set $this->items and
	 * $this->set_pagination_args(), although the following properties and methods
	 * are frequently interacted with here...
	 *
	 * @global WPDB $wpdb
	 * @uses $this->_column_headers
	 * @uses $this->items
	 * @uses $this->get_columns()
	 * @uses $this->get_sortable_columns()
	 * @uses $this->get_pagenum()
	 * @uses $this->set_pagination_args()
	 **************************************************************************/
	public function prepare_items() {

		/**
		 * First, lets decide how many records per page to show
		 */
		$bulkmediaregister_settings = get_user_option( 'bulkmediaregister', get_current_user_id() );
		$per_page = $bulkmediaregister_settings['per_page'];

		/**
		 * REQUIRED. Now we need to define our column headers. This includes a complete
		 * array of columns to be displayed (slugs & titles), a list of columns
		 * to keep hidden, and a list of columns that are sortable. Each of these
		 * can be defined in another method (as we've done here) before being
		 * used to build the value for our _column_headers property.
		 */
		$columns = $this->get_columns();
		$hidden = array();
		$sortable = $this->get_sortable_columns();

		/**
		 * REQUIRED. Finally, we build an array to be used by the class for column
		 * headers. The $this->_column_headers property takes an array which contains
		 * 3 other arrays. One for all columns, one for hidden columns, and one
		 * for sortable columns.
		 */
		$this->_column_headers = array( $columns, $hidden, $sortable );

		/**
		 * Instead of querying a database, we're going to fetch the example data
		 * property we created for use in this plugin. This makes this example
		 * package slightly different than one you might build on your own. In
		 * this example, we'll be using array manipulation to sort and paginate
		 * our data. In a real-world implementation, you will probably want to
		 * use sort and pagination data to build a custom query instead, as you'll
		 * be able to use your precisely-queried data immediately.
		 */
		$data = $this->read_data();

		/**
		 * This checks for sorting input and sorts the data in our array accordingly.
		 *
		 * In a real-world situation involving a database, you would probably want
		 * to handle sorting by passing the 'orderby' and 'order' values directly
		 * to a custom query. The returned data will be pre-sorted, and this array
		 * sorting technique would be unnecessary.
		 *
		 * @param array $a  a.
		 * @param array $b  b.
		 */
		function usort_reorder( $a, $b ) {
			/* If no sort, default to title */
			if ( isset( $_REQUEST['orderby'] ) && ! empty( $_REQUEST['orderby'] ) ) {
				$orderby = sanitize_text_field( wp_unslash( $_REQUEST['orderby'] ) );
			} else {
				$orderby = 'title';
			}
			/* If no order, default to asc */
			if ( isset( $_REQUEST['order'] ) && ! empty( $_REQUEST['order'] ) ) {
				$order = sanitize_text_field( wp_unslash( $_REQUEST['order'] ) );
			} else {
				$order = 'asc';
			}
			$result = strcmp( $a[ $orderby ], $b[ $orderby ] ); /* Determine sort order */
			return ( 'asc' === $order ) ? $result : -$result; /* Send final sort direction to usort */
		}
		usort( $data, 'usort_reorder' );

		/***********************************************************************
		 * ---------------------------------------------------------------------
		 * vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
		 *
		 * In a real-world situation, this is where you would place your query.
		 *
		 * For information on making queries in WordPress, see this Codex entry:
		 * http://codex.wordpress.org/Class_Reference/wpdb
		 *
		 * ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
		 * ---------------------------------------------------------------------
		 */

		/**
		 * REQUIRED for pagination. Let's figure out what page the user is currently
		 * looking at. We'll need this later, so you should always include it in
		 * your own package classes.
		 */
		$current_page = $this->get_pagenum();

		/**
		 * REQUIRED for pagination. Let's check how many items are in our data array.
		 * In real-world use, this would be the total number of items in your database,
		 * without filtering. We'll need this later, so you should always include it
		 * in your own package classes.
		 */
		$total_items = count( $data );
		$this->max_items = $total_items;

		/**
		 * The WP_List_Table class does not handle pagination for us, so we need
		 * to ensure that the data is trimmed to only the current page. We can use
		 * array_slice() to
		 */
		$data = array_slice( $data, ( ( $current_page - 1 ) * $per_page ), $per_page );

		/**
		 * REQUIRED. Now we can add our *sorted* data to the items property, where
		 * it can be used by the rest of the class.
		 */
		$this->items = $data;

		/**
		 * REQUIRED. We also have to register our pagination options & calculations.
		 */
		$this->set_pagination_args(
			array(
				'total_items' => $total_items,                  /* WE have to calculate the total number of items */
				'per_page'    => $per_page,                     /* WE have to determine how many items to show on a page */
				'total_pages' => ceil( $total_items / $per_page ),   /* WE have to calculate the total number of pages */
			)
		);
	}

}


