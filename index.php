<?php

$config = parse_ini_file('config.ini');
$image_dir = $config['image_folder'];
$favicon = $config['favicon'];
$title = $config['site_title'];

$url = 'https://' . $_SERVER['HTTP_HOST'];
$path = explode("/", $_SERVER['REQUEST_URI']);
$file_id = $path[2];
$file_type = $path[1];
$image_local = $image_dir . '/' . $file_id . '.' . $file_type;
$image = $url . '/' . $image_dir . '/' . $file_id . '.' . $file_type;
$upload_date = date("d F Y g:i A T", filemtime($image_local));
include('pages/not-allowed-page.php');
include('pages/image-page.php');

if ($file_id == null || !is_file($image_local)) {
    initNotAllowedPage($title, $favicon, $url, "You don't belong here, do you?");
    return;
}

initImagePage($title, $favicon, $upload_date, $url, $image);

?>