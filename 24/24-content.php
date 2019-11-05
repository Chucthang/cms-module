<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-24">
     <!-- content-header -->
    <div class="content">
        <div class="container">
            <h1>About</h1>
        </div>
    </div>
    <!-- about-page -->
    <div class="about-page">
        <div class="about-img">
            <div class="container">
                <div class="column-container col-sm-12">
                    <div class="column-inner">
                        <div class="wrapper">
                            <div class="img-center">
                                <figure class="figure">
                                    <div class="img">
                                        <img id="images" src="./images/24.1.jpg" alt="">
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- content-page -->
    <div class="content-page">
        <div class="container">
            <div class="column-container col-sm-12">
                <div class="column-inner">
                    <div class="wrapper">
                        <h3 class="content-title">
                            HELLO WE’RE EVERLINE TEAM
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-text -->
    <div class="content-text">
        <div class="container">
            <div class="column-container col-sm-12">
                <div class="column-inner">
                    <div class="wrapper">
                        <div class="text">
                            <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam elementum nisi eget mi mollis laoreet. Morbi non
                                    dignissim tellus, vitae blandit urna Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi non dignissim.
                                    Nullam elementum nisi eget mi mollis laoreet. Morbi non dignissim tellus, vitae blandit urna Lorem ipsum dolor sit
                                    amet, consectetur adipiscing elit morbi non dignissim.Nullam elementum nisi eget mi mollis laoreet. Morbi non
                                    dignissim tellus, vitae blandit urna Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi non dignissim.
                            </p>
                            <p>
                                Nullam elementum nisi eget mi mollis laoreet. Morbi non dignissim tellus, vitae blandit urna Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit morbi non dignissim.Nullam elementum nisi eget mi mollis laoreet. Morbi non dignissim tellus,
                                vitae blandit urna Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi non dignissim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-page-2 -->
    <div class="row row-fluid custom">
        <div class="containner">
            <div class="column-container col-sm-12">
                <div class="column-inner">
                    <div class="wrapper">
                        <div class="text-content-page-2">
                            <div class="container">
                                <ul class="iconload">
                                    <div class="icon">
                                        <div class="transform-icon">
                                            <div class="item">
                                                <li>
                                                    <i class="fa fa-heart-o icon_testimonials"></i>
                                                    <h3 class="title_testimonials">
                                                        <i class="fa fa-quote-left"></i>
                                                            Better to have loved and lost, than to have never loved
                                                        <i class="fa fa-quote-right"></i>
                                                    </h3>
                                                    <span class="author">~ ST.AUGUSTINE ~</span>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-page-3 -->
    <div class="page-3">
    <div class="column_container col-sm-12">
        <div class="container">
            <h3 class="team_title">OUR TEAM MEMBERS</h3>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-item">
                        <div class="team-img ">
                            <img src="./images/24.3.jpg" alt="">
                            <div class="middle">
                                <div class="icon-3"><i class="fa fa-link"></i></div>
                            </div>
                        </div>
                        <div class="team-meta">
                            <h4>Johnny Wickness</h4>
                            <span>FOUNDER/ PROFESSOR</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-item">
                        <div class="team-img ">
                            <img src="./images/24.4.jpg" alt="">
                            <div class="middle">
                                <div class="icon-3"><i class="fa fa-link"></i></div>
                            </div>
                        </div>
                        <div class="team-meta">
                            <h4>Larry Beowuf</h4>
                            <span>MAKE UP ARTIST</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-item">
                        <div class="team-img ">
                            <img src="./images/24.5.jpg" alt="">
                            <div class="middle">
                                <div class="icon-3"><i class="fa fa-link"></i></div>
                            </div>
                        </div>
                        <div class="team-meta">
                            <h4>Jeff Huntington</h4>
                            <span>WEDDING DESIGNER</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-item">
                        <div class="team-img ">
                            <img src="./images/24.6.jpg" alt="">
                            <div class="middle">
                                <div class="icon-3"><i class="fa fa-link"></i></div>
                            </div>
                        </div>
                        <div class="team-meta">
                            <h4>Johnny Wickness</h4>
                            <span>FOUNDER/ PROFESSOR</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>v

</div>