<?php
require 'class_BMI.php';
require 'class_pasien.php';

 class BMIpasien extends BMI {
    public $tgl;
      
    function __construct($tgl,$nama,$gender,$bb,$tb){
      parent::__construct($bb,$tb);
      $this->tgl = $tgl;
      $this->nama = $nama;
      $this->gender = $gender;
      
    }
  }
?>