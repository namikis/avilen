<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$obj = $_POST['pattern'];

// ここに処理を記述してください。
$html =  "
            <form action='/' method='POST'>
                <input type='hidden' name='pattern' value='val_json'>
                <input type='submit' value='パターンを送信'>
            </form>";


$input = [
    [
        "num" => 3,
        "text" => "Fizz"
    ],
    [
        "num" => 5,
        "text" => "Buzz"
    ],
    [
        "num" => 6,
        "text" => "six"
    ]
];


$json = json_encode($input);
$output = str_replace("val_json", $json, $html);
echo($output);


$obj = json_decode($obj, true);

echo "出力結果:";

$flag = 0;
for($i = 1; $i < 31; $i++){
    for($j = 0; $j < count($obj); $j++){
        if($i % $obj[$j]["num"] == 0){
            if($flag == 0){
                echo ", " . $obj[$j]["text"];
            }else{
                echo " " . $obj[$j]["text"];
            }
            $flag = 1;
        }
    }
    if($flag == 0){
        if($i > 1){
            echo ", " . $i;
        }else{
            echo $i;
        }
    }
    $flag = 0;
}

?>