<?php 
namespace App\model;

class Produto{
   private $nome,$telefone,$cidade;

   public function getNome(){
       return $this->nome;
   }
   public function setNome($n){
       $this->nome=$n;
   }
   public function getTelefone(){
       return $this->telefone;
   }
   public function setTelefone($s){
       $this->telefone=$s;
   }
   public function getCidade(){
       return $this->cidade;
   }
   public function setCidade($c){
       $this->cidade=$c;
   }


}
?>