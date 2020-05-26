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
          objeto.value = objeto.value + ') ';

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

    if (valida.empresa.value=="")
    {
        alert ("Selecione a Empresa.");
        return false;
    }

    if (valida.tel.value=="")
    {
        alert ("Digite seu Telefone.");
        return false;
    }

    if (valida.local.value=="")
    {
        alert ("Selecione sua Localidade.");
        return false;
    }
    
return true;
}
</script>
 
<body bgcolor="#f9f9f9">
</head>
<table width="*" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="18" rowspan="2" background="imagens/sombra-esquerda.png"><div align="left"></div></td>
    <td width="1005" bgcolor="#FFFFFF">
      
      <div align="left">
    <img src="imagens/top.png" width="1200" height="201" border="0" usemap="#Map" />      </div></td>
    <td width="18" rowspan="2" background="imagens/sombra-direita.png"></td>
  </tr>
  <tr>
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
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></span>
                                  <input type="text" class="form-control" placeholder="Cargo" name="cargo" />
                              </div>
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                  <input type="email" class="form-control" placeholder="Seu e-mail" />
                              </div>
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
                                  <select class="form-control" placeholder="Empresa" name="empresa" />
                                  <option value="">Selecione a empresa...</option>
                                  <option value="Administrativo">Administrativo</option>
                                  <option value="Comunicação">Comunicação</option>
                                  <option value="Comercial">Comercial</option>
                                  <option value="Recursos Humanos">Recursos Humanos</option>
                                  <option value="Tecnologia da Informação">Tecnologia da Informação</option>

                                  </select>
                              </div>
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                  <input type="text" class="form-control" placeholder="Telefone - apenas números com DDD" name="tel" onkeypress="mascaraTelefone(this,'## ####-####')"  maxlength="14"/>
                              </div>
                              <br />
                              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                  <input type="text" class="form-control" placeholder="Celular - apenas números sem DDD" name="cel" onkeypress="mascara(this,'#####-####')" maxlength="10"/>
                              </div>
                              <br />
                             <div class="input-group">
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Aaaaaaaaaaa, 1234 - 1º andar - CEP: 00000-000<br>Bairro - São Paulo/SP"/>SÃO PAULO</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Bbbbbbbbbbb, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Rio de Janeiro/RJ"/>RIO DE JANEIRO</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Ccccccccccc, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Curitia/PR"/>CURITIBA</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Ddddddddddd, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Manaus/AM"/>MANAUS</label><font color=#ffffff> .</font> 
                              <label><input type="radio" class="form-control col-xs-offset-0 col-xs-10" placeholder="local" name="local" value="Rua Edddddddddd, 1234 - 1º andar - CEP: 00000-000<br>Bairro - Fortaleza/CE"/>FORTALEZA</label> 
                              </div>
                              <br />

                             <div class="col-xs-offset-4 col-xs-10">
                                <button type="submit" class="btn btn-primary" name="Enviar">Gerar Assinatura</button>
                              </div>
                            </div>
                            <div align="center">
                              <?php    
if(isset($_POST['Enviar'])){ 
$nome = $_POST['nome']; 
$empresa = $_POST['empresa']; 
$tel = $_POST['tel']; 
$cel = $_POST['cel']; 
$local = $_POST['local'];
echo "
<style type='text/css'>
<!--
table {
    border-style: solid;
    border-left-color: #ffffff;
    border-right-color: #ffffff;
    border-top-color: #ffffff;
    border-bottom-color: #ffffff;
}
-->
</style>
<table width='600' height='98' border='0' align='left' cellpadding='0' cellspacing='0'>
  <tr>
    <td width='187'><img src='logotipo.png' width='178' height='98'></td>
    <td width='422'><font face=Calibri color=#575756><b>$nome</b> | $empresa<br>$tel / $cel<br>$local</td>
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
                  <td align="center" style="padding-left: 15px; padding-right: 15px;">
                      <table height="20" width="100%" border="0" cellspacing="5" cellpadding="0" style="border-top-width: 1px; border-top-style:solid; border-top-color:#4c556b">
                        <tr>
                          <td width="82%" align="center">&nbsp;</td>
                          <td width="18%" align="center" class="texto_comum"><div align="right"><span class="style14">por: </span>KLM Tech</div></td>
                        </tr>
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
