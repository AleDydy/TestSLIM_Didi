<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    include_once "DispositivoDiAllarme.php";
    include_once "Impianto.php";

    class DispositiviDiAllarmeController{

        function index(Request $request, Response $response, $args){
            $impianto = new Impianto("SuS", 120, 114);
            $lista = array();

            foreach($impianto->listaDispAllarme as $disp){
                $lista->array_push($disp);    
            }

            $response->getBody()->write(json_encode($lista));
            return $response->withHeader('Content-Type', 'application/json');
        }

        function show(Request $request, Response $response, $args){
            $classe = new Classe();
            $alunnoFinder = $args["nome"];
            $ilTrovato = null;
        
            foreach($classe->listaAlunni as $broski){
                if($broski->getNome() == $alunnoFinder){
                    $ilTrovato = $broski;
                    break;
                }
            }
        
            if($ilTrovato == null){
                $risposta = "Broski non trovato";
                $response->getBody()->write($risposta);
                return $response;
            }
        
            $risposta = $ilTrovato->toString();
            $response->getBody()->write($risposta);
            return $response;
        }
        
    }
?>