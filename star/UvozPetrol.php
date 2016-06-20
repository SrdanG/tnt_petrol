<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'TNTmysql11!';
$connection = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Povezava na streznik ni uspela");
$dbname = 'ops';
mysql_select_db($dbname) or die ("Povezava na bazo ni usela");

$pot = "/home/sek/www/FFC/uploads/data.csv";
$loadsql = "LOAD DATA INFILE '".$pot."'
             INTO TABLE Petrol
             FIELDS TERMINATED BY ','
             ENCLOSED BY '\"'
             LINES TERMINATED by '\n'
             (Kupec, St_kartice, Reg_st_vozila, St_racuna, BL_ST, SifraBL_ST,
              NazivBL_ST, Sifra_pr_mesta, Naziv_pr_mesta, @Datum_nakup ,
              VCE,Kolicina,Cena, Popust, Znesek_procent, Znesek, Cena_brez_DDV,
              DDV_procent, Znesek_DDV, Datum_izst_racuna , Datum_zap_racuna ,
              ID_soferja, Stanje_km_stevca, Potni_nalog, Cas_trans)
             SET Datum_nakup = date_format(str_to_date(@Datum_nakup, '%m/%d/%Y'), '%y-%m-%d')";

$result = mysql_query($loadsql);

if (!$result) {
    die ('Uvoz ni bil uspesen: ' . mysql_error());
		 }
else {
		 echo "Uvoz v bazo je bil uspesen";
		 }

unlink($pot);
?>