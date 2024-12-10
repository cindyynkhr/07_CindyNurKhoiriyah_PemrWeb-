<?php
$loremIpsum = "Lorem ipsum dolor sit amet constectur adipisicing elit. 
    voluptatem reprehendrit nobis veritatis commodi fugiat molestias impedit
    unde ipsum voluptatum, corupti minus sit excepturi nostrum quisquam? 
    quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang Karakter: ".strlen($loremIpsum)."<br>";
echo "Panjang Kata: ".str_word_count($loremIpsum)."<br>";
echo "<p>".strtoupper($loremIpsum)."</p>";
echo "<p>".strtolower($loremIpsum)."</p>";
?>