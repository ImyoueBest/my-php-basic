<?php require("helpers/db.php");?>

<?php 
    $searcTitle = " ";
    $searchValue = " ";
    if (isset($_GET["search"])) {
        $searchTitle = "ค้นหา \ "($_GET['search']);" | ";
        $searchValue = $_GET["search"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $searchTitle; ?> Colotfull 09AF</title>
</head>
<body>
    <div>
        <?php 
        // isset คือการเช็คว่าข้างใจ (isset($_...["..."])) { } ว่ามีอยู่จริงมั้ย หากมี มันจะคืนค่าเป็น true หากใช้ var_dump
        $sql = "SELECT * FROM color ";
        if (isset($_GET["search"])) {
            // $search = $_GET["search"];
            $search = mysqli_real_escape_string($connection, $_GET["search"]); // mysqli_real_escape_string คือการซ่อนการค้นหา ให้มีความปลอดภัยมากขึ้น
            $sql .= "WHERE title LIKE '%$search%' ";
        }
            $sql .= "ORDER BY id DESC";
            $result = mysqli_query($connection, $sql);
            $rows = mysqli_fetch_all($resultม, MYSQLI_ASSOC);
            
        ?>
        <form>
            <p>
                <input type="search" name="search" value="<?php echo  $searchValue; ?> >
                <button type="sumit">ค้นหา</button>
            </p>
        </form>
        <!-- ดูขอบเขตให้ดีๆ บอกตัวเองนี่เเหละ -->
    <h3>พบสี <?php echo count($rows); ?> รายการ</h3>

        <?php foreach ($rows as $row): ?>
        <div>
            <h4><?php echo $row["title"]; ?></h4>
            <p><?php echo $row["code"]; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

<?php mysqli_close($connection); ?>


<!-- Connect to MySQL -->
<!-- <?php 
//     require("helpers/db.php");

//     $sql = "SELECT * FROM color";
//     $result = mysqli_query($connection, $sql);
//     $rows = mysqli_fetch_all($resultม, MYSQLI_ASSOC);

//     foreach ($rows as $row) {
//         echo "<h2>$row[title]</h2>";
//         echo "<h3><$row[code]</h3>";
//     }

// // ต้องปิดการทำงานด้วย นะจ๊ะ
//     mysqli_close($connection);
?> -->

<!-- เราจะไปสร้าง file ใหม่ เพื่อเก็บ connection ไว้นั่นเอง -->