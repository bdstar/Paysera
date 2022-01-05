<?php
use MyApp\Model\Task;
use MyApp\Controller\TaskController;

require_once realpath("vendor/autoload.php");

$model = new Task();
//echo $model->read();
$controller = new TaskController();

$JPY = 129.53;
$USD = 1.1497;
$commission = 1000;
$percentage = 0.3;

$filename = isset($argv[1]) ? $argv[1] : "input.csv";
$file = fopen($filename,"r");

while(!feof($file))
{
    $data = fgetcsv($file);
    
    $date = isset($data[0]) ? $data[0] : "2020-01-01";
    $identificator = isset($data[1]) ? $data[1] : "1";
    $type = isset($data[2]) ? $data[2] : "private";
    $operation = isset($data[3]) ? $data[3] : "withdraw";
    $amount = isset($data[4]) ? $data[4] : "0";
    $currency = isset($data[5]) ? $data[5] : "EUR";

    $EUR = 1;
    switch ($currency) {
        case 'JPY':
            $EUR = $amount/$JPY; 
            break;
        case 'USD':
            $EUR = $amount/$USD;
            break;
        default:
            $EUR = $amount;
            break;
    }
    $EUR = number_format((($EUR - $commission) * $percentage),2) ;
    echo "<br>".$EUR;
}

fclose($file);
?>