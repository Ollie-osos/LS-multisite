<?php if( have_rows('page_builder') ):	?>

    <?php while ( have_rows('page_builder') ) : the_row(); ?>

        <?php include('builder.php'); ?>

    <?php endwhile; ?>

<?php else : ?>
    <!-- NO PAGE COMPONENTS -->

<?php endif; ?>