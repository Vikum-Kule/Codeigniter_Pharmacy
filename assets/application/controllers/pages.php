<?php 
/**
 * 
 */
class pages extends CI_controller
{
	public function view($page='home'){
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			echo "vikum";
			show_404();

		}
			 $this->load->view('templetes/header');
		if ($page=='view') {
			 	# code...
				 $this->load->model('pharmacyModel');
		 	    $records= $this->pharmacyModel->getRecords();
		 	    $this->load->view('pages/view',['records'=>$records]);
		 	    
		 	    

			 }
		else{	 
			 $data['title'] = ucfirst($page);
			 $this->load->view('pages/'.$page,$data);

			} 
			 $this->load->view('templetes/footer');

	}
	
	public function save(){
		$this->form_validation->set_rules('category', 'CATEGORY', '');
		$this->form_validation->set_rules('genericName', 'GENERIC NAME', 'required');
		$this->form_validation->set_rules('brandName', 'BRAND NAME', 'required');
		$this->form_validation->set_rules('QTY', 'QTY', 'required');
		$this->form_validation->set_rules('EXP', 'EXP', 'required');
		$this->form_validation->set_rules('MFD', 'MFD', 'required');

		if ($this->form_validation->run() )
		{   
			$data= $this->input->post();
			$this->load->model('pharmacyModel');
			if($this->pharmacyModel->saveRecord($data)){

			}
			
			return redirect('view');
			
		}

		}

	public function update($record_Id){

			$this->load->model('pharmacyModel');
			$record=$this->pharmacyModel->getAllRecords($record_Id); 
			$this->load->view('templetes/header');
	 		$this->load->view('pages/update',['record'=>$record]);
	 		$this->load->view('templetes/footer');
	}

	public function resubmit($record_Id){

		$this->form_validation->set_rules('category', 'CATEGORY', 'required');
		$this->form_validation->set_rules('genericName', 'GENERIC NAME', 'required');
		$this->form_validation->set_rules('brandName', 'BRAND NAME', 'required');
		$this->form_validation->set_rules('QTY', 'QTY', 'required');
		$this->form_validation->set_rules('EXP', 'EXP', 'required');
		$this->form_validation->set_rules('MFD', 'MFD', 'required');
		if ($this->form_validation->run() )
		{   $data= $this->input->post();
			$this->load->model('pharmacyModel');
			if($this->pharmacyModel->updateRecords($record_Id,$data)){
				
			}
			
			return redirect('view');
			
		}
		else{
			$this->load->view('update');
		}

	}
	
	public function delete($record_Id){
			$this->load->model('pharmacyModel');
		if($this->pharmacyModel->deleteRecords($record_Id)){
		}
		return redirect('view');
    }
   }
 ?>
 