<?php
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");


    $lita = new Mahasiswa("H1101191058", "Lita Novitasari", "2001-11-09", "Wanita");
    $vidita = new MahasiswaBaru("H1101191044", "Vidita Reka", "2001-11-04", "Wanita", 1101);

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php echo "<p>Hello World</p>"; ?>
    
    <?php
        $lita->tampilkanAngkatan();
        echo "<br>";
        $vidita->tampilkanAngkatan();
        echo "<br>";
        echo "<br>";
        $lita->tampilkanUmur();
        echo "<br>";
        $vidita->tampilkanUmur();
    ?>
</body>
</html>