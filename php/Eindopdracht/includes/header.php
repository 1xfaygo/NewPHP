<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html -->

<?php
echo '
<header>
        <img src="images/nba.png" alt="Header Image" width="auto" height="100px">
    <nav>
        <a href="index.php?pages=onderwerp1">Dallas Mavericks</a> -
        <a href="index.php?pages=onderwerp2">Los Angeles Lakers</a> -
        <a href="index.php?pages=onderwerp3">Golden State Warriors</a> 
    </nav>
</header>
';
?>
