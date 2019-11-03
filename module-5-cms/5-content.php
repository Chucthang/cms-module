<?php
 $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-5-cms">
   <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="name-img">
                        <h3>WEDDING DECOR</h3>
                    </div>
                <div class="img-weeding"> 
                    <div class="img">
                        <a href="#">
                            <img src="./images/h1.jpg" alt="">
                        </a>
                    </div>
                    
                </div>
                <div class="info">
                <p>Thank you for choosing Cosmo Theme and purchasing one of our Premium WordPress Themes. Your choice is highly appreciated!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="name-img">
                        <h3>BRIDE & GROOM</h3>
                </div>
                <div class="img-weeding">
                    <div class="img">
                        <a href="#">
                            <img src="./images/h2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="info">
                <p>Thank you for choosing Cosmo Theme and purchasing one of our Premium WordPress Themes. Your choice is highly appreciated!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="name-img">
                        <h3>THE PROPOSE</h3>
                </div>
                <div class="img-weeding">
                    <div class="img">
                        <a href="#">
                            <img src="./images/h3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="info">
                <p>Thank you for choosing Cosmo Theme and purchasing one of our Premium WordPress Themes. Your choice is highly appreciated!</p>
                </div>
            </div>
        </div>
    </div>
</div>
