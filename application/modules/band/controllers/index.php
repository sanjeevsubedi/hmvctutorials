<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('band/band_model');
    }

    /**
     * This function displays the band listings
     */
    public function lists() {
        $data['bands'] = $this->band_model->get_bands();
        $this->template->write_view('content', 'list', $data);
        $this->template->render();
    }

    /**
     * This function displays the add form
     */
    public function add() {
        $data = '';
        $this->template->write_view('content', 'new', $data);
        $this->template->render();
    }

}
