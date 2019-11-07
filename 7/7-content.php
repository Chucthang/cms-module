<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 ex">
                <div class="left">
                    <div class="audio">
                        <div class="nut">
                            <button>
                                <i class="fa fa-backward"></i>
                            </button>
                            <button style="display: inline-block;">
                                <i class="fa fa-play"></i>
                            </button>
                            <button style="display: none;">
                                <i class="fa fa-pause"></i>
                            </button>
                            <button>
                                <i class="fa fa-forward"></i>
                            </button>
                            <button>
                                <i class="fa fa-stop"></i>
                            </button>
                        </div>

                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>

                    </div>
                    <div class="jp-playlist">
                        <ul class="test" style="display: block;">
                            <li class="jp-playlist-current">
                                <div class="lists">
                                    <a>Nulla vitae augue</a>
                                </div>
                            </li>
                            <li>
                                <div class="lists">
                                    <a>FALLEN – LAUREN WOOD</a>
                                </div>
                            </li>
                            <li>
                                <div class="lists">
                                    <a>SWEAR IT AGAIN – WESTLIFE</a>
                                </div>
                            </li>
                            <li>
                                <div class="lists">
                                    <a>THE POWER OF LOVE – CELINE DION</a>
                                </div>
                            </li>
                            <li>
                                <div class="lists">
                                    <a>I’M YOURS – BRUNO MARS</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-6 ax">
                <div class="box">
                    <div class="rox">
                        <div class="logo">
                            <img src="./images/2.png" alt="">
                        </div>

                        <div action="hop">
                            <div class="max">
                                <span>NAME :</span>
                                <input type="text" style="width: 38%;">
                            </div>
                            <div class="max">
                                <span>GUEST:</span>
                                <input type="text" style="width: 38%;">
                            </div>
                            <div class="max">
                                <span>EVENT:</span>
                                <select id="country" style="width: 38%;">
                                    <option>Ceremory</option>
                                    <option>Safari</option>
                                    <option>Opera</option>
                                    <option>Lynx</option>
                                </select>
                            </div>
                        </div>

                        <div class="button">
                            <input type="submit" value="JOIN US" class="check">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>