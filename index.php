<?php
    require_once("config.php");

    use Cliente\Cadastro;
    use Fornecedor\Cadastro;

    $cad = new Cadastro();
    $cad -> setNome("Luke Skywalker");
    $cad -> setEmail("skywalker@aliancarebelde.com");
    $cad -> setSenha("Vader1234");

    echo $cad . "<br>";

    $cad -> registrarVenda() . "<br>";
    $cad -> registrarFornecedor();
?>