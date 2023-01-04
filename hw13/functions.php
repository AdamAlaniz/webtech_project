<?php
session_start();
	function redirect ($uri){
		?>
		<script type="text/javascript">
			<!--
			document.location.href="<?php echo $uri; ?>"
			-->
		</script>
 <?php die;}

function db_iconnect($db){
	$un="chove";
	$pw="DcRUbYtPNGtf9PAf";
	//$db=$dbName;
	$hostname="localhost";
	$dblink=new mysqli($hostname, $un, $pw, $db);
	return $dblinnk;
}

?>