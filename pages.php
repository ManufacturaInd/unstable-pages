<?php
require_once 'Michelf/Markdown.inc.php';

if ( $_GET["titulo"] ) {
  $file_to_load = $_GET["titulo"];
} else {
  // pick a random file from the texts dir
  $page_files_list = scandir('textos');
  $file_to_load = array_rand($page_files_list);
}

// get the file contents and render them into HTML
$page_contents_markdown = file_get_contents($file_to_load);
$page_contents_html = Markdown::defaultTransform($page_contents_markdown);
// show the HTML
echo $page_contents_html;
?>

<a href="pages.php">Vai</a>
