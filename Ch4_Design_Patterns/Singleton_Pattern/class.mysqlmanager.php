<?php 
class MySQLManager
{
	private static $instance;
	public $var1;
	public $var2;

	function __construct()
	{
		if (!self::$instance) {
			self::$instance = $this;
			echo "New instance\n";

			return self::$instance;
		}
		else{
			echo "Old Instance\n";
			return self::$instance;
		}
	}

	public function get_instance_type()
	{
		print_r(self::$instance);

		echo get_class(self::$instance)."\n";
	}

}
?>