<!-- ย้ายมาที่นี่เเล้ว นะจ๊ะ -->
<?php 
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "password1234";
    $database = "php_colorfull09af_2";
    $port = 3306;

    mysqli_report(MYSQLI_REPORT_OFF);
    $connection = mysqli_connect($hostname, $username, $password, $database, $port);
    if (!$connection) {
        // echo "มันเชื่อมต่อไม่ได้";
        // die คล้ายกับ echo เลย
        die("เชื่อมต่อไม่ได้ " . mysqli_connect_error());
    }
    
?>