<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->
<?php

$products = [
        [
            'name' => 'prodotto 1',
            'price' => '25.55$',
            'img' => 'https://picsum.photos/id/235/200/300',
            'type' => 'elettronica',
        ],
        [
            'name' => 'prodotto 2',
            'price' => '4.15$',
            'img' => 'https://picsum.photos/id/257/200/300',
            'type' => 'elettronica',
        ],
        [
            'name' => 'prodotto 3',
            'price' => '91.00$',
            'img' => 'https://picsum.photos/id/237/200/300',
            'type' => 'cucina',
        ],
        [
            'name' => 'prodotto 4',
            'price' => '12.50$',
            'img' => 'https://picsum.photos/id/231/200/300',
            'type' => 'cucina',
        ],
        [
            'name' => 'prodotto 5',
            'price' => '19.99$',
            'img' => 'https://picsum.photos/id/238/200/300',
            'type' => 'abbigliamento',
        ],
        [
            'name' => 'prodotto 6',
            'price' => '84.10$',
            'img' => 'https://picsum.photos/id/217/200/300',
            'type' => 'abbigliamento',
        ],
];

    $filterProducts = [];

    if (isset($_GET['type']) !== false) {
        $type = $_GET['type'];
        if ($type == 'tutti') {
            $filterProducts = $products;
        }
        foreach ($products as $product) {
            if ($product['type'] == $type) {
                $filterProducts[] = $product;
            }
        }
    } else {
        $filterProducts = $products;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <form action='index.php' method='GET'>
      <select name='type' id='type'>
        <option value='tutti'>tutti</option>
        <option value='elettronica'>elettronica</option>
        <option value='cucina'>cucina</option>
        <option value='abbigliamento'>abbigliamento</option>
      </select>
      <button>Cerca</button>
    </form>    

    <?php foreach ($filterProducts as $product) : ?>

        <img src="<?php echo $product['img']; ?>" alt="">
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['price']; ?></p>
        <p><?php echo $product['type']; ?></p>
        
    <?php endforeach; ?>


</body>
</html>