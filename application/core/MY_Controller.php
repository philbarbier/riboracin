<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    private $cssfile = false;
    private $title = "Ribo Racin'";

    protected $viewdata = array();

    public function __construct() {
        parent::__construct();
        $this->viewdata['cssfile'] = $this->cssfile;
        $this->viewdata['title'] = $this->title;
    }

}
