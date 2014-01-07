<?php namespace WeInspire\Helpers;
class WIHelpers {

	/** Sends data to Node-Server
	*
	*	@param $data 			JSON-Object with data
	*	@return 				Returns the state of the call. Can be an self defined error-message or object
	*/
	
	public static function sendToNode($data, $remoteFunction) {
		$dnode = new \DnodeSyncClient\DnodeSync();
		$connection = $dnode->connect("localhost", 5004);	
		$response = 0;
		
		$response = $connection->call($remoteFunction, array($data));
		return $response;

	} 

	/** Parses plaintext-data to a JSON-Object
	*
	*	@param $model 			Laravel model
	*	@return 				Returns an JSON-Object of $data
	*/

	public static function toJSON($data) {

		return json_encode($data);

	}

}
?>
