<?php

//Class: import.php
//Info: Upload user file on the server under the name data.csv

  //include main.php code
    require_once 'main.php';
    //define upload class. 
    class Import extends Main 
    {
        //declare attributes for userdata
        private $path = '/home/sek/www/FFC/upload/data.csv';
        private $db = "ops";
        //declare constructor
        public function __construct()
        {   
            //Connect to the database when the object is initialized
            $link = parent::dbconnect($this->db);
            //Call the import funciton after the database is connected
            $import = $this->importdata();
            //Delete file after import
            $delete = $this->deletefile($this->path);
        }       
        //declare function importdata(). Import data from data.csv into the mysql db.
        public function importdata()
        {
            //Load data into the Petrol table
            $query = "LOAD DATA INFILE '$this->path'
                      INTO TABLE Petrol
                      FIELDS TERMINATED BY ','
                      ENCLOSED BY '\"'
                      LINES TERMINATED by '\n'
                     (Kupec, St_kartice, Reg_st_vozila, St_racuna, BL_ST, SifraBL_ST,
                      NazivBL_ST, Sifra_pr_mesta, Naziv_pr_mesta, Datum_nakup ,
                      VCE,Kolicina,Cena, Popust, Znesek_procent, Znesek, Cena_brez_DDV,
                      DDV_procent, Znesek_DDV, Datum_izst_racuna , Datum_zap_racuna ,
                      ID_soferja, Stanje_km_stevca, Potni_nalog, Cas_trans)";

            //Execute query with mysqlclean function from Main class
            $result = mysql_query($query);
            //Check the results
            if ($result) {
            ?>
                <p>* Uvoz v bazo je bil uspesen</p>
            <?php    
            } else {
            ?>
                <p>* Uvoz ni uspelo: <?php print mysql_error();?></p>
            <?php
            }
        }
        //Function that delete the data file from the upload dir.
        public function deletefile($path){
            if (!@unlink($path)) { 
            ?>
                <p>* Ni mozno izbristati datoteke. Cudno ne?</p>
            <?php  
            } else { 
            ?>
                <p>Datoteka je bila uspesno izbrisana.</p>
            <?php  
            }      
        }
    }
    //initialize class upload
    $upload = New Import();
    
?>