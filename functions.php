<?php


 function directoryReader ( $directory, array $excludeFiles = [ '.','..' ] )
 {
	 
	 $images = [];
	 
	 
	 if( !is_dir( $directory ) )
	 {
		 return null;
	 }
	 
	 
	 if (  !( $filesDirectory = opendir( $directory ) ) )
	 {
		 return null;
		 
	 }
	 
	 
	 while(  ( $image = readdir ( $filesDirectory ) ) !== false )
	 {
		 
		 if ( in_array( $image, $excludeFiles ) )
		 {
			 continue;
		 }
		 
		 
		 $images[] = $directory .'/'. $image ;
	 }
	 
	 
	 closedir( $filesDirectory );
	 
	 return $images;
	 
 }
 


?>