<?php 
include('Controller/controller.php');
$db = new Database();
$id = $_GET['id'];
if(!is_null($id))
{
    $get_id = $db->get_by_id($id);
}
else {
    header('location:view.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_data</title>
</head>
<body>
    <center>
        <form action="Proses/proses.php?action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $get_id['id']; ?>">
            <table border="1">
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td><input type="text" name="nim" value="<?php echo $get_id['nim']; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value="<?php echo $get_id['nama_lengkap']; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Kota asal</td>
                    <td>:</td>
                    <td><input type="text" name="kota_asal" value="<?php echo $get_id['kota_asal']; ?> " size="28"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value="<?php echo $get_id['tanggal_lahir']; ?>" placeholder="YYYY-MM-DD"></td>
                </tr>
                <tr>
                    <td>Nama Orang Tua</td>
                    <td>:</td>
                    <td><input type="text" name="nama_ortu" value="<?php echo $get_id['nama_ortu']; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat_ortu" value="<?php echo $get_id['alamat_ortu']; ?>" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Kodepos</td>
                    <td>:</td>
                    <td><input type="number" name="kodepos" value="<?php echo $get_id['kodepos']; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="nomor_telepon" value="<?php echo $get_id['nomor_telepon']; ?>" size="28"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                    <select name="status">
                        <option value="" selected> <?php if($get_id['status'] == "WREDA" || $get_id['status'] == "TAMA"){echo $get_id['status'];}?></option>
                        <option value="">TAMA</option>
                        <option value="">WREDA</option>                   
                    </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>