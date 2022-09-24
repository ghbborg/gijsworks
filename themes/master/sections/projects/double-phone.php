<?php /* Project - Double phone */ 

?>

<div class="w-screen showcase" style="background-color: <?= $color; ?>">
    <div class="relative image-container">
        <div class="flex image-wrapper">
        <?php foreach($doublePhone['phones'] as $i => $phone) : ?>
            <?php if ($i == 0) : ?>
            <div class="flex phone-image active" data-number="<?= $i; ?>">
                <div>
                    <img src="<?= $phone['image']['url']; ?>" alt="<?= $phone['image']['caption']; ?>">
                </div>
            </div>
            <?php else : ?>
            <div class="flex phone-image" data-number="<?= $i; ?>">
                <div>
                    <img src="<?= $phone['image']['url']; ?>" alt="<?= $phone['image']['caption']; ?>">
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>

         <div class="absolute top-0 flex items-center justify-center w-full h-full pointer-events-none lg:hidden">
            <div class="flex justify-between w-full">
                <div class="flex items-center justify-center w-16 h-24 slider-prev slider-button">
                    <div class="w-8 h-8 transition border border-white rounded-full"></div>
                </div>
                <div class="flex items-center justify-center w-16 h-24 slider-next slider-button">
                    <div class="w-8 h-8 transition transform rotate-180 border border-white rounded-full"></div>
                </div>
            </div>
        </div>
    </div>
</div>