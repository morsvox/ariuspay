<?php
namespace ariuspay\Gateway;
use \ariuspay\ariuspay as ariuspay;
use \ariuspay\Gateway\Parameters as Parameters;
class HTTPResponse extends Parameters{
    protected $_request;
    protected $_url;
    public function __construct($d){
        $d["fields"] = isset($d["fields"])?$d["fields"]:[
            "type","status","card-ref-id","serial-number",
            "paynet-order-id","merchant-order-id",
            "error-message","error-code",
            "card-printed-name","expire-year","expire-month",
            "bin","last-four-digits","redirect-url"
        ];
        parent::__construct($d["fields"],$d["data"]);
        $this->_url = $d["url"];
        $this->_request = $d["request"];
    }
    public function getRedirectUrl(){
        if(!$this->isRedirect()) throw new ariuspayGatewayAruispayException("No redirect is required.",500);
        return $this->_params["redirect-url"];
    }
    public function isRedirect(){
        return isset($this->_params["redirect-url"])&&!empty($this->_params["redirect-url"]);
    }
    public function __toString(){
        return "RESPONSE: ".ariuspay::obj2str($this->_params);
    }
    public function __returnParams(){
        return ($this->_params);
    }
}
?>
