<?php 
    include('../Controller/controller_add.php');
    $GET_ACTION = $_GET['action'];
    try
    {
        if($GET_ACTION == "tambah")
        {
            $proses_obj=new Proses(
                $_POST['nim'],$_POST['nama_lengkap'],
                $_POST['kota_asal'],$_POST['tanggal_lahir'],
                $_POST['nama_ortu'],$_POST['alamat_ortu'],
                $_POST['kodepos'],$_POST['nomor_telepon'],$_POST['status']
            );
            $ex = $proses_obj->tambah();
            if($ex == True){
                header('location:../view.php');
            }
        }
        else if($GET_ACTION == "update")
        {
            // not complete, wkwk
            $get_obj = new Proses();
            $id =$_GET['id'];
            if(!is_null($id)){
                $GET_RESULT = $proses_obj;
            }
        }        
    }catch(TypeError $e){
        echo "error".$e->getMessage;
    } 
?>