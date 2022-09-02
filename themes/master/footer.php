<?php

global $website_settings;

$svg = get_template_directory() . "/icons/svg/footerlogo.svg"; 

?>
	</main>
</div>

<footer class="relative flex flex-col items-center w-full w-screen pl-6 pr-6 overflow-hidden text-sm text-white bg-black lg:pl-16 lg:pr-16 footer">
	<div class="w-full blok-lg">
		<div class="flex flex-col pt-6 pb-6 border-t border-white border-opacity-25 lg:pb-4 lg:grid lg:grid-cols-2 lg:w-full">
			<a class="relative block pb-4 text-center transition duration-300 lg:pb-0 lg:pr-0 lg:pl-0 lg:text-left hover:text-cta" href="<?= $website_settings['footer']['copyright']['text']['url']; ?>" target="<?= $website_settings['footer']['copyright']['text']['target']; ?>">
				<?= $website_settings['footer']['copyright']['text']['title']; ?>
			</a>
			
			<div class="relative text-center lg:text-right ">
				<a class="transition hover:text-cta" href="<?= $website_settings['footer']['copyright']['cookies']['url']; ?>"><?= $website_settings['footer']['copyright']['cookies']['title']; ?></a>
				|  <a class="transition hover:text-cta" href="<?= $website_settings['footer']['copyright']['privacy_policy']['url']; ?>"><?= $website_settings['footer']['copyright']['privacy_policy']['title']; ?></a>
			</div>
		</div> 
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>