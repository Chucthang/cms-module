<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <div class="tong">
            <div class="row">
                <div class="col-md-4">
                    <div class="left">
                        <div class="heart">
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>
                        <div class="text">
                            COUNTDOWN TO
                            <br>
                            <span>MICHAEL &amp; JOHNNY</span>
                            <br>
                            WEDDING CEREMONY
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right">
                        <div class="row">
                            <div class="col-md-3 ex">
                                <div class="a">
                                    <span id="days">00</span>
                                    <p>DAYS</p>
                                </div>
                            </div>
                            <div class="col-md-3 ex">
                                <div class="a">
                                    <span id="hours">00</span>
                                    <p>HOURS</p>
                                </div>
                            </div>
                            <div class="col-md-3 ex">
                                <div class="a">
                                    <span id="min">00</span>
                                    <p>MINUTES</p>
                                </div>
                            </div>
                            <div class="col-md-3 ex">
                                <div class="a">
                                    <span id="seconds">00</span>
                                    <p>SECONDS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>