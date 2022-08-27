<?php /* Section - Project highlight */

global $website_settings;
$content            = get_sub_field('content');
$section_settings   = get_sub_field('section_settings');
$arrow              = get_template_directory() . '/icons/svg/arrow-d-w.svg';


foreach($content['featured_projects'] as $i => $featured) :
    $featuredID              = $featured['project']->ID;
    $featuredContent[]       = get_field('content', $featuredID);
    $featuredLink[]          = get_permalink($featuredID);
    $featuredCategory[]      = get_the_category($featuredID);
endforeach;

wp_reset_postdata(); 

?>

<section class="<?= $section_settings['spacing_top']; ?> <?= $section_settings['spacing_bottom']; ?> flex flex-col gap-12 lg:gap-0 lg:pl-0 lg:pr-0 section-projecthighlight lg:justify-center">
    <?php foreach($featuredContent as $i => $project) :
        $general    = $project['general_info'];
        
        if ($general['highlight_type'] == 'double-phone') {
            include(get_template_directory() . '/sections/project-styles/double-phone.php');
        } elseif ($general['highlight_type'] == 'desktop-windows') {
            include(get_template_directory() . '/sections/project-styles/desktop-windows.php');
        }
        

    endforeach ?>
</section>