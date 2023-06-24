<?php
  include "../includes/cabecalho.php";
  include "../includes/menu.php";
  include "../includes/conexao.php";

?>

<h1>
    <img src="../img/logo-nutricionista.png" width="100">nutricionista
</h1>
<p>
    <a href="novo.php">Adicionar nutricionista</a>
</p>
<h2>Listagem de nutricionista</h2>
<table border ="1">
    <tr>
        <td>codigo</td>
        <td>nome</td>
        <td>especialidade</td>
        <td>cidade</td>
        <td>estado</td>
        <td>Acões</td>
    </tr>
   
    <?php
   $sql = "select * from t_nutricionista";
   $todas_as_nutricionista = mysqli_query($conexao, $sql);
   while($uma_nutricionista = mysqli_fetch_assoc($todas_as_nutricionista)):
    ?>
    <tr>
        <td><?php echo $uma_nutricionista['codigo']; ?></td>
        <td><?php echo $uma_nutricionista['nome']; ?></td>
        <td><?php echo $uma_nutricionista['especialidade']; ?></td>
        <td><?php echo $uma_nutricionista['cidade']; ?></td>
        <td><?php echo $uma_nutricionista['estado']; ?></td>
        <td>
            <a href="visualizar.php?codigo=<?php echo $uma_nutricionista['codigo'];?> "title=" Ver completo">Visualizar</a>
            <a href="editar.php?codigo=<?php echo $uma_nutricionista['codigo'];?> ">Editar</a>
            <a href="deletar.php?codigo=<?php echo $uma_nutricionista['codigo'];?>">deletar</a>
            <a href="atualizar.php?codigo=<?php echo $uma_nutricionista['codigo'];?>">atualizar</a>
        </td>
    </tr>
    <?php
    endwhile;
    mysqli_close($conexao);
    ?>
</table>


<?php
include "../includes/rodape.php";
?>