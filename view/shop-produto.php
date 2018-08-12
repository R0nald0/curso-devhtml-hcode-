<?php include_once("header.php");?>

<section ng-controller="destaque-controller">

            <div class="container" id="destaques-produtos-container"  >

                <div id="destaques-produtos">
                   
                   <div  class="col-sm-6 col-imagem" >
                            <img src="img/produtos/{{produto.foto_principal}}" alt=" {{produto.nome_prod_longo}}">  </div>   
                     
                         <div class="col-sm-6 col-descricao">       
                            <h2>{{produto.nome_prod_longo}}</h2>
                                 
                               <div class="box-valor">
                               <div class="no-boleto text-arial-cinza">no boleto</div>
                               <div class="por text-arial-cinza">por</div>
                               <div class="reais text-roxo">R$</div>
                               <div class="valor text-roxo">{{produto.preco}}</div>
                               <div class="centavos text-roxo">,{{produto.centavos}}</div>
                               <div class="texto-parcelas text-arial-cinza">ou em ate {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
                               <div class="total text-arial-cinza">total a prazo R$ {{produto.total}}</div> 
                                 </div>
                                 <a href="#" class="btn btn-comprar "> <i class="fa fa-shopping-cart"> </i> compre agora</a>
                            </div>
                </div>               
                  
            </div>

           
               
           
         

    </section>

<?php include_once("footer.php");?> 

