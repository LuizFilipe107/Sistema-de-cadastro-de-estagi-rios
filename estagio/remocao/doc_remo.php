<?php
include("../classes/manipulaData.php");

$card = new manipulaData();
$card->setTable("tb_cadastro");
$card->setCampoId("id_cad");
$card->setValorId($_GET["id_cad"]);
$dados = $card->getListEditar();
$reg = mysqli_fetch_object($dados);

$card3 = new manipulaData();
$card3->setTable("tb_lotacao");
$card3->setCampoId("id_cad");
$card3->setValorId($_GET["id_cad"]);
$dados4 = $card3->getListEditar();
$reg2 = mysqli_fetch_object($dados4);

$card2 = new manipulaData();
$card2->setTable("tb_end");
$card2->setCampoId("id_cad");
$card2->setValorId($_GET["id_cad"]);
$dados2 = $card2->getListEditar();
$reg1 = mysqli_fetch_object($dados2);

$card6 = new manipulaData();
$card6->setTable("tb_telefone");
$card6->setCampoId("id_cad");
$card6->setValorId($_GET["id_cad"]);
$dados6 = $card6->getListEditar();
$reg6 = mysqli_fetch_object($dados6);

$card4 = new manipulaData();
$card4->setTable("tb_naj");
$card4->setCampoId("id_naj");
$card4->setValorId($reg2->id_naj);
$dados5 = $card4->getListEditar();
$reg3 = mysqli_fetch_object($dados5);


$list3 = new manipulaData();
$list3->setTable("tb_defensor order by id_defensor DESC");
$dados3 = $list3->getList();
$list3 = mysqli_fetch_object($dados3);


?>

<!DOCTYPE html>
<html lang="pt">
  <head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>REMOÇÃO</title>

      <!-- CSS -->
    <link rel="stylesheet" href="../css/formulario.css">

     <!-- Bootstrap -->
     <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link href="../css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="../js/bootstrap-datepicker.min.js"></script> 
    <script src="../js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  


    
 <body style="font-size: 18px">


<form class="form-horizontal">
<fieldset>
  <center> <span class=""><img src="../img/logo.png"  width="80px" /></a><i</span></center>

  <div class="container">
  <div class="row">
    <CENTER><h3>MEMORANDO DE REMOÇÃO</h3></CENTER><br>
  </div>
</div>
 
 
 
 <table style="width: 100%" align="center" style="border:0;">
                  <tbody>

                     <tr>
                      <td>
                        MEMO/Nº:&nbsp;&nbsp;<input style="border: 0;" id="Telefone" name="MEMO"  placeholder="" required="" type="text" >
                      </td>
                      <td>
                       <?php $data= date("d/m/Y")?>
                        Brasília:&nbsp;&nbsp;<input style="border: 0;" id="fname" name="fname" required="required" placeholder="" type="text" value="<?=$data?>" >
                       
                      </td>
                    </tr>
                     <br>
                                   
                  
 
 <table  style="width: 100%" align="center" style="border:0;">
                  <tbody>

                    <tr>
                      <td>
                        Para:&nbsp;&nbsp;<input style="border: 0;" id="naj" name="MEMO" placeholder="" required="" type="text" value="<?php echo utf8_encode($reg3->nome)?>">
                      </td>
                      <td>
                       Endereço:&nbsp;&nbsp;<input style="border: 0;" id="endereço" name="Nº" placeholder="" required="" type="text" value="<?php echo utf8_encode($reg3->endereco)?>">
                      </td>
                      
                    </tr>
                    <br>

                    
                        <tr>
                        
                        
                        
                      <td colspan="3"><br>
                      <p>Prezado(a) Senhor(a),</p>
						  <br>
						  <p>Apresento a V. Sª, a Sr.(a)
								<select style="border: 0;" >
									<option value="volvo">estagiário</option>
									<option value="saab">colaborador</option>
								</select>
							  abaixo relacionado, que atuará como colaboradora nesse Núcleo, a partir de <input style="border: 0;" type="date">, removido(a) do Núcleo de Assistência Jurídica do Segundo Grau e Tribunais Superiores, onde colaborou no período de &nbsp;<input style="border: 0;" type="date"> a &nbsp;<input style="border: 0;" type="date">.</p>
						  
                      
                    <br>
                     <tr>

                      <td>
                        Nome:&nbsp;&nbsp;<input style="border: 0;" id="nome" name="MEMO" placeholder="" required="" type="text" value="<?= utf8_encode($reg->nome)?>">
                      </td>
                      
                      <td>
                       Matrícula:&nbsp;&nbsp;<input style="border: 0;" id="matricula" name="Nº"  placeholder="" required="" type="text" value="<?= utf8_encode($reg->matricula)?>">
                      </td>
                      
                    </tr>
                    <br>
                   
                   
                    <tr>

                      <td colspan="5"> <br>
                      <center><br><br>
                       Atenciosamente, <br> 
                        <input type="text" name="fname" style="border: 0;" align="center" ><br> <br><br>
                       Departamento de Estágio

                      </center>
                      </td>
                    </tr>
                    <br>
                     
                     
                      <table  style="width: 100%" align="center" style="border:0;">
                  <tbody>
                    <br><br>
                    <tr>
                      <td>
                        Endereço:&nbsp;&nbsp;<input style="border: 0;" id="Telefone" name="MEMO"  placeholder="" required="" type="text" value="<?= utf8_encode($reg1->residencia)?>"> <br>
                      
                       Fone Residencial:&nbsp;&nbsp;<input style="border: 0;" id="Telefone" name="Nº"  placeholder="" required="" type="text" value="<?=$reg6->residencial?>"><br>
                      
                        Celular:&nbsp;&nbsp;<input style="border: 0;" id="fname" name="fname" required="required" placeholder="" type="text" value="<?=$reg6->celular?>"><br>
                      </td>
                      
                    </tr>
                    
                    </tbody>
                    </table>



                    <table style="width: 100%" align="center" style="border:0;">
                  <tbody>
  
 <hr>
  
                    <p class="navbar-text pull-left">   
                      <center>
        <span class="text-muted"><b>DEPARTAMENTO DE ESTÁGIO</b></span><br>
        <span class="text-muted">SIA TRECHO 17 RUA 07 LOTE 45 - BRASÍLIA/DF</span><br>
         <span class="text-muted">Fone: 2196-4356 - 2196-4357(FAX)</span><br>
         <span class="text-muted">www.defensoria.df.gov.br</span>
      </center>                   </p>
        


<!-- Button (Double) -->
<br><center>
            <img src="../img/impressora.png"  width="40px" a href="#" onClick="window.print(); " class="botao " />
          </center>
        
          <style media="print"> 
            .botao { display: none; } 
          </style>
          <style>
            .ds{ width: 80%; }
            #estagiario{ width: 50%; }
            #ghj{ width: 100%;}
            #nome{ width: 90%; }
          </style>

          <script type="text/javascript">
      $('#exemplo1').datepicker({  
        format: "dd/mm/yyyy", 
        language: "pt-BR",
        startDate: '',
      });
    </script>

</div>
</fieldset>
</form>

<style>
    input{
        background-color: rgba(240, 240, 240, .7);
    }
</style>


</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>