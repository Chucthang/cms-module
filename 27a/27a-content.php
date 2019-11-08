<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-27a">
    <div class="container">
        <div class="top">
            <h1 class="coming">COMING SOON.</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="tron">
                        <span class="days">00</span>
                        <p class="timeRefDays"></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tron">
                        <span class="hours">00</span>
                        <p class="timeRefHours"></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tron">
                        <span class="minutes">00</span>
                        <p class="timeRefMinutes"></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tron">
                        <span class="seconds">00</span>
                        <p class="timeRefSeconds">seconds</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="comeback">
            Comeback to <a href="#">homepage</a>
        </p>
    </div>
</div>