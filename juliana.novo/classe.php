<?php
abstract class bebida{
    
    private $nome;
    private $preco;
   
   public function __construct( $nome, $preco) {
       $this->tipo = $nome;
       $this->safra = $preco;
   }

   
   public function setnome() {
       return $this->nome;
   }
   public function getPreco() {
       return $this->preco;
   }
   
 
   public function mostrarbebida() {

   }
 
   public function verificarPreco() {
       if ($this->preco < 25) {
           return true;
       } else {
           return false;
       }
   }
}
?>
