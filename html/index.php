<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>:: LOGIN ::</title>
<link rel="stylesheet" type="text/css" href="folhas_styles/botao.css"/>
<link rel="stylesheet" type="text/css" href="folhas_styles/geral.css"/>

<style type="text/css">
#apDiv5 {
	float:right;
	left:750px;
	margin-top:10px;
	width:236px;
	height:25px;
	z-index:1001;
	color: #FFF;
	font-size:15px;
}
#apDiv6 {
	float:right;
	right:750px;
	margin-top:10px;
	width:236px;
	height:25px;
	z-index:1001;
	color: #FFF;
	font-size:18px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body id="boby">


           
    
    
    <div id="todo">

 
     
	 <div id="top_login"><center>
	  <!--<img src="img/1.png" width="567" height="165"> foto com gorro de papai noel-->
	  <img src="img/logomarcaorin.png" width="567" height="165"></center>
      </div>
            
		<div id="result">
            
          <div id="apDiv1_login">
          <div id="apDiv5">Grandes coisas fez o Senhor por nós, por isso estamos alegres. Até aqui nos ajudou o Senhor!      
          <div style="color:#900; text-align:right; padding-right:15px; font-size:14px;">Salmos 26:3 e I Samuel 7.12</div>
                    </div>
          </div>
<div id="apDiv2_login">
	  <div style="margin:0px auto; width:657px;"></div>
                                    
                            	<div id="resultado_login">
                                	
                                  	<form name="form1" method="post" action="painel_controle/valida_login.php">
                                  	  <table style="text-align:left; color: #000;" width="245" border="0" cellspacing="0" cellpadding="0">
                                  	    <tr>
                                  	      <td width="245">Login:</td>
                               	        </tr>
                                  	    <tr>
                                  	      <td><input type="text" name="usu"></td>
                               	        </tr>
                                  	    <tr>
                                  	      <td>Senha:</td>
                               	        </tr>
                                  	    <tr>
                                  	      <td><input type="password" name="senha"></td>
                               	        </tr>
                                         <tr>
                                  	      <td>Loja:</td>
                               	        </tr>
                                        <td>
                                  	        <select name="loja" style="width:290px; font-size:24px; height:40px;">
                                  	          <option value="1">PRÓSPERA</option>
                                  	          <option value="2">KF VIAGENS & TURISMO</option>
                                  	         </<option value="3">Proverá Alecrim</option>/>
                                              </<option value="4">Próspera Igapó</option>/>
                                  	          </<option value="5">JP Holanda</option>/>
                                  	          </<option value="6">JP Sto. Elias</option>/>
                                  	          </<option value="7">JP Mangabeira</option>/>
                                              
                   	                      	</select>
                                          </td>
                               	        </tr>
                                  	    <tr>
                                  	      <td><input name="button" type="submit" class="botao_login" value="Logar"></td>
                               	        </tr>
                               	      </table>
                           	      </form>
                                  

   	  </div>
</div>
          <div id="apDiv3_login"></div>
          <div id="apDiv4_login">
          <img src="img/orion/orion.png" width="100" height="25"> 
<?php
		  	
			include("painel_controle/roda_pe.php");
		  ?>
          </div>
	  </div>

</div>
   <!-- <script type="text/javascript">
endereco = "https://lh6.googleusercontent.com/-hn4KGaVnqPg/TpbU5e1659I/AAAAAAAAA_8/rDRCWHScH7o/s20/floco.png";
</script> -->
<!-- <script type="text/javascript" src="http://tumbletricks.webs.com/neve-novocodigo.js"></script> -->
</body>
</html>