<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/** application/libraries/MY_Form_validation **/

class MY_Form_validation extends CI_Form_validation 
{
	public function __construct()
    {
    	parent::__construct();
        $this->form_validation->CI =& $this;
    }
    public $CI;
}
