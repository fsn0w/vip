<?php

$image  = get_sub_field( 'image' );
$title  = get_sub_field( 'title' );
$subtitle   = get_sub_field( 'subtitle' );
$subtitle2   = get_sub_field( 'subtitle_2' );

?>

<div class="relative md:h-[200vh]">

    <div class="sticky top-0 flex flex-wrap items-center text-prima-white font-mono font-medium uppercase bg-prima-red" x-data="{ scroll: false }" @scroll.window="scroll = (window.pageYOffset > 170) ? true : false">

    <div class="w-full xl:w-1/2 bg-prima-white overflow-hidden">
        <img src="<?=$image['url']?>" alt="" class="">
    </div>

    <div class="flex flex-col self-stretch py-20 min-h-48 items-center justify-center text-center w-full px-4 xl:w-1/2 overflow-hidden">
        <div class="max-w-96 transition-opacity duration-300 hide-up-animation" :class="{'opacity-0':scroll}">
            <h1><?=$title?></h1>
            <span><?=$subtitle?></span>
        </div>
        <div class="absolute max-w-96 opacity-0 px-4 transition-opacity duration-300 show-up-animation" :class="{'opacity-100':scroll}">
            <span><?=$subtitle2?></span>
        </div>
    </div>

    </div>

</div>