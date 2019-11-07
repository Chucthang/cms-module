<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-21">
    <div class="container">
        <div class="test">
            <div class="events">
                <div class="gach"></div>
                <div class="text">
                    EVENT
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="cot">
                <div class="row">
                    <div class="col-md-9">
                        <div class="this">
                            <ul>
                                <li>This event has passed.</li>
                            </ul>
                        </div>
                        <h2 class="your">Your Honey</h2>

                        <div class="event">
                            <h3>
                                <span class="march">March 3, 2016 @ 8:00 am</span>
                                <span class="march">March 4, 2016 @ 5:00 pm</span>
                                <span class="tribe-events-divider">|</span>
                                <span class="tribe-events-cost">900$</span>
                            </h3>
                        </div>

                        <div class="phase">
                            <p>Phasellus ac arcu suscipit, sollicitudin ex placerat,
                                sollicitudin velit. Mauris bibendum neque elit,
                                vel fringilla diam varius et. Aenean ultricies nisi orci,
                                eget semper ipsum scelerisque a. Nullam congue egestas arcu,
                                at vestibulum libero. Etiam felis dui, pretium at enim a,
                                sagittis iaculis sapien. Proin eget augue interdum, cursus elit eu,
                                dignissim mi. Pellentesque ut mauris eget sem dapibus interdum. Cras luctus interdum est,
                                quis congue nulla ultrices vel. Etiam ultrices, mi a convallis convallis, ante justo interdum mi,
                                in tristique nibh tellus eu magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nam ac ultrices lectus. Proin sed eros a odio maximus efficitur. Praesent non cursus felis.
                                Sed at nulla id eros egestas mattis ut quis ligula. Praesent at tortor nisi.
                                Nam sagittis ut mi id hendrerit.</p>

                            <p>Phasellus ac arcu suscipit, sollicitudin ex placerat,
                                sollicitudin velit. Mauris bibendum neque elit,
                                vel fringilla diam varius et. Aenean ultricies nisi orci,
                                eget semper ipsum scelerisque a. Nullam congue egestas arcu,
                                at vestibulum libero. Etiam felis dui, pretium at enim a,
                                sagittis iaculis sapien. Proin eget augue interdum, cursus elit eu,
                                dignissim mi. Pellentesque ut mauris eget sem dapibus interdum. Cras luctus interdum est,
                                quis congue nulla ultrices vel. Etiam ultrices, mi a convallis convallis, ante justo interdum mi,
                                in tristique nibh tellus eu magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nam ac ultrices lectus. Proin sed eros a odio maximus efficitur. Praesent non cursus felis.
                                Sed at nulla id eros egestas mattis ut quis ligula. Praesent at tortor nisi.
                                Nam sagittis ut mi id hendrerit.</p>
                            <div class="icon">
                                <span>SHARE THIS:</span>
                                <a href="#" onclick="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" onclick="#"><i class="fa fa-twitter"></i></a>
                                <a href="#" onclick="#"><i class="fa fa-google"></i></a>
                                <a href="#" onclick="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>

                        <div class="best">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="d1">
                                        <h3 class="hang1">Details</h3>
                                        <dl>
                                            <dt> Start: </dt>
                                            <dd>
                                                <abbr title="">March 3, 2016 @ 8:00 am</abbr>
                                            </dd>
                                            <dt> End: </dt>
                                            <dd>
                                                <abbr title="">March 4, 2016 @ 5:00 pm</abbr>
                                            </dd>
                                            <dt> Cost: </dt>
                                            <dd>900$</dd>
                                            <dt>Event Category:</dt>
                                            <dd>Events</dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="d2">
                                        <h3 class="hang2"> Organizer </h3>
                                        <dl>
                                            <dd> Templaza </dd>
                                            <dt> Phone: </dt>
                                            <dd> +0987 092 291 091 </dd>
                                            <dt> Email: </dt>
                                            <dd> templaza@info.com </dd>
                                            <dt> Website: </dt>
                                            <dd> TemPlaza </dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="d3">
                                        <h3 class="hang3"> Venue </h3>
                                        <dl>
                                            <dd> London </dd>
                                            <dd>Google Map</dd>
                                            <dt> Phone: </dt>
                                            <dd> +0987 092 291 091 </dd>
                                            <dt> Website: </dt>
                                            <dd>http://www.templaza.com/</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="khoi">
                            <div class="con">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="table">
                            <div class="truoc">
                                <ul>
                                    <li class="posts"><a>RECENT POSTS</a></li>
                                    <li><a href="#">Morbi placerat vene</a></li>
                                    <li><a href="#">Duis id congue</a></li>
                                    <li><a href="#">Maece honcus nisi</a></li>
                                    <li><a href="#">Praesent solli ex</a></li>
                                </ul>
                            </div>
                            <br>
                            <div class="sau">
                                <ul>
                                    <li class="posts"><a>META</a></li>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries RSS</a></li>
                                    <li><a href="#">Comments RSS</a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>