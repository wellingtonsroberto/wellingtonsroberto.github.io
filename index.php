<?php
if (isset($_POST['BTEnvia'])) {
  
  //Variaveis de POST, Alterar somente se necessário 
  //====================================================
  $emailresp = $_POST['emailresp'];
  $nomeal = $_POST['nomeal'];
  $serie = $_POST['serie']; 
  $material = $_POST['material'];
  $obs = $_POST['obs'];
  $dia = $_POST['dia'];
  $hora = $_POST['hora']; 
  //====================================================
  
  //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  //==================================================== 
  $email_remetente = "wellingtonsroberto@gmail.com"; // deve ser uma conta de email do seu dominio 
  //====================================================
  
  //Configurações do email, ajustar conforme necessidade
  //==================================================== 
  $email_destinatario = "$emailresp"; // pode ser qualquer email que receberá as mensagens
  $email_reply = "$email"; 
  $email_assunto = "Rematricula 2019"; // Este será o assunto da mensagem
  //====================================================
  
  //Monta o Corpo da Mensagem
  //====================================================
  $email_conteudo = "Email do Responsavel: = $emailresp \n"; 
  $email_conteudo .= "Nome do Aluno:  = $nomeal \n";
  $email_conteudo .= "Serie 2019: = $serie \n"; 
  $email_conteudo .= "Plano de Material: = $material \n"; 
  $email_conteudo .= "OBS: = $obs \n"; 
  $email_conteudo .= "Dia: = $dia \n"; 
  $email_conteudo .= "Hora: = $hora \n"; 
  //====================================================
  
  //Seta os Headers (Alterar somente caso necessario) 
  //==================================================== 
  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
  
  //Enviando o email 
  //==================================================== 
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
          echo "</b>Plano de Rematricula Enviando com Sucesso !</b>"; 
          } 
      else{ 
          echo "</b>Falha no envio do E-Mail!</b>"; } 
  //====================================================
} 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pré-Assinatura - Dôminos</title>
</head>
<style type="text/css">
  .modalDialog {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.8);
  z-index: 99999;
  opacity: 0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
.modalDialog:target {
  opacity: 1;
  pointer-events: auto;
}
.modalDialog > div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
  text-align: center;
}
.close {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}
.close:hover {
  background: #00d9ff;
}
</style>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
<section class="webdesigntuts-workshop">
	<form action="<? $PHP_SELF; ?>" method="POST">		    
      <img src="logo.png"><br>
    <input name="emailresp" type="text" placeholder="E-mail do Responsavel"><br><br>
		<input name="nomeal" type="text" placeholder="Nome Completo do Aluno"><br><br>
    <label>Serie em 2019</label>
										<select name="serie" id="serie" style=" font-family: 'Neucha', cursive;, sans-serif; size: 18px;">
  <option value="" style="color: #000;">Selecione a Turma em 2019</option>
  <option value="EI2" style="color: #000;">EI2</option>
  <option value="EI3" style="color: #000;">EI3</option>
  <option value="EI4" style="color: #000;">EI4</option>
  <option value="EI5" style="color: #000;">EI5</option>
  <option value="1º Ano" style="color: #000;">1º Ano</option>
  <option value="2º Ano" style="color: #000;">2º Ano</option>
  <option value="3º Ano" style="color: #000;">3º Ano</option>
  <option value="4º Ano" style="color: #000;">4º Ano</option>
  <option value="5º Ano" style="color: #000;">5º Ano</option>
  <option value="6º Ano" style="color: #000;">6º Ano</option>
  <option value="7º Ano" style="color: #000;">7º Ano</option>
  <option value="8º Ano" style="color: #000;">8º Ano</option>
  <option value="9º Ano" style="color: #000;">9º Ano</option>
  <option value="1º EM" style="color: #000;">1º EM</option>
  <option value="2º EM" style="color: #000;">2º EM</option>
  <option value="3º EM" style="color: #000;">3º EM</option>
</select><br>
                    <select name="material" id="material" style="font-family: 'Neucha', cursive;; size: 18px;">
  <option value="" style="color: #000;">Plano para o Material</option>
  <option value="A vista - Sem Desconto" style="color: #000;">A vista - Sem Desconto</option>
  <option value="A vista - 6% Até 14/11" style="color: #000;">A vista - 6% Até 14/11</option>
  <option value="A vista - 4% Até 30/11" style="color: #000;">A vista - 4% Até 30/11</option>
  <option value="1x" style="color: #000;">1x</option>
  <option value="2x" style="color: #000;">2x</option>
  <option value="3x" style="color: #000;">3x</option>
  <option value="4x" style="color: #000;">4x</option>

</select><br>
    <input name="obs" id="obs" type="text" placeholder="Observações"><br>
    <a href="#openModal"><img src="cont.png" style="width: 90px;"></a><br>
    <select name="dia" id="dia" style="font-family: 'Neucha', cursive;; size: 18px;">
  <option value="" style="color: #000;">Selecione o Dia</option>
  <option value="22" style="color: #000;">22/10 - Segunda-Feira</option>
  <option value="23" style="color: #000;">23/10 - Terça-Feira</option>
  <option value="24" style="color: #000;">24/10 - Quarta-Feira</option>
  <option value="25" style="color: #000;">25/10 - Quinta-Feira</option>
  <option value="26" style="color: #000;">26/10 - Sexta-Feira</option>
  <option value="27" style="color: #000; font: bold;">27/10 - Sabado (8:00 ao 12:00)</option>
</select><br>
<select name="hora" id="hora" style="font-family: 'Neucha', cursive;; size: 18px;">
  <option value="" style="color: #000;">Selecione o Horario</option>
  <option value="8:00 as 10:00 - Manhã" style="color: #000;">8:00 as 10:00 - Manhã</option>
  <option value="16:30 as 18:30 - Tarde" style="color: #000;">16:30 as 18:30 - Tarde</option>
</select><br>
    <input type="submit" name="BTEnvia" value="Enviar Informações" style="color: #FFF;" /><br>

    <a href="index.php"><input type="submit" name="BTEnvia" value="+ Irmão" style="color: #FFF; "/></a>
	</form>
</section>
<div id="openModal" class="modalDialog" style="position: absolute;">
  <div>
    <a href="#close" title="Close" class="close">X</a>
    <h2>Contrato Colégio Dôminos </h2>
    <p><a href="contrato.pdf" target=“_blank” ><input type="button" value="Baixar Contrato"/></a><br><br>
  </div>
</div>
</body>
</html>