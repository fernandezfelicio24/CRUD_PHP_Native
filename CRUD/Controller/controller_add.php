<?php
    include('controller.php');
    class Proses
    {
        private static $nim, $nama_lengkap;
        private static $kota_asal, $tanggal_lahir;
        private static $nama_ortu, $alamat_ortu;
        private static $kodepos, $nomor_telepon, $status;

        public function __construct(string $nim, string $nama_lengkap,string $kota_asal,
        $tanggal_lahir,string $nama_ortu,string $alamat_ortu,int $kodepos,string $nomor_telepon, string $status)
        {
            self::$nim = $nim;
            self::$nama_lengkap = $nama_lengkap;
            self::$kota_asal= $kota_asal;
            self::$tanggal_lahir=$tanggal_lahir;
            self::$nama_ortu = $nama_ortu;
            self::$alamat_ortu=$alamat_ortu;
            self::$kodepos=$kodepos;
            self::$nomor_telepon = $nomor_telepon;
            self::$status = $status;
        }
        public static function get_data($id)
        {
            return $id;
        }
        public static function tambah() 
        {
            try{
                $koneksi = new Database();
                # Check if only number 12 digits
                $GET_LENGTH = strlen(self::$nomor_telepon);
                if($GET_LENGTH == 12){
                    if(self::$status == "WREDA" || self::$status == "TAMA")
                    {
                        $execute = $koneksi->tambah_data(
                            self::$nim,
                            self::$nama_lengkap,
                            self::$kota_asal,
                            self::$tanggal_lahir,
                            self::$nama_ortu,
                            self::$alamat_ortu,
                            self::$kodepos,
                            self::$nomor_telepon,
                            self::$status
                        );
                        if(!$execute){
                            $msg = "Cannot Add to database";
                            return $msg;
                        }
                    }
                }
                return $execute;
            }catch(TypeError $e){
                return $e->getMessage;
            }
        }
}
?>