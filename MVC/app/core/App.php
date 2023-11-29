<?php 

class App{
    protected $controller = 'Home';//protected hanya dapat diakses didalam dan anak/inheritence dan home adalah isi default
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        //for Controller
        $url = $this->parseURL();
        //file_exist adalah untuk memeriksa apakah ada file di dalam folder app/controllers
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);//menhilangkan element pada url
        }

        //ini untuk memanggil
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        //for Method
        if(isset($url[1])){
            //method_exists is Checks if the class method exists
            if(method_exists($this->controller, $url[1])){
                $this -> method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url)){
            $this -> params = array_values($url);//array_values return all the values of an array
            // var_dump($url);
        }

        //jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //ini function unutk mamngambil di url
    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');//rtirm untuk mengahpus tanda '/' diakhir
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);//ini akan menjadikan array dan berdasarakan '/' untuk pemisah
            return $url;
        }
    }
}
