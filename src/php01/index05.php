<?php
// for ($i=1; $i<=5; $i++){
//     echo $i*2 . "<br/>";
// }

// $i = 1;
// while ($i <= 100) {
//     if ($i%3 == 0) {
//         $i++;
//         continue;
//     }
//     if ($i == 20) {
//         break;
//     }
//     echo $i . "<br/>";
//     $i++;
// }

// $i = 0;
// do {
//     echo "num =" . $i . "<br/>";
//     $i++;
// } while ($i < 3);

// FizzBuzz
// for ($i=1; $i<=50; $i++) {
//     if ($i%15 == 0) {
//         echo "FizzBuzz" . "<br/>";
//     } elseif ($i%5 == 0) {
//         echo "Buzz" . "<br/>";
//     } elseif ($i%3 == 0) {
//         echo "Fizz" . "<br/>";
//     } else {
//         echo $i . "<br/>";
//     }
// }

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "●";
    }
    echo "<br/>";
}

?>