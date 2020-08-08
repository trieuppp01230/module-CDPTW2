<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-17">
    <div class="container swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.png" alt=""> </div>
            <div class="swiper-slide"><img src="images/2.png" alt=""> </div>
            <div class="swiper-slide"><img src="images/3.png" alt=""> </div>
            <div class="swiper-slide"><img src="images/4.png" alt=""> </div>
            <div class="swiper-slide"><img src="images/5.png" alt=""> </div>

        </div>
    </div>
</div>