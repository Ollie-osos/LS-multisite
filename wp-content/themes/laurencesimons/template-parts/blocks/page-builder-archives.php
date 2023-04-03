<?php if( have_rows('page_builder', 'option') ):	?>

    <?php while ( have_rows('page_builder', 'option') ) : the_row(); ?>

       <?php include('builder.php'); ?>

    <?php endwhile; ?>

<?php else : ?>
    <!-- NO PAGE COMPONENTS -->

<?php endif; ?>