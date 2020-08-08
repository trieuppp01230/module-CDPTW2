<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-3">
    <div class="md5-pn"><i class="icon fa fa-play" aria-hidden="true"></i></div>
    <div class="addon-feature">
        <div class="container">
            <div class="row wp-row">
                <div class="col-md-6 col-lg-4 col-inner">
                    <div class="col-addon">
                        <img src="images/8.jpg" alt="" class="addon-img" />
                        <div class="addon-infor">
                            <h4 class="addon-title">Wireframes</h4>
                            <div class="addon-text">
                                <p class="tex">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Suspendisse et justo.</p>
                                <a class="btn btn-readmore"><i class="fa fa-play-circle"
                                        aria-hidden="true"></i>Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-inner">
                    <div class="col-addon">
                        <img src="images/9.jpg" alt="" class="addon-img" />
                        <div class="addon-infor">
                            <h4 class="addon-title">Wireframes</h4>
                            <div class="addon-text">
                                <p class="tex">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Suspendisse et justo.</p>
                                <a class="btn btn-readmore"><i class="fa fa-play-circle"
                                        aria-hidden="true"></i>Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-inner">
                    <div class="col-addon">
                        <img src="images/10.jpg" alt="" class="addon-img" />
                        <div class="addon-infor">
                            <h4 class="addon-title">Wireframes</h4>
                            <div class="addon-text">
                                <p class="tex">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Suspendisse et justo.</p>
                                <a class="btn btn-readmore"><i class="fa fa-play-circle"
                                        aria-hidden="true"></i>Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>