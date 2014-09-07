<?php 

class Contact extends MY_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('contact_model');
    }
    
    /**
     * Displays the Contact form
     */
    
    public function index()
	{
        
        // Set up validation according to contact form model
        $this->form_validation->set_rules($this->contact_model->validation);
        
        
        if ($this->form_validation->run() == true){
            $this->contact_model->insert($this->contact_model);
        }
        $this->load_view('form'); // not implemented, the layout just checks the URI
	}
        
    /**
     * Displays a list of all Contacts by passing data from the Contact model to the view.
     */
    public function view(){
        (ENVIRONMENT=='production') ?  : $this->output->enable_profiler(TRUE);
        $this->load->model('contact_model');
        $this->data['contacts']=$this->contact_model->get_all();
        //var_dump($this->data); //debug the model values
        $this->load_view('list'); // not implemented, the layout just checks the URI
    }
}
