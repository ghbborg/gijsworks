<?php

global $website_settings;

$svg = get_template_directory() . "/icons/svg/footerlogo.svg"; 

?>
	</main>
</div>

<footer class="relative flex flex-col items-center w-screen overflow-hidden text-sm text-white bg-black lg:pl-32 lg:pr-32 2xl:pl-52 2xl:pr-52 footer">
	<div class="blok-lg">
		<div class="flex justify-center w-full h-24 mt-12 mb-12 lg:mt-20 lg:mb-20">
			<?= file_get_contents($svg); ?>
		</div>

		<div class="flex flex-col lg:flex-row lg:justify-between lg:w-full lg:gap-8 ">
			<div class="relative order-2 mb-12 text-center lg:order-1 lg:text-left lg:mb-0">
				<div class="pb-4 text-xl font-bold">
					<?= $website_settings['footer']['adres']['titel']; ?>
				</div>
				<div>
					<div class="pb-2">
						<?= $website_settings['footer']['adres']['straat']; ?>
					</div>
					<div class="pb-2">
						<?= $website_settings['footer']['adres']['postcode']; ?>
					</div>
					<a href="tel:<?= $website_settings['footer']['adres']['nummer']; ?>" class="transition hover:text-cta">
						<?= $website_settings['footer']['adres']['nummer']; ?>
					</a>
				</div>
			</div>

			<div class="relative order-3 mb-12 text-center lg:order-2 lg:text-left lg:mb-0">
				<div class="pb-4 text-xl font-bold">
					<?= $website_settings['footer']['adres_2']['titel']; ?>
				</div>
				<div>
					<div class="pb-2">
						<?= $website_settings['footer']['adres_2']['straat']; ?>
					</div>
					<div class="pb-2">
						<?= $website_settings['footer']['adres_2']['postcode']; ?>
					</div>
					<a href="tel:<?= $website_settings['footer']['adres_2']['nummer']; ?>" class="transition hover:text-cta">
						<?= $website_settings['footer']['adres_2']['nummer']; ?>
					</a>
				</div>
			</div>

			<div class="relative order-4 mb-12 text-center lg:order-3 lg:text-left lg:mb-0">
				<div class="pb-4 text-xl font-bold">
					Socials
				</div>
				<div>
					<?php if($website_settings['social_media_links']['facebook']) : ?>
					<a href="<?= $website_settings['social_media_links']['facebook']['url']; ?>" target="<?= $website_settings['social_media_links']['facebook']['target']; ?>" class="block pb-2 transition hover:text-cta">
						<?= $website_settings['social_media_links']['facebook']['title']; ?>
					</a>
					<?php endif; ?>

					<?php if($website_settings['social_media_links']['instagram']) : ?>
					<a href="<?= $website_settings['social_media_links']['instagram']['url']; ?>" target="<?= $website_settings['social_media_links']['instagram']['target']; ?>" class="block pb-2 transition hover:text-cta">
						<?= $website_settings['social_media_links']['instagram']['title']; ?>
					</a>
					<?php endif; ?>

					<?php if($website_settings['social_media_links']['linkedin']) : ?>
					<a href="<?= $website_settings['social_media_links']['linkedin']['url']; ?>" target="<?= $website_settings['social_media_links']['linkedin']['target']; ?>" class="block transition hover:text-cta">
						<?= $website_settings['social_media_links']['linkedin']['title']; ?>
					</a>
					<?php endif; ?>
				</div>
			</div>

			<div class="relative order-1 mb-6 text-center lg:text-left lg:order-4 lg:mb-0">
				<div class="pb-4 text-xl font-bold">
					Nieuwsbrief
				</div>
				<div>
					<?= $website_settings['footer']['nieuwsbrief']; ?>
				</div>
			</div>
		</div>

		<div class="flex flex-col pt-6 pb-6 border-t border-white border-opacity-25 lg:pb-4 lg:grid lg:grid-cols-2 lg:mt-20 lg:w-full">
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