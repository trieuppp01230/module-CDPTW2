<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-15">
    <div class="container swiper-container">
        <div class="swiper-wrapper">
            <div class="box-wrapper clearfix swiper-slide">
                <div class="box-item">
                    <div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                    <div class="desc">
                        <h5 class="title">Fully Responsive</h5>
                        <p class="content">Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus
                            ultrices
                            posuere cubilia Curae.</p>
                        <a href="" class="readmore">Read more<i class="fa fa-long-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="box-wrapper clearfix swiper-slide">
                <div class="box-item">
                    <div class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                    <div class="desc">
                        <h5 class="title">Fully Responsive</h5>
                        <p class="content">Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus
                            ultrices
                            posuere cubilia Curae.</p>
                        <a href="" class="readmore">Read more<i class="fa fa-long-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="box-wrapper clearfix swiper-slide">
                <div class="box-item">
                    <div class="icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                    <div class="desc">
                        <h5 class="title">Fully Responsive</h5>
                        <p class="content">Vestibulum ante ipsum primis sit amet justo elit faucibus orci luctus
                            ultrices
                            posuere cubilia Curae.</p>
                        <a href="" class="readmore">Read more<i class="fa fa-long-arrow-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>