<?php 
class pasien{
   public $nama;
   public $tmpt_lahir;
   public $tgl_lahir;
   public $gender;
   public $email;
     
   function __construct($nama,$tmpt_lahir,$tgl_lahir,$gender,$email){
     $this->nama = $nama;
     $this->tmpt_lahir = $tmpt_lahir;
     $this->tgl_lahir = $tgl_lahir;
     $this->gender = $gender;
     $this->email = $email;
   }

}
?>
