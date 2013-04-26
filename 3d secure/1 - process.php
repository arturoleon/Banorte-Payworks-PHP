<html>
<head></head>
<body onLoad="document.payworks_form.submit();">
<form action="https://eps.banorte.com/secure3d/Solucion3DSecure.htm" name="payworks_form" method="post">
    <input type="hidden" value="77777777" name="Name">
    <input type="hidden" value="ggggg" name="Password">
    <input type="hidden" value="111111" name="ClientId">
    <input type="hidden" value="Y" name="Mode">
    <input type="hidden" value="Auth" name="TransType">
    <input type="hidden" value="http://domino.com/2 - response_3D.php" name="ResponsePath">
    <input type="hidden" value="4111111111111111" name="Card">
    <input type="hidden" value="visa" name="CardType">
    <input type="hidden" value="03" name="CERT3D">
    <input type="hidden" value="21874" name="MerchantId">
    <input type="hidden" value="Super Store" name="MerchantName">
    <input type="hidden" value="Monterrey" name="MerchantCity">
    <input type="hidden" value="http://domino.com/2 - response_3D.php" name="ForwardPath">
	<input type="hidden" value="https://pincel.mx/" name="MerchantURL">
    <input type="hidden" value="01" name="PlanType">
    <input type="hidden" value="<?=($_REQUEST['NumberOfPayments'] !='') ? $_REQUEST['NumberOfPayments'] : '00';?>" name="NumberOfPayments">
	<input type="hidden" value="<?=($_REQUEST['NumberOfPayments'] !='') ? $_REQUEST['NumberOfPayments'] : '00';?>" name="InitialDeferment">
    <input type="hidden" value="<?=rand(0,999);?>" name="OrderId">
    <input type="hidden" value="<?=$Number;?>" name="Number">
    <input type="hidden" value="12/16" name="Expires">
    <input type="hidden" value="1" name="Cvv2Indicator">
    <input type="hidden" value="111" name="Cvv2Val">
    <input type="hidden" value="189" name="Total">
</form>
<div align="center">Procesando transacción</div>
</body>
</html>
