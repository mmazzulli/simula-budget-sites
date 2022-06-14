<?php 
    $_SESSION['valor'] = 0; 
?>


<div class="container">
<div class="layout-one-col">
<div> 
    <h2>PROCURAS UM SERVIÇO DIGITAL ADEQUADO AO SEU NEGÓCIO?</h2>
    <h3>Escolha um serviço para simulação do orçamento</h3>
</div>
<div>
     <form action="./orcamento" method="post">
        <input type="hidden" name="codForm" value="servico">
        <input type="radio" id="" name="servico" value="Site" checked>
        <label for="Site">Site</label><br>
        <input type="radio" id="" name="servico" value="Loja">
        <label for="Loja">Loja</label><br>
        <input type="radio" id="" name="servico" value="Landing">
        <label for="Landing">Landing</label><br>
        <input type="radio" id="" name="servico" value="mkt">
        <label for="Visibilidade">Mkt Digital</label><br>
        <input type="radio" id="" name="servico" value="cms">
        <label for="Gestão online">Gestão online</label><br>
        <input type="radio" id="" name="servico" value="app">
        <label for="Aplicação Web">Aplicação Web</label><br><br>
        <button type="submit" name="submited">continuar <i class="fa-solid fa-arrow-right"></i></button>
    </form>
</div>
</div>
</div>



   






