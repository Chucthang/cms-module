<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-28">
    <div class="container">
        <div class="test">
            <div class="events">
                <div class="gach"></div>
                <div class="text">
                    EVENTS GRID
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="grid">
                <h1>H1 Headline</h1>   
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut.</p>
                <h2>H2 Headline</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut.</p>
                <h3>H3 Headline</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut.</p>
                <h4>H4 Headline</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut.</p>
                <h5>H5 Headline</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut.</p>
                <h6>H6 Headline</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut.</p>
            </div>

            <!-- <div class="cot">
                <div class="row">
                    <div class="col-md-9"></div>
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
            </div> -->
        </div>
    </div>
</div>