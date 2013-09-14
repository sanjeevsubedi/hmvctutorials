<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This Model class handles the band related functions.
 * 
 * @author Sanjeev Subedi
 * @version 1.0
 */
class Band_model extends CI_Model {

    /**
     * get the band names
     * return array
     */
    public function get_bands() {
        $data = array('metallica', 'pantera', 'megadeath');
        return $data;
    }

}