<?php 
  $path = dirname(__FILE__). '/scripts/' ;
	
	//Get a list of file paths using the glob function.
	  $allFilesList= glob('scripts/*');
	  //Loop through the array that glob returned.
	  foreach($allFilesList as $filename){
	    //Simply print them out onto the screen.
	    echo file_get_contents('http://localhost/project/' . $filename);

	  }

 ?>