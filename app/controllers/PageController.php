<?php

namespace App\controllers;

class PageController 
{
    
     function getContents($idPage){
          $extensao = explode('.', $idPage);
          if(isset($extensao[1])){
             switch ($extensao[1]){
                case "php":
                   $mostra = require(__DIR__ . '/../../resources/view/pages/' . $idPage);
                   break;
                case "html":
                    $file = __DIR__ . "/../../resources/view/pages/" . $idPage ;
                    $mostra = file_exists($file) ? file_get_contents($file) : 'Não há nada a exibir';
                    break;
                default:
                    $mostra = "resultado do erro: " . $extensao[1];
                    break;
             }
          } else {
             $mostra = "resultado do erro: " . $extensao[1];
          }
      
      return $mostra;
   }
    
    function pageControl($idPage){
      return self::getContents($idPage);
    }
}