<?php

// echo "In admin index<br>";

$url = (empty($page)) ? 'dashboard' : $page;
// echo $url;die;

echo view('admin/header', ['page' => $url]);
echo view('admin/'.$url);
echo view('admin/footer', ['page' => $url]);

?>