<?php
 /*
 * Simple Light PHP Framework
 *
 * @copyright Marc PEPIN 2012
 * @author Marc PEPIN
 *
 */
 
namespace Slp;


/** 
* Simple Light Php Framework Request Class
* @package		Slp
* @author    	Marc PEPIN
*/ 
class Request
{
	const RAW = 0;
	
	const TRIM = 1;
	
	const XSS = 2;
	
	public $method;
	
	public $uri;
	
	public $base;
	
	public $status;
	
	public $admin;
	
	public $protocol;
	
	public $get;
	
	public $post;
	
	public $request;
	
	public $time;
	
	public $host;
	
	public $remote;
	
	public $paths;
	
	/**
	* @brief construct Request
	*/
	public function __construct()
	{
		//print_r($_SERVER);
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->base = @$_SERVER['BASE'];
		$uri = $this->base ? str_replace($this->base, "", $_SERVER['REQUEST_URI']) : $_SERVER['REQUEST_URI'];
		$this->uri = ($pos = strpos($uri, "?")) ? substr($uri, 0, $pos) : $uri;
		$this->admin = $_SERVER['SERVER_ADMIN'];
		$this->scheme = $_SERVER['REQUEST_SCHEME'];
		$this->protocol = $_SERVER['SERVER_PROTOCOL'];
		$this->get = $_GET;
		$this->post = $_POST;
		$this->request = $_REQUEST;
		$this->time = $_SERVER['REQUEST_TIME'];
		$this->remote = $_SERVER['REMOTE_ADDR'];
		$this->paths = explode('/', substr($this->uri, 1));
	}
	
	/**
	* @brief filter value
	* @$value value to filter
	* @filter filter type (RAW, TRIM, XSS)
	*/
	private function filter($value, $filter)
	{
		switch ($filter)
		{
			case Request::RAW:
				return $value;
			break;
			case Request::TRIM:
				return trim($value);
			break;
			case Request::XSS:
				return strip_tags(trim($value));
			break;
			default:
				throw new \Exception("Unknown filter");
		}
	}
	
	/**
	* @brief get post var
	* @param key
	* @param default value
	* @return post or default value
	*/
	private function getVarPost($key, $default)
	{
		return isset($this->post[$key]) ? $this->post[$key] : $default; 	
	}
	
	/**
	* @brief get get var
	* @param key
	* @param default value
	* @return get or default value
	*/

	private function getVarGet($key, $default)
	{
		return isset($this->get[$key]) ? $this->get[$key] : $default;
	}
	
	/**
	* @brief request post var
	* @param key
	* @param default value
	* @return request or default value
	*/
	private function getVarRequest($key, $default)
	{
		return isset($this->request[$key]) ? $this->request[$key] : $default;
	}
	
	/**
	* @brief get var
	* @param key
	* @param default value
	* @filter filter type
	* @type type
	* @return var
	*/
	public function getVar($key, $default = NULL, $filter = Request::RAW, $type = 'request')
	{
		if (!in_array($type, array('request', 'post', 'get')))
			throw new \Exception('Type must be request, post or get');
		$method = "getVar".ucfirst($type);
		return $this->filter($this->{$method}($key, $default), $filter);
	}
}