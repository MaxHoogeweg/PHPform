<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<h1>Formulier</h1>
<form action="form.php" method="post">
    <label for="na">Name</label>
    <input type="text" id="na" name="na">
    <br>
    <br>
    <label for="hm">how many</label>
    <input type="number"   id="hm" name="hm" min="0">
    <br>
    <br>
    <label for="hob">Wilt u het in een hoorntje of beker</label>
    <select name="hob" id="hob">
        <option value="Hoorntje">Hoorntje</option>
        <option value="Bekertje">Bekertje</option>
    </select>

    <br>
    <br>
    <input value="Send" type="submit" name="bu">
    <br>
</form>

<?php
    foreach($order as $item => $value){
        echo $item . ' : ' . $value . '<br> <br>';
    }
?>


</body>

</html>
