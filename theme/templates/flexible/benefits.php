<?php

$btn = get_sub_field( 'btn' );

?>

<div class="relative z-10 bg-prima-white">

    <div class="container mx-auto">
        <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3 justify-items-center">

        <?php

        $benefits_query = new WP_Query(array(
            'post_type' => 'benefit',
            'posts_per_page' => -1,
        ));


        if ($benefits_query->have_posts()) :

            while ($benefits_query->have_posts()) :
                $benefits_query->the_post();
                $photo = get_field('photo');
                $logo = get_field('logo');
                $title = get_the_title();
                $description = get_field('description');
                $discounts = get_the_terms(get_the_ID(), 'discount');
        ?>        
            <div class="benefit relative w-[320px] md:w-full max-w-sm bg-prima-gray" x-data="{desc:false}">
                <button @click="desc=false" x-show="desc" type="button" class="absolute z-10 top-0 right-0 p-4 group"><svg class="w-4 h-4" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.0082 16.6958L27.9028 29.5903C28.0831 29.7706 28.3944 30 28.7548 30C29.1153 30 29.4102 29.7706 29.6068 29.5903C30.1475 29.0497 30.1475 28.4434 29.6068 27.8864L16.7122 14.9918L29.6068 2.09717C30.1475 1.55649 30.1475 0.95026 29.6068 0.393187C29.0661 -0.147501 28.4599 -0.147501 27.9028 0.393187L15.0082 13.2878L2.11365 0.409572C1.91704 0.229342 1.62212 -4.071e-05 1.26166 -4.071e-05C0.901201 -4.071e-05 0.589896 0.229342 0.409666 0.409572C-0.131022 0.966644 -0.131022 1.55649 0.409666 2.11356L13.3043 15.0082L0.409666 27.9027C-0.131022 28.4434 -0.131022 29.0497 0.409666 29.6067C0.950355 30.1474 1.55658 30.1474 2.11365 29.6067L15.0082 16.7121V16.6958Z" fill="#221F20" class="group-hover:fill-prima-red" /></svg></button>
                <div class="flex flex-col justify-between group overflow-hidden relative h-full" @click="desc=true" :class="{'cursor-pointer' : !desc}">
                    <div class="flex items-center border-b group-hover:border-prima-black overflow-hidden aspect-square transition-transform duration-500 relative" :class="{'scale-0':desc}">
                        <img src="<?=$photo['url']?>" alt="<?=$title?>" class="hidden md:inline-block group-hover:-translate-y-full transition-transform duration-500 relative z-10">
                        <img src="<?=$logo['url']?>" alt="<?=$title?>" class="absolute inset-0">
                    </div>
                    <div class="p-4 flex flex-col justify-between">
                        <div class=" transition-all duration-500" :class="{'absolute top-0 left-0 h-full p-4 pt-12':desc}">
                            <h3><?=$title?></h3>
                            <div class="benefit_desc font-manrope hidden" :class="{'!block': desc}">
                                <?=$description?>
                            </div>
                        </div>
                        <div class="flex flex-col justify-end">
                            <?php if ($discounts) : ?>
                                <ul class="discounts">
                                    <?php foreach ($discounts as $discount) : ?>
                                        <li class="inline-flex flex-col justify-center items-center">
                                            <?php 
                                                $icon = get_term_meta($discount->term_id, 'icon', true); 
                                                if ($icon) :
                                            ?>
                                            <div class="mb-2"><img src="<?=wp_get_attachment_url($icon)?>" alt="<?php echo esc_html($discount->name); ?>" class="max-h-5 w-auto"></div>
                                            <?php endif; ?>
                                            <span class="uppercase text-xs"><?php echo esc_html($discount->name); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <div class="text-right" :class="{'hidden':desc}">
                                <button type="button" class="bg-prima-red text-prima-white rounded-full px-6 py-1 group-hover:animate-bounce transition-all duration-300"><?=$btn?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php

        endwhile;

        wp_reset_postdata();
    else :

        echo 'NO BENEFITS';
    endif;
    ?>

        </div>
    </div>

</div>