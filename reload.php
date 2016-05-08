<html>
  <head>
    <meta charset="utf-8">
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
    echo '<p>Tá atualizado! <a href="index.php">Ver o resultado.</a>';

    // Get the latest version of the repository
    print("<pre>");
    execPrint("git pull");
    print("</pre>");
    ?>
    <a href="pages.php">Vamos começar, então</a>
  </body>
</html>
