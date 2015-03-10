
<?php
	ini_set('display_errors','On');
	spl_autoload_register(function($class){
		require 'lib/'.$class.'.php';
	});

	include_once 'lib/mpdo.php';
	include  'lib/config.php';

	class Index{
		static $db;
		static $config;

		static function route(){
			$str_accio=$_SERVER['REQUEST_URI'];
			$ar_accio=array_filter(explode('/',trim($str_accio)));

			return array_pop($ar_accio);
		}

		static function start($conf){
			//carregar DB
			self::$config=$conf;
			
			$db=mpdo::getInstance(self::$config);

			$accio=self::route();
			switch ($accio){
				case 'insert':
					$v=new vinsert();//vista de login i entrada de registres
					break;
				case 'login':
					
					$v=new vlogin();//vista de login i entrada de registres
					break;

				case 'list':
					$v=new vlista();//vista de login i entrada de registres
					//llistar usuaris
					break;

				case 'reg':
					$v=new vregistro();
				break;
				default: echo 'operacio incorrecta';
			}

		}	
	}
	
	Index::start($conf);
	

