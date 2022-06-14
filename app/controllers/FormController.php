<?php
namespace App\controllers;
session_start();
use App\controllers\PageController;


class FormController 
{
    public function formControl($sendForm){
        $filtrar = array();
        $filtrar = filter_input_array(INPUT_POST, $sendForm);
        $codForm = $filtrar['codForm'];
    // É IMPRESCINDÍVEL a existência do codForm
    // Ele vem de uma HIDDEN e controla o SWITCH e emissão de PÁGINAS.
   
        switch ($codForm) {
            // Recebendo Form Servicos
            case 'servico':
                 if ($filtrar['servico'] == 'Site'){
            $_SESSION['servico'] = $filtrar['servico'];
            $_SESSION['valor'] = 190;
            $codForm = 'site/01.html';
        } elseif ($filtrar['servico'] == 'Loja') {
            $_SESSION['servico'] = $filtrar['servico'];
            $_SESSION['valor'] = 330;
            $codForm = 'loja/01';
        } elseif ($filtrar['servico'] == 'Landing') {
            $_SESSION['servico'] = $filtrar['servico'];
            $_SESSION['valor'] = 125;
            $codForm = 'landing/01';
        } elseif ($filtrar['servico'] == 'mkt') {
            $_SESSION['servico'] = $filtrar['servico'];
            $_SESSION['valor'] = 25;
            $codForm = 'mkt/01';
        } elseif ($filtrar['servico'] == 'cms') {
            $_SESSION['servico'] = $filtrar['servico'];
            $_SESSION['valor'] = 450;
            $codForm = 'cms/01';
        } elseif ($filtrar['servico'] == 'app') {
            $_SESSION['servico'] = $filtrar['servico'];
            $_SESSION['valor'] = 3500;
            $codForm = 'app/01';
        } elseif ($filtrar['servico'] == 'blog') {
            $_SESSION['servico'] = $filtrar['servico'];
            $_SESSION['valor'] = 140;
            $codForm = 'blog/01';
        }
            break;
            
            // Recebe dados da plataforma esvolhida
            case 'plataforma-site' :
            if ($filtrar['site'] == 'wp-theme'){
            $_SESSION['site'] = $filtrar['site'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 100);
            $codForm = 'site/02.php';
        } elseif ($filtrar['site'] == 'wp-custom') {
            $_SESSION['site'] = $filtrar['site'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 100);
            $codForm = 'site/02';
        } elseif ($filtrar['site'] == 'custom-advanced') {
            $_SESSION['site'] = $filtrar['site'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 100);
            $codForm = 'site/02';
        }
            break;     


            // Recebe dados do setor de serviço
            case 'site-setor' : 
             if(!isset($filtrar['segmento'])){
                  $_SESSION['setor'] = "Não há dados";
             } else {
                  $_SESSION['setor'] = $filtrar['segmento'];
             }
             $codForm = 'site/03.html';
            break;

            case 'site-num-pgs' :

             if ($filtrar['sitepage'] == 'onepage'){
            $_SESSION['sitepage'] = $filtrar['sitepage'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 25);
            $codForm = 'site/04.html';
        } elseif ($filtrar['sitepage'] == 'sixpage') {
            $_SESSION['sitepage'] = $filtrar['sitepage'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 50);
            $codForm = 'site/04.html';
        } elseif ($filtrar['sitepage'] == 'tenpage') {
            $_SESSION['sitepage'] = $filtrar['sitepage'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 90);
            $codForm = 'site/04.html';
        } elseif ($filtrar['sitepage'] == 'twentypage') {
            $_SESSION['sitepage'] = $filtrar['sitepage'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 120);
            $codForm = 'site/04.html';
        } elseif ($filtrar['sitepage'] == 'pluspage') {
            $_SESSION['sitepage'] = $filtrar['sitepage'];
            $_SESSION['valor'] = ($_SESSION['valor'] + 150);
            $codForm = 'site/pluspage.html';
        }

            break;      

            // Recebe Seções do site
            case 'site-sections' :

            // Recodificar tudo / Agora com Checkbox 

            break;      
                
          
        }
        
         

        // echo $_SESSION['valor'];

        // -----------------------------------------------
        // Exibe novo formulário 
        echo PageController::pageControl($codForm);
        // -----------------------------------------------
        
        // echo $_SESSION['valor'];
        // echo "<br>";
        // echo $_SESSION['setor'];
        // echo "<br>";
        // echo $_SESSION['servico'];
        // echo "<br>";
        // echo $_SESSION['site'];
        // ---------------------------------------------------
        // FUNCIONANDO COM FOREACH ------------------------------
            // foreach ($filtrar as $key => $value)
            // {
            //     $filtrar[$key] = $value;
            //     $_SESSION['form01'] [$key] = $filtrar[$key];  
                
                
                // EXIBIR LISTA de ARRAYS com suas KEYS
                // echo $_SESSION['form01'] [$key] . "  = ";
                // echo $key . "<br>";

                
            // }


             // $keys = array_keys($filtrar);
        // $keys = array_map(function($item){
        //     return '{{' . $item . '}}';
        // }, $keys);
        
                // -------------------------------------------------
             #destroi todas as sessões
                // session_destroy();

    }
}


