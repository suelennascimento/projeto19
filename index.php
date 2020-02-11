<?php

require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();



// GET route
$app->get(
    '/',
    function () {
        require_once("view/index.php");
    }
);
$app->get(
    '/videos',
    function (){
    
        require_once("view/videos.php");
    }

);

$app->get(
    '/shop-produto',
    function () {
    
    require_once("view/shop-produto.php");

    }

);


$app->get('/produtos', function(){

    $sql = new Sql();

    $data = $sql->select("SELECT * FROM super_produtos
where preco_promorcional > 0 order by preco_promorcional desc limit 3;");

    foreach ($data as &$produto) {
        $preco = $produto['preco'];
        $centavos = explode(".", $preco);
        $produto['preco'] = number_format($preco, 2,);
        //$produto['centavos'] = end($centavos);
        $produto['parcelas'] = 10;
        $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    }

    echo json_encode($data);

});

$app->get('/produtos-mais-buscados', function(){

    
    $sql = new Sql();

    $data = $sql->select("SELECT 
super_produtos.id_prod,
super_produtos.nome_prod_curto,
super_produtos.nome_prod_longo,
super_produtos.codigo_interno,
super_produtos.id_cat,
super_produtos.preco,
super_produtos.peso,
super_produtos.largura_centimetro,
super_produtos.altura_centimetro,
super_produtos.quantidade_estoque,
super_produtos.preco_promorcional,
super_produtos.foto_principal,
cast(avg(review) as dec(10,2)) as media, 
count(id_prod) as total_reviews
FROM super_produtos 
INNER JOIN tb_reviews USING(id_prod) 
GROUP BY 
super_produtos.id_prod,
super_produtos.nome_prod_curto,
super_produtos.nome_prod_longo,
super_produtos.codigo_interno,
super_produtos.id_cat,
super_produtos.preco,
super_produtos.peso,
super_produtos.largura_centimetro,
super_produtos.altura_centimetro,
super_produtos.quantidade_estoque,
super_produtos.preco_promorcional,
super_produtos.foto_principal
LIMIT 4;");


    foreach ($data as &$produto) {
        $preco = $produto['preco'];
        $centavos = explode(".", $preco);
        $produto['preco'] = number_format($preco, 0, ",", ".");
        $produto['centavos'] = end($centavos);
        $produto['parcelas'] = 10;
        $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
        $produto['total'] = number_format($preco, 2, ",", ".");
    }
 
 echo json_encode($data);

});


$app->get("/produto-:id_prod", function($id_prod){

 $sql = new Sql();

 $produtos = $sql->select("SELECT * FROM super_produtos WHERE id_prod = $id_prod");
    
    $produto = $produtos[0];

    $preco = $produto['preco'];
    $centavos = explode(".", $preco);
    $produto['preco'] = number_format($preco, 0, ",", ".");
    $produto['centavos'] = end($centavos);
    $produto['parcelas'] = 10;
    $produto['parcela'] = number_format($preco/$produto['parcelas'], 2, ",", ".");
    $produto['total'] = number_format($preco, 2, ",", ".");

    require_once("view/shop-produto.php");
});


$app->get(
    '/cart',
    function () {
        
        require_once("view/cart.php");
        
    }
);

$app->get('/carrinho-dados', function(){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $carrinho['produtos'] = $sql->select("CALL sp_carrinhosprodutos_list(".$carrinho['id_car'].")");


    $carrinho['total_car'] = number_format((float)$carrinho['total_car'], 2, ',','.');
    $carrinho['subtotal_car'] = number_format((float)$carrinho['subtotal_car'], 2, ',','.');
    $carrinho['frete_car'] = number_format((float)$carrinho['frete_car'], 2, ',','.');

    echo json_encode($carrinho);
});

$app->get('/carrinhoAdd-:id_prod', function($id_prod){
      
      $sql = new Sql();
      
    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();


      $sql->query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].",".$id_prod.")");

      header("location: cart");
      exit;


});

$app->delete("/carrinhoRemoveAll-:id_prod", function($id_prod){

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutostodos_rem(".$carrinho['id_car'].", ".$id_prod.")");

    echo json_encode(array(
        "success"=>true
    ));

});

$app->post("/carrinho-produto", function(){

   $data = json_decode(file_get_contents("php://input"), true);

   $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_add(".$carrinho['id_car'].", ".$data['id_prod'].")");

    echo json_encode(array(
        "success"=>true
    ));

});

$app->delete("/carrinho-produto", function(){

   $data = json_decode(file_get_contents("php://input"), true);

   $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $sql->query("CALL sp_carrinhosprodutos_rem(".$carrinho['id_car'].", ".$data['id_prod'].")");

    echo json_encode(array(
        "success"=>true
    ));

});

$app->get("/calcular-frete-:cep", function($cep){

    require_once("inc/php-calculo-frete-master/frete.php");

    $sql = new Sql();

    $result = $sql->select("CALL sp_carrinhos_get('".session_id()."')");

    $carrinho = $result[0];

    $sql = new Sql();

    $produtos = $sql->select("CALL sp_carrinhosprodutosfrete_list(".$carrinho['id_car'].")");

    $peso = 0; 
    $comprimento = 0;
    $altura = 0;
    $largura = 0;
    $valor = 0;


foreach ($produtos as $produto) {
        $peso =+ $produto['peso'];
        $comprimento =+ $produto['comprimento'];
        $altura =+ $produto['altura'];
        $largura =+ $produto['largura'];
        $valor =+ $produto['preco'];
    }

    $cep = trim(str_replace('-', '', $cep));

    $frete = new Frete(
        $cepDeOrigem = '01418100', 
        $cepDeDestino = $cep, 
        $peso, 
        $comprimento, 
        $altura, 
        $largura, 
        $valor
    );

    $sql = new Sql();

    $sql->query("
        UPDATE tb_carrinhos 
        SET 
            cep_car = '".$cep."', 
            frete_car = ".$frete->getValor().",
            prazo_car = ".$frete->getPrazoEntrega()."
        WHERE id_car = ".$carrinho['id_car']
    );

    echo json_encode(array(
        'success'=>true
    ));

});

$app->run();




