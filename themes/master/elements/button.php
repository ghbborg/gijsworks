<?php  /* Element: Button */ 

global $website_settings;

?>

<div class="flex w-auto button">
	<a href="<?= $button['link']['url']; ?>" target="<?= $button['link']['target']; ?>" class="<?= $button['button_style']; ?> font-bold text-xl flex items-center gap-4 pt-4 pb-4">
		<div class="relative flex items-center button-line-wrapper">
			<div class="button-line">

			</div>

			<div class="button-arrow">
				<div class="button-arrow-top"></div>
				<div class="button-arrow-bottom"></div>
			</div>
		</div>

		<div class="button-text">
			<?= $button['link']['title']; ?>
		</div>
	</a>
</div>