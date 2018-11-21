<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
</head>

<body>
<?
$cnx = new DataBasei();
	$cnx->connect();
	
	
	$sqlf = $cnx->executeQuery("SELECT ficha FROM reg_aspirantes WHERE ficha = '$ficha'");
	$rowf = mysqli_fetch_assoc($sqlf);
	$numFicha = $rowf['ficha'];

?>	

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
  </body>
</html>
</body>
</html>