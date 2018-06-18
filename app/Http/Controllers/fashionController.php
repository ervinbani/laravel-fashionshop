<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\product;

    class fashionController extends Controller

    {
        public function catalogo(){
          $products = product::all();

          foreach ($products as $product) {

              
          }
          //dd();


          return view('catalogo', ['products'=>$products]);
        }
        public function product1(){
          $product1 = ['id' => '1',
                      'name'=>'Square Dress in Off White',
                      'brand' => 'Boolean Fashion',
                       'description' => 'Square Dress in Off White by Issey Miyake Pleats Please. Timeless and ethereal top features Pleats Pleats signature vertical pleats, high neck opening, straight hem, layered panels at sides, and short sleeves.',
                       'price' => '199,00',
                       'image' => 'http://cdn.shopify.com/s/files/1/0153/0845/products/6-23_Womens_Part1-132_1024x1024@2x.jpg?v=1510856709',
        ];
          return view('details', ['product'=>$product1]);
        }
        public function product2(){
          $product2   = ['id'=>'2',
                      'name'=>'Square Dress in Off White',
                      'brand' => 'Boolean Fashion',
                       'description' => 'Square Dress in Off White by Issey Miyake Pleats Please. Timeless and ethereal top features Pleats Pleats signature vertical pleats, high neck opening, straight hem, layered panels at sides, and short sleeves.',
                       'price' => '199,00',
                        'image' => 'http://cdn.shopify.com/s/files/1/0153/0845/products/09-22_Womens_HenrickVibskov_FINAL-17_1024x1024@2x.jpg?v=1510854156',
        ];
          return view('details', ['product'=>$product2]);
        }
}
