

<?php include_once("header.php");?>

	<section ng-controller="destaque-controller">
		
		<div id="banner">

		<h1>Super Suplementos<small>Sejam bem vindos a nossa loja!</small></h1>
    
       
      </div>
        <div class="container" id="destaque-produtos-container">
          <div class="row text-center">
          <h2>Mais Vendidos</h2>
          <hr>
          </div>

    <div id="destaque-produtos">

      
      <div class="item" ng-repeat="produto in produtos">
        
        <div class="col-sm-6 col-imagem">
          <a href="produto-{{produto.id_prod}}"><img src="img/{{produto.foto_principal}}" alt="Nome do Produto"></a>
        </div>
        <div class="col-sm-6 col-descricao">
          <h2>{{produto.nome_prod_longo}}</h2>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">{{produto.preco}}</div>
            <div class="text-valor-centavos text-roxo">{{produto.centavos}}</div>
            <div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
            <div class="text-total com juros text-arial-cinza">total a prazo R$ {{produto.total}}</div>  
          </div>
          <a href="produto-{{produto.id_prod}}" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>
    </div>

    </div>

    <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
    <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

  </div>


        <div class="container" id="todos-mais-container">
        
        <div id="todos-mais">

        <div class="row text-center">
        	<h2>Todos os Produtos</h2>
          <hr>
        	</div>

      <div class=" row" >

       	<div class="col-md-3 col-descricao">
       		<img src="img/bcaa.jpg">
       		<h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
        <a href="produto-7" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

      <div class="col-md-3 col-descricao">
          <img src="img/zma1.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="produto-7" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

        <div class="col-md-3 col-descricao">
          <img src="img/whey.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="produto-7" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>


       		<div class="col-md-3 col-descricao">
          <img src="img/max.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="produto-7" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

      </div>

<div class=" row" >

        <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

      <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div> 
           <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

        <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>


          <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

      </div>

<div class=" row" >

        <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

      <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

        <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>


          <div class="col-md-3 col-descricao">
          <img src="img/bcaa.jpg">
          <h3>Max titanuem lget</h3>
          <div class="box-valor">
            <div class="text-noboleto text-arial-cinza">no boleto</div>
            <div class="text-por text-arial-cinza">por</div>
            <div class="text-reais text-roxo">R$</div>
            <div class="text-valor text-roxo">59,99</div>
            <div class="text-valor-centavos text-roxo"></div>
            <div class="text-parcelas text-arial-cinza">ou em até 3x de R$ 22,21</div>
            <div class="text-total text-arial-cinza">total a prazo com juros R$ 80,00</div>  
          </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
        </div>

      </div>
</div>


<div id="call-to-action">
        
        <div class="text-center">

          <div class="row">
            <h2>Sobre a loja Super Suplementos</h2>
            <hr>  
          </div>
            
          <div class="row">
            
            <p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Uteni ad minima veniam, quis nostrum sed quia non numquam eius modi tempora incidunt ut. quia non numquam eius numquam eius modi temp modi tempora incidunt ut labore et dolore m.</p>

          </div>
        </div>
          <div class="text-center">
            <div class="row row-max-400">
              
              <div class="col-xs-6">
                <a href="#" class="btn btn-roxo">Entrar</a>
              </div>
              <div class="col-xs-6">
                <a href="#" class="btn btn-amarelo">Registre-se</a>
              </div>

            </div>
          </div>
      </div>
  

	</section>

	<?php include_once("footer.php");?>

  <script>

  angular.module("shop", []).controller("destaque-controller", function($scope, $http){

   $scope.produtos = [];
   $scope.buscados = [];


   var initCarousel = function(){

    $("#destaque-produtos").owlCarousel({
   
        autoPlay: 5000,
        items : 1,
        singleItem: true
   
      });

      var owlDestaque = $("#destaque-produtos").data('owlCarousel');

     $('#btn-destaque-prev').on("click", function(){

        owlDestaque.prev();

        });

      $('#btn-destaque-next').on("click", function(){

        owlDestaque.next();

      });

  };


   $http({
    method: 'GET',
    url: 'produtos'
  }).then(function successCallback(response) {

      $scope.produtos = response.data;

      setTimeout(initCarousel, 1000);

    }, function errorCallback(response) {
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });

  $http({
    method: 'GET',
    url: 'produtos-mais-buscados'
  }).then(function successCallback(response) {

      $scope.buscados = response.data;

    }, function errorCallback(response) {
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });
/*

  $scope.produtos.push({
    nome_prod_longo:"BCAA (120 Caps)-Growth Supplements de Gsuplementos",
    foto_principal:"bcaa1.jpg",
    preco:"22.50",
    centavos:"",
    parcelas:5,
    parcela:"5.00",
    total:"25.00"
  }); 

  $scope.produtos.push({
    nome_prod_longo:"Mass Titanium 17500 3kg de CWB Suplementos Importados",
    foto_principal:"max.jpg",
    preco:"59.99",
    centavos:"",
    parcelas:3,
    parcela:"22.21",
    total:"80.00"
  }); 

  $scope.produtos.push({
    nome_prod_longo:"Whey Protein 100% Whey Gold Standard 2 Lbs - Optimum Nutriti -Unissex - Chocolate de Netshoes",
    foto_principal:"whey.jpg",
    preco:"170.99",
    centavos:"",
    parcelas:4,
    parcela:"42.75",
    total:"170.99"
  }); 
*/

});
</script>