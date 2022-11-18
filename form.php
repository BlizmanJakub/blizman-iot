<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8" />
    <title>Kontaktny formular</title>
</head>
<body>  

<?php echo '<h2>Formular pre kontakotovanie zakaznikych oddeleni</h2>'; ?>

<form method="post">  
    Meno: 
    <input type="text" 
            name="meno" 
            required
    >
    <br><br>
    E-mail: 
    <input type="email" 
            name="email"
            required
    >
    <br><br>
    Telefon: 
    <input type="text" 
            name="telefon"
    >
    <br><br>
    Jedna sa o nakup pre firmu?
    <input type="radio" 
            name="odpoved" 
            value="ano"
    >Ano

    <br>
    <input type="radio" 
            name="odpoved" 
            value="nie"
    >Nie
    <br><br>
    Ktore oddelenie chcete kontaktovat?
    <input type="text" 
            id="oddelenie" 
            name="oddelenie" 
            list="oddelenia"
            required
    >
        <datalist id="oddelenia">
            <option value="Zakaznicka podpora">
            <option value="Reklamacne oddelenie">
            <option value="Logisticke oddelenie">
            <option value="Sklad">
        </datalist>
    <br>
    Poznamka: 
    <textarea name="poznamka" 
            rows="5" 
            cols="40">
    </textarea>
    <br><br>
    <input type="submit" value="Odoslat">  
</form>

</body>
</html>