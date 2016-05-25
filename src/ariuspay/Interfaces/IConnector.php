<?php
namespace ariuspay\Interfaces;
interface IConnector{
    public function query($method,$data);
}
?>
