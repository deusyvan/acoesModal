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
    
    public function editar($id){
        sleep(2);
       $u = new Usuarios();
       $usuario = $u->editar($id);
       ?>
       	<form method="POST">
       		Nome: <br/>
       		<input type="text" name="nome" value="<?php echo $usuario['nome']; ?>"/><br/><br/>
       		Email: <br/>
       		<input type="text" name="email" value="<?php echo $usuario['email']; ?>"/><br/><br/>
       		Senha: <br/>
       		<input type="text" name="senha" value="<?php echo $usuario['senha']; ?>"/><br/><br/>
       		<input type="submit" value="Salvar" />
       	
       	</form>
       <?php 
       
    }
    
}