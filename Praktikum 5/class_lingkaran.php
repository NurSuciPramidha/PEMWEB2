<?php
class Lingkaran
{
    /**
     * Access Modifier:
     * 1. Public : properti/method dapat diakses dimana pun
     * 2. Private : properti/method hanya dapat diakses di dalam class tersebut
     * 3. Protected : properti/method sama seperti private, tetapi dapat diakses juga oleh child class (anak dari kelas)
     */

    // atribut / properti (variabel yang ada di dalam class)
    // const nilai mutlak (tidak dapat diubah)
    private $jari;
    const PHI = 3.14;

    // method : a/ function yang berada di dalam class, method juga perlu didefinisikan Access Modifiernya
    // constructor a/ method yang otomatis berjalan ketika class objek dibuat
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas()
    {
        return  self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}
