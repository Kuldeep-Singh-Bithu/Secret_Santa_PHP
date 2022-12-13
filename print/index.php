<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='../css/style.css' rel='stylesheet' type='text/css'>


</head>
<body>

<?php

date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/Y H:i:s a', time());
$an = date('Y', time());
echo "<h1> Secret Santa {$an} </h1>";
echo '<div id="head">' . $date . "</div>";

$csv = array();
if (!empty($_GET['lista'])) {


    $file_csv = $_GET['lista'];



    $lines = file($file_csv, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $key => $value) {
        $csv[$key] = str_getcsv($value);
    }

    $nrtel = array_unique(iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator($csv)), 0));

    shuffle($nrtel);

    $count_array = count($nrtel) - 1;
    for ($i = 0; $i < $count_array; $i++) {
        echo $nrtel[$i] . " - " . $nrtel[$i + 1] . "<span>{$i}</span><hr>";
    }
    echo $nrtel[$i] . " - " . $nrtel[0] . "<span>" . $i . "</span><hr>";

?>
    <p style="page-break-after:always;"></p>
    <div class="rand">
    <?php

    for ($i = 0; $i < $count_array; $i++) {
        echo '<div class="jumate"><img src="../img/copac.png" class="copac">' . "{$nrtel[$i]} <br>You are Secret Santa of<hr><h2> {$nrtel[$i + 1]}</h2><hr> Don't forget that the most beautiful gift is from the heart.<br><img class='copac_jos' src='../img/puncte.jpg'><h5>{$i}</h5></div>";
    }
    echo '<div class="jumate"><img src="../img/copac.png" class="copac">' . "{$nrtel[$count_array]} <br>You are Secret Santa of<hr><h2> {$nrtel[0]}</h2><hr> Don't forget that the most beautiful gift is from the heart.<br><img class='copac_jos' src='../img/puncte.jpg'><h5>{$count_array}</h5></div>";
} else {
    echo "Please enter vaild list";
}
    ?>


    </div>


    <div id="footer" onclick="printeaza()">
        <img src="../img/print.png">
    </div>

    <script>
        function printeaza() {
            window.print();
        }
    </script>
    </body>

</html>