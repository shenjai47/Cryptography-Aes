<?php
class AES {
	protected $data;
	protected $key;
    protected $method;
	protected $options = 0;
	function __construct($data = null, $key = null, $blocksize = null, $mode = 'CBC') {
        $this->setdata($data);
        $this->setkey($key);
        $this->setmethode($blocksize, $mode);
    }
	public function setdata($data) {
        $this->data = $data;
    }
	public function setkey($key) {
        $this->key = $key;
    }
	public function setmethode($blocksize, $mode = 'CBC') {
        if($blocksize==128 && in_array('', array('XTS','CFB','CTR','ECB','OFB'))){
            $this->method=null;
             throw new Exception('Invlid block size and mode combination!');
        }
        $this->method = 'AES-' . $blocksize . '-' . $mode;
    }
	public function validateParams() {
        if ($this->data != null &&
                $this->method != null ) {
            return true;
        } else {
            return FALSE;
        }
    }
	public function encrypt() {

        if ($this->validateParams()) { 
            return trim(openssl_encrypt($this->data, $this->method, $this->key, $this->options));
        } else {
            throw new Exception('Invlid params!');
        }
    }
	public function decrypt() {
        if ($this->validateParams()) {
           $ret=openssl_decrypt($this->data, $this->method, $this->key, $this->options);
          
           return   trim($ret); 
        } else {
            throw new Exception('Invlid params!');
        }
    }
}
?>