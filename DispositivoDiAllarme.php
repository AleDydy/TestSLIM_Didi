<?php class DispositivoDiAllarme{
            public $id;
            public $numeroDiTelefono;

            function __construct($id, $num){
                $this->nome = $id;
                $this->numeroDiTelefono = $num;
            }

            //getter
            function getId(){
                return $this->id;
            }

            function getNumTel(){
                return $this->numeroDiTelefono;
            }
       

            //setter
            function setId($id){
                $this->id = $id;
            }

            function setNumTel($num){
                $this->numeroDiTelefono = $num;
            }

        }

    ?>