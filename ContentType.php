<?php
  class ContentType extends AbstractPicoPlugin{
    
    const API_VERSION = 3;
    
    private $extension = "";
    private $raw = false;
    
    public function onRequestUrl($url){
      $extension = pathinfo($url,PATHINFO_EXTENSION);
      if(0<strlen($extension)){
        $this->extension=$extension;
      }
    }
    
    public function onMetaParsed(&$meta){
      if(isset($meta["ContentType"]){
        $this->extension=$meta["ContentType"];
      }
      if(0==strlen($meta["template"])){
        $this->raw=true;
      }
    }
    
    public function onPageRendered(&$output){
      if($this->raw){
        $output=$this->getPico()->getRawContent();
      }
      switch($this->extension){
        case "json":
          header("Content-type:application/json;charset=utf-8");
          break;
        case "txt":
          header("Content-type:text/plain;charset=utf-8");
          break;
        case "xml":
          header("Content-type:text/xml");
          $output=html_entity_decode($output);
          break;
      }
    }
    
  }
 ?>
