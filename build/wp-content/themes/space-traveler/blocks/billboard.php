<?php 
    $headline = get_field('billboard_headline');
    $subhead = get_field('billboard_subhead');
    $image = get_field('billboard_image');
    $image_xl = $image['sizes']['billboard-xl'];
    $image_lg = $image['sizes']['billboard-lg'];
    $image_md = $image['sizes']['billboard-md'];
    $image_sm = $image['sizes']['billboard-sm'];
?>

<section class="billboard">
    <div class="billboard__headings">
        <h1 class="billboard__headline">
            <?php  echo $headline ?>
        </h1>
        <h2 class="billboard__subhead">
            <?php  echo $subhead ?>
        </h2>
    </div>
    <picture>
        <source media="(max-width: 576px)" srcset="<?php echo $image_sm ?>">
        <source media="(max-width: 768px)" srcset="<?php echo $image_md ?>">
        <source media="(max-width: 992px)" srcset="<?php echo $image_lg ?>">
        <img src="<?php echo $image_xl ?>" alt="" class="billboard__image">
    </picture>
</section>