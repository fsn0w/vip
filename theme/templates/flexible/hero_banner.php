<?php

$image  = get_sub_field( 'image' );
$title  = get_sub_field( 'title' );
$subtitle   = get_sub_field( 'subtitle' );
$subtitle2   = get_sub_field( 'subtitle_2' );

?>

<div class="flex flex-wrap bg-prima-red text-prima-white font-mono font-medium uppercase relative" x-data="{ scroll: false }" @scroll.window="scroll = (window.pageYOffset > 50) ? true : false">
    <div class="w-full md:w-1/2 bg-prima-white md:sticky md:top-24 overflow-hidden md:h-[80vh]">
        <img src="<?=$image['url']?>" alt="" class="">
    </div>
    <div class="w-full md:w-1/2">
        <div class="py-24 md:h-[80vh] flex items-center justify-center">
            <div class="text-center max-w-96">
                <h1><?=$title?></h1>
                <span><?=$subtitle?></span>
            </div>
        </div>
        <hr class=" border-prima-white w-1/2 mx-auto">
    </div>
    <div class="hidden md:block w-1/2 bg-white"> </div>
    <div class="w-full md:w-1/2">
        <div class="py-24 md:h-[80vh] flex items-center justify-center">
            <div class="text-center max-w-96">
                <span><?=$subtitle2?></span>
            </div>
        </div>
    </div>
</div>