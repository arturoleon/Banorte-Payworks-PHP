<?php
if($_REQUEST['CcErrCode'] == 1){
		echo "<b>¡Aprobada! transacción: ".$_REQUEST['AuthCode']." </b>";
	}else{
		echo "<b>¡Declinada!, motivo: ".$_REQUEST['Text']." </b>";
}
?>