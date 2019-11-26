<?php include "../estrutura/admin/header.php" ?>
<?php include "../estrutura/admin/sidebar.php" ?>
<div id="content-wrapper">

      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="http://localhost/ciuem_concursos/view/admin/listar_concursos.php">Concursos</a>
          </li>
          <li class="breadcrumb-item active">cadastrar</li>
        </ol>
        <div class="card card-login mx-auto mt-5" style="margin-top: 1rem !important;max-width: 70rem!important;">
          <div class="card-header" style="font-size:20px!important;">Novo concurso</div>
            <div class="card-body">
              <form action="registar_concursos.php" method="POST">
                <div class="form-row">
                  <div class="col">
                  Modalidade: <select name="modalidade" class="custom-select-sm">
                      <option selected>Selecionar modalidade</option>
                      <option value="Concurso publico">Concurso publico</option>
                      <option value="Concurso por lance">Concurso por lance</option>
                      <option value="Concurso privado">Concurso privado</option>
                    </select>
                  </div>
                  <div class="col">
                       Referencia: <input type="text" class="form-control form-control-sm" name="referencia">
                  </div>
                  <div class="col">
                       Designacao: <input type="text" class="form-control form-control-sm" name="designacao">
                  </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                      Pedido de Aquisicao: <select name="aquisicao" class="custom-select-sm">
                        <option selected>Selecionar pedido</option>
                        <option value="Material de escritorio">Material de escritorio</option>
                        <option value="Material de Limpeza">Material de Limpeza</option>
                        <option value="Computadores">Computadores</option>
                      </select>
                    </div>
                    <div class="col">
                        Data de inicio:<br> <input type="date" name="dataInicio" ><br>
                    </div>
                    <div class="col">
                        Data de termino:<br> <input type="date" name="dataFim" ><br>
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                    Descricao: <textarea class="form-control" rows="2" name="descricao"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                      <br> <input type="file" class="form-control-file border" name="doc">
                    </div>
                </div> 
                <div class="form-row">
                    <div class="col">
                      <br> <button type="submit" class="btn btn-primary" style="float: right; right:0px; margin: 10px;">Cadastrar</button>
                    </div>
                </div>  
              </form>
            </div>
          </div>
      </div>  <!-- /.container-fluid -->

<?php include "../estrutura/admin/footer.php"?>
<style>
        * {
          box-sizing: border-box;
        }

        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
        }

        label {
          padding: 12px 12px 12px 0;
          display: inline-block;
        }

        input[type=submit] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          float: right;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        .col-25 {
          float: left;
          width: 25%;
          margin-top: 6px;
        }

        .col-75 {
          float: left;
          width: 75%;
          margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
}
</style>