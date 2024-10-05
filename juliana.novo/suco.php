<?php
class Suco {
 private $sabor;

   public function __construct($sabor) {
   }

    public function setsabor($sabor) {
        $this->sabor = $sabor;
    }
 
   public function getsabor() {
       return $this->suco;
   }
 
   public function mostrarbebida() {
       return "Nome: $this->nome, sabor: $this->sabor, Preço: $this->preco,";
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