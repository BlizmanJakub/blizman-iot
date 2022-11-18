<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8" />
    <title>Kontaktny formular</title>
</head>
<body>  

<?php echo '<h2>Formular pre kontakotovanie zakaznikych oddeleni</h2>'; ?>

<form method="post">  
    Meno: <input type="text" name="name" value="<?php echo $name;?>">
    <br><br>
    E-mail: <input type="email" name="email" value="<?php echo $email;?>">
    <br><br>
    Telefon: <input type="text" name="website" value="<?php echo $website;?>">
    <br><br>
    Jedna sa o nakup pre firmu?
    <input type="radio" name="odpoved" <?php if (isset($odpoved) && $odpoved=="ano") echo "checked";?> value="">Ano
    <input type="radio" name="odpoved" <?php if (isset($odpoved) && $odpoved=="nie") echo "checked";?> value="viac men">Nie
    <br><br>
    Ktore oddelenie chcete kontaktovat? <input type="text" id="oddelenie" name="oddelenie" list="oddelenia">
        <datalist id="oddelenia">
            <option value="Zakaznicka podpora">
            <option value="Reklamacne oddelenie">
            <option value="Logisticke oddelenie">
            <option value="Sklad">
        </datalist>
    <br>
    Poznamka: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    <input type="submit" value="Odoslat">  
</form>

</body>
</html>