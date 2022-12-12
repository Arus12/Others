<?php
$csv = explode("\n", file_get_contents("flights.csv"));
foreach($csv as $row){
    $item = str_getcsv($row, ";");
    $data[] = [
        "type" => $item[0],
        "date" => $item[1],
        "time" => $item[2],
        "destination" =>  $item[3]
    ];
}
print(json_encode($data));
?>