<?php
require_once 'Michelf/MarkdownExtra.inc.php';

// pick a random file from the texts dir
$page_files_list = scandir('textos');
$file_to_load = array_rand($page_files_list);
// get the file contents and render them into HTML
$page_contents_markdown = file_get_contents($file_to_load);
$page_contents_html = MarkdownExtra::defaultTransform($page_contents_markdown);
// show the HTML
echo $page_contents_html;
?>

<a href="pages.php">Vai</a>
