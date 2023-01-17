<?php
$products = array(
        array(
            'id'=>1,
            'name'=> 'Iphone',
            'price'=>  100000,
            'description'=>'cui thoi'
        ),
        array(
            'id'=>2,
            'name'=> 'Samsung',
            'price'=>  100001,
            'description'=>'tam duoc'
        ),
        array(
            'id'=>3,
            'name'=> 'xiaomi',
            'price'=>  11,
            'description'=>'cho tao con dam cho ay'
        ),
    );
$xml =new DOMDocument('1.0','UTF-8');

$root = $xml->createElement('products');
$xml->appendChild($root);

foreach ($products as $value ){
    $product = $xml->createElement('product');
    foreach ($value as $key=>$value){
        $node = $xml->createElement($key,$value);
        $product->appendChild($node);
    }
    $root->appendChild($product);

}
$xml->formatOutput = true;
$xml->save('files/data.xml')or die('Error');


//    header("Content-type: text/xml");
//    $products = array(
//        array(
//            'id'=>1,
//            'name'=> 'Iphone',
//            'price'=>  100000,
//            'description'=>'cui thoi'
//        ),
//        array(
//            'id'=>2,
//            'name'=> 'Samsung',
//            'price'=>  100001,
//            'description'=>'tam duoc'
//        ),
//    );
/*    $xml = '<?xml version="1.0" encoding="UTF-8"?>';*/
//    $xml .= '<products>';
//
//    foreach ($products as $value){
//        $xml .= '<product id="'.$value['id'].'" >
//        <name>'.$value['name'].'</name>
//        <price>'.$value['price'].'</price>
//        <description>'.$value['description'].'</description>
//    </product>';
//    }
//    $xml .= '</products>';
//    echo $xml;