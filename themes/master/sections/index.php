<?php /* Structure - Default */ 
/* Paddings used:
pl-4 pr-4 lg:pl-32 lg:pr-32 2xl:pl-48 2xl:pr-48

Normal: p-16 lg:pt-24
Large: p-24 lg:pt-32
*/
?>

<div>
<?php

if (have_rows('structure')):
    while (have_rows('structure')): the_row();

        $row_index = get_row_index();

        switch (get_row_layout()) {
            case 'home_header':
                include(get_template_directory() . '/sections/homeheader.php');
                break;
            case 'content':
                include(get_template_directory() . '/sections/content.php');
                break;
            case 'display':
                include(get_template_directory() . '/sections/display.php');
                break;
            case 'services':
                include(get_template_directory() . '/sections/services.php');
                break;
            case 'best_verkocht':
                include(get_template_directory() . '/sections/bestverkocht.php');
                break;
            case 'categorie':
                include(get_template_directory() . '/sections/categorie.php');
                break;
            case 'occasions':
                include(get_template_directory() . '/sections/occasions.php');
                break;
            case 'service':
                include(get_template_directory() . '/sections/service.php');
                break;
            case 'contact':
                include(get_template_directory() . '/sections/contact.php');
                break;
            case 'table':
                include(get_template_directory() . '/sections/table.php');
                break;
        }
    endwhile;
endif; ?>
</div>

