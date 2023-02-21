<?php

namespace Core;

class ConfigController extends Config
{
    private string $url;
    private array $urlArray;    
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;  

    public function __construct()
    {
        $this->config();
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            $this->clearUrl();

            $this->urlArray = explode("/", $this->url);

            if(isset($this->urlArray[0])){
                $this->urlController = $this->slugController($this->urlArray[0]);
            }else{
                $this->urlController = $this->slugController(CONTROLLERERRO);
            }
        }else{
            $this->urlController = $this->slugController(CONTROLLER);
        }        
    }

    private function clearUrl()
    {
        //Eliminar as tag
        $this->url = strip_tags($this->url);
   
        //Aliminar a barra no final da Url
        $this->url = rtrim($this->url, "/");
        //Eliminar os espaços em branco
        $this->url = trim($this->url);
  
    }

    private function slugController($slugController)
    {
        $this->urlSlugController = strtolower($slugController);
        $this->urlSlugController = str_replace("-", " ",  $this->urlSlugController);
        $this->urlSlugController = ucwords($this->urlSlugController);
        $this->urlSlugController = str_replace(" ", "",  $this->urlSlugController);

        return $this->urlSlugController;
    }

    public function loadPage()
    {
         $classLoad = "\\Sts\\Controllers\\" . $this->urlController;
         $classPage = new $classLoad();
         $classPage->index();  
    }   
}