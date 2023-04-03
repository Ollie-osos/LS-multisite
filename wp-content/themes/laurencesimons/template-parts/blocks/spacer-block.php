<?php

$bg_class;

if($display_circles == true){
    $bg_class = 'bg-' . $background_color . ' bg-2-circles-' . $circles_color;
}else{
    $bg_class = 'bg-' . $background_color;
}

?>

<div class="spacer padding-0 <?php echo $bg_class ?>" style="<?php echo $height ? 'height:' . $height . 'px;': ';'; ?>">
</div>