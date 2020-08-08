<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-16">
    <div class="container ">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-box">
                        <div class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent
                            mattis
                            commodo
                            augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus. </p>
                        <h5 class="less-mar-1">Margaret - Designer, Abc</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>