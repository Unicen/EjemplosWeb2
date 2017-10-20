<?php
  /**
   *
   */
  class Router
  {
    private $routes;
    private $params;

    function __construct()
    {
      $this->routes = [];
    }

    public function AddRoute($url, $verb, $controller, $method)
    {
      $this->routes[] = [$url, $verb, $controller, $method];
    }

    /**
    * Given an URL pottern like "tarea/:id"
    * return if it matcher $url like "tarea/12"
    * and store 12 in a url params associated with ":id"
    */
    private function matchURL($route_url, $url)
    {
      $urlExploded = explode('/', trim($url,'/'));
      $route_urlExploded = explode('/', trim($route_url,'/'));
      if(sizeof($urlExploded) != sizeof($route_urlExploded))
        return false;
      $this->params = [];
      for($i = 0; $i< sizeof($urlExploded); $i++)
        if($urlExploded[$i] != $route_urlExploded[$i] )
          if($route_urlExploded[$i][0]== ":")
            $this->params[$route_urlExploded[$i]] = $urlExploded[$i];
          else
            return false;
      return true;
    }

    public function Route($url)
    {
      foreach ($this->routes as  $route) {
        $route_url = $route[0];
        $route_verb = $route[1];
        if($this->matchURL($route_url, $url) && $route_verb == $_SERVER['REQUEST_METHOD'])
        {
          $controller =  $route[2];
          $metodo = $route[3];
          return [ $controller, $metodo, $this->params];
        }

      }
    }
  }

?>
