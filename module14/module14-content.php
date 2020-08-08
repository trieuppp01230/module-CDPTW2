<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-14">
    <div class="container side-bar">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="box-side-bar">
                    <h3 class="title">Search</h3>
                    <input class="input" placeholder="Search"></input>
                </div>
                <div class="box-side-bar">
                    <h3 class="title">Categories</h3>
                    <ul class="list-category">
                        <li>Business</li>
                        <li>Education</li>
                        <li>Travel</li>
                        <li>Creative</li>
                        <li>Wedding</li>
                        <li>Restaurant</li>
                    </ul>
                </div>
                <div class="box-side-bar">
                    <h3 class="title">LATEST POSTS</h3>
                    <div class="box-post clearfix">
                        <div class="img">
                            <img src="images/22.jpg" alt="" />
                        </div>
                        <div class="desc">
                            <span class="name">DONEC LIBERO PURUS PULVINAR</span>
                            <small>16 May 2018</small>
                        </div>
                    </div>
                    <div class="box-post clearfix">
                        <div class="img">
                            <img src="images/23.jpg" alt="" />
                        </div>
                        <div class="desc">
                            <span class="name">DONEC LIBERO PURUS PULVINAR</span>
                            <small>16 May 2018</small>
                        </div>
                    </div>
                    <div class="box-post clearfix">
                        <div class="img">
                            <img src="images/24.jpg" alt="" />
                        </div>
                        <div class="desc">
                            <span class="name">DONEC LIBERO PURUS PULVINAR</span>
                            <small>16 May 2018</small>
                        </div>
                    </div>
                </div>
                <div class="box-side-bar">
                    <h3 class="title">Tags</h3>
                    <ul class="list-content clearfix">
                        <li>Amination</li>
                        <li>Art</li>
                        <li>Photography</li>
                        <li>Design</li>
                        <li>Responsive</li>
                        <li>Develop</li>
                        <li>Branding</li>
                        <li>Clean</li>
                    </ul>
                </div>
                <div class="box-side-bar">
                    <h3 class="title">Newsletter</h3>
                    <input class="input email" placeholder="Email"></input>
                    <button class="submit">Submit</button>
                </div>
                <div class="box-side-bar">
                    <h3 class="title">Featured Works</h3>
                    <ul class="list-img clearfix">
                        <li><img src="images/p13.jpg" alt="" /> </li>
                        <li><img src="images/p14.jpg" alt="" /> </li>
                        <li><img src="images/p15.jpg" alt="" /> </li>
                        <li><img src="images/p12.jpg" alt="" /> </li>
                        <li><img src="images/p11.jpg" alt="" /> </li>
                        <li><img src="images/p14.jpg" alt="" /> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>