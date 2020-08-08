<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-6">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="col-inner">
                        <div class="logo">
                            <img src="images/logo.png" alt="" />
                        </div>
                        <div class="desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Suspendisse et justo. Praesent mattis
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="col-inner">
                        <h3 class="title">About Us</h3>
                        <div class="content">
                            <ul class="list-content padding">
                                <li class="list">Placerat bibendum</li>
                                <li class="list">Ullamcorper odio nec turpis</li>
                                <li class="list">Aliquam porttitor vestibulum ipsum</li>
                                <li class="list">Lobortis enim nec nisi</li>
                                <li class="list">Placerat bibendum</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="col-inner">
                        <h3 class="title">Quick Links</h3>
                        <div class="content">
                            <ul class="list-content padding">
                                <li class="list">Placerat bibendum</li>
                                <li class="list">Ullamcorper odio nec turpis</li>
                                <li class="list">Aliquam porttitor vestibulum ipsum</li>
                                <li class="list">Lobortis enim nec nisi</li>
                                <li class="list">Placerat bibendum</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="col-inner">
                        <h3 class="title">Contact Us</h3>
                        <div class="text-block">
                            <div class="sppb-addon-content">
                                <address>
                                    <strong>Address:</strong> No.28 - 63739 street lorem ipsum,
                                    ipsum City, Country
                                </address>
                                <div class="phone">
                                    <strong>Phone:</strong> + 1 (234) 567 8901
                                </div>
                                <div class="email">
                                    <strong>Email:</strong> support@yoursite.com
                                </div>
                                <div class="fax">
                                    <strong>Fax:</strong> + 1 (234) 567 8901
                                </div>
                                <div class="social-list-icon">
                                    <ul class="social-icon clearfix padding">
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
                                        <li class="icon">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bt-footer">
        <div class="container">
            <div class="sp-copyright">Copyright © 2019 codelayers | All rights reserved.</div>
        </div>
    </div>
</div>