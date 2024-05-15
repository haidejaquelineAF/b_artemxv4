<?php

    class Home extends Controller{

        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->views->getView($this, "index");//Hacer visible la vista
        }
        public function registrarnu(){
            $nombre = $_POST['nombre_usuario'];
            $correo = $_POST['correo_usuario'];
            $passwrd = $_POST['passwrd_usuario'];

            if(empty($nombre) || empty($correo) || empty($passwrd)){
                $msg="Completar todos los campos...";
            }else{
                $data = $this->model->registrarUsuario($nombre, $correo, $passwrd);
                
                if($data == "ok"){
                    $msg = "registrado";
                }else if($data="existe"){
                    $msg = "Ya existe un registro con ese correo";
                }else{
                    $msg = "No fue posible realizar su registro";
                }
            }


            echo json_encode($msg, JSON_UNESCAPED_UNICODE);//Poder enviar contraseña respetando la ñ
            die();//Cortar las peticiones
        }
        
    }
?>
