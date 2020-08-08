<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-11">
    <div class="container">
        <div class="content-infor">
            <span>We are creating beautiful Products</span>
            <div class="content">
                <h2 class="main-title">You can start a successful blog and Create Awesome Design Styles</h2>
                <div class="yellow">
                </div>
            </div>
        </div>
        <div class="row box-desc">
            <div class="col-md-4">
                <div class="img"><img src="images/22.jpg" alt="" /><span class="sppb-meta-category"><i
                            class="fa fa-pencil" aria-hidden="true"></i> Blak</span></div>
                <div class="desc">
                    <span class="title">Donec libero purus pulvinar</span>
                    <p>Lorem ipsum dolor sit amet sit justo et consectetuer dolor adipiscing sit amet justo.</p>
                </div>
                <div class="article">
                    <span class="meta-date"><i class="fa fa-calendar" aria-hidden="true"></i> 16 May 2018</span>
                    <span class="meta-author"><i class="fa fa-user" aria-hidden="true"></i> Windstripe</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img"><img src="images/23.jpg" alt="" /><span class="sppb-meta-category"><i
                            class="fa fa-pencil" aria-hidden="true"></i> Blak</span></div>
                <div class="desc">
                    <span class="title">Donec libero purus pulvinar</span>
                    <p>Lorem ipsum dolor sit amet sit justo et consectetuer dolor adipiscing sit amet justo.</p>
                </div>
                <div class="article">
                    <span class="meta-date"><i class="fa fa-calendar" aria-hidden="true"></i> 16 May 2018</span>
                    <span class="meta-author"><i class="fa fa-user" aria-hidden="true"></i> Windstripe</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img"><img src="images/24.jpg" alt="" /><span class="sppb-meta-category"><i
                            class="fa fa-pencil" aria-hidden="true"></i> Blak</span></div>
                <div class="desc">
                    <span class="title">Donec libero purus pulvinar</span>
                    <p>Lorem ipsum dolor sit amet sit justo et consectetuer dolor adipiscing sit amet justo.</p>
                </div>
                <div class="article">
                    <span class="meta-date"><i class="fa fa-calendar" aria-hidden="true"></i> 16 May 2018</span>
                    <span class="meta-author"><i class="fa fa-user" aria-hidden="true"></i> Windstripe</span>
                </div>
            </div>
        </div>
    </div>
</div>