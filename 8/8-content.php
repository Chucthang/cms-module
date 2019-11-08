<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-sm-12">
                <div class="custom">
                    <div class="wrapper"> 
                        <div class="tz-video">
                            <div class="tz-video-content">
                                <button class="autoplay"><i class="fa fa-video-camera"></i></button>
                                <button class="pause"><i class="fa fa-pause"></i></button>
                                <h3>“The Power of Love”</h3>
                                <p>JENNIFER AND JAMES WEDDING VIDEO</p>
                            </div>
                            <div class="bg-video"></div>
                            <video class="videoID" style="margin-top: -379.406px;">
                                <source type="video/mp4" src="./images/v1.mp4">
                                <source type="video/ogg" src="./images/v2.ogv">
                                <source type="video/webm" src="./images/v3.webm">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>