<?php
$url = (empty($page)) ? 'home' : $page;

echo view('templates/header', ['title' => ucfirst($page)]);
echo view($url);
echo view('templates/footer', ['visitorsCount' => $visitorsCount]);

?>