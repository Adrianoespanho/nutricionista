<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$codigo = $_GET["codigo"];

$nome ="";
$especialidade ="";
$cidade ="";
$estado ="";

$sql = "select * from t_nutricionista where codigo = $codigo";
$todas_as_nutricionista=mysqli_query($conexao, $sql);
while($uma_nutricionista=mysqli_fetch_assoc($todas_as_nutricionista)):
    $nome= $uma_nutricionista["nome"];
    $especialidade= $uma_nutricionista["especialidade"];
    $cidade= $uma_nutricionista["cidade"];
    $estado= $uma_nutricionista["estado"];
endwhile;

?>

<h1>ficha das nutricionista </h1>
nome: <?php echo $nome ."" ?> <br>
especialidade: <?php echo $especialidade ."" ?> <br>
cidade: <?php echo $cidade ."" ?> <br>
estado: <?php echo $estado ."" ?> <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>