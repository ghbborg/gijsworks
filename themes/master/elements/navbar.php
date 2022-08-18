<?php /* Element: Navbar */ 

global $website_settings;
$svg = get_template_directory() . "/icons/svg/logo.svg"; 
$svg2 = get_template_directory() . "/icons/svg/agenda.svg";
?>

<header class="fixed top-0 z-40 flex justify-center w-screen h-16 pl-4 pr-4 bg-black lg:pl-32 lg:pr-32 2xl:pl-52 2xl:pr-52 lg:h-auto" id="navbar">
    <div class="relative flex w-screen blok-lg">
    <h2 class="z-30 flex items-center mb-0">
        <a class="transition navbar-brand" rel="home" href="<?= esc_url( home_url( '/' ) ); ?>">
        <div class="w-40 p-2 lg:w-48 lg:pt-3 lg:pl-0 lg:pr-0 lg:pb-3 xl:mt-0 xl:mb-0 xl:h-auto xl:ml-0">
            <?= file_get_contents( $svg ); ?>
        </div>          
            <span class="sr-only">
                <?= $website_settings['general_text_strings']['page_title']; ?>
            </span>
        </a>
    </h2>

    <nav class="flex items-center lg:ml-16">
        <h2 class="sr-only">
            Main navigation
        </h2>

        <div class="hidden text-xs text-white lg:flex 2xl:text-sm">
            <?php wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'justify-center items-center',
                    'container_id'    => 'navbar-standard-collapse',
                    'menu_class'      => 'flex',
                )
            ); ?>
            </nav>

        <a class="items-center hidden pr-0 text-white transition cursor-pointer lg:flex lg:absolute lg:right-0 lg:h-10 lg:mt-3 lg:pl-4">
            <div class="flex items-center text-xs 2xl:text-sm">
                Google reviews
            </div>
        </a>


        <div class="fixed left-0 z-20 block w-screen h-screen text-white bg-black lg:hidden menu-hamburger-container" id="menu-hamburger-container">
            <div class="flex flex-col items-center justify-center w-auto pt-8 pb-8 ml-4 mr-4 text-lg text-center border-t border-white border-opacity-25 cursor-pointer hamburger-menu-phone popup-button">
                <div class="flex flex-col items-center justify-center w-full pb-8 text-sm">
                    <div>
                        <div class="text-lg">
                            Email
                        </div>
                        <a>
                            <?= $website_settings['social_media_links']['email']; ?>
                        </a>
                    </div>
                </div>
            
                <div class="flex flex-col items-center justify-center w-full pb-8 text-sm">
                    <div>
                        <div class="text-lg">
                            <?= $website_settings['footer']['adres']['titel']; ?>
                        </div>
                        <a>
                            <?= $website_settings['footer']['adres']['nummer']; ?>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center w-full text-sm">
                    <div>
                        <div class="text-lg">
                            <?= $website_settings['footer']['adres_2']['titel']; ?>
                        </div>
                        <a>
                            <?= $website_settings['footer']['adres_2']['nummer']; ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'w-screen h-screen flex justify-center items-center text-2xl mt-16',
                    'container_id'    => 'navbar-standard-collapse',
                    'menu_class'      => 'flex flex-col left-0',
                )
            ); ?>
            </nav>

        </div>

        <button id="hamburger-menu" class="absolute right-0 z-30 flex items-center justify-center w-16 h-16 lg:hidden ">
            <div class="flex flex-col justify-between w-8 h-4">
                <span class="relative block w-full bg-white hamburger-line hamburger-top"></span>
                <span class="relative block w-full bg-white hamburger-line hamburger-middle"></span>
                <span class="relative block w-full bg-white hamburger-line hamburger-bottom"></span>
            </div>
        </button>
        </div>
</header>
 
