<?php 

for ($i = 0; $i <100; $i++){
    if($i % 2 === 0){
        continue;
    }
    echo "perulangan ke-$i ".PHP_EOL;
}

for ($i = 0; $i < 100; $i++) {
    echo $i . PHP_EOL;
   
    if ($i % 2 === 0) {
        continue;
    }
    $i++;
}


for ($counter = 0; $counter < 100; $counter++){
    if ($counter % 2 !== 0){
        continue;
    }
    echo "HEllo continue ke-$counter ".PHP_EOL;
}
?>