<?

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'TNTmysql11!';
$connection = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Povezava na streznik ni uspela");
$dbname = 'ops';
mysql_select_db($dbname) or die ("Povezava na bazo ni usela");

$query="INSERT INTO table2 (Func_area_test, Sifra_BL_ST, Material_group, GLAccount_override, Short_desc)
VALUES
('$_POST[Func_area_test]','$_POST[Sifra_BL_ST]','$_POST[Material_group]','$_POST[GLAccount_override]','$_POST[Short_desc]')";

if (!mysql_query($query,$connection))
  {
  die('Napaka pri vnosu v bazo: ' . mysql_error());
  }
echo "1 vnos uspesno vnesen";

mysql_close($connection)


?>