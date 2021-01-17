<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>
</head>
<body>
    
    <?php
        class Magazzino {

            public $nome;
            public $location;
            public $prodotti = [];

            public function __construct($nome, $location) {
                $this -> nome = $nome;
                $this -> location = $location;
            }
        }

        class Prodotto {

            public $nome;
            public $peso;
            public $prezzo;
        }

        $magazzino = new Magazzino("Pippo", "Roma");
        $magazzino -> prodotti = [1, 2, 3];
        var_dump($magazzino); echo '<br>' . '<br>';

        $prodotto = new Prodotto(); 
        $prodotto -> nome = "ProdottoUno";
        $prodotto -> peso = 10;
        $prodotto -> prezzo = 40;
        var_dump($prodotto);
    ?>
</body>
</html>