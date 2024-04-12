<?php

// $people = array("taro", "jiro", "saburo");
// var_dump($people);
// echo $people[1];

// $people = array(
//     "person1" => "taro",
//     "person2" => "jiro",
//     "person3" => "saburo",
// );
// var_dump($people);

// $people = [
//     [
//         "last_name" => "yamada",
//         "frist_name" => "taro",
//         "age" => 29,
//         "gender" => "men",
//     ],
//     [
//         "last_name" => "suzuki",
//         "frist_name" => "jiro",
//         "age" => 25,
//         "gender" => "men",
//     ],
//     [
//         "last_name" => "sato",
//         "frist_name" => "hanako",
//         "age" => 20,
//         "gender" => "women",
//     ],
// ];
// echo $people[0]["last_name"];

$people = [
    ["taro", 25, "men"],
    ["jiro", 20, "men"],
    ["hanako", 16, "women"],
];

foreach ($people as $person) {
    echo $person[0] . "(" . $person[1]. "歳" . $person[2] . ")";
    echo "<br/>";
}


?>