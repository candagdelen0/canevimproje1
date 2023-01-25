<?php
$db = new mysqli("localhost","root","","kitabevi") or die ("Not connect");
$db->set_charset("utf8");

class sistem {
    function sorgum($vt, $sorgu,$getres) {
        $a = $vt->prepare($sorgu);
        $a->execute();
        if ($getres == 1):
            return $b = $a->get_result();
        endif;
    }
    function kategorigetir($vt,$id) {
        $get="SELECT * FROM kategori WHERE id=$id";
        return $this->sorgum($vt,$get,1);
    }
    function kitapgetir($vt,$katid) {
        $kiget="SELECT * FROM kategori INNER JOIN kitaplar ON kategori.id = kitaplar.katid WHERE katid";
        return $this->sorgum($vt,$kiget,1);
    }
}
?>