<?php 

	interface INonce {
		
		public function wpNonceField();
		public function wpVerifyNonces();
	}