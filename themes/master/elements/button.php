<?php  /* Element: Button */ 

global $website_settings;
$style;

if ($button['button_style'] == 'white') {
	$style = 'button-white text-white hover:text-white transform hover:translate-x-1 hover:bg-cta';
} elseif ($button['button_style'] == 'border-cta') {
	$style = 'bg-cta  hover:bg-black hover:text-white text-white';
}

?>

<div class="flex w-auto button">
	<a href="<?= $button['link']['url']; ?>" target="<?= $button['link']['target']; ?>" class="<?= $style; ?> custom-button justify-center items-center pt-4 pb-4 pl-8 pr-8 lg:pl-10 lg:pr-10 max-w-xs lg:max-w-none text-center <?= $button['mobile_button_size']; ?> hover:bg-black transition-all duration-300 flex active:bg-gray">
		<?= $button['link']['title']; ?>
		<img class="w-6 ml-3"  src="<?= $website_settings['images']['arrow']['url']; ?>">
	</a>
</div>