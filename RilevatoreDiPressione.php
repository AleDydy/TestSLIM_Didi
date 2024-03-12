<?php class RilevatoreDiPressione extends Rilevatore{
            public $unitaDiMisura;
            public $tipologia;

            function __construct($id, $listamis, $unitaMis, $soglia, $codice, $unitaDiMisura, $tipologia){
                parent::__construct($id, $listamis, $unitaMis, $soglia, $codice);
                $this->unitaDiMisura = $unitaDiMisura;
                $this->tipologia = $tipologia;
            }

        }

    ?>