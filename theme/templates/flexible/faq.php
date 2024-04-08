<?php

$title = get_sub_field( 'title' );

?>

<div class="!pt-32">

    <div class="text-center mb-6">
        <h1><?=$title?></h1>
    </div>

    <div class="container mx-auto mt-24">

        <ul class="faq">
                            
        <?php
            if( have_rows('questions') ):

                $n = 0;

                while( have_rows('questions') ) : the_row();
                    $n++;
                    $q = get_sub_field('question');
                    $a = get_sub_field('answer');
                    ?>

                        <li class="relative mb-2" x-data="{isOpen:<?=($n==1 ? 'true' : 'false')?>}">

                        <button type="button" @click="isOpen = !isOpen" class="w-full px-3 py-3 text-left text-2xl transition duration-300 text-prima-red hover:bg-prima-gray" >
                            <div class="flex items-center justify-between">
                                <strong><?=$q?></strong>
                                <span class="font-bold text-2xl" :class="{ 'ico-plus': !isOpen, 'ico-minus': isOpen }"></span>
                            </div>
                        </button>

                        <div class="bg-prima-gray relative overflow-hidden transition-all max-h-0 duration-700 text-lg" style="" x-ref="container<?=$n?>" x-bind:style="isOpen ? 'max-height: ' + $refs.container<?=$n?>.scrollHeight + 'px' : ''">
                            <div class="p-6">
                                <?=$a?>
                            </div>
                        </div>

                        </li>

                    <?php

                endwhile;

            endif;
        ?>

        </ul>

    </div>

</div>