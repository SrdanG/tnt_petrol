<?php

  //connect to DB
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'TNTmysql11!';
  $connection = mysql_connect($dbhost,$dbuser,$dbpass) or die ("Povezava na streznik ni uspela");
  $dbname = 'ops';
  mysql_select_db($dbname) or die ("Povezava na bazo ni usela");

  $query11 = "UPDATE Petrol SET Kolicina = 1" ;

  $result11 = mysql_query($query11) or die ("Ne morem izvesti");


$query9 = "INSERT INTO tablel (Lokacija_koda, Cost_center, Func_area, Material_group, GLAccount_override,Short_desc, Cena, Kolicina)
SELECT Lokacija_koda, Cost_center, Func_area, Material_group, GLAccount_override,Short_desc, Znesek, Kolicina
FROM table1, table2, Petrol
WHERE Petrol.St_kartice = table1.St_kartice1 AND Petrol.SifraBL_ST = table2.Sifra_BL_ST AND table2.Func_Area_test = table1.Func_area";
$result9 = mysql_query($query9) or die ("Ne morem izvesti INSERT v tablel");

$query1 = "UPDATE tableh SET RecDate =(SELECT CURDATE() + 0)";
$query2 = "UPDATE tableh SET DocDate =(SELECT CURDATE() + 0)";
$result1 = mysql_query($query1) or die ("Ne morem izvesti prvi query");
$result2 = mysql_query($query2) or die ("Ne morem izvesti drugi query");

$query3 = "UPDATE tableh SET LineCnt =(SELECT COUNT(DISTINCT Func_area)
  FROM tablel
  WHERE Func_area = 111
  OR Func_area = 112
  OR Func_area = 000
  OR Func_area = 210
  OR Func_area = 240
  OR Func_area = 010)
  WHERE idtableh = 1";
$result3 = mysql_query($query3) or die ("Ne morem izvesti Update LineCnt za idtableh=1");
$query4 = "UPDATE tableh SET LineCnt =(SELECT COUNT(DISTINCT Func_area)
  FROM tablel
  WHERE Func_area = 301
  OR Func_area = 303
  OR Func_area = 304)
  WHERE idtableh = 2";
$result4 = mysql_query($query4) or die ("Ne morem izvesti Update LineCnt za idtableh=2");
$query5 = "UPDATE tableh SET LineCnt =(SELECT COUNT(DISTINCT Func_area)
  FROM tablel
  WHERE Func_area = 500)
  WHERE idtableh = 3";
$result5 = mysql_query($query5) or die ("Ne morem izvesti Update LineCnt za idtableh=3");
$query6 = "UPDATE tableh SET LineCnt =(SELECT COUNT(DISTINCT Func_area)
  FROM tablel
  WHERE Func_area = 600)
  WHERE idtableh = 4";
$result6 = mysql_query($query6) or die ("Ne morem izvesti Update LineCnt za idtableh=4");
$query7 = "UPDATE tableh SET LineCnt =(SELECT COUNT(DISTINCT Func_area)
  FROM tablel
  WHERE Func_area = 700)
  WHERE idtableh = 5";
$result7 = mysql_query($query7) or die ("Ne morem izvesti Update LineCnt za idtableh=5");
$query8 = "UPDATE tableh SET LineCnt =(SELECT COUNT(DISTINCT Func_area)
  FROM tablel
  WHERE Func_area = 800)
  WHERE idtableh = 6";
$result8 = mysql_query($query8) or die ("Ne morem izvesti Update LineCnt za idtableh=6");
$query400 = "UPDATE tableh SET LineCnt =(SELECT COUNT(DISTINCT Func_area)
  FROM tablel
  WHERE Func_area = 400)
  WHERE idtableh = 7";
$result400 = mysql_query($query400) or die ("Ne morem izvesti Update LineCnt za idtableh=5");



$query9 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result9 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");


$query = "SELECT `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`
  FROM `tableh`
  WHERE idtableh = 1";

$result = mysql_query($query) or die ("Ne morem izvesti");

$temp = mysql_fetch_assoc($result);

foreach ($temp as $key => $value)
{
    if ($key =="Purchgrp")
    {
      $txt .= $value."\r\n";
      $out .= $value."<br>";
    }
    else
    {
      $txt .= $value.",";
      $out .= $value.",";
    }
}

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`
  FROM `tablel`
  WHERE Func_area = 111" ;

$result = mysql_query($query) or die ("Ne morem izvesti");

// Add all values in the table

izpisbrezdavek($result);

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`
  FROM `tablel`
  WHERE Func_area = 112" ;

$result = mysql_query($query) or die ("Ne morem izvesti");

// Add all values in the table

izpisbrezdavek($result);

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`
  FROM `tablel`
  WHERE Func_area = 010" ;

$result = mysql_query($query) or die ("Ne morem izvesti");

// Add all values in the table

izpisbrezdavek($result);

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`
  FROM `tablel`
  WHERE Func_area = 240" ;

$result = mysql_query($query) or die ("Ne morem izvesti");

// Add all values in the table

izpisbrezdavek($result);

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`
  FROM `tablel`
  WHERE Func_area = 000" ;

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`
  FROM `tablel`
  WHERE Func_area = 210 " ;

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query9 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result9 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");

$query = "SELECT `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`
  FROM `tableh`
  WHERE idtableh = 2";

$result = mysql_query($query) or die ("Ne morem izvesti");

$temp = mysql_fetch_assoc($result);

foreach ($temp as $key => $value)
{
    if ($key =="Purchgrp")
    {
      $txt .= $value."\r\n";
      $out .= $value."<br>";
    }
    else
    {
      $txt .= $value.",";
      $out .= $value.",";
    }
}

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 301" ;

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 303";

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 304";

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query9 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result9 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");

$query = "SELECT `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`
  FROM `tableh`
  WHERE idtableh = 3";

$result = mysql_query($query) or die ("Ne morem izvesti");

$temp = mysql_fetch_assoc($result);

foreach ($temp as $key => $value)
{
    if ($key =="Purchgrp")
    {
      $txt .= $value."\r\n";
      $out .= $value."<br>";
    }
    else
    {
      $txt .= $value.",";
      $out .= $value.",";
    }
}

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 500";

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query9 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result9 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");

$query = "SELECT `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`
  FROM `tableh`
  WHERE idtableh = 4";

$result = mysql_query($query) or die ("Ne morem izvesti");

$temp = mysql_fetch_assoc($result);

foreach ($temp as $key => $value)
{
    if ($key =="Purchgrp")
    {
      $txt .= $value."\r\n";
      $out .= $value."<br>";
    }
    else
    {
      $txt .= $value.",";
      $out .= $value.",";
    }
}

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 600";

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query9 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result9 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");

$query = "SELECT `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`
  FROM `tableh`
  WHERE idtableh = 5";

$result = mysql_query($query) or die ("Ne morem izvesti");

$temp = mysql_fetch_assoc($result);

foreach ($temp as $key => $value)
{
    if ($key =="Purchgrp")
    {
      $txt .= $value."\r\n";
      $out .= $value."<br>";
    }
    else
    {
      $txt .= $value.",";
      $out .= $value.",";
    }
}

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 700";

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query9 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result9 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");

$query = "SELECT `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`
  FROM `tableh`
  WHERE idtableh = 6";


$result = mysql_query($query) or die ("Ne morem izvesti");

$temp = mysql_fetch_assoc($result);

foreach ($temp as $key => $value)
{
    if ($key =="Purchgrp")
    {
      $txt .= $value."\r\n";
      $out .= $value."<br>";
    }
    else
    {
      $txt .= $value.",";
      $out .= $value.",";
    }
}

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 800         ";

$result = mysql_query($query) or die ("Ne morem izvesti");

    izpis($result);

$query401 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result401 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");

$query = "SELECT `RecType`, `SourceSys`, `MessageType`, `MessageGrp`, `CompCode`, `PORef`, `Vendor`, `LineCnt`, `Currency`, `DocDate`, `RecDate`, `Purchorg`, `Purchgrp`
  FROM `tableh`
  WHERE idtableh = 7";


$result = mysql_query($query) or die ("Ne morem izvesti");

$temp = mysql_fetch_assoc($result);

foreach ($temp as $key => $value)
{
    if ($key =="Purchgrp")
    {
      $txt .= $value."\r\n";
      $out .= $value."<br>";
    }
    else
    {
      $txt .= $value.",";
      $out .= $value.",";
    }
}

$query = "SELECT `RecType`, `Lokacija_koda`, `Material_group`, `Cost_center`, `Func_area`, `TaxCode`, `ShortText`, `Cena`, `Kolicina`, `UnitOfMeas`, `GLAccount_override`, `Short_desc`,''
  FROM `tablel`
  WHERE Func_area = 400         ";

$result = mysql_query($query) or die ("Ne morem izvesti");

izpis($result);

$query401 = "UPDATE tableh SET `PORef` = `PORef` + 1" ;
$result401 = mysql_query($query9) or die ("Ne morem izvesti izvoza PORef za povecanje za ena");

//prikaz rezultata SQL stavka

//$rsSearchResults = mysql_query($query) or die(mysql_error());
//$out = '';
//$fields = mysql_list_fields('ops','tablel');
//$columns = mysql_num_fields($fields);

// Put the name of all fields

//for ($i = 0; $i < $columns; $i++) {
//$l=mysql_field_name($fields, $i);
//$out .= ''.$l.',';
//}
//$out .="\n";

// Add all values in the table

//while ($l = mysql_fetch_array($rsSearchResults)) {
//for ($i = 0; $i < $columns; $i++) {
//$out .=''.$l["$i"].',';
//$izvoz .=''.$l["$i"].',';
//}
//$out .="<br>";
//$izvoz .= "\n";
//}


//$fields = mysql_list_fields('ops','tablel');

echo $out;

$patch = "/uploads/";
$output = $patch."FuelPurchase.csv";
$file = fopen($output, 'w');
fwrite($file, $txt);
fclose($file);
/*
$delete1 = "TRUNCATE TABLE tablel";
$result1 = mysql_query($delete1, $connection);
$delete2 = "TRUNCATE TABLE Petrol";
$result2 = mysql_query($delete2, $connection);
*/

function izpis($result)
{
  global $txt, $out;
  $fields = mysql_list_fields('ops','tablel');
  $columns = mysql_num_fields($fields);
  $last = mysql_num_rows($result);
  // Add all values in the table
  $y=0;
  $p=1 ;
  while ($l= mysql_fetch_array($result))
  {
      for ($i = 0; $i < $columns; $i++)
      {
          switch ($i)
         {

           case  7:
              $x = ($l[$i]);
              $x = round($x,2);
              $y = $y + $x ;
              if ($p == $last){
                $a = explode('.',$y);
                if (strlen($a[1])== 1 ) {
                     $a[1].= "0";
                     $y = $a[0].$a[1];
                }
                else if (empty($a[1]))  {
                     $a[1].= "00";
                     $y = $a[0].$a[1];
                }

                $txt .= ereg_replace("\.","",$y).",";
                $out .= ereg_replace("\.","",$y).",";
              }
              break;
           case 12:
           if ($p == $last){
              $txt .= "\r\n";
              $out .= "<br>";
              break;
              }
           default:
           if ($p == $last){
              $txt .= $l[$i].",";
              $out .= $l[$i].",";
              break;
              }

         }
      }
  $p+=1;
  }
}

function izpisbrezdavek($result)
{
global $txt, $out;
$fields = mysql_list_fields('ops','tablel');
$columns = mysql_num_fields($fields);
$last = mysql_num_rows($result);
  // Add all values in the table
$y=0;
$p=1 ;
while ($l = mysql_fetch_array($result))
{
    for ($i = 0; $i < $columns; $i++)
    {
       switch ($i)
       {

         case  7:
            $x = ($l[$i]);
            $x = $x / 1.20 ;
            $x = round($x,2);
            $y = $y + $x ;
            if ($p == $last){
            $a = explode('.',$y);
            if (strlen($a[1])== 1 ) {
                 $a[1].= "0";
                 $y = $a[0].$a[1];
            }
            else if (empty($a[1]))  {
                 $a[1].= "00";
                 $y = $a[0].$a[1];
            }
            $txt .= ereg_replace("\.","",$y).",";
            $out .= ereg_replace("\.","",$y).",";
            }
            break;
        case 12:
            if ($p == $last){
                $txt .= "\r\n";
                $out .= "<br>";
            }
            break;
         default:
            if ($p == $last){
                 $txt .= $l[$i].",";
                 $out .= $l[$i].",";
            }
            break;

       }
    }
 $p+=1;
}
}

?>

