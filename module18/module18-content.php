<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-18">
    <div class="container">
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
        <div class="category masonry">
            <div class="filter graphic">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof1.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>
            <div class="filter motion">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof2.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>
            <div class="filter motion">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof3.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>
            <div class="filter print">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof-special.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>
            <div class="filter print">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof-special.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>
            <div class="filter webdesign">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof4.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>
            <div class="filter webdesign">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof5.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>
            <div class="filter graphic">
                <div class="box-porfo">
                    <div class="img">
                        <img src="images/pof6.jpg" alt="" />
                        <div class="por-dark">
                            <button class="bt zoom"><span>Zoom</span></button>
                            <button class="bt view"><span>View</span></button>
                        </div>
                    </div>

                    <div class="desc">
                        <span class="title">Lorem ipsum dolor sit</span>
                        <span class="tag">Web Design, Graphic</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>