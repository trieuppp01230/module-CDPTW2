<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-8">
    <div class="container">
        <div class="row shop-gutter">
            <div class="col-sm-12 col-md-6 col-lg-6 col-inner">
                <div class="col-img">
                    <img src="images/sp-30.jpg" alt="" />
                    <div class="box-gutter">
                        <h2 class="title">women's</h2>
                        <div class="sppb-addon-text">
                            <h2 class="sub-title">Collection</h2>
                            <h6 class="text-white">Fashion</h6>
                            <button class="shopnow">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-inner">
                <div class="col-img">
                    <img src="images/sp-31.jpg" alt="" />
                    <div class="box-gutter">
                        <h2 class="title">women's</h2>
                        <div class="sppb-addon-text">
                            <h2 class="sub-title">Collection</h2>
                            <h6 class="text-white">Fashion</h6>
                            <button class="shopnow">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3 col-inner">
                <div class="col-img">
                    <img src="images/sp-32.jpg" alt="" />
                    <div class="box-gutter">
                        <h2 class="title">women's</h2>
                        <div class="sppb-addon-text">
                            <h2 class="sub-title">Collection</h2>
                            <h6 class="text-white">Fashion</h6>
                            <button class="shopnow">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>