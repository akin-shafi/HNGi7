<?php
    // Get current page url
    $uri = $_SERVER['REQUEST_URI'];
    
    // Defind the protocol of url if it is http or https
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
     
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    
    //Get a list of file paths using the glob function.
      $allFilesList= glob('scripts/*');
      //Loop through the array that glob returned.
      foreach ($allFilesList as $filename) {
          //Simply print them out onto the screen.
          echo file_get_contents($url . $filename);
      }
