<?php

	/*
		autor: Oscar Gómez
		fecha de creación: 20/09/2020
		modificado por: Oscar Gómez
		fecha de modificación: 15/10/2020
	*/

	class Conexion 	{

		private static $conexion;

		public static function abrir_conexion()	{

			if(!isset(self::$conexion))	{

				try {

					include_once 'config.inc.php';
					self::$conexion = new PDO("mysql:host=$nombre_servidor; dbname=$nombre_base_datos", $nombre_usuario, $contrasenha);
					self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					self::$conexion -> exec("SET CHARACTER SET utf8");

				} catch (PDOException $e) {
					
					print "ERROR: ".$e -> getMessage()."<br>";
					die();

				}

			}

		}

		public static function cerrar_conexion()	{

			if (isset(self::$conexion))	{

				self::$conexion = null;

			}

		}

		public static function obtener_conexion()	{

			return self::$conexion;

		}
		
	}

?>