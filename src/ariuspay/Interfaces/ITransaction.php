<?php
namespace ariuspay\Interfaces;
interface ITransaction{
    public function call();
    public function check();
    public function cancel();
}
?>
