<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
require_once 'Michelf/Markdown.inc.php';

if ( $_GET["titulo"] ) {
  $file_to_load = $_GET["titulo"] . ".md";
} else {
  // pick a random file from the texts dir
  $page_files_list = scandir('textos');
  unset($page_files_list[0]);
  unset($page_files_list[1]);
  $file_to_load = $page_files_list[array_rand($page_files_list)];
}

// get the file contents and render them into HTML
$page_contents_markdown = file_get_contents('textos/' . $file_to_load);
$md = new \Michelf\Markdown();
$page_contents_html = $md->defaultTransform($page_contents_markdown);

// show the HTML
echo $page_contents_html;
?>

<a href="pages.php">Vai</a></body>
