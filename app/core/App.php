<?php

class App {
  //membuat properti 
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
  
  public function __construct() {
    
    
    $url = $this -> parseURL();
    
    // jika variabel url index ke 0 tidak kosong
    if (!empty($url[0])){

      // cek apakah file controller ada
      //  ucfist menguabah kata menjadi di awali huruf kapital
      if(file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
          $this->controller = ucfirst($url[0]);
          unset($url[0]);
      }
    }
    require_once '../app/controllers/' .$this->controller. '.php';
    //class controller diinstasiasi untuk memanggil method 
    $this->controller = new $this->controller;
    
    //method
    if ( isset($url[1]) ) {
      if(method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }
    
    if (!empty($url)) {
      $this->params = array_values($url);
    }
    //jalankan method dan controller serta masukkan paramater
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  public function parseURL()
  {
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url,FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
  
}