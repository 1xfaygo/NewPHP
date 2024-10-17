<html>
<link rel="stylesheet" href="style.css"> 
<body>

<?php
// Variabelen voor foutmeldingen initialiseren
$naamError = $emailError = "";
$veilige_naam = $email = "";

// Check of het formulier verzonden is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Naam ophalen en ontsmetten
    if (empty($_POST['name'])) {
        $naamError = "* Name is required"; // Foutmelding als de naam leeg is
    } else {
        $naam = $_POST['name'];
        $veilige_naam = htmlspecialchars($naam, ENT_QUOTES, 'UTF-8');
        // Extra validatie voor alleen letters en spaties
        if (!preg_match("/^[a-zA-Z ]*$/", $veilige_naam)) {
            $naamError = "* Ongeldige naam. Alleen letters en spaties zijn toegestaan.";
        }
    }

    // Email ophalen en ontsmetten
    if (empty($_POST['email'])) {
        $emailError = "* Email is required"; // Foutmelding als de email leeg is
    } else {
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    }

    // Als alles goed is ingevuld, toon de veilige invoer
    if (empty($naamError) && empty($emailError)) {
        echo "Veilige invoer<br>";
        echo "Naam: " . $veilige_naam . "<br>";
        echo "Email: " . $email;
    }
    else{
        echo"Ongeldige invoer";
    }
}
?>




<!-- Formulier voor het invoeren van de naam en email -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
    Naam: <input type="text" name="name" value="<?php echo $veilige_naam; ?>">
    <div class="error" ><?php echo $naamError;?></div>
    Email: <input type="text" name="email" value="<?php echo $email?>">
    <div class="error" ><?php echo $emailError;?></div>
    <input type="submit">
</form>

</body>
</html>
