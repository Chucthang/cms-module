<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-12">
    <div class="timeplate">
        <div class="container">
            <div class="title-13"></div>
            <h3 class="title_ourstory">CATEGORY: BLOG</h3>
        </div>
    </div>
    <div class="container">
        <div class="blog-img">
            <img src="./images/post.jpg" alt="img-post">
        </div>
        <h2 class="title-post">
            <a href="#">IMAGE POST</a>
        </h2>
        <div class="blog_meta">
            <span class="tzblog_date">
                February 9, 2015 /
            </span>
            <span class="tzblog_comments">
                <a href="#">Leave a comment</a> </span>
            <span class="tztags_link">
                /<a href="#" rel="tag">love</a>,<a href="#" rel="tag">songs</a>/ </span>
            <span class="tzcat_link">
                <a href="#" rel="category tag">Blog</a> </span>
        </div>
        <div class="tzthe_content">
            <p>Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly. North Texas Wedding Photographer Rachel Meagan Photography 25.<br>
                Destination wedding photography – bring a photographer or use a local one? Wedding photography is the photography of activities relating to weddings. It encompasses photographs of the couple before marriage </p>
            <a class="more-link" href="#">READ MORE</a>
        </div>
    </div>
    <div class="container">
        <div class="music">
            <a href="#"> <img src="./images/missic.jpg" alt="music"></a>
        </div>
    </div>
    <div class="container">

        <h2 class="title-post">
            <a href="#">IMAGE POST</a>
        </h2>
        <div class="blog_meta">
            <span class="tzblog_date">
                February 9, 2015 /
            </span>
            <span class="tzblog_comments">
                <a href="#">Leave a comment</a> </span>
            <span class="tztags_link">
                /<a href="#" rel="tag">love</a>,<a href="#" rel="tag">songs</a>/ </span>
            <span class="tzcat_link">
                <a href="#" rel="category tag">Blog</a> </span>
        </div>
        <div class="tzthe_content">
            <p>Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly. North Texas Wedding Photographer Rachel Meagan Photography 25.<br>
                Destination wedding photography – bring a photographer or use a local one? Wedding photography is the photography of activities relating to weddings. It encompasses photographs of the couple before marriage </p>
            <a class="more-link" href="#">READ MORE</a>
        </div>
        <div class="type-video">
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
                                    <source type="video/mp4" src="./images/video.mp4">                                  
                            </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>


        <h2 class="title-post">
            <a href="#">VIDEO POST</a>
        </h2>
        <div class="blog_meta">
            <span class="tzblog_date">
                February 9, 2015 /
            </span>
            <span class="tzblog_comments">
                <a href="#">Leave a comment</a> </span>
            <span class="tztags_link">
                /<a href="#" rel="tag">love</a>,<a href="#" rel="tag">songs</a>/ </span>
            <span class="tzcat_link">
                <a href="#" rel="category tag">Blog</a> </span>
        </div>
        <div class="tzthe_content">
            <p>Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly. North Texas Wedding Photographer Rachel Meagan Photography 25.<br>
                Destination wedding photography – bring a photographer or use a local one? Wedding photography is the photography of activities relating to weddings. It encompasses photographs of the couple before marriage </p>
            <a class="more-link" href="#">READ MORE</a>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./images/video1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./images/video2.jpg" alt=""></div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <h2 class="title-post">
            <a href="#">VIDEO POST</a>
        </h2>
        <div class="blog_meta">
            <span class="tzblog_date">
                February 9, 2015 /
            </span>
            <span class="tzblog_comments">
                <a href="#">Leave a comment</a> </span>
            <span class="tztags_link">
                /<a href="#" rel="tag">love</a>,<a href="#" rel="tag">songs</a>/ </span>
            <span class="tzcat_link">
                <a href="#" rel="category tag">Blog</a> </span>
        </div>
        <div class="tzthe_content">
            <p>Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly. North Texas Wedding Photographer Rachel Meagan Photography 25.<br>
                Destination wedding photography – bring a photographer or use a local one? Wedding photography is the photography of activities relating to weddings. It encompasses photographs of the couple before marriage </p>
            <a class="more-link" href="#">READ MORE</a>
        </div>
        <div class="tzquote tzblog-format">
            <i class="fa fa-heart-o quote_icon"></i>
            <p>
                <i class="fa fa-quote-left"></i>
                Better to have loved and lost, than to have never loved at all. <i class="fa fa-quote-right"></i>
            </p>
            <span class="author_quote">
                ~ ST.AUGUSTINE ~ </span>
        </div>
        <h2 class="title-post">
            <a href="#">QUOTE POST</a>
        </h2>
        <div class="blog_meta">
            <span class="tzblog_date">
                February 9, 2015 /
            </span>
            <span class="tzblog_comments">
                <a href="#">Leave a comment</a> </span>
            <span class="tztags_link">
                /<a href="#" rel="tag">love</a>,<a href="#" rel="tag">songs</a>/ </span>
            <span class="tzcat_link">
                <a href="#" rel="category tag">Blog</a> </span>
        </div>
        <div class="tzthe_content">
            <p>Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly. North Texas Wedding Photographer Rachel Meagan Photography 25.<br>
                Destination wedding photography – bring a photographer or use a local one? Wedding photography is the photography of activities relating to weddings. It encompasses photographs of the couple before marriage </p>
            <a class="more-link" href="#">READ MORE</a>
        </div>

    </div>


</div>
<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    $(document).ready(function() {
        var media = $('video').not("[autoplay='autoplay']"),
            interface = $('button'),
            tolerance = 200;

        function checkMedia() {

            var current = $(window).scrollTop(),
                scrollTop = current + tolerance,
                scrollBottom = current + $(window).height() - tolerance;

            media.each(function(index, el) {

                var yTopMedia = $(this).offset().top,
                    yBottomMedia = $(this).height() + yTopMedia;

                if (scrollTop < yBottomMedia && scrollBottom > yTopMedia) {
                    $(this).get(0).play();
                    interface.text('PAUSE');

                } else {
                    $(this).get(0).pause();
                    interface.text('PLAY');

                }
            }).on('ended', function() {
                interface.text('PLAY');
            });
        }

        interface.click(function() {
            if ($(".type-video .bg-video").hasClass("none-bg")) {
                $(".type-video .bg-video").removeClass("none-bg");
            } else {
                $(".type-video .bg-video").addClass("none-bg");
            }
            if ($('.bg-video').hasClass('none-bg')) {
                $('.autoplay').css('visibility', 'hidden');
                $('.pause').css('visibility', 'visible');

            } else {
                $('.autoplay').css('visibility', 'visible');
                $('.pause').css('visibility', 'hidden');
            }

            if (media[0].playing) media.get(0).pause();
            else media.get(0).play();

        });
        $(window).scroll(checkMedia);

        Object.defineProperty(HTMLMediaElement.prototype, 'playing', {
            get: function() {
                return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
            }
        });
    });
</script>