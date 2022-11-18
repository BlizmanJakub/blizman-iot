<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styleForm.css">
    <title>Kontaktny formular</title>
</head>
<body>  

<?php echo '<h2>Formular pre kontakotovanie zakaznikych oddeleni</h2>'; ?>
<div class="form">
<form method="post">  
    Meno: 
    <input type="text" 
            name="meno" 
            required
    >
    Priezvisko:
    <input type="text" 
            name="priezvisko" 
            required
    >
    <br><br>
    E-mail: 
    <input type="email" 
            name="email"
            required
    >
    Telefon: 
    <input type="text" 
            name="telefon"
    >
    <br><br>
    Jedna sa o nakup pre firmu?
    <br>
    Ano
    <input type="radio" 
            name="odpoved" 
            value="ano"
    >
    Nie
    <input type="radio" 
            name="odpoved" 
            value="nie"
    >
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
    <br><br>
    Poznamka: 
    <br>
    <textarea name="poznamka" 
            rows="5" 
            cols="40">
    </textarea>
    <br><br>
    <p class=upozornenie>Policka s cervenym ramcekom su povinne udaje!</p>
    <input type="submit" value="Odoslat">  
</form>
</div>
</body>
</html>