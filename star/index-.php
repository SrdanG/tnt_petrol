<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Petrol Aplikacija za Gorivo</title>
</head>

<body>


<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Import" />
</form>

<br>

<form action="UvozPetrol.php" method="POST">
<input type="submit" value="Uvoz Petrol">
</form>

<br>

<form action="Validacija.php" method="POST">
<input type="submit" value="Validacija">
</form>

<br>

<form action="NarediCSV.php" method="POST">
<input type="submit" value="Naredi CSV">
</form>

<br>

<form action="Testgumb.php" method="POST">
<input type="submit" value="Povezi na bazo in prikazi table1">
</form>


</body>

</html>
