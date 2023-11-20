<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="zysk_raty">
        <br><br>
        zysk z raty:<br><br>
        <form method="POST" action="">
        na ile zlotych rata: <input type="text" name="e"><br>
        oprocentowanie raty: <input type="text" name="f"><br>
        liczba rat: <input type="text" name="h"><br><br>
        <input type="submit" value="Oblicz" name='submitc'><br><br>
        <?php
    // oprocentowanie w skali roku to oprocentowanie nominalne
    // wzor na wysokosc raty:  | zrodlo: wzór opracowany przez uczniów
    // $trzy to zysk_raty               | trzeba okreslic
    // e to ilosc zlotych w racie       | okreslone
    // f to oprocentowanie raty         | okreslone
    // h to ilosc_rat                   | okreslone
       if(isset($_POST['submitc'])) {
        $e = $_POST['e'];
        $f = $_POST['f'];
        $h = $_POST['h'];
        $trzy = (((float)$e*(1+((float)$f/100))-(float)$e)*(float)$h);
        echo $trzy;
       }
        ?>
        zlotych
    </div>
    <div class="wzorzyskraty">
        <br><br>
        <h3>a = ((e*(1+(f/100))-e)*h)<br><br>
            a to zysk z raty<br>
            e to ilosc zlotych w racie<br>
            f to procent raty<br>
            h to ilosc rat<br><br>
        </h3>
            wzór opracowany przez uczniów
    </div>
</body>
</html>
