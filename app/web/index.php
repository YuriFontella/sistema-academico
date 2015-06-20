<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SYSACAD</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body style="background-color: #f0f0f0">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                       SYSCAD
                    </a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">CURSO</div>
                        <ul class="list-group">
                            <a href="#"><li class="list-group-item">Curso</li></a>
                            <a href="#"><li class="list-group-item">Grade Curricular</li></a>
                            <a href="#"><li class="list-group-item">Disciplinas</li></a>
                            <a href="#"><li class="list-group-item">Turmas</li></a>
                        </ul>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">TURMAS</div>
                        <ul class="list-group">
                            <a href="#"><li class="list-group-item">Visualizar Turmas</li></a>
                            <a href="#"><li class="list-group-item">Cadastrar Turmas</li></a>
                        </ul>
                    </div>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">ALUNO</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <a href="<?= BASE_URL . 'index.php?c=AlunoController&m=matricula'?>"><li class="list-group-item">Nova Matricula</li></a>
                            <a href="<?= BASE_URL . 'index.php?c=AlunoController&m=retrieve'?>"><li class="list-group-item">Listagem Matricula</li></a>
                            <a href="#"><li class="list-group-item">Novo Aluno</li></a>
                            <a href="#"><li class="list-group-item">Alunos por Turma ou Curso</li></a>
                        </ul>
                    </div>
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">PROFESSOR</div>
                        <!-- List group -->
                        <ul class="list-group">
                            <a href="#"><li class="list-group-item">Cadastro</li></a>
                            <a href="#"><li class="list-group-item">Listagem Professor</li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <?php include_once(VIEW . DS . $controller->getView()); ?>
                </div>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>

