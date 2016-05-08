<?php
function execPrint($command) {
  $result = array();
  exec($command, $result);
  foreach ($result as $line) {
    print($line . "\n");
  }
}

echo '<p>Tá feito! <a href="index.php">Ver o resultado.</a>';

// Get the latest version of the repository
print("<pre>" . execPrint("git pull") . "</pre>");

?>
