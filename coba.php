<?php
 
 class manusia{
    var $nama;
    var $ttl;
    var $kelas;
    var $status;

    function __construct($nama,$tl,$kelas,$status){
       $this->nama = $nama;
       $this->ttl = $tl;
       $this->kelas = $kelas;
       $this->status = $status;
    }
    function get_nama(){
        return $this->nama;
    }
    function get_ttl(){
        return $this->ttl;
    }
    function get_kelas(){
        return $this->kelas;
    }
    function get_status(){
        return $this->status;
    }
    
}
?>