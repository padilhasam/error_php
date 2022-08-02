<?php
    namespace Cliente;
    class Cadastro extends \Cadastro{
        public function registrarVenda(){
          echo "Venda registrada para o vendedor " . $this -> getNome();
        }
    }
?>