<?php
    class Cadastro extends \Cadastro{
        public function registrarFornecedor(){
            echo "Fornecedor " . $this -> getNome() . " registrado com sucesso!";
        }
    }
?>