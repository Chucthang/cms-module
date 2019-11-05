<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
   
        <div class="row">
            <div class=" col-md-4 col-sm-6 ">
                <div class="hovereffect">
                    <img class="img-responsive" src="images/por1.jpg" alt="sed1">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">PRAESENT & ORCI</a></h3>
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
                    <img class="img-responsive" src="images/por4.jpg" alt="sed2">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">READER & MAURIS</a></h3>
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
            <div class=" col-md-4 col-sm-6 ">
                <div class="hovereffect">
                    <img class="img-responsive" src="images/por2.jpg" alt="sed4">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">EFFICITUR & LACUS</a></h3>
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
                    <img class="img-responsive" src="images/por3.jpg" alt="sed3">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">ALIQUAM & MILEY</a></h3>
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
            <div class=" col-md-4 col-sm-6 ">
                <div class="hovereffect">
                    <img class="img-responsive" src="images/por5.jpg" alt="sed4">
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
                    <img class="img-responsive" src="images/por6.jpg" alt="sed5">
                    <div class="overlay">
                        <div class="ggg">
                            <div>
                                <i class="fa fa-heart-o tzicon"></i>
                                <h3><a href="#">DONEC & LACUS</a></h3>
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