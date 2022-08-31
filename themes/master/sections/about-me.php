<?php /* Section - About me */

global $website_settings;
$socials            = $website_settings['social_media_links'];
$content            = get_sub_field('content');
$section_settings   = get_sub_field('section_settings');

$intro              = $content['intro'];
$skills             = $content['skills'];
$toolkit            = $content['toolkit'];
$education          = $content['education'];
$works              = $content['work'];


$arrow              = get_template_directory() . '/icons/svg/arrow-d-w.svg';

?>

<section class="<?= $section_settings['spacing_top']; ?> <?= $section_settings['spacing_bottom']; ?> flex lg:pl-16 lg:pr-16 flex-col pl-6 pr-6  section-smallcontact lg:justify-center">
    <h1 class="sr-only">About me</h1>
    <div class="h-full lg:flex lg:justify-center">
        <div class="flex flex-col h-full blok-md">
            <div>
                <span class="text-4xl font-bold lg:text-5xl 2xl:text-6xl">
                    <?= $intro['title']; ?>
                </span>
            </div>

            <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-24">
                <div>
                    <div>
                        <div class="mt-4 text-2xl font-bold lg:text-4xl 2xl:text-4xl">
                            <?= $intro['subtitle']; ?>
                        </div>

                        <div class="mt-4 text-justify lg:mt-8">
                            <?= $intro['bio']; ?>
                        </div>
                    </div>

                    <div class="mt-12 lg:mt-16">
                        <h2 class="mb-8 text-2xl font-bold lg:text-4xl 2xl:text-4xl">
                            Skills
                        </h2>
                        <?php foreach($skills as $i => $skill) : ?>
                            <div class="flex gap-8 pt-6 pb-6 text-lg border-t border-b border-white border-opacity-25">
                                <div>
                                    <?= $i+1; ?>.
                                </div>
                                <h3>
                                    <?= $skill['text']; ?>
                                </h3>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-12 lg:mt-16">
                        <h2 class="mb-8 text-2xl font-bold lg:text-4xl 2xl:text-4xl">
                            Toolkit
                        </h2>
                        <?php foreach($toolkit as $i => $tool) : ?>
                            <div class="flex gap-8 pt-6 pb-6 text-lg border-t border-b border-white border-opacity-25">
                                <h3>
                                    <?= $tool['text']; ?>
                                </h3>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="mt-12 lg:mt-0">
                    <div>
                        <h2 class="mb-8 text-2xl font-bold lg:text-4xl 2xl:text-4xl">
                            Education
                        </h2>

                        <div class="flex flex-col gap-8">
                        <?php foreach($education as $i => $study) : ?>
                            <div class="flex flex-col ">
                                <div class="flex justify-between w-full">
                                    <h3 class="text-lg font-bold">
                                        <?= $study['title']; ?>
                                    </h3>

                                    <div>
                                        <?= $study['date']; ?>
                                    </div>
                                </div>

                                <div class="text-justify">
                                    <?= $study['text']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <div class="mt-12 lg:mt-16">
                        <h2 class="mb-8 text-2xl font-bold lg:text-4xl 2xl:text-4xl">
                            Work
                        </h2>

                        <div class="flex flex-col gap-8">
                        <?php foreach($works as $i => $work) : ?>
                            <div class="flex flex-col ">
                                <div class="flex justify-between w-full">
                                    <h3 class="text-lg font-bold">
                                        <?= $work['title']; ?>
                                    </h3>

                                    <div>
                                        <?= $work['date']; ?>
                                    </div>
                                </div>

                                <div class="text-justify">
                                    <?= $work['text']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>
</section>