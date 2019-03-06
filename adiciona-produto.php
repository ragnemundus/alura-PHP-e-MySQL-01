<?php
    include("cabecalho.php");
    include("conecta.php");
    include("banco-produto.php");

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];

    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { ?>
        <p class="text-success">
            Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!
        </p>

    <?php } else { 
        $msg = mysqli_error($conexao);
    ?>
        <p class="text-danger">
            <b>O Produto <?= $nome; ?> não foi adicionado: </b>
            <br><?= $msg; ?>
        </p>
    <?php }
    
    mysqli_close($conexao);
?>

<?php include("rodape.php"); ?>