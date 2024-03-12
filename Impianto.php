<?php class Impianto{
            public $nome;
            public $latitudine;
            public $longitudine;
            public $listaDispAllarme;
            public $listaRilevatori;

            function __construct($n, $lat, $long){
                $this->nome = $n;
                $this->latitudine = $lat;
                $this->longitudine = $long;
                $this->listaDispAllarme = [
                    new DispositivoDiAllarme("H20", 3546789102),
                    new DispositivoDiAllarme("H30", 3586782103),
                ];
                $this->listaRilevatori = [
                    new Rilevatore("H20", "bar", 30, 324),
                    new Rilevatore("H40", "bar", 40, 327),
                ];
            }

            //getter
            function getNome(){
                return $this->nome;
            }

            function getLatitudine(){
                return $this->latitudine;
            }

            function getLongitudine(){
                return $this->longitudine;
            }


            //setter
            function setNome($n){
                $this->nome = $nome;
            }

            function setLatitudine($lat){
                $this->latitudine = $lat;
            }

            function setLongitudine($long){
                $this->longitudine = $long;
            }


            //toString
            function toString(){
                echo "NOME: " . $this->nome . "<br>"; 
                echo "LATITUDINE: " . $this->latitudine . "<br>"; 
                echo "LONGITUDINE: " . $this->longitudine . "<br>";
            }
        }

    ?>