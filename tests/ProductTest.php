<?php
namespace App\tests;

use App\Controller\Product;
use PHPUnit\Framework\TestCase;
//** Pour que PHPUnit recnnaisse  qu’il s’agit de la méthode de test, le nom de la méthode doit */ 
//** commencer obligatoirement par test suite du nome de ma méthode*/ 

class ProductTest extends TestCase
{
    //Example undescores
        public function test_compute_TVA_product_type_food()
        {
            $product = new Product('nomDuProduit', Product::FOOD_PRODUCT, 10); //Istancier l'object Product avec le 3 param
            $result = $product->computeTVA();

            $this->assertSame(0.55, $result); // modificare 1 parametro per creare l'errore
            //1 para: valeur attendue (0,055 * 10)
            //2 para: $result qui contiene le resulat execute
        }
        /* Example camel case
            public function testComputeTVAProductTypeFood()
            {}
        */

        /** @test */ //Possible donner le nom
        //public function tata()
        //{}


        /* Test other Produit =! "food" */
        public function test_compute_TVA_product_other_type()
        {
            $product= new Product('nomDuProduit', 'other' , 10 );
            $result = $product->computeTVA();
            $this->assertSame(1.96, $result); 
        }

         /* Test negative price compute TVA */
         public function test_negative_price_compute_TVA()
         {
             $product= new Product('nomDuProduit', 'other' , -1 ); // Assegnamo il prezzo negativo
             $this->expectException('LogicException'); // On previent avant que le code soit exécutée.
             $result = $product->computeTVA();
         }






         /* Test con DataProvider                                                   */
         /* Permet de lancer un test en lui fournissant de s données en entrée,     */
         /* ces données prenant la forme de paramètres à la méthode du test         */

         /**
          * @dataProvider pricesForFoodProduct
          */
          //Annotation qui permet à PHPUnit de recuperer les donnes dans la methode priceForFoodProduit()

          public function test_compute_TVA_product_type_food2($price, $expectedTVA)
          {
              $product = new Product('nomDuProduit', Product::FOOD_PRODUCT, $price); 
              $this->assertSame($expectedTVA, $product->computeTVA()); // Resultat attend et resltat obetnu.
          }

          public function pricesForFoodProduct()
          {
            return[
                [0,0.0],
                [20,1.1],
                [100, 5.5],
            ];
          }

}


//Terminal
//per lanciare il test->        vendor/bin/phpunit