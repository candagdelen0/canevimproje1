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
    function kategorigetir($vt,$katid) {  //kategorisayfa
        $get="SELECT * FROM kategori WHERE id=$katid";
        return $this->sorgum($vt,$get,1);
    }
    function kitapgetir($vt,$katid) { //kategorisayfa
        $kiget="SELECT * FROM kategori INNER JOIN kitaplar ON kategori.id = kitaplar.katid";
        return $this->sorgum($vt,$kiget,1);
    }
    function kitapincele($vt,$id) { //kitapincele
        $kitapin="SELECT * FROM kitaplar WHERE id=$id";
        return $this->sorgum($vt,$kitapin,1);
    }
    function yazarcek($vt,$id) { //kitapincele
        $yazan="SELECT * FROM yazarlar WHERE id=$id";
        return $this->sorgum($vt,$yazan,1);
    }
    function yazargetir($vt,$id) { //yazarsayfa 
        $yazar="SELECT * FROM yazarlar WHERE id=$id";
        return $this->sorgum($vt,$yazar,1);
    }
    function yazkitap($vt,$id) { //yazarsayfa 
        $id="SELECT * FROM kitaplar WHERE yazarid=$id";
        return $this->sorgum($vt,$id,1);
    } 


}
?>