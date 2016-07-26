<?

class inicio extends CI_Model {

      
        public function insertarUsuario($nombre,$apellido,$correo,$tel,$cel,$usuario,$pass1)
        {      
          $data = array(
               'nombre' => $nombre,
               'apellido' => $apellido,
               'correo'=>$correo,
               'telefono'=>$tel,
               'celular'=>$cel,
               'usuario'=>$usuario,
               'contrasenia'=>$pass1,
               'admin'=>'1'

                );

                   $query=$this->db->insert('usuarios', $data); 
                    return $query;
        }
        public function get_user($usuario,$pass)
        {


           $sql = "SELECT * FROM usuarios WHERE usuario ='".$usuario."' AND contrasenia = '".$pass."';"; 
                $query=$this->db->query($sql);
                return $query->result();

           
        }

       
      
        

}