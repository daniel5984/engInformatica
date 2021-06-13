<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Gestão de uma Quinta!</h1>
        <?php    if(!Yii::$app->user->isGuest){//verificar se tem conta   ?>
        <p class="lead">Bem-vindo <?php echo "(".Yii::$app->user->identity->username.")" ?> ao site da quinta, aqui pode verificar o stock e fazer encomendas.Se tiver interessado também pode-se candidatar para trabalhar na quinta preenchendo um formulário</p>
       

       <?php if(strcasecmp(Yii::$app->user->identity->username , 'admin' )==0) { //Se for o Admin ?>
       
       <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/cliente">Visualizar todos os Clientes </a>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/candidatura">Visualizar todas as candidaturas </a>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/candidatura-funcionario">Mostrar candidaturas aprovadas </a> 
      
      <p></p>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/lote/index">Mostrar os lotes </a>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/armazem/index">Mostrar os armazens </a>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/encomenda-venda/index">Mostrar os encomendas </a>
        <?php } ?>


        <?php if(strcasecmp(Yii::$app->user->identity->username , 'admin' )!=0) { //Mostrar para quem não é admin ?>
           
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/lote/index">Verificar Stock</a>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/encomenda-venda/create">Fazer encomenda</a>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/candidatura/create">Candidatar</a>
        <?php }?>

                
        
        <?php  }else{ //Quem não tem Conta ?>
        <p class="lead">Por favor faça Login para ter acesso a mais contúdos do site.</p>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/site/signup">Registar</a>
        <a class="btn btn-lg btn-success" href="http://localhost:8080/index.php/site/login">Login</a></p>
        <?php } ?>

    </div>

    <div class="body-content">
<!-- 
     <div class="row"> 
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div> -->
</div>
