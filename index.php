<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<title>:: ASSINATURA ::</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!--
# Gerador de Assinatura de E-mail
# Criado por:
- Marcos Henrique
- marcos@marcoshenrique.com
- www.marcoshenrique.com
-->
<style type="text/css">
<!--
.style14 {font-size: 10px}
-->
</style>
 <script language="JavaScript">
  function mascara(t, mask){
  var i = t.value.length;
  var saida = mask.substring(1,0);
  var texto = mask.substring(i)
  if (texto.substring(0,1) != saida){
  t.value += texto.substring(0,1);
 }
 }

 function mascaraTelefone(objeto){
        if(objeto.value.length == 0)
         objeto.value = '(' + objeto.value;

        if(objeto.value.length == 3)
          objeto.value = objeto.value + ')';

        if(objeto.value.length == 8)
         objeto.value = objeto.value + '-';
		   
    }

  function mascaraCelular(objeto){
      if(objeto.value.length == 0)
        objeto.value = '(' + objeto.value;

      if(objeto.value.length == 3)
        objeto.value = objeto.value + ')';

      if(objeto.value.length == 9)
        objeto.value = objeto.value + '-';
      
  }

 </script>
<script language="javascript">
function valida_dados (valida)
{
    if (valida.nome.value=="")
    {
        alert ("Digite seu Nome.");
        return false;
    }

    if (valida.setor.value=="")
    {
        alert ("Selecione o setor.");
        return false;
    }

    if (valida.tel.value=="")
    {
        alert ("Digite seu telefone.");
        return false;
    }

    if (valida.cel.value=="")
    {
        alert ("Digite seu celular.");
        return false;
    }

    /* if (valida.local.value=="")
    {
        alert ("Selecione sua Localidade.");
        return false;
    } */
    
return true;
}
</script>
 
<body bgcolor="#EEEEEE">
</head>
<div class="container page-header">
  <center><h1>Gerador de Assinaturas de E-mail</h1></center>
</div>
<table width="*" border="0" cellpadding="0" cellspacing="0" align="center">
  <!-- <tr>
    <td width="18" rowspan="2" background="imagens/sombra-esquerda.png"><div align="left"></div></td>
    <td width="1005" bgcolor="#FFFFFF">
      
    <div align="left">
    <img src="imagens/top.png" width="1200" height="201" border="0" usemap="#Map" />      </div></td>
    <td width="18" rowspan="2" background="imagens/sombra-direita.png"></td>
  </tr>
  <tr> -->
    <td bgcolor="#FFFFFF">
      
      <div align="left">
        <table width="1200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top" style="padding-left: 13px;">
              <table width="1181" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td valign="top" style="padding-left: 13px;">
                    <br />
                      <div class="marcoshenrique">
                        <form action="" method="post" onSubmit="return valida_dados(this)">
                          <div class="row">
                            <div class="col-xs-5">
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                  <input type="text" class="form-control" placeholder="Nome" name="nome" />
                              </div>
                              <!-- <br /> -->
                              <!-- <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></span>
                                  <input type="text" class="form-control" placeholder="Cargo" name="cargo" />
                              </div> 
                              <br /> -->
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
                                  <select class="form-control" placeholder="Setor" name="setor" />
                                  <option value="">Selecione o setor...</option>
                                  <option value="Presidencia">Presidencia</option>
                                  <option value="Diretoria">Diretoria</option>
                                  <option value="Administrativo">Administrativo</option>
                                  <option value="Comunicação">Comunicação</option>
                                  <option value="Comercial">Comercial</option>
                                  <option value="Recursos Humanos">Recursos Humanos</option>
                                  <option value="Marketing">Marketing</option>
                                  <option value="Tecnologia da Informação">Tecnologia da Informação</option>

                                  </select>
                              </div>
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                  <input type="text" class="form-control" placeholder="Telefone - apenas números com DDD" name="tel" onkeypress="mascaraTelefone(this,'## ####-####')"  maxlength="13"/>
                              </div>
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                  <input type="text" class="form-control" placeholder="Celular - apenas números com DDD" name="cel" onkeypress="mascaraCelular(this,'## #####-####')" maxlength="14"/>
                              </div>
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                  <input type="email" class="form-control" name="email" placeholder="Seu e-mail" />
                              </div>
                              <!-- Cidades -->
                             <!-- <div class="input-group">
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Aaaaaaaaaaa, 1234 - 1º andar - CEP: 00000-000<br>Bairro - São Paulo/SP"/>SÃO PAULO</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Bbbbbbbbbbb, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Rio de Janeiro/RJ"/>RIO DE JANEIRO</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Ccccccccccc, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Curitia/PR"/>CURITIBA</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Ddddddddddd, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Manaus/AM"/>MANAUS</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Edddddddddd, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Fortaleza/CE"/>FORTALEZA</label> 
                              </div>-->
                              <br /> 

                             <div class="">
                              <button type="submit" style="margin-bottom: 20px;" class="btn btn-primary float-left" name="Enviar">Gerar Assinatura</button>
                            </div>
                            <p><small>*Após gerar a assinatura basta selecionar todo o conteúdo gerado e copiar e colar sua assinatura no seu e-mail de preferência.</small></p>
                            </div>
                            <div align="center">
<?php    
if(isset($_POST['Enviar'])){ 
$nome = $_POST['nome']; 
$setor = $_POST['setor']; 
$tel = $_POST['tel']; 
$cel = $_POST['cel']; 
$email = $_POST['email'];
// $local = $_POST['local'];
echo "
<style type='text/css'>
body{
  background-color: #EEEEEE;
}

table {
  border-style: solid;
  border-left-color: #ffffff;
  border-right-color: #ffffff;
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  margin-top: 20px;
}

.logo {
  margin-top: 60px;
  margin-right: 100px;
}

.box {
  background-color: #535353;
  color: #FFF;
  padding: 5px;
  width: 300px !important;
  height: 50px;
  border-radius: 0px 30px 30px 0px;
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: normal;
}

.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}

.icons {
  color: #535353 !important;
  width: 15px;
  margin-bottom: 5px;
}

</style>

<table width='900' height='98' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
  <td width='600'><font face=Calibri color=#575756><b><div class='box'>$nome<br><span style='font-size:12px;'>$setor</span></div></b><br><span style='margin-bottom:10px;'><img class='icons' src='imagens/phone.png' alt='phone'> $tel </span> <br> <span style='margin-bottom:10px;'><img class='icons' src='imagens/mobile.png' alt='mobile'> $cel </span> <br> <span style='margin-bottom:10px;'><img class='icons' src='imagens/envelop.png' alt='envelop'> $email </span> </span> <br> <span style='margin-bottom:5px;'><img class='icons' src='imagens/sphere.png' alt='sphere'> www.fibrafort.com.br </span></td>
  <td width='187'><img class='logo' src='imagens/logo.png' width='500' height='98'></td>
  
  </tr>
  <tr>
    <!-- <td colspan='2'><font face=Calibri color=#575756 size=2><em>Atuamos desde 1984, focados soluções de alta tecnologia.<br> -->
</em></td>
  </tr>
</table></font>
";
} 
?>
                            </div>
                          </div>
                        </form>
                      </div>
                      <table border="0" cellpadding="0" cellspacing="0" width="254">
                        <tr>
                          <td width="228">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            </table></td>
                        </tr>
                      </table>
                      <br />
                      <table border="0" cellpadding="0" cellspacing="0" width="254">
                        <tr>
                          <td width="228">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            </table></td>
                        </tr>
                    </table></td>
                </tr>
                <tr>
                  <!-- <td align="center" style="padding-left: 15px; padding-right: 15px;">
                      <table height="20" width="100%" border="0" cellspacing="5" cellpadding="0" style="border-top-width: 1px; border-top-style:solid; border-top-color:#4c556b">
                        <tr>
                          <td width="82%" align="center">&nbsp;</td>
                          <td width="18%" align="center" class="texto_comum"><div align="right"><span class="style14">por: </span>KLM Tech</div></td>
                        </tr> -->
                      </table>
                      <br />
</td>
                </tr>
              </table>
          </td>
          </tr>
          <tr>
            <td align="center" style="padding-left: 15px; padding-right: 15px;"></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td colspan="3" background="imagens/sombra-baixo.png" height="18"></td>
  </tr>
</table>

<br />
<map name="Map" id="Map">
  <area shape="rect" coords="15,154,102,189" href="suporte.php" alt="MPLS"/>
<area shape="poly" coords="149,160" href="#" /><area shape="poly" coords="147,165" href="#" />
<area shape="rect" coords="1068,142,1184,178" href="mailto:kleiton.albuquerque@datainfo.inf.br" alt="MAP" />
<area shape="rect" coords="-1,-9,1206,136" href="index.php" />
</map></body>
</html>
