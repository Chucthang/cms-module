<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-4">
    <div class="container">
        <h3 class="title_ourstory">OUR STORY</h3>
        <div class="ourstory_content">
            <p>Thank you for choosing CosmoThemes and purchasing one of our Premium WordPress Themes your choice is greatly appreciated!</p>
            <p>The Head To Toe Bride is a workshop in Dayton, OH that a good photographer friend of mine is putting on. He asked me to do a quick logo and website for the workshop to give me details as to what it was. After a week this is what I had for him, you can see the website live at.</p>
            <p>No workshop is complete without an amazing team of people, most of whom are usually behind the scenes. These amazing sponsors are contributing in so many different ways, and we could not be more excited! Let’s just say, each student at the Head to Toe Bride Workshop is in for some pretty sweet swag bags.</p>
        </div>
    </div>
</div>