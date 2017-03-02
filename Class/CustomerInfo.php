<?php


class CustomerInfo
{
    public $email;
    public $phone;
    public function __construct($email = "credit.nacta@yandex.ru",$phone="+79600000000")
    {
        $this->email = $email;
        $this->phone = $phone;
    }


}