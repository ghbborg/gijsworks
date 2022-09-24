<?php /* Section - Homeheader */

global $website_settings;
$content            = get_sub_field('content');
$section_settings   = get_sub_field('sectionk_settings');
$arrow              = get_template_directory() . '/icons/svg/arrow-d-w.svg';

?>

<section class="relative flex flex-col h-screen pl-6 pr-6 lg:pl-0 lg:pr-0 section-homeheader lg:justify-center">
    <div class="h-full lg:pl-24 lg:pr-24 lg:flex lg:justify-center">
        <div class="flex items-center h-full blok-md lg:pl-16 lg:pr-16">
            <div class="flex flex-col xl:grid xl:grid-cols-2 xl:items-center xl:gap-12">
                <div>
                    <h1 class="sr-only">
                        <?= get_bloginfo(); ?>
                    </h1>
                    <p class="text-6xl font-semibold lg:text-7xl 2xl:text-8xl">
                        <span class="block">
                            <?= $content['title']['fixed_title']['line_1']; ?>
                        </span>
                        <?= $content['title']['fixed_title']['line_2']; ?>
                        <?php foreach($content['title']['changing_word'] as $i => $word) : ?>
                            <?php if ($i == 0) : ?>
                            <span class="changing-word active word-<?=$i; ?>">
                                <?= $word['text']; ?>
                            </span>
                            <?php else : ?>
                            <span class="changing-word word-<?=$i; ?>">
                                <?= $word['text']; ?>
                            </span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </p>
                </div>

                <div class="mt-8 xl:mt-0">
                    <div class="text-xl">
                        <?= $content['text']; ?>
                    </div>

                    <div>
                        <?php
                            $button = $content['button'];
                            include(get_template_directory() . '/elements/button.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 lg:pl-16 lg:pr-16 lg:flex lg:justify-center left-6 2xl:relative">
        <div class="blok-lg">
            <a href="#secondsection" class="block w-16 h-16 p-4 pl-0 mb-8 transition svg-box animate-bounce scrolldown-arrow">
                <?= file_get_contents( $arrow ); ?>
            </a>
        </div>
    </div>
</section>

<a id="secondsection"></a>