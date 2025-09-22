<?php

function incrementStatic()
{
    static $counter = 1; // static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}


incrementStatic();
incrementStatic();
incrementStatic();
incrementStatic();
incrementStatic();
incrementStatic();
incrementStatic();
incrementStatic();


//klo ga make static
function increment()
{
     $counter = 1; // tidak menggunakan static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}
increment();
increment();
increment();
increment();
increment();