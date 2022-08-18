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
$exemplaren     = array();
$postQuery      = new WP_Query;
$hasCategory    = false;


foreach(get_categories() as $category) {
    // Check whether categories aren't empty.
    if($category->count > 0) {
        // Check whether category has a parent category (thus sub category).
        if ($category->category_parent > 0) {
            // If category has a parent, get parents category name and save value to array.
            $exemplaren[] = get_the_category_by_ID($category->category_parent);
        } else {
            // If category has no parent, get own category name and save value to array.
            $exemplaren[] = $category->cat_name;
        }
    }
}

?>

<section class="flex flex-col items-center w-full pt-24 pb-24 pl-4 pr-4 text-black bg-white lg:pt-32 2xl:pt-40 lg:pl-32 lg:pr-32 2xl:pl-52 2xl:pr-52 section-bestverkocht">
    <div class="flex flex-col w-full mt-16 blok-lg">
        <h2 class="text-3xl font-bold text-center">
            Assortiment
        </h2>
        
        <div class="flex flex-col gap-8 mt-8 lg:grid lg:grid-cols-4 exemplaren">
        <?php if(array_unique($exemplaren)) : ?>
        <?php foreach(array_unique($exemplaren) as $i => $exemplaar) : ?>
            <?php
                $postQuery->query(array(
                    // Get one of each category
                    'post_type'             => 'assortiment',
                    'category_name'         => $exemplaar,
                    'posts_per_page'        => 1,
                ));
                if($postQuery->have_posts()) :
                    while($postQuery->have_posts() ) : 
                        $postQuery->the_post();
                        $postContent    = get_field('content');
                        $general        = $postContent['algemene_informatie'];
                        $title          = $exemplaar;

                        // Get the current link and add the name of category behind it, thus giving correct link.
                        $currentLink    = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        $explodedLink   = (explode("/",$currentLink));
                        $combinedLink   = $explodedLink[0] . '&#47;&#47;' . $explodedLink[2] . '/' . 'category' . '/' . $exemplaar;
                        $link           = strtolower($combinedLink);
                    ?>
                    <a href="<?= $link; ?>" class="exemplaar mobile-hover">
                        <div class="relative transition border border-black border-opacity-25 aspect-w-1 aspect-h-1 exemplaar-border">
                            <div class="absolute top-0 left-0 w-full h-full transform scale-75 bg-center bg-cover" style="background-image: url(<?= $general['afbeelding']['url']; ?>)"></div>
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
        <?php else: ?>
            <div class="col-span-4 text-center">
                Deze pagina kan helaas niet worden gevonden.
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>




<?php
get_footer();
