<?php 
for($i =1 ; $i <= 10; $i++) {
    echo"ini adalah loop ke-$i".PHP_EOL;
}

for($i=100; $i>=10; $i--) {
    echo "ini adalah loop mundur ke-$i".PHP_EOL;
}

//penulisan kedua
for ($counter = 1; $counter <= 10; $counter++): //pake titik2
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
endfor;
?>