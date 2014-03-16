<?php namespace WeInspire\Request;

/**
* @author Christoph Burger <christoph.burger@we-inspire.net>
*/

class Request extends \Illuminate\Http\Request {

	/**
	* stores the private key to confirm that the request was sent by a dnode server.
	* @var string
	*/
	protected $key;


	/**
	* Calls the function which stores the requested path into request object.
	* 
	*  @param string $path request path
	*/
	public function setPath($path) {
		$this->setPathInfo($path);
	}

	/**
	* Check wheter the request has method "node" and the private key matches.
	* This function can later be used to check if request was sent by a dnode server.
	* 
	* @return boolean returns true if request was send by a dnode server; otherwise false.
	* 
	*/
	public function node() {
		return $this->getMethod() == 'NODE' && $this->getKey() == "test";
	}

	/**
	* Stores the requested path into request obeject.
	* 
	* @param string $path requested path
	*/
	public function setPathInfo($path) {
		$this->pathInfo = $path;
	}

	/**
	* Stores the given private key into request object.
	* 
	* Later used to determine wheter the request was sent by a dnode server or not.
	* @param string $key private key
	*/
	public function setKey($key) {
		$this->key = $key;
	}

	/**
 	* Returns the private key.
 	* @return string Private key
 	*/ 
	public function getKey() {
		return $this->key;
	}

}