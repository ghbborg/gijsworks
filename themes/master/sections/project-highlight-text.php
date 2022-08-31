<?php /* Section - Project highlight text */

global $website_settings;
$content            = get_sub_field('content');
$section_settings   = get_sub_field('section_settings');
$arrow              = get_template_directory() . '/icons/svg/arrow-d-w.svg';

$featured           = get_field('content', $content['featured_project']->ID);
$featuredLink       = get_permalink($content['featured_project']->ID);
$featuredGeneral    = $featured['general_info'];

$recentQuery = new WP_Query( array(
    'post_type' => 'projects',
    'posts_per_page' => 1,
));

if (count($recentQuery->posts)) :
   foreach($recentQuery->posts as $recentProject) {
    $recentContent      = get_field('content', $recentProject->ID);
    $recentLink         = get_permalink($recentProject->ID);
   }
endif;

wp_reset_postdata(); 

?>

<section class="<?= $section_settings['spacing_top']; ?> <?= $section_settings['spacing_bottom']; ?> flex flex-col pl-6 pr-6 lg:pl-0 lg:pr-0 section-homeheader lg:justify-center">
    <h2 class="sr-only">Highlighted projects</h2>
    <div class="h-full lg:pl-24 lg:pr-24 lg:flex lg:justify-center">
        <div class="flex flex-col items-center h-full gap-12 blok-md lg:grid lg:grid-cols-2 lg:pl-16 lg:pr-16 lg:gap-8">
            <div class="flex flex-col">
                <div class="text-xl font-bold text-cta">
                    FEATURED
                </div>

                <article class="mt-4 lg:mt-8 ">
                    <h3 class="mb-4 text-2xl font-bold lg:text-3xl">
                        <?= $featuredGeneral['title']; ?>
                    </h3>
                    <?= $featuredGeneral['intro_text']; ?>
                </article>

                <div class="mt-4">
                    <div class="flex w-auto button">
                        <a href="<?= $featuredLink; ?>" class="flex items-center gap-4 pt-2 pb-4 text-xl font-bold lg:pt-4 button-cta">
                            <div class="relative flex items-center button-line-wrapper">
                                <div class="button-line">

                                </div>

                                <div class="button-arrow">
                                    <div class="button-arrow-top"></div>
                                    <div class="button-arrow-bottom"></div>
                                </div>
                            </div>

                            <div class="button-text">
                                See full project
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="flex flex-col">
                <div class="text-xl font-bold text-cta">
                    LATEST
                </div>

                <article class="mt-4 lg:mt-8 ">
                    <h3 class="mb-4 text-2xl font-bold lg:text-3xl">
                        <?= $recentContent['general_info']['title']; ?>
                    </h3>
                    <?= $recentContent['general_info']['intro_text']; ?>
                </article>

                <div class="mt-4">
                    <div class="flex w-auto button">
                        <a href="<?= $recentLink; ?>" class="flex items-center gap-4 pt-2 pb-4 text-xl font-bold lg:pt-4 button-cta">
                            <div class="relative flex items-center button-line-wrapper">
                                <div class="button-line">

                                </div>

                                <div class="button-arrow">
                                    <div class="button-arrow-top"></div>
                                    <div class="button-arrow-bottom"></div>
                                </div>
                            </div>

                            <div class="button-text">
                                See full project
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>