<?php



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

$delete1 = "TRUNCATE TABLE tablel";
$result1 = mysql_query($delete1, $connection);
$delete2 = "TRUNCATE TABLE Petrol";
$result2 = mysql_query($delete2, $connection);


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

