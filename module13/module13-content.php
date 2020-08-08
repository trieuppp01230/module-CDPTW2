<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-13">
    <div class="container about-company">
        <div class="row">
            <div class="col-md-12 col-lg-6 box-imag">
                <img class="imgAbout" src="images/home-man.png" />
            </div>
            <div class="col-md-12 col-lg-6 information">
                <h5 class="sub-title">
                    About Company and Goals
                </h5>
                <h2 class="main-title">
                    We are very creative
                </h2>
                <div class="title-aline"></div>
                <p class="desc">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo
                    consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer adipiscing
                    hendrerit
                    augue Cras tellus In pulvinar lectus Lorem ipsum dolor sit amet consectetuer adipiscing elit
                    Suspendisse
                    et justo consectetuer adipiscing Praesent mattis commodo augue Aliquam ornare consectetuer
                    adipiscing
                    hendrerit.</p>
                <div class="icon-list">
                    <div class="tex"><i class="fa fa-arrow-circle-right icon-text" aria-hidden="true"></i>Pellentesque
                        sit amet orci cursus fermentum vestibulum in dolor.</div>
                    <div class="tex"><i class="fa fa-arrow-circle-right icon-text" aria-hidden="true"></i>Maecenas
                        fringilla orci ultrices nulla, id suscipit erat vulputate.</div>
                    <div class="tex"><i class="fa fa-arrow-circle-right icon-text" aria-hidden="true"></i>Nullam
                        efficitur velit ut interdum pellentesque.</div>
                    <div class="tex"><i class="fa fa-arrow-circle-right icon-text" aria-hidden="true"></i>Maecenas
                        sit amet orci eget mi commodo scelerisque eu tempus mi.</div>
                </div>
                <button class="btn btn-readmore"><i class="fa fa-play-circle" aria-hidden="true"></i>Read
                    more</button>
            </div>
        </div>
    </div>
</div>