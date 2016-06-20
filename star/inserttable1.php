<?

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'TNTmysql11!';
$connection = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Povezava na streznik ni uspela");
$dbname = 'ops';
mysql_select_db($dbname) or die ("Povezava na bazo ni usela");

$query="INSERT INTO table1 (St_kartice1, Cost_center, Lokacija_koda, Func_area)
VALUES
('$_POST[St_kartice1]','$_POST[Cost_center]','$_POST[Lokacija_koda]','$_POST[Func_area]')";

if (!mysql_query($query,$connection))
  {
  die('Napaka pri vnosu v bazo: ' . mysql_error());
  }
echo "1 vnos uspesno vnesen";

mysql_close($connection)


?>