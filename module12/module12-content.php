<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-12">
    <div class="container">
        <div class="addon-content">
            <div class="infor">
                <h5 class="sub-title">Get Awesome Features and many more features</h5>
                <h2 class="main-title">We are offring awesome Features and many more Beautiful Pages</h2>
                <div class="yellow"></div>
            </div>
            <div class="box-content">
                <div class="box">
                    <div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
                    <div class="tex">
                        <h3 class="name">Clean & Easy</h3>
                        <span class="desc">Vestibulum ante ipsum primis sit amet justo elit.</span>
                    </div>
                </div>
                <div class="box style">
                    <div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
                    <div class="tex">
                        <h3 class="name">Beautiful Graphics</h3>
                        <span class="desc">Vestibulum ante ipsum primis sit amet justo elit.</span>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
                    <div class="tex">
                        <h3 class="name">Classic Styles</h3>
                        <span class="desc">Vestibulum ante ipsum primis sit amet justo elit.</span>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
                    <div class="tex">
                        <h3 class="name">Useful Sections</h3>
                        <span class="desc">Vestibulum ante ipsum primis sit amet justo elit.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>