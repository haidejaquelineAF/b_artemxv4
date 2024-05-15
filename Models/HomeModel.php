<?php 
    class HomeModel extends Query{

        private $nombre, $correo, $passwrd;

        public function __construct(){
            parent::__construct(); //Cargar el constructor de Query
        }

        public function registrarUsuario(string $nombre, string $correo, string $passwrd){
            
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->passwrd = $passwrd;

            $verifcar = "SELECT * FROM registro WHERE correo = '$this->correo'";
            $existe = $this->select($verifcar);
            if (empty($existe)) {

                    $sql = "INSERT INTO registro (nombre, correo, passwrd) VALUES (?,?,?)";
                    $datos = array($this->nombre, $this->correo, $this->passwrd);
                    $data = $this->save($sql, $datos);
                    if (!empty($data)) {
                        $res = "ok";
                    }else{
                        $res = "error";
                    }
            }else{
                $res = "existe";
            }
            return $res;
        }

        
    }
?>
