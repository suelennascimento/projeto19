<?php include_once("header.php");?>

<section>
	
	<div class="container" id="destaque-produtos-container">

		<div id="destaque-produtos">
			
			<div class="col-sm-6 col-imagem">
				<img src="img/<?=$produto['foto_principal']?>" alt="<?=$produto['nome_prod_longo']?>">
			</div>
			<div class="col-sm-6 col-descricao">
				<h2><?=$produto['nome_prod_longo']?></h2>
				<div class="box-valor">
					<div class="text-noboleto text-arial-cinza">no boleto</div>
					<div class="text-por text-arial-cinza">por</div>
					<div class="text-reais text-roxo">R$</div>
					<div class="text-valor text-roxo"><?=$produto['preco']?></div>
					<div class="text-valor-centavos text-roxo">,<?=$produto['centavos']?></div>
					<div class="text-parcelas text-arial-cinza">ou em até <?=$produto['parcelas']?>x de R$ <?=$produto['parcela']?></div>
					<div class="text-total text-arial-cinza">total a prazo R$ <?=$produto['total']?></div>	
				</div>
				<a href="carrinhoAdd-<?=$produto['id_prod']?>" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
			</div>

		</div>

	</div>
       
       <div class="container">

        <div id="col-informacoes"> 
       
       <h3><p>Descrição</p></h3>
       <hr>

        	<h4> Mass 17500 REFIL foi elaborado a partir de pesquisas revolucionárias na área de nutrição, oferecendo o aporte de nutrientes necessário para o máximo rendimento; sua formula visa o ganho de massa. 
Por isso a fórmula de Mass 17500 REFIL é rica em proteínas de alto valor biológico (AVB), aminoácidos e carboidratos complexos. Além disso, faz parte de sua composição a Whey Protein Isolate (Proteína Isolada do Soro do Leite), matéria prima desenvolvida por processo diferenciado chamado que eleva a proteína à sua mais pura concentração (95%) com menos de 1% de gordura e isenta de lactose. Matérias primas importadas e de alta qualidade.
</h4>


    <h3><p>Beneficios</p></h3>

    <h4> Alimento compensador para praticantes de atividades físicas 
-Whey Protein Isolada 
-Whey Protein Concentrada 
-Colágeno Hidrolisada 
-Albumina 
-Matéria prima importada

   </h4>

   	<h3><p>Sugestões</p></h3>
   	<h4>
Bata no liquidificador 160g (5 dosadores) em 250 ml de leite integral, desnatado ou água mineral. Para melhores resultados, utilize Mass 17500 REFIL antes e depois do treino, ou conforme a orientação do nutricionista.
</h4>
</div>
</div>


	

	
		
 
		

</tbody>



</table>

    </div>

    <div id="mais-buscados" class="container">
		
		<div class="row text-center title-default-roxo">
			<h2>os mais buscados</h2>
			<hr>	
		</div>

		<div class="row">
			

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/bcaa.jpg" alt="bcaa1" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="estrelas" data-score="3"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem juros</div>
					</a>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/zma1.jpg" alt="Panelas" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="estrelas"  data-score="5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem juros</div>
					</a>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/zma1.jpg" alt="Panelas" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="estrelas"  data-score="2.5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem juros</div>
					</a>
				</div>

			</div>

			<div class="col-md-3">
				<div class="box-produto-info">
					<a href="#">
						<img src="img/zma1.jpg" alt="Panelas" class="produto-img">
						<h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
						<div class="estrelas"  data-score="5"></div>
						<div class="text-qtd-reviews text-arial-cinza">(300)</div>
						<div class="text-valor text-roxo">R$ 109,90</div>
						<div class="text-parcelado text-arial-cinza">10x de R$ 10,99 sem juros</div>
					</a>
				</div>

			</div>

		</div>

	</div>
			
			
          
          
         
			

    </section>

<?php include_once("footer.php");?>


<script>

$.(function(){

		$('.estrelas').each(function(){

	  		$(this).raty({
		  		starHalf    : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
				starOff     : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
				starOn      : 'lib/raty/lib/images/star-on.png',
				score		: parseFloat($(this).data("score"))
		  	});
       });
	};

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

</script>

    
  

  