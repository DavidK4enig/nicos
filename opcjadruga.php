<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="zysk_lokaty">
        <br><br>
        opcja pierwsza:<br><br>
        <form method="POST" action="">
        kwota lokaty: <input type="text" name="e"><br>
        oprocentowanie: <input type="text" name="f"><br>
        okres dni: <input type="text" name="h"><br><br>
        <input type="submit" value="Oblicz" name='submitc'><br><br>
        <?php
    // oprocentowanie w skali roku to oprocentowanie nominalne
    // wzor na wysokosc raty:  | zrodlo: wzór opracowany przez uczniów
    // $wyniik to zysk lokaty       | trzeba okreslic
    // e to kwota lokaty            | okreslone
    // f to oprocentowanie          | okreslone
    // h to okres dni               | okreslone
       if(isset($_POST['submitc'])) {
        $e = $_POST['e'];
        $f = $_POST['f'];
        $h = $_POST['h'];
        $pf = (float)$f*0.01;
    // $trzy = (((float)$e*(1+((float)$f/100))-(float)$e)*(float)$h);
        $wyniikjeden = ((float)$e*(float)$pf)*((float)$h/365);
        echo $wyniikjeden;
       }
        ?>
        zlotych
    </div>
    <div class="wzor_zysk_lokaty">
        <br>
        <img src="wzorlokata.png" alt="https://polakoszczedza.pl/2018/04/jak-obliczyc-zysk-z-lokaty-wzor/">
    </div>
    <!-- <div class="zysk_lokaty_dwa">
        <br><br>
        opcja druga:<br><br>
        <form method="POST" action="">
        kwota lokaty: <input type="text" name="i"><br>
        oprocentowanie: <input type="text" name="j"><br>
        ilosc lokat: <input type="text" name="k"><br><br>
        <input type="submit" value="Oblicz" name='submitc'><br><br>
        <?php
    // oprocentowanie w skali roku to oprocentowanie nominalne
    // wzor na wysokosc raty:  | zrodlo: wzór opracowany przez uczniów
    // $wyniik to zysk lokaty       | trzeba okreslic
    // i to kwota lokaty            | okreslone
    // j to oprocentowanie          | okreslone
    // k to ilosc lokat          | okreslone
    //   if(isset($_POST['submitc'])) {
    //    $i = $_POST['i'];
    //    $j = $_POST['j'];
    //    $k = $_POST['k'];
    //    $wyniikdwa = (((float)$i*(1+((float)$j/100))-(float)$i)*(float)$k);
    //    echo $wyniikdwa;
    //   }
        ?>
        zlotych
    </div>
    <div class="wzor_zysk_lokaty_dwa">
        <br><br>
        <h3>a = ((i*(1+(j/100))-i)*k)<br><br>
        a to zysk z lokaty<br>
        i to kwota lokaty<br>
        j to oprocentowanie<br>
        k to ilosc lokat<br><br>
        </h3>
        wzór opracowany przez uczniów
    </div>  -->
</body>
</html>
