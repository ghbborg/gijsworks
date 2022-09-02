<?php /* Section - Project */

global $website_settings;
$content    = get_field('content', get_the_ID());
$general    = $content['general_info'];
$details    = $content['project_details'];
$type       = $general['highlight_type'];
$color      = $content['highlight_options']['background_color'];

?>

<section class="pt-24 pb-24 lg:pt-32 2xl:pt-40 lg:pb-32 2xl:pb-40 section-project">
    <div class="relative flex justify-center lg:pl-16 lg:pr-16">
        <div class="blok-md">
            <div class="flex flex-col pl-6 pr-6 lg:grid lg:grid-cols-2 lg:gap-16 2xl:gap-x-48">
                <div class="col-span-2">
                    <div>
                        <h1 class="text-3xl font-bold lg:text-5xl 2xl:text-6xl">
                            <?= $general['title']; ?>
                        </h1>
                    </div>
                </div>

                <div class="mt-4 textbox lg:order-none lg:pl-0 lg:pr-0 lg:mt-0 mobile-hover">

                    <div class="text-xl font-bold lg:text-3xl 2xl:text-4xl">
                        <?= $general['subtitle']; ?>
                    </div>

                    <div class="mt-4 text-justify">
                        <?= $general['intro_text']; ?>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-8 lg:mt-0">
                <?php foreach($details as $detail) : ?>
                    <div>
                        <div class="text-sm opacity-50">
                            <?= $detail['detail_label']; ?>
                        </div>

                        <div>
                            <?= $detail['detail']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


    <div class="pt-24 lg:pt-32 2xl:pt-40">
        <?php 
        if ($type == 'double-phone') :
            include(get_template_directory() . '/sections/projects/double-phone.php');
        endif;
        ?>
    </div>
</section>
