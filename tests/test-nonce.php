<?php
/**
 * 
 *
 * @package Wordpress_Nonce
 */

class Test_Nonce extends WP_UnitTestCase {

	
	public function test_construct() {
        
        $nonce = new Nonce();
        $instatiated = has_action("admin_menu", [$nonce, "addMenu"]);
        $instatiated = (10 === $instatiated);

        $this->assertTrue($instatiated);
    }
    
}