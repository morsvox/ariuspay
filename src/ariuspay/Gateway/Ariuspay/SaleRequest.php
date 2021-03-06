<?php
/*******************************************************************************
 ** GetCardRef Request Parameters
 * login	20/String	Merchant login name	Mandatory
 * cardrefid	20/String	Equals to card-ref-id obtained in Card Information Reference ID call during Card Registration stage	Mandatory
 * control	128/String	Checksum used to ensure that it is Merchant (and not a fraudster) that initiates the return request. This is SHA-1 checksum of the concatenation login + cardrefid + merchant_control.	Mandatory
 *******************************************************************************/
namespace ariuspay\Gateway\Ariuspay;
use \ariuspay\Gateway\Ariuspay\Exception as ariuspayGatewayAruispayException;
use \ariuspay\Gateway\Ariuspay\Request as Request;
class SaleRequest extends Request{
    public function __construct($d){
        parent::__construct([
            "operation" => "sale-form",
            "fields" => ["client_orderid","order_desc","card_printed_name","first_name","last_name","ssn","birthday","address1","city","state","zip_code","country","phone","cell_phone","email","amount","currency","credit_card_number","expire_month","expire_year","cvv2","ipaddress","site_url","purpose","control","redirect_url","server_callback_url"],
            "control" => ["endpoint","client_orderid","amount","email","merchant_control"],
            "data" => $d
        ]);
    }
}
?>
