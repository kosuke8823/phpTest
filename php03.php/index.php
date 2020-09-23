<?php
function times2($num){
    return $num * 2;
}
echo times2(5);
echo"<br>";
// echo times2(5).PHP_EOL;

// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sumab($a,$b){
    return $a + $b;
}
echo sumab(2,5);
echo"<br>";
// echo sumab(2,5);

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));
echo"<br>";
function max_array($arr) {
    // とりあえず配列の最初の要素を1番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a) {
    //どうしたらいいかわからない・・・・
    }

    if($a>$max_number){
        $max_number=$a;
    }
    return $max_number;
}   
    echo max_array($arr=array(8,4,5,3,9,1,10,14,257));
    echo"<br>";
    