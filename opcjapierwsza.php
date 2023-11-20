<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wysokosc_raty">
        <br><br>
        opcja pierwsza:<br><br>
        <form method="POST" action="">
        kwota udzielonego kredytu: <input type="text" name="A"><br>
        oprocentowanie w skali roku: <input type="text" name="b"><br>
        liczba miesiecy: <input type="text" name="m"><br>
        liczba rat: <input type="text" name="n"><br><br>
        <input type="submit" value="Oblicz pierwszym wzorem" name='submita'><br><br>
        <?php
    // oprocentowanie w skali roku to oprocentowanie nominalne
    // wzor na wysokosc raty: R=A*(1+(b/m)^n)*(1+(b/m)-1)/[(1+(b/m)^n)-1] | zrodlo: wzoropcjapierwsza.png
    // jeden to wysokosc_raty         | trzeba okreslic
    // A to kwota_udzielonego_kredytu | okreslone
    // b to oprocentowanie_nominalne  | okreslone
    // m to liczba_miesiecy           | okreslone
    // n to liczba_rat                | okreslone
       if(isset($_POST['submita'])) {
        $A = $_POST['A'];
        $b = $_POST['b'];
        $m = $_POST['m'];
        $n = $_POST['n'];
        $drugien = (float)$n*0.01;
        $jeden = (float)$A*(1+((float)$b/(float)$m)*(float)$drugien*(float)$drugien)*(1+((float)$b/(float)$m)-1)/((1+((float)$b/(float)$m)*(float)$drugien*(float)$drugien)-1);
        echo $jeden;
       }
        ?>
        zlotych
    </div>
    <div class="wzorjeden">
        <br>
    <img src="wzoropcjapierwsza.png" alt="wzor na wysokosc raty">
    </div>
    <div class="wysokosc_raty_dwa">
        <br><br>
    <input type="submit" value="Oblicz drugim wzorem" name='submitb'><br><br>
        <?php
    // oprocentowanie w skali roku to oprocentowanie nominalne
    // wzor na wysokosc raty:  | zrodlo: wzór opracowany przez uczniów
    // dwa to wysokosc_raty           | trzeba okreslic
    // b to kwota_udzielonego_kredytu | okreslone
    // c to oprocentowanie_nominalne  | okreslone
    // d to ilosc_rat                 | okreslone
       if(isset($_POST['submitb'])) {
        $b = $_POST['b'];
        $c = $_POST['m'];
        $d = $_POST['n'];
        $dwa = (float)$b*(1+((float)$c/100))*(float)$d;
        echo $dwa;
       }
        ?>
        zlotych
    </div>
    </div>
    <div class="wzordwa">
        <br>
        <h3>a = b*(1+(c/100))*d<br><br>
        a to wysokosc jednej raty<br>
        b to kwota udzielonego kredytu<br>  
        c to oprocentowanie nominalne (roczne)<br>
        d to ilość rat<br><br></h3>
        wzór opracowany przez uczniów
    </div>
</body>
</html>