<?php

Class Tes extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		$data['data'] = $this->db->select('*')->from('user')->get()->result(); //Untuk mengambil data dari database webinar
		$this->template->load('template','tes/list',$data);	
    }

function add() {
    $isi = array(
            
             
            'email'     => $this->input->post('email'),
            'password'    => $this->input->post('password'),
            'nama'     => $this->input->post('nama')
		
        );
        $this->db->insert('user',$isi);
        redirect('tes');
    }

	    
function edit(){
	if(isset($_POST['submit'])){
            $data = array(
                
                'email'     => $this->input->post('email'),
                'password'     => $this->input->post('password'),
                'nama'     => $this->input->post('nama')
        );
        $id   = $this->input->post('id');
        $this->db->where('id',$id); //difilter berdasarkan id
        $this->db->update('user',$data); //eksekusi update
        redirect('tes');
        }else{
            $id           = $this->uri->segment(3);
            $data['data'] = $this->db->get_where('user',array('id'=>$id))->row_array();
            $this->template->load('template', 'tes/edit',$data);
        }
    }

 function hapus(){
        $id = $this->uri->segment(3);
        if(!empty($id)){
            // proses delete data
            $this->db->where('id',$id);
            $this->db->delete('user');
        }
        redirect('tes');
    }

}