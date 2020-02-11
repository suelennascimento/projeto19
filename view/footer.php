<footer>
		
		<div class="row row-cinza-claro">
        
        <div class="container">
          
          <div class="row">
            
            <div class="col-md-2 text-center">
              
              <img class="logotipo" src="img/images2.jpg" alt="Logotipo">

            </div>
            <div class="col-md-10">
              
              <div class="row row-cols">
                <div class="col-md-4 col-popular-post">
                  
                  <h4>Compre com Segurança</h4>

                  <ul class="list-unstyled">
                    <li>
                      <h5>Entregamos pra todo o Brasil.</h5>
                      <time>January 01, 2016</time>
                    </li>
                    <li>
                      <a href="#"><h5>Sobre trocas e devoluções.</h5></a>
                      <time>January 01, 2016</time>
                    </li>

                  </ul>

                </div>
                <div class="col-md-4 col-links">
                  
                  <h4>LINKS</h4>

                  <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-right"></i>Início</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>Todos os produtos</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i>Categorias</a></li>
                  </ul>

                </div>
                <div class="col-md-4 col-get-in-touch">
                  
                  <h4>Redes Socias</h4>

                  <p><a href="(21)998300509"><i class="fa fa-phone"></i>Fale conosco</a></p>

                  <ul class="list-unstyled list-socials">
                    <li>
                      <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                    </li>
                  </ul>

                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="row row-cinza-escuro">
        
        <div class="container">
          
          <p class="pull-left">Copyright © Orlando City Soccer 2016. All rights reserved.</p>
          <p class="pull-right text-roxo">Created by Projetos-Rio</p>

        </div>

      </div>
	</footer>
		
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/raty/lib/jquery.raty.js"></script>
<script src="js/efeitos.js"></script>
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

$(".thumbnails").owlCarousel({
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

$('.estrelas').each(function(){

      $(this).raty({
        starHalf    : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
      starOff       : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
      starOn        : 'lib/raty/lib/images/star-on.png',
      score         : parseFloat($(this).data("score"))
      });

    });

});


  </script>

</body>
</html>