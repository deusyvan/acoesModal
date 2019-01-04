<?php 

class  Usuarios extends model{
    public function getList(){
        $array = array();
        $sql = "SELECT * FROM usuarios";
        $sql = $this->db->query($sql);
        $array = $sql->fetchAll();
        return $array;
    }
    public function editar($id){
        $array = array();
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }
}