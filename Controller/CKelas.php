<?php
    require('../Models/MKelas.php');

    Class CKelas{

        function SimpanData($nama){
            
            $db=new MKelas();
            return $db->Simpan($nama);

        }

        function UpdateData($nama, $newNama){

            $db=new MKelas();
            return $db->Update($nama, $newNama);
        }

        function DeleteData($nama){

            $db=new MKelas();
            return $db->Delete($nama);
        }

    }
?>