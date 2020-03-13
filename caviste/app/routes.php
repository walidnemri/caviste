<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use RedBeanPHP\R;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
        var_dump($request);
        $response->getBody()->write('Géniaaal!');
        return $response;
    });
    
    $app->get('/api/wines', function(Request $request, Response $response) {
        //Récupérer les données de la BD
        //$data = include('public/wines.json');     //Mock
        
        //Se connecter au serveur de DB
        
        
        try {
            // R::setup('mysql:host=localhost;dbname=cellar','root','root');
       
            
            //Préparer la requête
            //$query = 'SELECT * FROM wine';
            $wines = R::findAll('wine','order BY name');
            
            
        } catch(PDOException $e) {
            $wines = [
                [
                    "error" => "Problème de base données",
                    "errorCode" => $e->getCode(),
                    "errorMsg" => $e->getMessage(),
                ]
            ];
        }
        
        //Convertir les données en JSON
        $winesTab=[];
        foreach($wines as $b) {
            $winesTab[] = $b;
        }
        $data = json_encode($winesTab);
        
        
        // var_dump($data);
        $response->getBody()->write($data);
        return $response
                ->withHeader('content-type', 'application/json')
                ->withHeader('charset', 'utf-8');
    });
    
    $app->get('/api/wines/{id}', function(Request $request, Response $response, array $args){
        $id = $args['id'];
        
        try {
       
          
       
        
            //Préparer la requête
            //$query = 'SELECT * FROM wine';
            $wines = R::findOne('wine','id=?',[$id]);
            
            //Extraire les données
  
        } catch(PDOException $e) {
            $wines = [
                [
                    "error" => "Problème de base données",
                    "errorCode" => $e->getCode(),
                    "errorMsg" => $e->getMessage(),
                ]
            ];
        }
        
        //Convertir les données en JSON
     
        $winesTab[] = $wines;
        
        $data = json_encode($winesTab);
        $response->getBody()->write($data);
        return $response
                ->withHeader('content-type', 'application/json')
                ->withHeader('charset', 'utf-8');
    });
    
    $app->post('/api/wines', function(Request $request, Response $response){
       $wine = $request->getParsedBody();
       
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=cellar','root','root', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            // nettoyer les donnee entrante
 
            $query = "INSERT INTO"
                    ."`wine` (`id`,`name`, `year`, `grapes`, `country`, `region`, `description`, `picture`)"
                    ." VALUES (NULL, :name, :year, :grapes, :country, :region, :picture, :description)";
        
            //Envoyer la requête
            $stmt = $pdo->prepare($query);
            
            $result = $stmt->execute([
                ':name'=> $wine['name'],
                ':year'=> $wine['year'],
                ':grapes'=> $wine['grapes'],
                ':country'=> $wine['country'],
                ':region'=> $wine['region'],
                ':description'=> $wine['description'],
                ':picture'=> $wine['picture'],
            ]);

            //Extraire les données
            if($result) {
                $data = json_encode(['success'=>true]);
                
            } else {
                $data = json_encode(['success'=>false]);
            }
            
        } catch(PDOException $e) {
            $data = [
                [
                    "error" => "Problème de base données",
                    "errorCode" => $e->getCode(),
                    "errorMsg" => $e->getMessage(),
                ]
            ];
        }
        $response->getBody()->write($data);
        return $response
                  ->withHeader('content-type', 'application/json')
                  ->withHeader('charset', 'utf-8');
        
        
    });
    
    $app->put('/api/wines/{id}', function(Request $request, Response $response, array $args){
        parse_str($request->getBody()->getContents(), $wine);
        $id = $args['id'];
 
        
          try {
            $pdo = new PDO('mysql:host=localhost;dbname=cellar','root','root', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            // nettoyer les donnee entrante
 
            $query = "UPDATE `wine`"
                    ."set `name`=:name, `year`=:year, `grapes`=:grapes, `country`=:country, `region`=:region, `description`=:description, `picture`=:picture "
                    ."WHERE `id`=:id";
        
            //Envoyer la requête
            $stmt = $pdo->prepare($query);
            
            $result = $stmt->execute([
                ':id'=> $id,
                ':name'=> $wine['name'],
                ':year'=> $wine['year'],
                ':grapes'=> $wine['grapes'],
                ':country'=> $wine['country'],
                ':region'=> $wine['region'],
                ':description'=> $wine['description'],
                ':picture'=> $wine['picture'],
            ]);

            //Extraire les données
            if($result) {
                $data = json_encode(['success'=>true]);
                
            } else {
                $data = json_encode(['success'=>false]);
            }
          
        } catch(PDOException $e) {
            $data = [
                [
                    "error" => "Problème de base données",
                    "errorCode" => $e->getCode(),
                    "errorMsg" => $e->getMessage(),
                ]
            ];
            
            $data = json_encode($data);
        }

        $response->getBody()->write($data);
        return $response
                  ->withHeader('content-type', 'application/json')
                  ->withHeader('charset', 'utf-8');;
        
    });
    

    $app->group('/users', function (Group $group) {
        $group->get('/', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
    
};

