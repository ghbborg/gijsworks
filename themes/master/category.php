<?php
/**
 * The template for displaying categories
 *
 */
global $website_settings;
$name = get_term_by('name', $GLOBALS['wp_the_query']->query['category_name'], 'category');
$children = array();
$location       = get_template_directory() . "/icons/svg/locatie.svg";
$categoryQuery = new WP_Query;
$childQuery    = new WP_Query;
$childQuery->query(array(
    'post_type'             => 'assortiment',
    'category_name'         => $GLOBALS['wp_the_query']->query['category_name'],
    'posts_per_page'        => -1,
));

if(count($childQuery->posts)) {
    foreach($childQuery->posts as $childPost) {
        $child_content[] = get_field('content', $childPost->ID);
        $child_links[] = get_permalink($childPost->ID);
    }
}


$name;

$parent_cat_arg = array('hide_empty' => false, 'parent' => 0, 'name' => $name );
$parent_categories = get_terms('category',$parent_cat_arg);

foreach ($parent_categories as $category) {

    $name = $category->name;

    $child_arg = array( 'hide_empty' => false, 'parent' => $category->term_id );
    $child_cat = get_terms( 'category', $child_arg );

    echo '<ul>';
        foreach( $child_cat as $child_term ) {
            $children[] = $child_term->name;
        }
    echo '</ul>';
}


get_header();

?>

<section class="flex flex-col items-center w-full pt-24 pb-24 pl-4 pr-4 text-black bg-white lg:pt-32 2xl:pt-40 lg:pl-32 lg:pr-32 2xl:pl-52 2xl:pr-52 section-bestverkocht">
    <div class="flex flex-col w-full mt-16 blok-lg">
        <h2 class="text-3xl font-bold text-center">
            <?= $GLOBALS['wp_the_query']->queried_object->name; ?>
        </h2>
    </div>
    
    <div class="flex flex-col w-full gap-8 mt-8 lg:grid lg:grid-cols-4 exemplaren blok-lg">
    <?php if( $children) : ?>
    <?php foreach($children as $i => $exemplaar) : ?>
            <?php
                $categoryQuery->query(array(
                    'post_type'             => 'assortiment',
                    'category_name'         => $exemplaar,
                    'posts_per_page'        => 1,
                ));
                if($categoryQuery->have_posts()) :
                    while($categoryQuery->have_posts() ) : 
                        $categoryQuery->the_post();
                        $postContent    = get_field('content');
                        $general        = $postContent['algemene_informatie'];
                        $arrow          = get_template_directory() . "/icons/svg/arrow-d.svg";
                        $title          = $exemplaar;
                        $currentLink    = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        $explodedLink   = (explode("/",$currentLink));
                        $combinedLink   = $explodedLink[0] . '&#47;&#47;' . $explodedLink[2] . '/' . $explodedLink[3] . '/' . $exemplaar;
                        $link           = strtolower($combinedLink);
                    ?>
                    <a href="<?= $link; ?>" class="exemplaar mobile-hover">
                        <div class="relative transition border border-black border-opacity-25 aspect-w-1 aspect-h-1 exemplaar-border">
                            <div class="absolute top-0 left-0 w-full h-full transition-all transform bg-center bg-cover" style="background-image: url(<?= $general['afbeelding']['url']; ?>)"></div>
                        </div>
                        <div class="flex items-center justify-between pt-4">
                            <div class="text-lg font-bold">
                                <?= $title; ?>
                            </div>

                            <div class="flex w-5 h-5">
                                <?= file_get_contents($arrow); ?>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; ?>
                <?php endif; ?>
        <?php endforeach; ?>
        <?php elseif(count($childQuery->posts)):
            foreach($child_content as $i => $child) :
                $general        = $child['algemene_informatie'];
                $arrow          = get_template_directory() . "/icons/svg/arrow-l.svg";
            ?>
            <a href="<?= $child_links[$i]; ?>" class="exemplaar mobile-hover">
                <div class="border-black">
                    <div class="flex flex-col">
                        <div class="relative flex justify-center w-full h-auto border-black">
                            <img src="<?= $general['afbeelding']['url']; ?>" class="relative z-20 flex object-cover w-auto h-52 exemplaar-image" >
                            <div class="absolute left-0 w-full h-24 bg-black -bottom-1"></div>
                        </div>

                        <div class="p-4 text-white bg-black">
                            <div class="pb-2 text-lg font-bold">
                                <?= $general['naam']; ?>
                            </div>

                            <div class="flex items-center pt-2 pb-2 border-t border-b border-white border-opacity-75">
                                <div class="flex w-4 h-4">
                                    <?= file_get_contents($location); ?>
                                </div>

                                <div class="ml-1">
                                    <?= $general['verkoop_locatie']; ?>
                                </div>
                            </div>

                            <div class="flex items-center justify-between pt-4">
                                <div class="text-lg">
                                    &euro; <?= $general['prijs']; ?>
                                </div>
                                <div class="flex w-5 h-5 font-bold">
                                    <?= file_get_contents($arrow); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
                    
            <?php endforeach ;?>
        <?php else: ?>
            <div class="col-span-4 text-center">
                Deze pagina kan helaas niet worden gevonden.
            </div>
        <?php endif; ?>
    </div>
</section>

<?php

$post_type = get_post_type();


get_footer(); ?>
