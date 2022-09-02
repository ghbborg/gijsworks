<?php /* Project - Double phone */ 

$doublePhone    = $content['double_phone'];
$usps           = $doublePhone['usps'];

?>

<div class="w-screen double-phone-showcase" style="background-color: <?= $color; ?>">
    <div class="image-container">
        <div class="image-wrapper">
        <?php foreach($doublePhone['phones'] as $i => $phone) : ?>
            <?php if ($i == 0) : ?>
            <div class="flex phone-image active">
                <img src="<?= $phone['image']['url']; ?>" alt="<?= $phone['image']['caption']; ?>">
            </div>
            <?php else : ?>
            <div class="flex phone-image">
                <img src="<?= $phone['image']['url']; ?>" alt="<?= $phone['image']['caption']; ?>">
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<section class="relative flex justify-center pt-24 lg:pl-16 lg:pr-16 lg:pt-32 2xl:pt-40">
    <div class="blok-md">
        <h2 class="sr-only">
            Unique selling points
        </h2>

        <div class="flex flex-col gap-8 pl-6 pr-6 lg:grid lg:grid-cols-2 lg:gap-16 2xl:gap-x-48">
        <?php foreach($usps as $usp) : ?>
            <div class="usp">
                <div class="flex justify-between gap-4">
                    <h3 class="text-xl font-bold lg:text-3xl 2xl:text-4xl">
                        <?= $usp['title']; ?>
                    </h3>

                    <div class="flex items-center justify-center w-8 h-8 border border-white rounded-full usp-option">
                        <div class="w-5 h-5 rounded-full inner-circle"></div>
                    </div>
                </div>

                <div class="mt-4 text-justify">
                    <?= $usp['text']; ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>