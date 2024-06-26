<?php

$image  = get_sub_field( 'image' );
$title  = get_sub_field( 'title' );
$subtitle   = get_sub_field( 'subtitle' );
$subtitle2   = get_sub_field( 'subtitle_2' );

?>

<div class="flex flex-wrap text-prima-white font-mono font-medium uppercase relative" x-data="{ scroll: false }" @scroll.window="scroll = (window.pageYOffset > 50) ? true : false">
    <div class="w-full xl:w-1/2 bg-prima-white xl:sticky xl:top-24 overflow-hidden xl:h-[80vh]">
        <img src="<?=$image['url']?>" alt="" class="">
    </div>
    <div class="w-full px-4 xl:w-1/2 bg-prima-red">
        <div class="py-24 xl:h-[80vh] flex items-center justify-center">
            <div class="text-center max-w-96">
                <div>
                    <h1><?=$title?></h1>
                    <span><?=$subtitle?></span>
                </div>
            </div>
        </div>
        <hr class=" border-prima-white w-1/2 mx-auto">
    </div>
    <div class="hidden xl:block w-1/2 bg-white"> </div>
    <div class="w-full px-4 xl:w-1/2 bg-prima-red">
        <div class="py-24 xl:h-[80vh] flex items-center justify-center">
            <div class="text-center max-w-96">
                <span><?=$subtitle2?></span>
            </div>
        </div>
    </div>
</div>