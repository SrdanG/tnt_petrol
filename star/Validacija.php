<?
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'TNTmysql11!';
$connection = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Povezava na streznik ni uspela");
$dbname = 'ops';
mysql_select_db($dbname) or die ("Povezava na bazo ni uspela");


$query1 ="SELECT St_kartice
		FROM Petrol
		LEFT JOIN table1
		ON St_kartice = St_kartice1
		WHERE St_kartice1 IS NULL";

$result1 = mysql_query($query1, $connection) or die ("Ne morem izvesti zahtevan query");
$St_kartice = mysql_fetch_array($result1);

$query2 ="SELECT SifraBL_ST
		FROM Petrol
		LEFT JOIN table2
		ON SifraBL_ST = Sifra_BL_ST
		WHERE Sifra_BL_ST IS NULL";

$result2 = mysql_query($query2, $connection) or die ("Ne morem izvesti zahtevan query");
$Sifra_BL_ST = mysql_fetch_array($result2);

if ($St_kartice[0]=="" AND $Sifra_BL_ST[0]==""){
    print "Vsi podatki so uspesno validirani. Ni novih postavk v tabeli Petrol";
}
else {
    print "<b>V bazi ne obstaja stevilka kartice: </b>";
    print $St_kartice[0]."<br><br>";
    include ('inserttable1.html');
    print "<b>V bazi ne obstaja sifra izdelka: </b>";
    print $Sifra_BL_ST[0]."<br><br>";
    include ('inserttable2.html');
  //  print '<input type="button" name="St_kartice" value="Vnesi stevilko kartice v bazo" /><BR>';
  //  print '<input type="button" name="Sifra_BL_ST" value="Vnesi sifro izdelka v bazo" />';
}

?>

