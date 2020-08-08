<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4">
    <div class="container box-wrapper">
        <div class="content-infor">
            <span>We are the best Creative Team</span>
            <div class="content">
                <h2 class="title">
                    Meet Our Creative Team and Get Awesome Service
                </h2>
                <div class="yellow"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="wrapper">
                    <div class="col-inner">
                        <img src="images/45.jpg" alt="" class="image" >
                        <div class="text-box">
                            <div class="social-list">
                                <p>
                                    Praesent mattis commodo augue Aliquam ornare hendrerit
                                </p>
                                <ul class="social-icon clearfix">
                                    <li class="icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="name-box">
                        <h5 class="name">Benjamin</h5>
                        <p class="text-primary">Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="wrapper">
                    <div class="col-inner">
                        <img src="images/46.jpg" alt="" class="image" >
                        <div class="text-box">
                            <div class="social-list">
                                <p>
                                    Praesent mattis commodo augue Aliquam ornare hendrerit
                                </p>
                                <ul class="social-icon clearfix">
                                    <li class="icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="name-box">
                        <h5 class="name">Margaret</h5>
                        <p class="text-primary">Support & Marketingr</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="wrapper">
                    <div class="col-inner">
                        <img src="images/48.jpg" alt="" class="image" >
                        <div class="text-box">
                            <div class="social-list">
                                <p>
                                    Praesent mattis commodo augue Aliquam ornare hendrerit
                                </p>
                                <ul class="social-icon clearfix">
                                    <li class="icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </li>
                                    <li class="icon">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="name-box">
                        <h5 class="name">Jennifer</h5>
                        <p class="text-primary">UI Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>