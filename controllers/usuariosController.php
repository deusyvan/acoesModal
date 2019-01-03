<?php
class usuariosController extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data = array();
        
        $u = new Usuarios();
        $usuarios = $u->getList();
        $data['usuarios'] = $usuarios;
        
        $this->loadTemplate('usuarios', $data);
    }
    
}