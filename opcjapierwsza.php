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
        ilosc rat w roku: <input type="text" name="m"><br>
        calosciowa liczba rat: <input type="text" name="n"><br><br>
        <input type="submit" value="Oblicz pierwszym wzorem" name='submita'><br><br>
        <?php
    // oprocentowanie w skali roku to oprocentowanie nominalne
    // wynikjeden na wysokosc raty: R=A*(1+(b/m)^n)*(1+(b/m)-1)/[(1+(b/m)^n)-1] | zrodlo: wzoropcjapierwsza.png
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
        $drugieb = (float)$b*0.01;
        $jeden = (float)$A*(1+((float)$drugieb/(float)$m)**(float)$n); // A*(1+(b/m)^n) jako czesc1
        $dwa = (1+((float)$drugieb/(float)$m)-1); // (1+(b/m)-1) jako czesc2
        $trzy = [(1+((float)$b/(float)$m)**(float)$n)-1]; // [(1+(b/m)^n)-1] jako czesc3
        $wynikjeden = ((float)$jeden*(float)$dwa)/(float)$trzy; // R=[(czesc1)*(czesc2)]/(czesc3)
        echo $wynikjeden;
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
        opcja druga:<br><br>
        <form method="POST" action="">
        kwota udzielonego kredytu: <input type="text" name="o"><br>
        oprocentowanie w skali roku: <input type="text" name="p"><br>
        ilosc rat w roku: <input type="text" name="r"><br>
        calosciowa liczba rat: <input type="text" name="s"><br><br>
    <input type="submit" value="Oblicz drugim wzorem" name='submitb'><br><br>
        <?php
    // oprocentowanie w skali roku to oprocentowanie nominalne
    // wzor na wysokosc raty:  | zrodlo: wzoropcjadruga.png
    // wynikdwa to wysokosc_raty      | trzeba okreslic
    // o to kwota_udzielonego_kredytu | okreslone
    // p to oprocentowanie_nominalne  | okreslone
    // r to ilosc_rat_w_roku          | okreslone
    // s to calosciowa_liczba_rat     | okreslone
       if(isset($_POST['submitb'])) {
        $o = $_POST['o'];
        $p = $_POST['p'];
        $drugiep = (float)$p*0.01;
        $r = $_POST['r'];
        $s = $_POST['s'];
        $gora = ((float)$o*(float)$drugiep);
        $dol = (float)$r*(1-(((float)$r)/((float)$r+(float)$drugiep))**(float)$s);
        $wynikdwa = (float)$gora/(float)$dol;
        echo $wynikdwa;
       }
        ?>
        zlotych
    </div>
    </div>
    <div class="wzordwa">
        <br>
    <img src="wzoropcjadruga.png" alt="drugi wzor na wysokosc raty">
    </div>
</body>
</html>