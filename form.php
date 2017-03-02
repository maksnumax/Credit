<?php
spl_autoload_register(function ($class_name) {
    require_once 'Class/' . $class_name . '.php';
});
require_once('setting.php');

$NewForm = new NewPay($SystemID, $Secret);
$phone = form_credit_normalize_phone($_POST['phone']);
$CustomerInfo = new CustomerInfo($_POST['customer_email'], $phone);
$filename = 'orderid.txt';
$fileorder = fopen($filename, 'r+');
$orderid = fgets($fileorder);
fclose($fileorder);
$CreditLink = $NewForm->credit_interactive($orderid, $_POST['price'], $CustomerInfo);
$file = fopen($filename, "w");
$orderid++;
fwrite($file, $orderid);
fclose($file);
print_r($CreditLink);

function form_credit_normalize_phone($phone)
{
    $numbers_only_phone = preg_replace('/\D+/', '', $phone);
    $phone = $numbers_only_phone;
    $first_num = substr($numbers_only_phone, 0, 1);
    if ($first_num == 8) {
        $phone = substr_replace($numbers_only_phone, '7', 0, 1);
    }
    $phone = '+' . $phone;
    return $phone;
}

?>
