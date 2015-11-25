<?php namespace Framework;

class Router 
{
	protected $routes;

	protected $uri;
	protected $request;

	protected $postData;

	function __construct($server, $routes, $postData) {
		$this->postData = $postData;
		$this->uri = $server['REQUEST_URI'];
		$this->request = $server['REQUEST_METHOD'];
		$this->routes = $routes;
	}

	public function Run()
	{
		foreach ($this->routes as $route) {
			if($this->uri === $route['uri'] && $this->request === $route['request']) {
				$controllerName = CONTROLLERS_NAMESPACE . $route['controller'];
				$controller = new $controllerName;

				if ($this->request === 'GET') {
					return TEMPLATE_PATH . '/' . $controller->get() . '.html';
				} elseif ($this->request === 'POST') {
					return TEMPLATE_PATH . '/' . $controller->post($this->postData) . '.html';
				}
			}
		}

		return TEMPLATE_PATH . '/' . '404.html';
	}
}
