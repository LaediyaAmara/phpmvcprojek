<?php

class About {
    public function index($nama = 'Amara', $pekerjaan = 'Dokter' , $umur = 16)
    {
        echo "Konichiwa nama saya $nama, saya adalah seorang $pekerjaan. saya berumur $umur tahun.";
    }
    public function page()
    {
        echo 'About/page';
    }
}
