<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Batas_nilai_m extends MY_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->data['table_name'] = 'batas_nilai';
            $this->data['primary_key'] = 'id_batas';
        }
    }
?>