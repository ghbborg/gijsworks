<?php /* Element: Navbar */ 

global $website_settings;
$svg = get_template_directory() . "/icons/svg/logo.svg"; 
$svg2 = get_template_directory() . "/icons/svg/agenda.svg";
?>

<div class="fixed hidden dynamic-sideblock top">
    <div class="dynamic-partialblock transition-lg" style="background-color: #ff0000"></div>
</div>

<header class="fixed top-0 z-40 flex justify-center w-screen lg:pl-16 lg:pr-16 nav-transparent" id="navbar">
    <div class="relative flex items-center justify-between w-full pt-6 pb-6 pl-6 pr-6 blok-lg lg:p-0">
        <h2 class="z-30 flex items-center mb-0">
            <a class="transition navbar-brand" rel="home" href="<?= esc_url( home_url( '/' ) ); ?>">
            <h2 class="text-white ">
                gijsworks.
            </h2>
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
                        'menu_class'      => 'flex dynamic-link',
                    )
                ); ?>
                </nav>

            <div class="fixed top-0 left-0 z-20 block w-screen h-screen text-white bg-black lg:hidden menu-hamburger-container" id="menu-hamburger-container">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'w-screen h-screen flex justify-center items-center text-2xl',
                        'container_id'    => 'navbar-standard-collapse',
                        'menu_class'      => 'flex flex-col left-0 dynamic-link',
                    )
                ); ?>
                </nav>

            </div>

            <button id="hamburger-menu" class="absolute z-30 flex items-center justify-center w-16 h-16 right-2 lg:hidden ">
                <div class="flex flex-col justify-between w-8 h-4">
                    <span class="relative block w-full bg-white hamburger-line hamburger-top"></span>
                    <span class="relative block w-full bg-white hamburger-line hamburger-middle"></span>
                    <span class="relative block w-full bg-white hamburger-line hamburger-bottom"></span>
                </div>
            </button>
        </div>
</header>
 
