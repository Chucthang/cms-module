<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
    <div class="timeplate">
        <div class="container">
            <div class="title-15"></div>
            <h3 class="title_ourstory">PORTFOLIO 2 COLUMNS</h3>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class=" col-md-6 col-sm-6 ">
                <div class="hovereffect">
                    <img class="img-responsive" src="images/sed1.jpg" alt="sed1">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">Sed congue magna</a></h3>
                                <div class="tzmeta">
                                    <span>February 9, 2015</span>
                                    <span class="tztag">
                                        <a href="#" rel="tag">NewYork</a>,<a href="#" rel="tag">USA</a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hovereffect">
                    <img class="img-responsive" src="images/sed2.jpg" alt="sed2">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">ALIQUAM SODALES</a></h3>
                                <div class="tzmeta">
                                    <span>February 9, 2015</span>
                                    <span class="tztag">
                                        <a href="#" rel="tag">NewYork</a>,<a href="#" rel="tag">USA</a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hovereffect">
                    <img class="img-responsive" src="images/sed3.jpg" alt="sed3">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">PRETIUM UCIES SAPIEN</a></h3>
                                <div class="tzmeta">
                                    <span>February 9, 2015</span>
                                    <span class="tztag">
                                        <a href="#" rel="tag">NewYork</a>,<a href="#" rel="tag">USA</a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-sm-6 ">
                <div class="hovereffect">
                    <img class="img-responsive" src="images/sed4.jpg" alt="sed4">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">FERTUM AC LOREM</a></h3>
                                <div class="tzmeta">
                                    <span>February 9, 2015</span>
                                    <span class="tztag">
                                        <a href="#" rel="tag">NewYork</a>,<a href="#" rel="tag">USA</a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hovereffect">
                    <img class="img-responsive" src="images/sed5.jpg" alt="sed5">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">VARIUS UT TINCIDUNT</a></h3>
                                <div class="tzmeta">
                                    <span>February 9, 2015</span>
                                    <span class="tztag">
                                        <a href="#" rel="tag">NewYork</a>,<a href="#" rel="tag">USA</a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hovereffect">
                    <img class="img-responsive" src="images/sed6.jpg" alt="sed6">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">PRAESENT VITAE DIAM</a></h3>
                                <div class="tzmeta">
                                    <span>February 9, 2015</span>
                                    <span class="tztag">
                                        <a href="#" rel="tag">NewYork</a>,<a href="#" rel="tag">USA</a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


</div>