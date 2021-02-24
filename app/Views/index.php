<?php

$url = (empty($page)) ? 'home.php' : $page.'.php';

echo view('templates/header.php', ['title' => ucfirst($page)]);
echo view($url);
echo view('templates/footer.php');

?>