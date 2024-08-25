<?php
/******************************************************************************

Emre Üçbudak Karadeniz Teknik Üniveristesi

*******************************************************************************/
// PHP FONKSIYONLARA GIRIS
// DIREK OZYINELEMELI FONKSIYONLAR

function islem() {
    $sayi = rand(0,10);
    if ($sayi == 5) {
        echo("Başarılı");
        
    }
    else {
        islem();
    }
    
}
islem();





?>
