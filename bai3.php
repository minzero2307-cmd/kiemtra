<?php
function inHinhChuNhat($chieu_rong, $chieu_cao) {
    for ($i = 1; $i <= $chieu_cao; $i++) {
        for ($j = 1; $j <= $chieu_rong; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

echo "Hình chữ nhật 5x3:<br>";
inHinhChuNhat(5, 3);
?>