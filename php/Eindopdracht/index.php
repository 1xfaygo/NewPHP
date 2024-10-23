<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Lab 3 - Eindopdracht - Includes are Required</h1>
<?php

	// <!-- laad hier via php je header in (vanuit je includes map) -->
  include("includes/header.php");

	// <!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  $pagina = isset($_GET['pages'])? $_GET['pages'] : 'defaultPage';
  if($pagina == "onderwerp1"){
    include("pages/onderwerp1.php");
  }else if($pagina == "onderwerp2"){
    include("pages/onderwerp2.php");
  }else if($pagina == "onderwerp3"){
    include("pages/onderwerp3.php");
  }else{

    echo "Kies een Team";
  }

	
	// <!-- laad hier via php je footer in (vanuit je includes map)-->
  include("includes/footer.php");
?>
</body>
</html>