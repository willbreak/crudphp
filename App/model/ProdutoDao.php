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
                $stmt=null;
            
           
        }
       
    
    public function read(){
        $sql="select * from lista";
        $stmt=Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0):
            $resultado=$stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else: return [];
        endif;
        $stmt=null;
        
    }
    public function update(Produto $p){
        $query="update lista set nome=?, numero=?, cidade=? where id = ? ";
        $conection=Conexao::getConn()->prepare($query);
        $conection->bindValue(1,$p->getNome());
        $conection->bindValue(2,$p->getTelefone());
        $conection->bindValue(3,$p->getCidade());
        $conection->bindValue(4,$p->getId());

        if($conection->execute()){
            return 'sucesso';
        }else{
            return 'erro';
        }
        $conection=null;
    }
    public function delete($id){
        $query="DELETE FROM lista where id= ?";
        $conection=Conexao::getConn()->prepare($query);
        $conection->bindValue(1,$id);
        if($conection->execute()){
            return "Sucesso";

        }
        else{
            return 'Erro';
        }

    }
    public function search($busca){
        $query="select * from lista where nome like ? or numero like ?";
        $conection=Conexao::getConn()->prepare($query);
        $conection->bindValue(1,"%$busca%");
        $conection->bindValue(2,"%$busca%");
        $conection->execute();

        if($conection->rowCount() > 0):
            $result=$conection->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        else:
            return [];
        endif;
    }
}





?>