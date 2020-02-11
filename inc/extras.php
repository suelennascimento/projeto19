 <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">



  <?php include_once("header.php");?>

	<section>
		
		<div class="container" id="destaque-produtos-container">

      <div id="destaque-produtos">

        <div class="item">

          <div class="col-sm-6 col-imagem">
            <img src="img/bcaa.jpg" alt="Nome do produto">
          </div>
          <div class="col-sm-6 col-descricao">
             <h2>BCAA 230000 mega titanium prime</h2>
             <div class="box-valor">
              <div class="text-noboleto text-arial-cinza">no boleto</div>
              <div class="text-por text-arial-cinza">por</div>
              <div class="text-reais text-roxo">R$</div>
              <div class="text-valor text-roxo">17,90</div>
              <div class="text-valor-centavos text-roxo"></div>
              <div class="text-parcelas text-arial-cinza">ou em até 3X de R$ 6,63</div>
              <div class="text-total text-arial-cinza">total a prazo R$ 19,89</div>
            </div>
          <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>Compre Agora</a>
      </div>
    </div>
  </div>



<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
</div>

	</section>

	<?php include_once("footer.php");?>

  <script>
$(function(){

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

});
</script>

<script src="lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

<script  src="lib/bootstrap-4.3.1/bootstrap-4.3.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="lib/bootstrap-4.3.1/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/owlcarousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="lib/owlcarousel/dist/assets/owl.carousel.min.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



  <script>

  $(document).ready(function(){

  $("#logotipo").on("mouseover",function(){
      console.log("passou o mouse no logotipo!")

   $("#banner h1").css({"color":"red", "font-size":"12em","transition":"1s"});


  });

$("#input-search").on("focus", function(){

   $("li.search").addClass("ativo");

}).on("blur", function(){
    
    $("li.search").removeClass("ativo");

});

$(".itemdestaques").owlCarousel({
	loop:true,
	margin: 10,
	nav:true,
	navText: ["Anterior", "próximo"],
	responsive: {
		0 :{
            items: 1
		},
		480:{
            items: 3
		},
		1000: {
             items: 4
		}

	}
});
});

	</script>

	<script src="js/efeitos.js"></script>


	?php

require_once("inc/configuration.php");

$sql = new Sql();

$result = $sql->query("SELECT * FROM tb_produtos;");

while($row = mysql_fetch_array($result)){

  var_dump($row);
}

exit;
?>





<script>
$(function(){

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

});
</script>