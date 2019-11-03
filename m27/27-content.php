<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-27">
    <div class="timeplate">
        <div class="container">
            <div class="title-27"></div>
            <h3 class="title_ourstory">TYPOGRAPHY</h3>
        </div>
    </div>
    <div class="container">
        <div class="single-content">
            <h1>H1 Headline</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
            </p>
            <h2>H2 Headline</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
            </p>
            <h3>H3 Headline</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
            </p>
            <h4>H4 Headline</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
            </p>
            <h5>H5 Headline</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
            </p>
            <h6>H6 Headline</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit. Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed ligula. Vivamus purus odio, mollis ut sagittis.
            </p>
        </div>

    </div>
</div>