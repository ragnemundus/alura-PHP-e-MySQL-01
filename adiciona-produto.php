<?php include("cabecalho.php"); ?>

<?php

    function insereProduto($conexao, $nome, $preco) {
        $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
        return mysqli_query($conexao, $query);
    }

    $nome = $_GET['nome'];
    $preco = $_GET['preco'];
    $conexao = mysqli_connect("127.0.0.1", "root", "1q2w3e4r", "loja");

    if (insereProduto($conexao, $nome, $preco)) { ?>
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