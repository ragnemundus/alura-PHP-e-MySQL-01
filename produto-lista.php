<?php
    include("cabecalho.php");
    include("conecta.php");
    include("banco-produto.php");
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido'] == "true") { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
    <tr>
        <td><?=$produto['produto']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=substr($produto['descricao'], 0, 40)?></td>
        <td><?=$produto['categoria']?></td>
        <td>
            <a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar
            </a>
        </td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Excluir
                </button>
            </form>
        </td>
    </tr>
    <?php endforeach ?> 
</table

<?php include("rodape.php"); ?>