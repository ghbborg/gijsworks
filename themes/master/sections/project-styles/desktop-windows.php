<?php /* Project style - Desktop windows */ 

$highlight = $project['highlight_options'];

if($featuredCategory[$i][0]->slug == 'design') {
    $icon   = get_template_directory() . '/icons/svg/design.svg';
} elseif($featuredCategory[$i][0]->slug == 'development') {
    $icon   = get_template_directory() . '/icons/svg/code.svg';
}

?>

<div class="relative flex justify-center lg:pl-16 lg:pr-16 project-overview desktop-windows desktop-windows-<?= $i; ?>" data-category="<?= $featuredCategory[$i][0]->slug; ?>">
    <div class="blok-md">
        <div class="flex flex-col lg:grid lg:grid-cols-2 lg:gap-16">
            <div class="order-2 pl-6 pr-6 mt-12 textbox lg:order-none lg:pl-0 lg:pr-0 lg:mt-0">
                <div class="flex items-center justify-between gap-4">
                    <h3 class="text-3xl font-bold lg:text-5xl 2xl:text-6xl">
                        <?= $general['title']; ?>
                    </h3>

                    <div class="w-8 h-8 mt-4">
                        <?= file_get_contents( $icon ); ?>
                    </div>
                </div>

                <div class="mt-4 text-xl font-bold lg:mt-8 lg:text-3xl 2xl:text-4xl">
                    <?= $general['subtitle']; ?>
                </div>

                <div class="mt-4 text-justify">
                    <?= $general['intro_text']; ?>
                </div>

                <div class="flex w-auto mt-2 button dynamic-link mobile-hover">
                    <a href="<?= $featuredLink[$i]; ?>" class="flex items-center gap-4 pt-4 pb-4 text-xl font-bold button-cta">
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

            <div class="relative order-1 lg:right-0 lg:absolute imagebox lg:order-none">
                <div class="relative flex justify-center w-full h-full overflow-hidden image-content" style="background-color: <?= $highlight['background_color']; ?>">
                    <div class="absolute left-0 flex window-container-1">
                        <div class="window window-1">
                            <img src="<?= $highlight['window_1']['url']; ?>" alt="<?= $highlight['window_1']['alt']; ?>">    
                        </div>

                        <div class="window window-2">
                            <img src="<?= $highlight['window_2']['url']; ?>" alt="<?= $highlight['window_2']['alt']; ?>">    
                        </div>
                    </div>

                    <div class="absolute left-0 flex window-container-2">
                        <div class="window window-3">
                            <img src="<?= $highlight['window_3']['url']; ?>" alt="<?= $highlight['window_3']['alt']; ?>">    
                        </div>

                        <div class="window window-4">
                            <img src="<?= $highlight['window_4']['url']; ?>" alt="<?= $highlight['window_4']['alt']; ?>">    
                        </div>
                    </div>
                
 
                </div> 
            </div>
        </div>
    </div>
</div>