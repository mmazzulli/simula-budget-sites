<?php

$segmentos = array('Arquitetura', 'Animais¨& Petshop',  'Antiquário & Coleções', 'Advocacia', 'Agências','Automotivo & Motos', 'Agrícola & Pecuária', 'Alimentação', 'Armazéns', 'Bar Pub Café', 'Corporativo', 'Cabeleireiros & Estética', 'Construção & Engenharia', 'Classificados','Desporto ou Esportes', 'Educação & Cursos', 'Empregos', 'Eventos & Entretenimento', 'Empregos', 'Eletrônicos ou Elétricos', 'Farmácia & Perfumaria', 'Setor Financeiro', 'Hoteis', 'Industria', 'Informática & Tecnologia','Imobiliária', 'Jóias & Relógios', 'Medicina e Odontologia', 'Música & Bandas', 'Moda', 'Restauração ou Padaria', 'Religião ou Espiritualidade', 'Revista', 'Turismo','Transportes', 'Outros');

$divide_array = array_chunk($segmentos, 12);

// echo "<h2>" . count($segmentos) . "</h2>";

?>

<div class="container">
<div class="layout-three-cols">
<div> 
      <h2>Assinale o item mais próximo do seu ramo de negócio</h2>
</div>
<form action="./orcamento" method="post">
        <input type="hidden" name="codForm" value="site-setor">

    <?php
    // Executa a lista de variáveis dos ramos
    // O array_chunk() divide a lista em grupos de 12
          foreach($divide_array as $segmento){
                echo "<div>";
            // Cada grupo de 12 é listado aqui individualmente 
                foreach($segmento as $item){
                  // manter 1 radio selecionado 
                  if($item=="Outros"){
                         echo '<input type="radio" id="" name="segmento" value=" ' . $item . ' " checked>';
             echo '<label for="">' . $item . '</label><br>';
                  } else {
             echo '<input type="radio" id="" name="segmento" value=" ' . $item . ' ">';
             echo '<label for="">' . $item . '</label><br>';
                  }
        
                } // foreach 1

                echo "</div>"; 
 
          } // foreach 1
    ?>
<button type="submit" name="submited">continuar <i class="fa-solid fa-arrow-right"></i></button>
</form>

</div>
</div>