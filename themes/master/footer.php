<?php

global $website_settings;

$svg = get_template_directory() . "/icons/svg/footerlogo.svg"; 

?>
	</main>
</div>

<footer class="relative flex flex-col items-center w-screen pl-6 pr-6 overflow-hidden text-sm text-white bg-black lg:pl-16 lg:pr-16 footer">
	<div class="blok-lg">
		<div class="flex flex-col pt-6 pb-6 border-t border-white border-opacity-25 lg:pb-4 lg:grid lg:grid-cols-2 lg:w-full">
			<a class="relative order-2 block pb-2 pl-24 pr-24 text-center transition duration-300 lg:pr-0 lg:pl-0 lg:order-1 lg:text-left lg:pb-0 hover:text-cta" href="<?= $website_settings['footer']['copyright']['text']['url']; ?>" target="<?= $website_settings['footer']['copyright']['text']['target']; ?>">
				<?= $website_settings['footer']['copyright']['text']['title']; ?>
			</a>
			
			<div class="relative order-1 pb-8 text-center lg:order-2 lg:text-right lg:pb-0 ">
				<a class="transition hover:text-cta" href="<?= $website_settings['footer']['copyright']['cookies']['url']; ?>"><?= $website_settings['footer']['copyright']['cookies']['title']; ?></a>
				|  <a class="transition hover:text-cta" href="<?= $website_settings['footer']['copyright']['privacy_policy']['url']; ?>"><?= $website_settings['footer']['copyright']['privacy_policy']['title']; ?></a>
			</div>
		</div> 
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>