<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FourOhFour extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    
    public function index()
	{
        if (uri_string()!='fourohfour') redirect('fourohfour');
        $this->load->view('404');
	}
    /**
     * Lists all Contacts.
     */

}

/* End of file 404.php */
/* Location: ./application/controllers/fourohfour.php */