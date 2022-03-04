<?php
// declare(strict_types=1);

// $list=[1,2,3,4,5,6,8,9,10];
 

// function map ($array , $func) {
//     $newList =[];
//     foreach ($array as $key => $item) {
//         $newList[$key] = $func($item);
//     }
//     return $newList;
// }

// function doS($num) {
//     return $num * 2;
// }

// function doS2($num) {
//     return $num ** 2; 
// }
// var_dump(map($list , 'doS2'));
// var_dump (map($list , 'doS'));


// $c = 5;
// $sum = fn($a,$b) => $a+$b+$c;
// var_dump($sum(1,2));
// var_dump($_SERVER);


// setcookie(
//     'site_name',
//     'Rocket',
//     [
//         'domain' => 'localhost',
//         'expires' => time() + 3600,
//         'httponly' => true,
//         'path' => '/',
//     ]
// )

// var_dump(isset($_COOKIE['site_name']));


// session_start([
// 'name' => 'rocketir_session'
// ]);
// Unset
// $_SESSION['auth'] = true;
// var_dump($_SESSION);

// unset($_SESSION['auth']);
// var_dump($_SESSION);

// Counter

// session_start([
//     'name' => 'rocketir_session'
//     ]);

// if(isset($_SESSION['counter'])) {
//     $_SESSION['counter']++;
//     echo '1';
// } else {
//     $_SESSION['counter']=0;
//     echo '2';
// }
// var_dump($_SESSION);





?>
<!-- <html>
    <head>

    </head>
    <body>
        <form action="\upload.php" enctype="multipart/form-data" method="POST">
            <input type="file" name="image">
            <button type="submit">upload</button>
        </form>
    </body>
</html> -->