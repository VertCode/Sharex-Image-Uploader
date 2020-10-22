<?php
function initNotAllowedPage($title, $favicon, $url, $msg)
{
    echo <<<EOT
test
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>$title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="$favicon">
    <link rel="apple-touch-icon" href="$favicon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.css">

    <!-- Discord and other site embed support -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="og:site_name" content="$title"/>
    <meta property="og:type" content="website">
    <meta property="og:title" content="$title"/>
    <meta property="og:url" content="$url"/>
    <meta property="og:image" content="$favicon" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu+Mono" />
</head>

<style>
   .cannot-msg {
        left: 0;
        line-height: 200px;
        margin-top: -100px;
        position: absolute;
        text-align: center;
        top: 50%;
        width: 100%;
        color: red;
        font-family: Ubuntu Mono; 
   }
</style>

<body>
   <h1 class="cannot-msg">$msg</h1>
</body>
</html>
EOT;
}

?>