<?php

namespace App\model;


class ProdutoDao{
    public function create(Produto $p){
        // $sql="INSERT INTO lista (nome,numero,cidade)values(?,?,?)";
        // $stmt=Conexao::getConn()->prepare($sql);
        // $stmt->bindValue(1,$p->getNome());
        // $stmt->bindValue(2,$p->getTelefone());
        // $stmt->bindValue(3,$p->getCidade());
        // $stmt->execute();
        

            $sql="insert into lista(nome,numero,cidade)values(?,?,?)";
            $stmt=Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1,$p->getNome());
            $stmt->bindValue(2,$p->getTelefone());
            $stmt->bindValue(3,$p->getCidade());

                if($stmt->execute()):
                    return "sucesso";
                else:
                    return "erro";
                endif;
            
           
        }
       
    
    public function read(){
        $sql="select * from lista";
        $stmt=Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0):
            $resultado=$stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        endif;
        
    }
    public function update(){

    }
    public function delete(){
        
    }
}
?>