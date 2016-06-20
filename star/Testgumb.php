<?
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'TNTmysql11!';
$connection = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Povezava na streznik ni uspela");
$dbname = 'ops';
mysql_select_db($dbname) or die ("Povezava na bazo ni usela");
$query = "Select * FROM table1" ;
$result = mysql_query($query) or die ("Ne morem izvesti zahtevan query");
$nrows = mysql_num_rows($result) ;                                               //stevilo vrstic v rezultati sql

//prikaz rezultata SQL stavka

echo "<h1>Rezultat SQL stavka</h1>" ;
echo "<table cellspacing='15'>" ;
echo "<tr><td colspan='4'><hr></td></tr>" ;
for ($i=0;$i<$nrows;$i++)
{
  $n = $i + 1 ;
  $row = mysql_fetch_array($result);
  extract($row);
   echo "<tr>\n
        <td>$St_kartice</td>\n
        <td>$Cost_center</td>\n
        <td>$Lokacija_koda</td>\n
        <td>$Func_area</td>\n
        </tr>\n";
   echo "<tr><td colspan='4'><hr></td></tr>\n";
}
echo "</table>\n";
?>