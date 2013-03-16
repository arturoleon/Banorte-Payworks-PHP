<?php
if ($_REQUEST['Status'] != 200) {
	die($_REQUEST['Status'].' '.$_REQUEST['Status'].' '.$_REQUEST['Message'].'Error desconocido');
}
?>
<html>
<head></head>
<body>
<form action="https://eps.banorte.com/recibo" method="POST" name="payworks">
    <input type="hidden" name="Name" value="<?=$_REQUEST['Name']?>">
    <input type="hidden" name="Password" value="<?=$_REQUEST['Password']?>">
    <input type="hidden" name="ClientId" value="<?=$_REQUEST['ClientId']?>"/>
    <input type="hidden" name="Mode" value="<?=$_REQUEST['Mode']?>"/>
    <input type="hidden" name="TransType" value="<?=$_REQUEST['TransType']?>"/>
    <input type="hidden" name="Number" value="<?=$_REQUEST['Number']?>">
    <input type="hidden" name="Expires" value="<?=$_REQUEST['Expires']?>">
    <input type="hidden" name="OrderId" value="<?=$_REQUEST['OrderId']?>">
    <input type="hidden" name="Cvv2Indicator" value="<?=$_REQUEST['Cvv2Indicator']?>">
    <input type="hidden" name="Cvv2Val" value="<?=$_REQUEST['Cvv2Val']?>">
    <input type="hidden" name="Total" value="<?=$_REQUEST['Total']?>">
    <input type="hidden" name="Mode" value="<?=$_REQUEST['Mode']?>">
    <input type="hidden" name="XID" value="<?=$_REQUEST['XID']?>">
    <input type="hidden" name="CAVV" value="<?=$_REQUEST['CAVV']?>">
    <input type="hidden" name="CardType" value="<?=$_REQUEST['CardType']?>">
    <input type="hidden" name="Status" value="<?=$_REQUEST['Status']?>">
    <input type="hidden" name="ECI" value="<?=$_REQUEST['ECI']?>">
    <input type="hidden" name="E1" value="<?=$_REQUEST['BookedTourID']?>">
 	<input type="hidden" name="E2" value="response">
    <input type="hidden" name="InitialDeferment" value="<?=$_REQUEST['InitialDeferment']?>">
    <input type="hidden" name="NumberOfPayments" value="<?=$_REQUEST['NumberOfPayments']?>">
    <input type="hidden" name="PlanType" value="<?=$_REQUEST['PlanType']?>">
    <input type="hidden" value="http://dominio.com/3 - response.php" name="ResponsePath"/>
</form>
<script language="javascript">
    document.forms['payworks'].submit();
</script>
</body>
</html>