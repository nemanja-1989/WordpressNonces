<?php 
	
	/* 
	Plugin name: Wordpress Nonces
	Plugin URI:
	Description:
	Author: 
	AuthorURI:
	Version:
	
	
	*/
	require_once "interface/nonceInterface.php";
	require_once "classes/formHelper.class.php";
	
	class Nonce implements INonce{

		public function __construct() {
			add_action("admin_menu", [$this, 'addMenu']);
		}
		
		public function wpNonceField() {
			
			FormHelper::openFormTag("#", "POST");
				wp_nonce_field("nonce_field", "_wpnonce"); 
			FormHelper::input("submit", "submit", "SUBMIT");
			FormHelper::closeFormTag();
			$this->wpVerifyNonces();

		}
		
		public function wpVerifyNonces() {
				
			if(!isset($_POST["_wpnonce"]) || !wp_verify_nonce($_POST["_wpnonce"], "nonce_field")) {
				// echo "Your token not verified!";
				return;
			}else {
				echo "Congratulations!";
			}
		}

		public function addMenu() {

			add_menu_page("Wordpress Nonces", "Wordpress Nonces", 4, "wordpress-nonces", [$this, "wpVerifyNonce"]);
		}

		public function wpVerifyNonce() {
			return $this->wpNonceField();
		}
	}

	$n = new Nonce();

	 