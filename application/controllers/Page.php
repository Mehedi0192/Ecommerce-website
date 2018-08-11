<?php if (!defined('BASEPATH')) 	exit('Hacking Attempt: Get out of the system ..!');

class Page extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}
        
        public function index() {
        $data['contact'] = $this->contact_model->index();
        $data['banners'] = $this->banners_model->index();
        
        $data['article'] = $this->article_model->index();
        $data['homegallery'] = $this->homegallery_model->index();
       
       
         $data['slider'] = $this->slider_model->index();


        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }   
    
    public function about() {
		$data['contact'] = $this->contact_model->index();
		$data['about'] = $this->aboutus_model->index();
		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}
         public function management() {
		$data['contact'] = $this->contact_model->index();
		$data['management'] = $this->management_model->index();
		$this->load->view('header', $data);
		$this->load->view('management');
		$this->load->view('footer');
	}
        public function gallery_page() {
		$data['contact'] = $this->contact_model->index();
		$data['gallerypage'] = $this->gallerypage_model->index();
		$this->load->view('header', $data);
		$this->load->view('gallery_page');
		$this->load->view('footer');
	}
        
         public function contact() {
        $data['contact'] = $this->contact_model->index();
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
     // Online feedback
    public function contactEmail() {
        $message = $this->input->post('comments') . '<br/> Contact From <br/>' .
                $this->input->post('name') . '<br/>' .
                $this->input->post('phone');

        $contact = $this->contact_model->index();

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to($contact->email, $contact->company_name);
        $this->email->subject("Contact via website");
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_tempdata("msg", "<span style='color:green'> Successfully submitted. </span>", 5);
        } else {
            $this->session->set_tempdata("msg", "<span style='color:red'> Submission fail. Please try again ! </span>", 5);
        }
        redirect('page/contact');
    }
    public function category($categoryid) {
		$data['contact'] = $this->contact_model->index();
		$data['category'] = $this->category_model->index();
                $data['products'] = $this->products_model->productbycategoryid($categoryid);
                
                if(!$data['category']) {
			redirect(base_url());
		}
		$this->load->view('header', $data);
		$this->load->view('jute');
		$this->load->view('footer');
	}
          public function product_details($id=NULL) {
        $data['contact'] = $this->contact_model->index();
      
        $data['products'] = $this->products_model->get_by_id($id);
        $this->load->view('header', $data);
        $this->load->view('product_details');
        $this->load->view('footer');
    }
    
     public function add_to_cart() {
        $data['contact'] = $this->contact_model->index();
      
        
        $this->load->view('header', $data);
        $this->load->view('add_to_cart');
        $this->load->view('footer');
    }
    

}
