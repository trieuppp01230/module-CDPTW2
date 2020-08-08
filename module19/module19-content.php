<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="module-19 swiper-slide">
            <div class="container">
                <div class="row padding">
                    <div class="col-md-6">
                        <div class="box-title">
                            <h1>CRAFTED MULTI USE</h1>
                            <span>Creative,modern and Responsive</span>
                            <button>Get started now !</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-img clearfix">
                            <div class="box-iphone">
                                <img src="images/iphone.png" alt="" class="iphone" />
                                <img src="images/img-iphone.jpg" alt="" class="img-iphone" />
                            </div>
                            <div class="box-ipad">
                                <img src="images/ipad.png" alt="" class="ipad" />
                                <img src="images/img-ipad.jpg" alt="" class="img-ipad" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="module-19 swiper-slide">
            <div class="container">
                <div class="row padding">
                    <div class="col-md-6">
                        <div class="box-title">
                            <h1>CRAFTED MULTI USE</h1>
                            <span>Creative,modern and Responsive</span>
                            <button>Get started now !</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-img clearfix">
                            <div class="box-iphone">
                                <img src="images/iphone.png" alt="" class="iphone" />
                                <img src="images/img-iphone.jpg" alt="" class="img-iphone" />
                            </div>
                            <div class="box-ipad">
                                <img src="images/ipad.png" alt="" class="ipad" />
                                <img src="images/img-ipad.jpg" alt="" class="img-ipad" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>