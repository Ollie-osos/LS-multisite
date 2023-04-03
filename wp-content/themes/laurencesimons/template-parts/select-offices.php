<?php

$offices = get_field('office_location', 'option');
$id = $args['id'];

$ini_head_office;
$ini_address;
$ini_address_2;
$ini_address_3;
$ini_name;
$ini_postcode;
$ini_country;
$ini_calling_code;
$ini_email;
$style_2 = '';
$style_3 = '';
foreach( $offices as $office ):
    if($office['head_office']){
        $ini_head_office = 'London / Head office';
        $ini_address = $office['address'];

        $ini_address_2 = $office['address_line_2'];
        if ($ini_address_2 == ''){
            $style_2 = 'display: none;' ;
        }

        $ini_address_3 = $office['address_line_3'];
        if ($ini_address_3 == ''){
            $style_3 = 'display: none;' ;
        }
        $ini_name = $office['name'];
        $ini_postcode = $office['post_code'];
        $ini_country = $office['country'];
        $ini_calling_code = '+' . $office['calling_code'];
        $ini_phone_number =  ' (0) 2076458500';
        $ini_phone_number2 =  '2076458500';
        $ini_email = $office['email'];
        $ini_map = $office['google_map_location'];
    }

    str_replace(',', '', $office['address']);
endforeach;

?>

<?php if($offices): ?>

    <div class="column is-4" id="offices-<?php echo $id?>">
        <div class="input-group-select-office">
            <div class="select-body">
                <div class="select-body-title is-flex is-align-content-center">

                    <?php if($id == 'footer') : ?>
                        <h5 class="text-link" id="contact-headoffice-<?php echo $id?>"><?php echo $ini_head_office ?></h5>
                    <?php else : ?>
                        <h3 class="text-link" id="contact-headoffice-<?php echo $id?>"><?php echo $ini_head_office ?></h3>
                    <?php endif; ?>

                    <select class="input-select-office" name="select-office" id="select-office-<?php echo $id?>">
                        <?php foreach( $offices as $office ): ?>
                            <option value="<?php echo $office['name'] ?>"><?php echo $office['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
            </div>

            <ul class="list-unstyled
            <?php if($id == 'archive') : ?>
                <?php echo 'margin-top-30' ?>
            <?php endif;?>
            ">
                <li class="margin-bottom-30">
                    <ul class="list-unstyled">
                        <li id="contact-address-<?php echo $id?>"><?php echo $ini_address ?></li>
                        <li style="<?php echo $style_2 ?>"
                            id="contact-address-2-<?php echo $id?>"><?php echo $ini_address_2 ?>
                        </li>
                        <li style="<?php echo $style_3 ?>"
                            id="contact-address-2-<?php echo $id?>"><?php echo $ini_address_3 ?>
                        </li>
                        <li id="contact-city-<?php echo $id?>"><?php echo $ini_name ?></li>
                        <li id="contact-postcode-<?php echo $id?>"><?php echo $ini_postcode ?></li>
                        <li id="contact-country-<?php echo $id?>"><?php echo $ini_country ?></li>
                    </ul>
                </li>
                <li class="margin-bottom-30">
                    <a id="contact-phone-<?php echo $id?>" href="tel:<?php echo $ini_calling_code ?><?php echo $ini_phone_number2 ?>">
                        Phone <?php echo $ini_calling_code ?> <?php echo $ini_phone_number ?></a>
                </li>
                <li><a id="contact-email-<?php echo $id?>" href="mailto:<?php echo $ini_email ?>"><?php echo $ini_email ?></a></li>
            </ul>
        </div>
    </div>

    <?php if($id === 'archive') : ?>
        <div class="column">
            <div id="map" class="googlemapimage" style="width:100%;height:400px;"></div>
        </div>

    <?php endif; ?>

    <script>

        (function($) {
            $(document).ready(function () {

                $( "#select-office-" + <?php echo json_encode($id) ?> ).change(function() {

                    var officeTitle = this.value,
                        city = this.value,
                        location = '',
                        location_2 = '',
                        location_3 = '',
                        postcode = '',
                        country = '',
                        email = '',
                        phone = '',
                        phone2 = '',
                        href = '',
                        mailto = '',
                        map = 'hidden',
                        id = <?php echo json_encode($id) ?>;

                    <?php foreach( $offices as $office ): ?>

                    if(city === <?php echo json_encode($office['name']) ?>){

                        if(<?php echo json_encode($office['head_office']) ?>){
                            officeTitle = <?php echo json_encode($office['name']) ?> + ' / Head office';
                        }

                        <?php if ($office['address']): ?>
                        location = <?php echo json_encode($office['address']) ?>;
                        <?php endif; ?>

                        <?php if ($office['address_line_2']): ?>
                        location_2 = <?php echo json_encode($office['address_line_2']) ?>;
                        <?php endif; ?>
                        <?php if ($office['address_line_3']): ?>
                        location_3 = <?php echo json_encode($office['address_line_3']) ?>;
                        <?php endif; ?>

                        <?php if ($office['post_code']): ?>
                        postcode = <?php echo json_encode($office['post_code']) ?>;
                        <?php endif; ?>

                        <?php if ($office['country']): ?>
                        country =<?php echo json_encode($office['country']) ?>;
                        <?php endif; ?>

                        <?php if ($office['phone_number']): ?>
                        phone ='+' + <?php echo json_encode($office['calling_code']) ?> + ' ' + <?php echo json_encode($office['phone_number']) ?>.replace(/^0+/, '');
                        phone2 ='+' + <?php echo json_encode($office['calling_code']) ?> + ' ' + <?php echo json_encode($office['phone_number']) ?>.replace(/^0+/, '(0) ');
                        <?php if ($office['calling_code']): ?>
                        href = "tel: +" + <?php echo json_encode($office['calling_code']) ?> + <?php echo json_encode($office['phone_number']) ?>.replace(/^0+/, '');
                        <?php else : ?>
                        href = "tel:" + <?php echo json_encode($office['phone_number']) ?>;
                        <?php endif; ?>
                        <?php endif; ?>

                        <?php if ($office['email']): ?>
                        email =<?php echo json_encode($office['email']) ?>;
                        mailto = 'mailto:' + <?php echo json_encode($office['email']) ?>;
                        <?php endif; ?>

                        <?php if ($office['google_map_location']): ?>
                           map = <?php echo json_encode($office['google_map_location']); ?>
                        <?php endif; ?>

                    }
                    <?php endforeach; ?>


                    $('#contact-headoffice-' + id).text(officeTitle);
                    $('#contact-address-' + id).text(location);
                    $('#contact-address-2-' + id).text(location_2);
                    if(location_2 == '') {
                        $('#contact-address-2-' + id).attr('style', 'display: none;');
                    }else{
                        $('#contact-address-2-' + id).attr('style', 'display: block;');
                    }
                    $('#contact-address-3-' + id).text(location_3);
                    if(location_3 == '') {
                        $('#contact-address-3-' + id).attr('style', 'display: none;');
                    }else{
                        $('#contact-address-3-' + id).attr('style', 'display: block;');
                    }
                    $('#contact-city-' + id).text(city);
                    $('#contact-postcode-' + id).text(postcode);
                    $('#contact-country-' + id).text(country);

                    $('#contact-phone-' + id).text(phone2);
                    $('#contact-phone-' + id).attr("href", href);

                    $('#contact-email-' + id).text(email);
                    $('#contact-email-' + id).attr("href", mailto);

                    <?php if ($id === 'archive'): ?>
                    var array = map.split(',');
                    var lat = array[0];
                    var long = array[1];

                    newLocation(lat, long)
                    <?php endif; ?>
                });
            });
        })(jQuery);
    </script>



    <script type="text/javascript">

        var array = <?php echo json_encode($ini_map) ?>.split(',');
        var lat = array[0];
        var long = array[1];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom:15,
            center: new google.maps.LatLng(lat, long),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker;
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, long),
                map: map
            });

        function newLocation(lat,long) {
            map.setCenter(new google.maps.LatLng(lat, long));
            marker.setPosition(new google.maps.LatLng(lat, long));
        }


    </script>

<?php endif; ?>