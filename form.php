<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styleForm.css">
    <title>Kontaktny formular</title>
</head>
<body>  

<h2 class=nadpis>Formular pre kontakotovanie zákaznickych oddelení</h2>
<div class="form">
<form method="post">  
    Meno: 
    <input type="text" 
            name="meno" 
            placeholder="Sem zadajte meno"
            required
    >
    Priezvisko:
    <input type="text" 
            name="priezvisko"
            placeholder="Sem zadajte priezvisko"
            required
    >
    <br><br>
    E-mail: 
    <input type="email" 
            name="email"
            placeholder="Sem zadajte váš e-mail"
            required
    >
    Telefón: 
    <input type="text" 
            name="telefon"
            placeholder="Sem zadajte tel.č."
    >
    <br><br>
    Jedná sa o nákup pre firmu?
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
    Ktoré oddelenie chcete kontaktovať?
    <input type="text" 
            id="oddelenie" 
            name="oddelenie" 
            list="oddelenia"
            placeholder="Vyberte jedno z oddelení"
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
            cols="40"
            placeholder="Sem napíšte detaily ohľadom vašej požiadavky">
    </textarea>
    <br><br>
    <p class=upozornenie>Polia s červeným rámčekom sú povinné údaje!</p>
    <input type="submit" name="submit" value="Odoslat">  
</form>
</div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $meno = "Meno:".$_POST["meno"]."";
    $priezvisko = "Priezvisko:".$_POST["priezvisko"]."";
    $email = "E-mail".$_POST["email"]."";
    $tel = "Telefon:".$_POST["telefon"]."";
    $radio = "Nakup na firmu:".$_POST["odpoved"]."";
    $oddelenie = "Oddelenie pre kontaktovanie:".$_POST["oddelenie"]."";
    $poznamka = "Poznamka:".$_POST["poznamka"]."";

    $file = fopen("odpovede.txt", "a");
    fwrite($file, $meno);
    fwrite($file, $priezvisko);
    fwrite($file, $email);
    fwrite($file, $tel);
    fwrite($file, $radio);
    fwrite($file, $oddelenie);
    fwrite($file, $poznamka);

    fclose($file);
}
?>