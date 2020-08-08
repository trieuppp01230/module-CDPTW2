<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-5">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-lg-4">
                <div class="col-inner">
                    <img src="images/197.jpg" alt=""/>
                    <div class="col-addon">
                        <h5 class="sub-title">About Company</h5>
                        <h2 class="main-title">Creative Digital Agency</h2>
                        <button class="btn btn-readmore"><i class="fa fa-play-circle"
                                aria-hidden="true"></i>Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="col-inner">
                    <img src="images/198.jpg" alt="" />
                    <div class="col-addon">
                        <h5 class="sub-title">We Design Quality</h5>
                        <h2 class="main-title">Multipurpose Design</h2>
                        <button class="btn btn-readmore"><i class="fa fa-play-circle"
                                aria-hidden="true"></i>Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="col-inner">
                    <img src="images/199.jpg" alt="" />
                    <div class="col-addon">
                        <h5 class="sub-title">Our Journey</h5>
                        <h2 class="main-title">Know About Success</h2>
                        <button class="btn btn-readmore"><i class="fa fa-play-circle"
                                aria-hidden="true"></i>Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>