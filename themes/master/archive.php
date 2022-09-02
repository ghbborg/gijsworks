<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package master
 */

get_header();
?>
<?php  /* Section: Categorie */ 
global $website_settings;

$content        = get_sub_field('content');
$section        = get_sub_field('section_settings');
$arrow          = get_template_directory() . "/icons/svg/arrow-d.svg";
$categories     = array();
$hasCategory    = false;

// Projects query


$postQuery      = new WP_Query( array (
    'post_type' => 'projects',
));


foreach(get_categories() as $category) {
    // Check whether categories aren't empty.
    if($category->count > 0) {
        // Check whether category has a parent category (thus sub category).
        $categories[] = $category;
    }
}

?>

<section class="flex flex-col pt-24 pb-24 pl-0 pr-0 lg:pt-32 2xl:pt-40 lg:pb-32 2xl:pb-40 lg:pr-0 section-projects lg:justify-center">
    <div class="h-full lg:flex lg:justify-center">
        <div class="flex flex-col h-full pl-6 pr-6 lg:pl-16 lg:pr-16 blok-lg">
            <div>
                <h1 class="text-3xl font-bold lg:text-5xl 2xl:text-6xl">
                    Portfolio
                </h1>
            </div>

            <div class="flex flex-col justify-between gap-8 pt-6 pb-6 mt-8 text-lg border-t border-b border-white border-opacity-25 lg:gap-0 lg:flex-row categories">
                <a class="flex items-center gap-6 active category" data-category="default">
                    <div class="flex items-center justify-center w-8 h-8 border border-white rounded-full">
                        <div class="w-5 h-5 rounded-full inner-circle"></div>
                    </div>

                    <div class="text">
                        All projects
                    </div>
                </a>

                <?php foreach($categories as $category) : ?>
                <a class="flex items-center gap-6 category" data-category="<?= $category->slug; ?>">
                    <div class="relative flex items-center justify-center w-8 h-8 border border-white rounded-full">
                        <div class="rounded-full inner-circle"></div>
                    </div>

                    <div class="text">
                        <?= $category->cat_name; ?>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:mt-16">
    <?php 
    if ($postQuery->have_posts()) {
        foreach ($postQuery->posts as $i => $postProject) {
            ?>
            <div class="project-wrapper active">
            <?php
            $featuredID              = $postProject->ID;
            $featuredContent[]       = get_field('content', $featuredID);
            $featuredLink[]          = get_permalink($featuredID);
            $featuredCategory[]      = get_the_category($featuredID);
            
            $project    = $featuredContent[$i];
            $general    = $project['general_info'];

            if ($general['highlight_type'] == 'double-phone') {
                include(get_template_directory() . '/sections/project-styles/double-phone.php');
            } elseif ($general['highlight_type'] == 'desktop-windows') {
                include(get_template_directory() . '/sections/project-styles/desktop-windows.php');
            }
            ?>
            </div>
            <?php
        }

    } else {

    }
    
    ?>
    </div>
</section>




<?php
get_footer();
