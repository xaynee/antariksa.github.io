<?php 

require 'function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Xaynee</title>
    
</head>
<body>

<div class="ex">
<h1>Tulis Kata-Kata Indah Mu! </h1>

<form action="indexLyn.php" method="post">
    
        <label for="ultname"> <h3>Siapa nama orang yang ingin anda ucapi selamat ulang tahun?</h3> </label>
        <input type="text" name="ultname" id="ultname">

        <label for="ulttgl"> <h3>Kapan dia ber-ulang tahun?</h3> </label>
        <input type="text" name="ulttgl" id="ulttgl">

        <label for="ultucp"> <h3>Sampaikan ucapan mu kepada yang ber-ulang tahun!?</h3> </label>
        <input type="text" name="ultucp" id="ultucp">

        <label for="ultdoa"> <h3>Apa yang anda doa-kan kepada yang ber-ulang tahun?</h3> </label>
        <input type="text" name="ultdoa" id="ultdoa">
    
     <a href="indexLyn.php"> 
     <button type="submit" name="create" class="">Press Enter to Create</button>
     </a>
</form>
</div>

    
</body>
</html>