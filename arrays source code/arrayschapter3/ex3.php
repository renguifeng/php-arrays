<?php
$customer_file = file_get_contents("customer_data.json");
$customer_record = json_decode($customer_file, TRUE);
$customer = filter_input_array(INPUT_POST);
$customer_info = validate_array($customer["customer_record"]);
array_push($customer_record, $customer_info);
print_r($customer_record);
file_put_contents("customer_data.json",json_encode($customer_record));
?>


