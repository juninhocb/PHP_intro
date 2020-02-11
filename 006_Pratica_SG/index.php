<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        
        $p1 =  new Pessoa("Preta", 1.75, "Joao", "Campinas"); 
        
        print "Pessoa com o nome {$p1->getNome()} e mora na cidade de {$p1->getCidade()} da cor {$p1->getCor()} \n" ; 
        print_r($p1); 
     
        
        ?>
        </pre>
    </body>
</html>
