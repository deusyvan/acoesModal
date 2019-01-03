<?php 

class  Usuarios extends model{
    public function getList(){
        $array = array();
        $sql = "SELECT * FROM usuarios";
        $sql = $this->db->query($sql);
        $array = $sql->fetchAll();
        return $array;
    }
}