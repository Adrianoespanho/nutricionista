<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Nova nutricionista</h1>
<p>Vamos cadastrar um nutricionista novo no sistema.</p>
<form action="inserir.php" method="post">
    nome: <input name="nome" type="text" required maxlength="50">
    <br>
    especialidade: <input name="especialidade" type="text" required maxlength="50">
    <br>
    cidade: <input name="cidade" type="text" required maxlength="50">
    <br>
    estado: <input name="estado" type="text" required maxlength="50">
    <br>
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>