<?php

  chdir('archive_gamehackz');
  $dir = getcwd();
  $files = scandir($dir);

  $i = 0;
  foreach($files as $file){
    if($i > 1){
      echo $file . '<br>';
      parseDir($file);
      echo '<br>';
    }
    $i++;
  }

?>

<?php


  function parseDir($dir){
    //Enter Directory
    chdir($dir);
    $dir = getcwd();
    $files = scandir($dir);

    //Parse that shit

    foreach($files as $file){
      if($i > 1){
        echo '<ul>';
        echo '<li>' . $file . '</li>';
        echo '</ul>';
      }
      $i++;
    }

    //Exit Directory
    chdir('..');
  }
?>
