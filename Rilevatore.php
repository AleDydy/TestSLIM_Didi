<?php class Rilevatore{
            public $id;
            public $listaMisure;
            public $unitaDiMisura;
            public $sogliaDiAllarme;
            public $codiceSeriale;

            function __construct($id, $unitaMis, $soglia, $codice){
                $this->id = $id;
                $this->$listaMisure = [
                    '10/01/2024' => 1, 
                    '12/01/2024' => 20, 
                    '15/02/2024' => 35, 
                    '10/03/2024' => 22,
                    '12/03/2024' => 13,
                    '8/02/2024' => 3
                ];
                $this->unitaDiMisura = $unitaMis;
                $this->sogliaDiAllarme = $soglia;
                $this->codiceSeriale = $codice;
            }


            //getter
            function getId(){
                return $this->id;
            }

            function getListaMisure(){
                $str='';
                    foreach ($listaMisure as $data => $valore) {
                        $str.=$data . " : " . $valore . "<br>";
                    }
                return $str;
            }

            function getUnitaMis(){
                return $this->unitaMis;
            }

            function getSogliaAllarme(){
                return $this->sogliaDiAllarme;
            }

            function getCodiceSeriale(){
                return $this->codiceSeriale;
            }


            //setter
            function setId($id){
                $this->id = $id;
            }

            function setUnitaMisura($um){
                $this->unitaDiMisura = $um;
            }

            function setSogliaDiAllarme($soglia){
                $this->sogliaDiAllarme = $soglia;
            }

            function setCodiceSeriale($cod){
                $this->codiceSeriale = $cod;
            }

        }

    ?>