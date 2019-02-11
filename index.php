<?php
    if(count($_COOKIE) > 0) {
        header('location: myHoroscope.php');
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="myHoroscope.php" method="post">
        <h4>Förnamn: <input type="text" name="firstName"> </h4>
        <h4>Efternamn: <input type="text" name="lastName"></h4>
        <h4>Personnummer: <input type="text" name="birthDate" value="ÅÅMMDD"></h4>
        <input type="submit" value="Spara i Cookie">
    </form>



    
</body>
</html>
