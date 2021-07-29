<?php
/**
 * Created by PhpStorm.
 * User: WILLY
 * Date: 5/2/2019
 * Time: 21:32
 */

class HandlePostRequests{

	public function unloadPost(){
		if (isset($_POST['domainName'])) {
			$domainName = $_POST['domainName'];
			echo " you saved this Domain Name >> ".$domainName;
			//save record to db then execute batch with the ip
		}
	}
	public function saveToDB($value='') {
	 	# code...
	 } 
	public function executeCommands($value='') {
		# code...
	}

}