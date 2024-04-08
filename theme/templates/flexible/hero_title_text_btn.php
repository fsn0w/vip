<?php

$image  = get_sub_field( 'image' );
$title  = get_sub_field( 'title' );
$text   = get_sub_field( 'text' );
$btn_text   = get_sub_field( 'btn_text' );
$btn_link   = get_sub_field( 'btn_link' );

?>

<div class="relative py-0 border-b border-prima-white">

    <div class="w-full flex flex-wrap items-center text-prima-white font-mono font-medium uppercase bg-prima-red" >

    <div class="w-full xl:w-1/2 bg-prima-white overflow-hidden self-stretch bg-cover bg-no-repeat bg-top min-h-[50vh] lg:min-h-screen" style="background-image:url('<?=$image['url']?>')">   </div>

    <div class="container flex flex-col self-stretch py-20 min-h-48 items-center justify-center text-center w-full xl:w-1/2 textbox-style">
            <h1 class="mb-6"><?=$title?></h1>
            <?=$text ?>
            <a href="<?=$btn_link?>" class="btn-main mt-6"><?=$btn_text?></a>
    </div>

    </div>

</div>