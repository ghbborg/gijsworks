<?php /* Section - Display text */

global $website_settings;
$content            = get_sub_field('content');
$section_settings   = get_sub_field('section_settings');
$arrow              = get_template_directory() . '/icons/svg/arrow-d-w.svg';

?>

<div class="<?= $section_settings['spacing_top']; ?> <?= $section_settings['spacing_bottom']; ?> flex flex-col pl-6 pr-6 lg:pl-0 lg:pr-0 section-displaytext lg:justify-center">
    <div class="h-full lg:pl-24 lg:pr-24 lg:flex lg:justify-center">
        <div class="flex flex-col items-center h-full text-center lg:max-w-xs blok-md lg:pl-32 lg:pr-32 2xl:pl-52 2xl:pr-52">
            <div class="text-3xl font-bold lg:text-5xl 2xl:text-6xl">
                <?= $content['display_text']; ?>
            </div>

            <div class="mt-12 text-xl lg:mt-24 lg:pl-12 lg:pr-12">
                <?= $content['supporting_text']; ?>
            </div>
        </div>
    </div>
</div>