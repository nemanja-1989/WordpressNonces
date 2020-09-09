<?php 

	class FormHelper {
		
		public static function openFormTag($action, $method) {
			echo "<form action='{$action}' method='{$method}'>";
		}
		
		public static function input($type, $name, $value = null) {
			echo "<input type='{$type}' name='{$name}' value='{$value}'>";
		}
		
		public static function closeFormTag() {
			echo "</form>";
		}
	}