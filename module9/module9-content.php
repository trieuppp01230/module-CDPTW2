<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-9">
    <div class="container">
        <nav class="navbar navbar-expand-sm padding">
            <span class="navbar-brand">
                <div class="logo">Blak</div>
            </span>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 left">
                    <li class="nav-item active">

                        <span class="nav-link">Home <span class="sr-only">(current)</span></span>

                        <ul class="mega-menu padding clearfix">
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Home Page 1</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 1</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 2</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Home Page 2</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 4</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 5</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 6</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Home Page 3</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 7</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 8</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 9</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Home Page 4</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 10</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 11</a>
                                    </li>
                                    <li class="mega-child-list"><a href="" class="mega-child">Home Page 12</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">Pages</span>
                        <ul class="sub-menu clearfix padding">
                            <li class="sub-menu-item"><a class="sub-menu-item-link">About<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding">

                                    <li class="list-child">
                                        <span class="child">About style 1</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">About style 2</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">About style 3</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Services<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding">

                                    <li class="list-child">
                                        <span class="child">Services style 1</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Services style 2</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Team<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding">

                                    <li class="list-child">
                                        <span class="child">Team Classic</span>
                                    </li>

                                    <li class="list-child">
                                        <a class="child">Team Parallax</a>
                                    </li>
                                    <li class="list-child">
                                        <a class="child">Team Creative</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">FAQ<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding">

                                    <li class="list-child">
                                        <span class="child">FAQ Style 1</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">FAQ Style 2</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Contact<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding">

                                    <li class="list-child">
                                        <span class="child">Contact Classic</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Full Width Map</span>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Feature</a>
                        <ul class="sub-menu clearfix padding">
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Headers<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding">

                                    <li class="list-child">
                                        <span class="child">Header Light</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Header Dark</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Header Modern</span>
                                    </li>


                                    <li class="list-child">
                                        <span class="child">Header Left Logo</span>
                                    </li>

                                    <li class="list-child">
                                        <a class="child">Header White</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Menu Styles<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding">

                                    <li class="list-child">
                                        <span class="child">Menu Transparent</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Menu Left Logo</span>
                                    </li>
                                    <li class="list-child">
                                        <a class="child">Menu Light</a>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Menu Dark</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Menu Boxed</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Footer Styles<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Videos<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Wide & Boxed<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">PSD Files<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Porfolio</a>
                        <ul class="mega-menu padding clearfix">
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Porfolio Columns
                                    1</a>
                                <ul class="mega-menu-list-child padding">

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Two Columns</span>
                                    </li>

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Three
                                            Columns</span></li>

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Four Columns</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Porfolio Columns
                                    2</a>
                                <ul class="mega-menu-list-child padding">

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Masonry</span></li>

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Mosaic</span></li>

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Mosaic
                                            Project</span></li>

                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Porfolio Columns
                                    3</a>
                                <ul class="mega-menu-list-child padding">

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Modern</span></li>

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Full Width</span>
                                    </li>


                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>No Space</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Porfolio Columns
                                    4</a>
                                <ul class="mega-menu-list-child padding">

                                    <li class="mega-child-list"><span class="mega-child"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i>Single
                                            Project</span></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Shortcodes</a>
                        <ul class="mega-menu padding clearfix">
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Shortcodes 1</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child"><i
                                                class="fa fa-plus-circle" aria-hidden="true"></i>Accodion</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i
                                                class="fa fa-exclamation" aria-hidden="true"></i>Alerts</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-bars"
                                                aria-hidden="true"></i>Amination</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Shortcodes 2</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child"><i
                                                class="fa fa-external-link" aria-hidden="true"></i>Buttons</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-table"
                                                aria-hidden="true"></i>Data Tables</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-th-list"
                                                aria-hidden="true"></i>Grids</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Shortcodes 3</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-th-large"
                                                aria-hidden="true"></i>Icon Boxes</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-circle-o"
                                                aria-hidden="true"></i>Icon Circles</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-list"
                                                aria-hidden="true"></i>Icon Lists</a></li>
                                </ul>
                            </li>
                            <li class="mega-menu-list"><a href="" class="mega-menu-list-name">Shortcodes 4</a>
                                <ul class="mega-menu-list-child padding">
                                    <li class="mega-child-list"><a href="" class="mega-child"><i
                                                class="fa fa-align-center" aria-hidden="true"></i>Tabs</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-list-ul"
                                                aria-hidden="true"></i>Lists</a></li>
                                    <li class="mega-child-list"><a href="" class="mega-child"><i class="fa fa-square-o"
                                                aria-hidden="true"></i>Sections</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Blog</a>
                        <ul class="sub-menu clearfix padding">
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Classic<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding sub-style">

                                    <li class="list-child">
                                        <span class="child">Full Width</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Left Sidebar</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Right Sidebar</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Grids<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding sub-style">

                                    <li class="list-child">
                                        <span class="child">One Column</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Two Column</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Three Column</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Four Column</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Default<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding sub-style">

                                    <li class="list-child">
                                        <span class="child">Full Width</span>
                                    </li>


                                    <li class="list-child">
                                        <span class="child">Left Sidebar</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Right Sidebar</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Author Page</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Blog Single</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Thumbnail<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding sub-style">

                                    <li class="list-child">
                                        <span class="child">Full Width</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Left Sidebar</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Right Sidebar</span>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Shop</a>
                        <ul class="sub-menu clearfix padding">
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Grids<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding sub-style">

                                    <li class="list-child">
                                        <span class="child">Two Column</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Three Column</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Four Column</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Default<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding sub-style">

                                    <li class="list-child">
                                        <span class="child">Full Width</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Left Sidebar</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Right Sidebar</span>
                                    </li>

                                    <li class="list-child">
                                        <a class="child">Author Page</a>
                                    </li>
                                    <li class="list-child">
                                        <a class="child">Blog Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Order Process<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="sub-menu-child padding sub-style">

                                    <li class="list-child">
                                        <span class="child">Shopping Card</span>
                                    </li>

                                    <li class="list-child">
                                        <span class="child">Checkout</span>
                                    </li>

                                </ul>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-item-link">Single Product</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <span class="nav-link"><i class="fa fa-search" aria-hidden="true"></i></span>
                    </li>

                    <li class="nav-item">
                        <span class="nav-link"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="panner">
    <div class="container">
        <div class="heading">
            <h2 class="main-heading">MENU</h2>
            <h3 class="sub-heading">GET MANY MORE FEATURES</h3>
        </div>
    </div>
</div>