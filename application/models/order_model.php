<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class order_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'tbl_order';
        $this->pkey = 'orderid';
    }
}
