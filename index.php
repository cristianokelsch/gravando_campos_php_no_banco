<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <form class="form-horizontal" action="gravar_informacoes.php" method="POST" enctype="multipart/form-data" >
                <fieldset>

                    <div  class="alert alert-info" role="alert"> 
                        <p class="text-center"><strong> GRAVANDO INFORMAÇÕES NO BANCO DE DADOS </strong></p>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="nome">Nome</label>  
                        <div class="col-md-5">
                            <input type="text" name="nome" placeholder="Nome" class="form-control input-md" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">E-mail</label>  
                        <div class="col-md-5">
                            <input type="email" name="email" placeholder="E-mail" class="form-control input-md" required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success" >Gravar</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </body>
</html>
