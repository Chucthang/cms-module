<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
    <div class="timeplate">
        <div class="container">
            <div class="title-13"></div>
            <h3 class="title_ourstory">TIMELINE</h3>
        </div>
    </div>
    <div class="container">
        <div class="bk">
            <div class="row">
                <div class="col-md-6">
                    <div class="boder-right">

                        <div class="bkimg">
                            <img src="./images/bk1.jpg" alt="">
                        </div>
                        <div class="timeline"> February 9,2015 </div>
                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>

                        <div class="bkimg1">
                            <img src="./images/bk3.jpg" alt="">
                        </div>
                        <div class="timeline"> February 9,2015 </div>

                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>

                        <div class="bkimg1">
                            <img src="./images/bk4.jpg" alt="">
                        </div>
                        <div id="time" class="timeline"> February 9,2015 </div>
                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>

                        <div class="bkimg1">
                            <img src="./images/bk5.jpg" alt="">
                        </div>
                        <div class="timelinee"> February 9,2015 </div>


                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>

                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>
                        <div class="bkimg1">
                            <img src="./images/bk6.jpg" alt="">
                        </div>
                        <div class="timelinee"> February 9,2015 </div>
                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="boder-left">
                        <div class="timeline1"> February 9,2015 </div>

                        <div class="bkimg2">
                            <img src="./images/bk2.jpg" alt="">
                        </div>

                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>
                    </div>

                    <div class="boder-left">
                        <div class="timeline1"> February 9,2015 </div>

                        <div class="bkimg2">
                            <img src="./images/bk8.jpg" alt="">
                        </div>

                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>
                    </div>

                    <div class="boder-left">
                        <div class="timeline1"> February 9,2015 </div>

                        <div class="bkimg1">
                            <img src="./images/bk2.jpg" alt="">
                        </div>

                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>
                    </div>
                    <div class="boder-left">
                        <div class="timeline1"> February 9,2015 </div>

                        <div class="bkimg1">
                            <img src="./images/bk10.jpg" alt="">
                        </div>

                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>
                    </div>

                    <div class="boder-left">
                        <div class="timeline1"> February 9,2015 </div>

                        <div class="bkimg1">
                            <img src="./images/bk7.jpg" alt="">
                        </div>

                        <div class="tit">
                            <i class="fa fa-heart-o tztime-icon"></i>

                        </div>
                        <h2 class="tz-title"><a href="#">Praesent &amp; MILEY</a></h2>
                        <div class="tz_meta">
                            <span class="date">
                                February 9, 2015 /
                            </span>
                            <span class="tztags_link">
                                <a href="#" rel="tag">NewYork</a>, <a href="#" rel="tag">USA</a> </span>
                        </div>
                        <div class="timeline2"> More posts ... </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>