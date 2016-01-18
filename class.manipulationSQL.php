<?php
	class manipulationSQL {
		public function connectDB($settingsDB){
			$supportsConnDB = array('mysql', 'mysqli', 'mssql', 'sybase');
			try{
				if(in_array($settingsDB['typeDB'], $supportsConnDB)){
					$connect = new PDO($settingsDB['typeDB'].":host=".$settingsDB['host'].";dbname=".$settingsDB['dbname'], $settingsDB['username'], $settingsDB['password']);
				}else{ echo '<ins style="color:red;">Excuse me! But we do not work with this type of database</ins>';}
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
			//$connect = NULL;			
		}
		#Select
		private $composition = array(
			'SELECT' => ', ',
			'FROM' => null,
			'WHERE' => ' AND ',
			'GROUP BY' => ',',
			'HAVING' => ' AND ',
			'ORDER BY' => ', ',
			'LIMIT' => null,
			'OFFSET' => null,
		);
		 function select($typeDB, $selctedData){				
			return $this; 
		}
		function from($a){
				return $this; 
			}
		function where($b, $c, $d){
				return $this; 
			}
	}
?>
