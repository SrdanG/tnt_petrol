<?
// Where the file is going to be placed 
$target_path = "uploads/";

/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */
$target_path .= basename( "data.csv");

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "Datoteka ".  basename( $_FILES['uploadedfile']['name']).
    " je bila uspesno uvozena";
} else{
    echo "Napaka pri uvozu! Prosim poskusite ponovno! ";
}

?>
