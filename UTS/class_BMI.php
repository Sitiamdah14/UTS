<?php 

class BMI {
    public $bb;
    public $tb;

    function __construct($bb,$tb){
        $this->bb = $bb;
        $this->tb = $tb;
    }

    public function nilai() {
        $meter = $this->tb / 100;
        return number_format(($this->bb / ($meter * $meter)),1);
    }

    function status(){
        if ($this->nilai() <= 18.5) {
            return "Kekurangan Bobot";
        }elseif ($this->nilai() <= 24.9) {
            return "Normal (Ideal)";
        }elseif ($this->nilai() <= 26.9) {
            return "Kelebihan Bobot";
        }elseif ($this->nilai() >= 29.9) {
            return "Kegemukan(Obesitas)";
        }
        
    }

}



?>