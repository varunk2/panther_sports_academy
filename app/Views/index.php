<?php
$url = (empty($page)) ? 'home' : $page;

// echo "<pre>";
// print_r($content);
// echo "</pre>";die;

echo view('templates/header', ['title' => ucfirst($page)]);
echo view($url);
echo view('templates/footer', ['visitorsCount' => $visitorsCount]);

?>