<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-1">
    <div class="container">
        <div class="box-information">
            <div class="information">
                <span>Awesome Portfolio Styles</span>
                <div class="addon-content">
                    <h3 class="title">Get Beautiful Portfolio Styles and Animations Styles</h3>
                    <div class="yellow"></div>
                </div>
            </div>
        </div>
        <div class="nav_menu">
            <ul class="nav_menu_list clearfix">
                <li class="nav_menu_list_item"><a class="nav_menu_list_item_link link-default active"
                        data-filter="all">Show All</a>
                </li>
                <li class="nav_menu_list_item"><a class="nav_menu_list_item_link link-default"
                        data-filter="print">Print</a></li>
                <li class="nav_menu_list_item"><a class="nav_menu_list_item_link link-default"
                        data-filter="webdesign">Web Design</a></li>
                <li class="nav_menu_list_item"><a class="nav_menu_list_item_link link-default"
                        data-filter="graphic">Graphic</a></li>
                <li class="nav_menu_list_item"><a class="nav_menu_list_item_link link-default"
                        data-filter="motion">Motion</a></li>
            </ul>
        </div>
        <div class="category">
            <div class="row category_list">
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter print box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof1.jpg" alt="" /></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter webdesign box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof2.jpg" alt="" /></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter webdesign box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof3.jpg" alt="" /></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter graphic box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof4.jpg" alt="" /></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter print box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof4.jpg" alt="" /></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter graphic box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof3.jpg" alt="" /></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter print box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof2.jpg" alt="" /></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 category_item filter webdesign box-porfolio">
                        <h4 class="title">LOREM IPSUM DOLOR SIT<span class="border"></span></h4>
                        <div class="img"><img src="images/pof1.jpg" alt="" /></div>
                </div>
            </div>
        </div>
    </div>
</div>