<?php

$url = (empty($page)) ? 'dashboard' : $page;

echo view('admin/header', ['page' => ucfirst($url)]);
echo view('admin/'.$url);
echo view('admin/footer', ['page' => ucfirst($url)]);

?>