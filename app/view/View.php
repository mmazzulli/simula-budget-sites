<?php

namespace App\Utils;

class View
{
    public static function getContentView($view){
        $file = __DIR__ . '/../../resources/view/pages/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : 'Nenhum Conteúdo encontrado.';
    }

    public static function render($view){
        $contentView = self::getContentView($view);
        return $contentView;
    }
    
}