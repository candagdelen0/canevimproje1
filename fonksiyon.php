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
}
?>