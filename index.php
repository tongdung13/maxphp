
<form method="post">
    <input type="text" name="nhap" placeholder="mang1" >
    <input type="text" name="nhap" placeholder="mang2"/>
    <input type="submit" value="check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mang = $_POST["nhap"];
    $array = explode(",",$mang);
    $max = $mang[0][0];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($max < $array[$i][$j]) {
                $max = $array[$i][$j];
            }
        }
    }
    echo $max;

}