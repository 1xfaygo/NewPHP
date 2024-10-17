<!DOCTYPE html>
<html>
<?php
     $page = $_SERVER['PHP_SELF'];
     $sec = "2";
     ?>
<head>
     <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
     <style>
          *{
               
               text-align: center;
               background-size: cover;
               background-repeat: no-repeat;
               font-family: "Times New Roman", Times, serif;
               font-size: x-large;
               font-weight: bold;
          }

     </style>
    <?php
    date_default_timezone_set('Europe/Amsterdam');
    $currentTime = date('H:i:s');


    $morning = "foto/morning.png";
    $afternoon = "foto/afternoon.png";
    $evening = "foto/evening.png";
    $night = "foto/night.png";


    if($currentTime >="06:00:00" && $currentTime <"12:00:00"){
          $backgroundimage = $morning;
          echo"<p>Goedemorgen :<p>".$currentTime."<p> Het is nu:<p>";
     }elseif($currentTime >="12:00:00" && $currentTime <"18:00:00"){
         $backgroundimage = $afternoon;
         echo"<p>Goedemorgen Het is nu:<p>".$currentTime;
    }elseif($currentTime >="18:00:00" && $currentTime <"00:00:00"){
         $backgroundimage = $evening;
         echo"<p>Goedemorgen Het is nu:<p>".$currentTime;
    }else{
         $backgroundimage = $night;
         echo"<p>Goedemorgen Het is nu:<p>".$currentTime;
    }
    
    echo"<h1>test</h1>"
    ?>
</head>
<body style="background-image: url(<?php echo $backgroundimage?>);">
</body>
</html>