<?php
class Vinhoporto {
   private $tipo;
   private $safra;
   
   public function __construct( $tipo, $safra) {
       $this->tipo = $tipo;
       $this->safra = $safra;
   }

   
   public function setTipo() {
       return $this->tipo;
   }
   public function getPreco() {
       return $this->preco;
   }
   
 
   public function mostrarVinho() {
       return "Nome: $this->nome, Tipo: $this->tipo, Preço: $this->preco, Safra: $this->safra";
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