<?php include "../estrutura/website/header.php" ?>
<?php include "../estrutura/website/navbar.php" ?>
<?php include "../../modal/conexao.php" ?>

<?php 
    $sql = "SELECT * FROM concurso ORDER BY concurso_id DESC LIMIT 5" ;
    $results = mysqli_query($link,$sql);
?>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('../../imagens/test.jpg')">
            <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Concursos 2019</h3>
            <p class="lead">Veja hoje os concursos abertos.</p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('../../imagens/test.jpg')">
            <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Concursos 2019</h3>
            <p class="lead">Veja hoje os concursos abertos.</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('../../imagens/test.jpg')">
            <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4">Concursos 2019</h3>
            <p class="lead">Veja hoje os concursos abertos.</p>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
    </div>
    </header>
    <section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <div class="grid">
			<a href="concurso_aberto.php"><figure class="effect-layla">
				<img src="../../imagens/test2.png" alt="">
				<figcaption>
                    <h2>Concursos<span><br>Abertos</span></h2>
				</figcaption>			
            </figure>
            </a>
		</div>
            </div>
            <div class="col-lg-4 col-12 col-12">
            <div class="grid">
			<a href="concurso_fechado.php"><figure class="effect-layla">
				<img src="../../imagens/test2.png" alt="">
				<figcaption>
                    <h2>Concursos<span><br>Fechados</span></h2>
				</figcaption>			
			</figure>
            </a>
		</div>
            </div>
            <div class="col-lg-4">
            <div class="grid">
			<a href="concurso_previsto.php"><figure class="effect-layla">
				<img src="../../imagens/test2.png" alt="">
				<figcaption>
					<h2>Concursos<span><br>Previstos</span></h2>
				</figcaption>			
			</figure>
            </a>
		</div>
            </div>
        </div>
    </div>
    </section>

    <section class="py-3" style="background-color:#EEEEEE;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div id="content">
                    <h3 class="heading">Mais Recentes</h3>
                    <hr class="my-4">
                    <?php while($dados = mysqli_fetch_array($results)){ ?>
                        <div class="card mais_recents_cartao" style="margin-bottom:5px">
                            <div class="card-body">
                            <div class="row">

                                    <div class="col-lg-2">
                                        <img src="../../imagens/test3-1.png" alt="..." style="width:130px;height:100px;margin-left:0;">
                                    </div>
                                    <div class="col-lg-10">
                                        <h4><?php echo $dados["referencia"];?></h4>
                                        <hr>
                                        <p><?php echo $dados["descricao"];?></p>
                                        <button type="button" class="btn btn-outline-warning btn-sm">Ver mais</button>
                                    </div>
                            </div>
                        </div>
                        </div>
                    <?php }?>  
                   
                </div>
            </div>
        </div>
    </section>
<?php include "../estrutura/website/footer.php" ?>