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
            case 'homeheader':
                include(get_template_directory() . '/sections/homeheader.php');
                break;
            case 'display_text':
                include(get_template_directory() . '/sections/display-text.php');
                break;
            case 'project_highlight':
                include(get_template_directory() . '/sections/project-highlight.php');
                break;
            case 'project_highlight_text':
                include(get_template_directory() . '/sections/project-highlight_text.php');
                break;
            case 'small_contact':
                include(get_template_directory() . '/sections/small-contact.php');
                break;
            case 'about_me':
                include(get_template_directory() . '/sections/about-me.php');
                break;
        }
    endwhile;
endif; ?>
</div>

