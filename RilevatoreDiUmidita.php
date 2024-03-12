<?php class RilevatoreDiUmidita extends Rilevatore{
            public $unitaDiMisura;
            public $posizione;

            function __construct($id, $listamis, $unitaMis, $soglia, $codice, $unitaDiMisura, $posizione){
                parent::__construct($id, $listamis, $unitaMis, $soglia, $codice);
                $this->unitaDiMisura = $unitaDiMisura;
                $this->posizione = $posizione;
            }

        }

    ?>