<?php

require 'functions.php';

$directory = 'images';


$images =   directoryReader( $directory );



if( !$images )
{
	die( 'Images could not be found!. ');
}






?>


<!-- Done by Mohamad Abdulkafi  -->
   
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
	 <title> Simple files Reader </title>


	 <style> 
	 
			img{

			width:304px;
			height:228px;
			margin:5px;
			padding:10px;
			background-color :#D3D3D3;
			}
	 
	 
	 </style>
	 
	 
	 
</head>



<body>

<?php foreach( $images as $image ) :?>

	
		  <img src="<?php echo $image ; ?>" >
	
	

<?php endforeach; ?>




</body>
</html>



