<?php
// $pattern = '/[a-z]/';
// $text = 'This is a Sample Text.';

// if (preg_match($pattern, $text)) {
//     echo "Huruf kecil ditemukan!";
// } else {
//     echo "Tidak ada huruf kecil";
// }

// $pattern='/[0-9]+/'; //Cocokkan huruf kecil
// $text='There are 123 apples';

// if ([preg_match($pattern, $text, $matches)]) {
//     echo "Cocokkan: ".$matches[0];
// } else {
//     echo "Tidak ada yang cocok!";
// }

// $pattern='/apple/'; //Cocokkan huruf kecil
// $replacement='banana';
// $text='I like apple pie';
// $new_text= preg_replace($pattern, $replacement, $text);
// echo $new_text; //Output: "I like banana opie"

$pattern='/[o]{1,3}/'; //Cocokkan huruf kecil
$text='god is good.';
if ([preg_match($pattern, $text, $matches)]) {
    echo "Cocokkan: ".$matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>