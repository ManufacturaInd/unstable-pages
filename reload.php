<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  </head>
  <body>
    <?php
    function execPrint($command) {
      $result = array();
      exec($command, $result);
      foreach ($result as $line) {
        print($line . "\n");
      }
    }
    echo '<p>Tá atualizado! <a href="index.html">Ver o resultado.</a>';

    // Get the latest version of the repository
    print("<pre>");
    execPrint("git pull");
    print("</pre>");
    ?>
  </body>
</html>
