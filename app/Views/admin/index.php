<?php
$url = (empty($page)) ? 'dashboard' : $page;
// echo "<pre>";
// print_r($data);
// echo "</pre>";die;

echo view('admin/header', ['title' => $title, 'page' => $url]);
echo view('admin/'.$url);
echo view('admin/footer');

?>