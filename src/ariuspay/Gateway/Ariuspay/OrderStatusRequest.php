<?php
/*******************************************************************************
 ** Recurrent Payment request parameters
 * login	20/String	Merchant login name	Mandatory
 * client_orderid	  Merchant order identifier of the transaction for which the status is requested
 * orderid Order id assigned to the order by Arius
 * by-request-sn Serial number assigned to the specific request by Arius. If this field exist in status request, status response return for this specific request.
 * control	128/String	Checksum used to ensure that it is Arius (and not a fraudster) that initiates the callback for a particular Merchant. This is SHA-1 checksum of the concatenation login + client-order-id + paynet-order-id + merchant-control. See Order Status API call authorization through control parameter for more details about generating control checksum.
 *******************************************************************************/
namespace ariuspay\Gateway\Ariuspay;
use \ariuspay\Gateway\Ariuspay\Exception as ariuspayGatewayAruispayException;
use \ariuspay\Gateway\Ariuspay\Request as Request;
class OrderStatusRequest extends Request{
    public function __construct($d){
        parent::__construct([
        	"endpoint" => "1056",
            "operation" => "status",
            "fields" => [
				"login","client_orderid","orderid","by-request-sn","control"
            ],
            "control" => ["login","client_orderid","orderid","merchant_control"],
            "data" => $d
        ]);
    }
}
?>
