<?php
require_once './modls/db/Animal.php';
class Product extends Animal
{
    public function __construct(public string $typeOfAnimal, public string $nameProduct, public string $typeProduct, public int $weight, public string $img, public float $price, public string $icon)
    {
        parent::__construct($typeOfAnimal);

        $this->nameProduct = $nameProduct;
        $this->typeProduct = $typeProduct;
        $this->weight = $weight;
        $this->img = $img;
        $this->price = $price;
        $this->icon = $icon;
    }
}
// prodotto cibo cuccia gioco <i class="fa-solid fa-dog"></i> <i class="fa-solid fa-cat"></i>
$productsForDog = [
    $prodotto = new Product('Cane', 'Guinzaglio avvolgibile a corda', 'Guinzaglio', 3, 'https://shop-cdn-m.mediazs.com/bilder/5/400/252304_pla_flexi_new_classic_seilleine_s_rot_5m_hs_01_5.jpg', 1, 'fa-solid fa-dog'),

    $cibo = new Product('Cane', 'Briantos Adult', 'Cibo', 14, 'https://shop-cdn-m.mediazs.com/bilder/0/400/briantos_adult_salmonrice_14kg_1000x1000_0.jpg', 29.99, 'fa-solid fa-dog'),
    $cuccia = new Product('Cane', 'Cuccia per cani Jackson', 'Cuccia', 30, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/6/400/167896_jackson_outside_res90_fg_4159_6.jpg', 92.19, 'fa-solid fa-dog'),
    $gioco = new Product('Cane', 'Corda Osso', 'GSioco', 2, 'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000', 5.99, 'fa-solid fa-dog')

];

$productsForcat = [
    $prodotto = new Product('Gatto', 'Flexi Guinzaglio Nuovo classico', 'guinzaglio', 1, 'https://static5.gattiliano.it/ita_pm_Flexi-Guinzaglio-Nuovo-classico-XS-Corda-3m-Fino-a-8kg-Nero-15013_1.jpg', 8.44, 'fa-solid fa-cat'),
    $cibo = new Product('Gatto', 'Ultima Sterilizzati Pollo', 'Cibo', 1.5, 'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw53886dcd/idt/140181_1_1_4.jpg?sw=800&sh=800', 10.99, 'fa-solid fa-cat'),
    $cuccia = new Product('Gatto', 'Snooze Origin', 'Cuccia', 5, 'https://www.fantail.eu/cdn/shop/products/5411468146646_1_0778f636-7a46-49dd-8216-3dad4d68c79f_600x.jpg?v=1666102743', 95, 'fa-solid fa-cat'),
    $gioco = new Product('Gatto', 'Fit and Fun Tiragraffi', 'Gioco', 6, 'https://arcaplanet.vtexassets.com/arquivos/ids/286795/e5287875248fd6a901e93b1d05b274d875bfbd7d_a05ecb82c1b92d21eb898fcdb8a8d337fb0e5400--1-.jpg?v=638216516771530000', 30.99, 'fa-solid fa-cat')
];

//var_dump($productForDog, $productForcat);
