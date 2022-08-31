<?php /* Section - Small contact */

global $website_settings;
$socials            = $website_settings['social_media_links'];
$content            = get_sub_field('content');
$section_settings   = get_sub_field('section_settings');
$arrow              = get_template_directory() . '/icons/svg/arrow-d-w.svg';

?>

<section class="<?= $section_settings['spacing_top']; ?> <?= $section_settings['spacing_bottom']; ?> flex lg:pl-16 lg:pr-16 flex-col pl-6 pr-6  section-smallcontact lg:justify-center">
    <h2 class="sr-only">Contact</h2>
    <div class="h-full lg:flex lg:justify-center">
        <div class="flex flex-col h-full blok-md lg:grid-cols-3 lg:grid lg:gap-24 2xl:gap-60">
            <div class="lg:col-span-2">
                <div class="text-3xl font-bold lg:text-5xl 2xl:text-6xl">
                    <?= $content['title']; ?>
                </div>

                <div class="mt-4 text-xl font-bold lg:text-3xl 2xl:text-4xl">
                    <?= $content['subtitle']; ?>
                </div>

                <div class="mt-12">
                    <?= do_shortcode($content['shortcode']); ?>
                </div>
            </div>

            <div class="grid grid-cols-2 mt-12 lg:flex lg:flex-col lg:mt-0">
                <div class="flex justify-center w-full col-span-2">
                    <img class="w-40 h-40 " src="<?= $content['image']['url']; ?>">
                </div>

                <div class="flex justify-center w-full col-span-2 gap-16 lg:gap-0 lg:items-center lg:flex-col lg:col-span-1">
                    <div>
                        <div class="mt-8">
                            <h3 class="text-sm opacity-50">
                                Contact details
                            </h3>

                            <div>
                                <a class="block transition hover:text-cta" href="mailto:<?= $socials['email']; ?>">
                                    <?= $socials['email']; ?>
                                </a>
                                <a class="block transition hover:text-cta" href="tel:<?= $socials['email']; ?>">
                                    <?= $socials['number']; ?>
                                </a>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="text-sm opacity-50">
                                Business details
                            </h3>

                            <div>
                                <div class="block ">
                                    <?= $website_settings['footer']['kvk']; ?>
                                </div>
                                <div class="block" >
                                    <?= $website_settings['footer']['location']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="hidden mt-8 lg:block">
                            <h3 class="text-sm opacity-50">
                                Socials
                            </h3>

                            <div>
                                <a class="block transition hover:text-cta" target="<?= $socials['instagram']['target']; ?>" href="<?= $socials['instagram']['url']; ?>">
                                    <?= $socials['instagram']['title']; ?>
                                </a>
                                <a class="block transition hover:text-cta" target="<?= $socials['instagram']['facebook']; ?>" href="<?= $socials['facebook']['url']; ?>">
                                    <?= $socials['facebook']['title']; ?>
                                </a>
                                <a class="block transition hover:text-cta" target="<?= $socials['instagram']['linkedin']; ?>" href="<?= $socials['linkedin']['url']; ?>">
                                    <?= $socials['linkedin']['title']; ?>
                                </a>
                                <a class="block transition hover:text-cta" target="<?= $socials['instagram']['github']; ?>" href="<?= $socials['github']['url']; ?>">
                                    <?= $socials['github']['title']; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 lg:hidden">
                        <span class="text-sm opacity-50">
                            Socials
                        </span>

                        <div>
                            <a class="block transition hover:text-cta" target="<?= $socials['instagram']['target']; ?>" href="<?= $socials['instagram']['url']; ?>">
                                <?= $socials['instagram']['title']; ?>
                            </a>
                            <a class="block transition hover:text-cta" target="<?= $socials['instagram']['facebook']; ?>" href="<?= $socials['facebook']['url']; ?>">
                                <?= $socials['facebook']['title']; ?>
                            </a>
                            <a class="block transition hover:text-cta" target="<?= $socials['instagram']['linkedin']; ?>" href="<?= $socials['linkedin']['url']; ?>">
                                <?= $socials['linkedin']['title']; ?>
                            </a>
                            <a class="block transition hover:text-cta" target="<?= $socials['instagram']['github']; ?>" href="<?= $socials['github']['url']; ?>">
                                <?= $socials['github']['title']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>