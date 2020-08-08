<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-2">
    <div class="container">
        <h3 class="feauter-title">Featured Products</h3>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 box-feauter">
                <div class="img-box">
                    <img src="images/sp-4.jpg" alt="">
                    <div class="overlay">
                        <div class="box">
                            <div class="content">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box">
                    <h4 class="product-title">Designer top</h4>
                    <div class="product-desc">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="sale-price">$25.00</div>
                    <button class="view-detail">View Details</button>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 box-feauter">
                <div class="img-box">
                    <img src="images/sp-5.jpg" alt="">
                    <div class="overlay">
                        <div class="box">
                            <div class="content">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box">
                    <h4 class="product-title">Jean and Teashirt</h4>
                    <div class="product-desc">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="sale-price">$25.00</div>
                    <button class="view-detail">View Details</button>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 box-feauter">
                <div class="img-box">
                    <img src="images/sp-6.jpg" alt="">
                    <div class="overlay">
                        <div class="box">
                            <div class="content">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box">
                    <h4 class="product-title">Beautifull Green Dree</h4>
                    <div class="product-desc">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="sale-price">$25.00</div>
                    <button class="view-detail">View Details</button>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 box-feauter">
                <div class="img-box">
                    <img src="images/sp-7.jpg" alt="">
                    <div class="overlay">
                        <div class="box">
                            <div class="content">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-box">
                    <h4 class="product-title">Casual dress</h4>
                    <div class="product-desc">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="sale-price">$25.00</div>
                    <button class="view-detail">View Details</button>
                </div>
            </div>
        </div>
    </div>
</div>