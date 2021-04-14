<?php
// echo "<pre>";
// print_r($data);
// echo $url;
// echo "</pre>";die;
$url = (empty($page)) ? 'dashboard' : $page;

echo view('admin/header', ['title' => $title, 'page' => $url]);
echo view('admin/'.$url);
echo view('admin/footer', ['page' => ucfirst($url)]);

?>