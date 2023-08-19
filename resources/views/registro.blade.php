<!doctype html>
  <html>
    <head>
      <title>login</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    </head>

    <body>
      <!-- Horizontal Form -->
      <div class="container col-sm-4 mt-5">
        <div class="card card-dark">
              <div class="card-header ">
                <div class="row justify-content-center">
                  <img src="assets/imgs/logo.jpg"  class= ""style="width: 10%; height: 10%; border-radius: 30px;"> </div>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">

                  <div class="form-group row justify-content-center">
                    <label for="inputPassword3" class="col-sm-4 col-form-label justify-content-center row">Nome</label>
                    <div class="col-md-10">
                      <input type="password" name="nome" class="form-control" id="inputPassword3" placeholder="Nome completo...">
                    </div>
                  </div>


                  <div class="form-group row justify-content-center">
                    <label for="inputPassword3" class="col-sm-4 col-form-label justify-content-center row">Telefone</label>
                    <div class="col-md-10">
                      <input type="password" name="telefone" class="form-control" id="inputPassword3" placeholder="telefone">
                    </div>
                  </div>

                  <div class="form-group row justify-content-center">
                    <label for="inputEmail3" class="col-sm-4 col-form-label justify-content-center row ">Email</label>
                    <div class="col-md-10">
                      <input type="email" name="email" class="form-control " id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row justify-content-center">
                    <label for="inputPassword3" class="col-sm-4 col-form-label justify-content-center row">Senha</label>
                    <div class="col-md-10">
                      <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-5">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Lembrar</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Criar conta</button>
                  <button type="submit" class="btn btn-default float-right">Cancelar</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
             <span class="row justify-content-center">Já possui uma conta? <a href="login.html" class="ml-2">Entrar</a></span>
      </div>
    
        
        
   
      
    </body>
  </html>