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

                    <?php if ($general['extra_text']) : ?>
                    <div class="mt-4 text-justify">
                        <?= $general['extra_text']; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-8 lg:mt-0">
                <?php foreach($details as $detail) : ?>
                    <div>
                        <div class="text-sm text-justify opacity-50">
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
            $doublePhone    = $content['double_phone'];
            $usps           = $doublePhone['usps'];
            include(get_template_directory() . '/sections/projects/double-phone.php');
        elseif ($type == 'desktop-windows') :
            $fourDesktop    = $content['four_desktop'];
            $usps           = $fourDesktop['usps'];
            include(get_template_directory() . '/sections/projects/desktop-windows.php');
        endif;
        ?>

        <section class="relative flex justify-center pt-24 lg:pl-16 lg:pr-16 lg:pt-32 2xl:pt-40">
            <div class="blok-md">
                <h2 class="sr-only">
                    Unique selling points
                </h2>

                <div class="flex flex-col gap-8 pl-6 pr-6 lg:grid lg:grid-cols-2 lg:gap-16 2xl:gap-x-48">
                <?php foreach($usps as $usp) : ?>
                    <div class="usp" data-number="<?= $usp['associated_image']; ?>">
                        <div class="flex justify-between gap-4">
                            <h3 class="text-xl font-bold lg:text-3xl 2xl:text-4xl">
                                <?= $usp['title']; ?>
                            </h3>

                            <div class="flex items-center justify-center w-8 h-8 border border-white rounded-full usp-option">
                                <div class="w-5 h-5 rounded-full inner-circle"></div>
                            </div>
                        </div>

                        <div class="mt-4 text-justify">
                            <?= $usp['text']; ?>
                        </div>
                        
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</section>
