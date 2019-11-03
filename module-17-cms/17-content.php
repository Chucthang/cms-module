<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-17">
    <!-- header -->
    <div class="content">
        <div class="container">
            <h1>Portfolio Mansory</h1>
        </div>
    </div>
    <!-- content -->
    <div class="content-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="style-mansory">
                        <div class="style-tzmansory">
                            <div class="img-mansory">
                                <a href="#">
                                    <img src="./images/17.1.jpg" alt="">
                                </a>
                            </div>
                            <div class="masonry-meta">
                                <div class="masonry-left pull-left">
                                    <i class="fa fa-heart-o tzicon"></i>
                                    <h3>
                                        <a href="#/">Praesent &amp; MILEY</a></h3>
                                </div>
                                <div class="masonry-right pull-right">
                                    <span>February 9, 2015</span>
                                    <span class="tztag">
                                                     /
                                        <a href="#/" rel="tag">NewYork</a>,<a href="#" rel="tag">USA</a>   
                                    </span>
                                </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     
                                 </div>
                                 <div class="col-md-6">
                                     
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>