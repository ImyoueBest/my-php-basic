<!-- // varible ตัวเเปร

<?php 
    $firstname = "Nattapong";
    $lastname = "Pailom";
    echo $firstname, " " ,  $lastname;


    $a = 10;
    $b = 15;
    $c = $a * $b;
    echo $c;
?>

<!-- Operater ชนิดข้อมูล -->

<?php 
    $number = 10;
    $grade = 5.55; 
    $message = "Francesco";
    $isCorrect = false;
    $isCorrect2 = true;
?>

<!-- <?php 
    $x = 2;
    $tripleX = $x * 3;
    $output = "3 เท่าของ $x เท่ากับ $tripleX";
    echo $output;
?> -->

<!-- <?php 
    $x = 10;
    $y = 5;
    
    $add = $x + $y;
    $minus = $x - $y;
    $multiply = $x * $y;
    $divide = $x / $y;
    $power = $x ** $y;
    $remainder = $x % $y;
    

    echo "<p>$add</p>";
    echo "<p>$minus</p>";
    echo "<p>$multiply</p>";
    echo "<p>$divide</p>";
    echo "<p>$power</p>";
    echo "<p>$remainder</p>";
?> -->

<!-- <?php 
    $x = 9;
    $x++;
    echo $x;

    echo "<br></br>";

    $y = 9;
    $y--;
    echo $y;

    echo "<br></br>";

    $c = 9;
    $c += 2;
    echo $c;

    echo "<br></br>";

    $z = 9;
    $z *= 2;
    echo $z;

    echo "<br></br>";

    $x = 10;
    $y = 5;
    var_dump($x > $y);

    echo "<br></br>";

    $x = 10;
    $y = 5;
    var_dump($x < $y);

    echo "<br></br>";

    $x = 10;
    $y = 5;
    var_dump($x >= $y);

    echo "<br></br>";

    $x = 10;
    $y = 5;
    var_dump($x == $y);

    echo "<br></br>";

    echo "<br>this is booleen</br>";

    echo "<br></br>";
// && คือ เเละ ในตรรกศาสตร์
    $p = true;
    $q = false;
    var_dump($p && $q);

    echo "<br></br>";

    // || คือ หรือ ในตรรกศาสตร์
    $p = false;
    $q = false;
    var_dump($p || $q);

    // !$ตามด้วยตัวเเปร มันจะกลับด้านกัน เหมือนกัน นิเสธ ในตรรกศาสตร์ 

    echo "<br></br>";

    $p = false;
    var_dump(!$p);
?>   -->

<!-- if else เงื่อนไข นั่นเองงงงงงง -->
<!-- <?php 
    $temperature = 5;
    $score = 75;
    
    if ($temperature >= 30) {
        echo "ร้อนฉิบหายเลย";
    } 
    else if ($temperature >= 20) {
        echo "สบายตัวมากเลยยอีดอก";
    }
    else if ($temperature >= 10) {
        echo "มันเย็นมากเยย";
    }
    else {
        echo "หนาวใจจะขาดเเย้ว";
    }


//  สามารถใช้งานเเยกกันได้เลย มันจะทำงานปกติ
    if ($score >= 50) {
        echo "<br>สอบผ่าน</br>";
    }

?> -->

<!-- for loop การวนซ้ำ -->
<!-- <?php 
    for ($i = 1; $i <=8; $i++) {
        echo $i;
    }
?> -->

<!-- for loop เเบบใช้การข้ามตัวที่เราไม่ต้องการจะให้เเสดงผล ใช้ continue -->
<!-- <?php
    for ($i = 10; $i <= 20; $i++) {
        if ($i % 3 == 0) {
            continue;
        }
        echo $i;
    }
?> -->

<!-- for loop เเบบใช้ braek คือการหยุดการทำงานถ้าเจอตัวที่ไม่ต้องการจะให้มันทำงานต่อ ที่เหลือหลังจากการเช็คเงื่อนไขเเล้ว มันจะหยุดทั้งหมดเลย -->
<!-- <?php 
    for ($i = 11; $i <= 30; $i++) {
        if ($i % 10 == 0) { // ถ้ามันเจอ ตัวเเรกที่มันหารลงตัว เเล้วมันจะหยุดการทำงานทันที ตัวที่เหลือมันจะไม่สนใจอีกเลย หรือไม่เเสดงผลนั่นเอง
            break;
        }
        echo $i;
    }
?> -->

<!-- for loop ร่วมกับ HTML นะจ๊ะ-->
<!-- <?php for ($i = 10; $i <= 100; $i += 10):?> 
    <h1><?php echo $i; ?></h1>
<?php endfor;?> -->


<!-- Function of php  -->
<!-- เเบบปกติ -->
<!-- <?php 
    // function totalprice() {
    //     $price = 120;
    //     $quantity = 5;
    //     $totalprice = $price * $quantity;
    //     echo $totalprice;
    // }

    // totalprice();
?> -->

<!-- function of php  -->
<!-- เเบบส่ง Paramiter -->
<!-- <?php 
    // function totalprice($price, $quantity) {
    //     $totalprice = $price * $quantity;
    //     echo "<p>$totalprice</p>";
    // }

    // $price1 = 200;
    // $quantity1 = 2;
    // totalprice($price1, $quantity1);

    // $price2 = 450;
    // $quantity2 = 2;
    // totalprice($price2, $quantity2);
?> -->


<!-- Function of php -->
<!-- เเบบตัวเลข return เก็บค่าไว้เฉยๆ-->
<!-- <?php 
    // function totalprice($price, $quantity) {
    //     $totalprice = $price * $quantity;
    //     return $totalprice;
    // }

    // $totalprice1 = totalprice(275, 3);
    // $totalprice2 = totalprice(450, 3);


    // echo "<h1>$totalprice1</h1>";
    // echo "<h2>$totalprice2</h2>";
?> -->

<!-- Array -->
<!-- <?php 
    $foods = ["อาหารเเมว", "อาหารหมา", "อาหารหมู"];
    echo $foods[1];
?> -->

<!-- Array การนับข้อมูล -->
<!-- ใช้ count ในการนับจำนวนของข้อมูล -->
<!-- <?php 
    $foods = ["อาหารเเมว", "อาหารหมา", "อาหารหมู"];
    echo count($foods);
?> -->

<!-- Array -->
<!-- เเบบที่มีจำนวนรายการเยอะๆ เราต้องใช้เเบบนี้นะครับ -->
<!-- <?php 
    $food = [
        "title" => "อาหารเเมว",
        "price" => 399
    ];

    $foodTitle = $food["title"];
    $foodPrice= $food["price"];

    echo "<h3>$foodTitle</h3>";
    echo "<h4>$foodPrice</h4>";
    
?> -->

<!-- Array -->
<!-- <?php 
    $foods = [
        [
            "title" => "อาหารหมา",
            "price" => 250
        ],
        [
            "title" => "อาหารกระต่าย",
            "price" => 300
        ]

        ];

        echo $foods[1]["price"];
?> -->

<!-- Array for loop -->
<!-- ยากอยุ่หน่อยหนึ่ง -->
<!-- <?php 
    $foods = [
        [
            "title" => "อาหารหมา",
            "price" => 250
        ],
        [
            "title" => "อาหารกระต่าย",
            "price" => 300
        ]

        ];

    //     for ($i = 0; $i < count($foods); $i++) {
    //         $food = $foods[$i];
    //         echo "<h2>$food[title]</h2>";
    //         echo "<p>$food[price]</p>";
    // }

    // foreach ($foods as $food) {
    //     echo "<h2>$food[title]</h2>";
    //     echo "<p>$food[price]</p>";
    // }
    
?> -->

<!-- การใช้งาน foreach ร่วมกับ HTML นั่นเองงง ต้องใช้ความเข้าใจหน่อยนะจ๊ะ -->
<!-- <?php  foreach ($foods as $food): ?>
    <div>
        <h1> <?php echo $food["title"]; ?> บาท </h1>  
            <p>ราคา = <?php echo $food["price"]; ?>บาท</p>
             
    </div>
<?php endforeach; ?> -->
