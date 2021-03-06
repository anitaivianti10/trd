<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_admin');
	}

//==================================Modul Validasi Input ========================//
	function validation($trigger)
	{
		if ($trigger == "visi") {
			$config = array(
                array(
                        'field' => 'judul',
                        'label' => 'Judul',
                        'rules' => 'required|trim',
                        'errors' => array( 'required' => 'Judul harus diisi',),
                ),
                array(
                        'field' => 'isi',
                        'label' => 'Isi',
                        'rules' => 'required|trim',
                        'errors' => array( 'required' => 'Isi harus diisi',)
                ),
             );
	   	}
       $this->form_validation->set_rules($config);
        
        if ($this->form_validation->run() == FALSE)
        {
            return false;
        }else{
            return true;
        }
	}
//==================================Modul Profile ========================//
    function update_vision()
    {
      $this->Model_admin->update_data("visi");  
    }

    function update_mission()
    {
      $this->Model_admin->update_data("misi");  
    }

    function add_profile()
    {
        $this->Model_admin->update_data("profile_a");
    }

    function update_profile()
    {
        $this->Model_admin->update_data("profile_u");
    }
//==================================Modul Unit ========================//
    function add_diesel_profile()
    {
        $this->Model_admin->update_data("diesel_a");

    }
}

/* End of file Data_control */
/* Location: ./application/controllers/Data_control */