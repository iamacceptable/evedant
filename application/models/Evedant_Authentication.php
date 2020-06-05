<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evedant_Authentication extends CI_Model {
	public function checkUsername($panelUserName){
		//TODO check if the userName exists
	}
	public function doLogin($ceredentials){
		//TODO check the ceredentials
	}
	public function forgotPassword($postValues){
		//TODO sets the OTP to coressponding User with flag up
	}
}
