<?php
//This is initial controller
class HomeController extends CI_Controller{
    public function index(){
        $data['main_content']='HomeView';
        $this->load->view('includes/template',$data);
        
    }
    
    //This function takes to place view
    public function go_placeview(){
 
        if(!isset($_POST['category']))$data['cat']="all";
        else $data['cat']=$_POST['category'];
        if(!isset($_POST['division']))$data['div']="all";
        else $data['div']=$_POST['division'];

        //loads place model
       $this->load->model('place_model');
       
       //set places.php file inside template
        $data['main_content']='places';
        
        $data['rows']=$this->place_model->getallidname($data['cat'],$data['div']);
        $data['category']=$this->place_model->getallcategory();
        $data['division']=$this->place_model->getalldivision();
        
        //loads place view
        $this->load->view('includes/template',$data);
    }
    
    //shows detailed place information
    public function go_placedetails(){
        $data['main_content']='placedetails';
        $this->load->model('place_model');
        $data['place']=$this->place_model->getplacedetails($_GET['id']);
        //$placename=$_GET['name'];
        //$data['restaurants']=$this->place_model->getrestaurants($_GET['id']);
        $this->load->view('includes/template',$data);
    }
    
    //shows gallery
    public function go_galleryview(){
//        if(!isset($_GET['category']))$data['cat']="all";
//        else $data['cat']=$_GET['category'];
        $data['main_content']='gallery';
        $this->load->model('gallery_model');
        $data['items']=$this->gallery_model->getallcategories();
//        $data['rows']=$this->gallery_model->getallphotos($data['cat']);
        $this->load->view('includes/template',$data);
        
    }
    
    public function go_slideshow(){
        if(!isset($_GET['category']))$data['cat']="all";
        else $data['cat']=$_GET['category'];
        $data['main_content']='slideshow';
        $this->load->model('gallery_model');
//        $data['items']=$this->gallery_model->getallcategories();
        $data['rows']=$this->gallery_model->getallphotos($data['cat']);
        $this->load->view('includes/template',$data);
        
    }
    
    //shows accommodation view
    public function go_accommodationview(){
        
        if(isset($_GET['spotname']))$data['spot']=$_GET['spotname'];
        elseif(!isset($_POST['spotname']))$data['spot']="all";
        else $data['spot']=$_POST['spotname'];
        
        if(!isset($_POST['category']))$data['cat']="all";
        else $data['cat']=$_POST['category'];
        if(!isset($_POST['division']))$data['div']="all";
        else $data['div']=$_POST['division'];

        //loads accommodation model
       $this->load->model('accommodation_model');
        $data['main_content']='accommodations';
        
        //gets all accommodation entity sets according to selected category and division
        $data['rows']=$this->accommodation_model->getall($data['cat'],$data['div'],$data['spot']);
        $data['category']=$this->accommodation_model->getallcategory();
        $data['division']=$this->accommodation_model->getalldivision();
        $data['spotname']=$this->accommodation_model->getallspotname();
        $this->load->view('includes/template',$data);        
    }
    
    //This function takes users to emergencyview
    public function go_emergencyview(){
        
        //if no category and district selected ,then select all
        if(!isset($_POST['category']))$data['cat']="all";
        else $data['cat']=$_POST['category'];
        if(!isset($_POST['district']))$data['dis']="all";
        else $data['dis']=$_POST['district'];


       $this->load->model('emergency_model');
        $data['main_content']='emergency';
        $data['rows']=$this->emergency_model->getall($data['cat'],$data['dis']);
        $data['category']=$this->emergency_model->getallcategory();
        $data['district']=$this->emergency_model->getalldistrict();
        $this->load->view('includes/template',$data);        
    }
    
    public function go_transportview(){
        
        //if no category and district selected ,then select all
        if(!isset($_POST['category']))$data['cat']="all";
        else $data['cat']=$_POST['category'];
        if(!isset($_POST['district']))$data['dis']="all";
        else $data['dis']=$_POST['district'];


       $this->load->model('transport_model');
        $data['main_content']='transport';
        $data['rows']=$this->transport_model->getall($data['cat'],$data['dis']);
        $data['category']=$this->transport_model->getallcategory();
        $data['district']=$this->transport_model->getalldistrict();
        $this->load->view('includes/template',$data);        
    }
    
    public function go_fdrstview(){
        
        //if no category and district selected ,then select all
        if(isset($_GET['spotname']))$data['spot']=$_GET['spotname'];
        elseif(!isset($_POST['spotname']))$data['spot']="all";
        else $data['spot']=$_POST['spotname'];
        //if(!isset($_GET['id']))
        
        $this->load->model('food_model');
        $data['main_content']='foodsandrestaurants';
        $data['food_rows']=$this->food_model->getallfoods();
        $data['spotname']=$this->food_model->getallspotname();
        $data['restaurant_rows']=$this->food_model->getrestaurants($data['spot']);
        $data['tab']=$_GET['tab'];
        $this->load->view('includes/template',$data);
    }
    
    public function go_shoppingview(){
        
        //if no category and district selected ,then select all
        if(isset($_GET['spotname']))$data['spot']=$_GET['spotname'];
        elseif(!isset($_POST['spotname']))$data['spot']="all";
        else $data['spot']=$_POST['spotname'];
        
        $this->load->model('shopping_model');
        $data['main_content']='shopping';
        
        if(!isset($_GET['id']))$data['item_rows']=$this->shopping_model->getallitems();
        else 
        {
            $data['item']=$this->shopping_model->getitem($_GET['id']);
            
        }
        $data['spotname']=$this->shopping_model->getallspotname();
        $data['shopping_rows']=$this->shopping_model->getshoppingmalls($data['spot']);
        $data['tab']=$_GET['tab'];
        $this->load->view('includes/template',$data);
        
    }
    
    
    public function go_weatherview(){
        
        $this->load->model('weather_model');
        $data['main_content']='weather';
        $data['rows']=$this->weather_model->getallweather();
        $this->load->view('includes/template',$data);        
    }
    
    public function go_eventview(){
        
        if(isset($_GET['month']))$data['selected']=$_GET['month'];
        else $data['selected']=  date ('F');
        $data['main_content']='events';
        $this->load->model('event_model');
        $data['rows']=$this->event_model->getmonthevents($data['selected']);
        $this->load->view('includes/template',$data);
    }
    
    public function login(){
        $data['main_content']='login';
        $this->load->view('includes/template',$data);
    }
    
    public function usercreate(){
        $data['main_content']='createuser';
        $this->load->view('includes/template',$data);
    }

    public function validate_creation(){
        $this->form_validation->set_rules('username', 'User-name', 'trim|required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_numeric');
        if ($this->form_validation->run() == TRUE){   
        $array=array(
                'username' => $this->input->post('username'),
                'password'=>md5($this->input->post('password'))
               
            );
        
        $this->load->model('user_model');
        $this->user_model->create($array);
        $data['main_content']='adminpanel';
        $this->load->view('includes/template',$data);
        }
        else{
        $data['main_content']='createuser';
        $this->load->view('includes/template',$data);            
        }
        
    }    
    
    public function validate_login(){
        $this->form_validation->set_rules('username', 'User-name', 'trim|required|alpha');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|alpha_numeric');
        if ($this->form_validation->run() == TRUE){ 
        $this->load->model('user_model');
        $query=$this->user_model->validate();
        
        if($query){
//            $data=array(
//                'username'=>$this->input->post('username'),
//                'is_logged_in'=>true
//            );
//            $this->session->set_userdata($data);
            $data['main_content']='adminpanel';
            $this->load->view('includes/template',$data);
        }
        else{
            $data['msg']="Sorry invalid username or password!";
            $data['main_content']='login';
            $this->load->view('includes/template',$data);
        }
        }
        else{
        $data['main_content']='login';
        $this->load->view('includes/template',$data);     
        }
        
        
    }
    
    public function go_adminplace(){
 
        if(!isset($_POST['category']))$data['cat']="all";
        else $data['cat']=$_POST['category'];
        if(!isset($_POST['division']))$data['div']="all";
        else $data['div']=$_POST['division'];

        //loads place model
       $this->load->model('place_model');
       
       //set places.php file inside template
        $data['main_content']='adminplace';
        
        $data['rows']=$this->place_model->getallidname($data['cat'],$data['div']);
        $data['category']=$this->place_model->getallcategory();
        $data['division']=$this->place_model->getalldivision();
        
        //loads place view
        $this->load->view('includes/template',$data);
    }
    
    public function go_placecreate(){
        $data['error']='';
        $data['main_content']='createplace';
        $this->load->view('includes/template',$data);
    }
    
    public function go_createplace(){
        
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        //$config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            //$error = array(
                $data['error'] = $this->upload->display_errors();

            //$this->load->view('upload_form', $error);
        }
        else {
            $upload_data = $this->upload->data();

            //$this->load->view('upload_success', $data);
        }
        
        $this->form_validation->set_rules('name', 'Place-name', 'trim|required|alpha');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('division', 'Division');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        $this->form_validation->set_rules('map', 'Map', 'trim|required');
        
        if ($this->form_validation->run() == TRUE && !isset($data['error']))
        {
            $array=array(
                'name' => $this->input->post('name'),
                'category'=>$this->input->post('category'),
                'division'=> $this->input->post('division'),
                'location'=> $this->input->post('location'),
                'description'=> $this->input->post('description'),
                'image'=>$upload_data['client_name'],
                'map'=>$this->input->post('map')
            );
            $this->load->model('place_model');
            $success=$this->place_model->insertplace($array);
            if($success==TRUE)$data['message']='This place is created successfully';
        }
        $data['main_content'] = 'createplace';
        $this->load->view('includes/template', $data);
        
    }
    
    public function go_placedelete(){
        $this->load->model('place_model');
        $this->place_model->deleteplace($_GET['placeid']);
        $this->go_adminplace();
    }
    
    public function go_placeupdate(){
        $data['error']='';
        $data['main_content']='updateplace';
        $this->load->model('place_model');
        $data['place']=$this->place_model->getplacedetails($_GET['placeid']);
        
        $this->load->view('includes/template',$data);
    }
    
    public function go_updateplace(){
        $this->form_validation->set_rules('name', 'Place-name', 'trim|required|alpha');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('division', 'Division');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        $this->form_validation->set_rules('map', 'Map', 'trim|required');
        
        if ($this->form_validation->run() == TRUE)
        {
            $array=array(
                'name' => $this->input->post('name'),
                'category'=>$this->input->post('category'),
                'division'=> $this->input->post('division'),
                'location'=> $this->input->post('location'),
                'description'=> $this->input->post('description'),
                //'image'=>$upload_data['client_name'],
                'map'=>$this->input->post('map')
            );
            $this->load->model('place_model');
            $this->place_model->updateplace($_GET['placeid'],$array);
            $data['message']='This place is updated successfully';
            $this->go_adminplace(); 
        }
        else{
            $data['repop']='true';
//            $this->load->model('place_model');
//            $data['place']=$this->place_model->getplacedetails($_GET['placeid']);
            $data['plid']=$_GET['placeid'];
            $data['main_content'] = 'updateplace';
            $this->load->view('includes/template', $data); 
        }
    }

    public function go_adminaccommodation(){
 
        if(!isset($_POST['category']))$data['cat']="all";
        else $data['cat']=$_POST['category'];
        if(!isset($_POST['division']))$data['div']="all";
        else $data['div']=$_POST['division'];
        $data['spot']='all';
        //loads accommodation model
       $this->load->model('accommodation_model');
        $data['main_content']='adminaccommodation';
        
        //gets all accommodation entity sets according to selected category and division
        $data['rows']=$this->accommodation_model->getall($data['cat'],$data['div'],$data['spot']);
        $data['category']=$this->accommodation_model->getallcategory();
        $data['division']=$this->accommodation_model->getalldivision();
        //$data['spotname']=$this->accommodation_model->getallspotname();
        $this->load->view('includes/template',$data);
    }
    
    public function go_accommodationcreate(){
        $data['error']='';
        $data['main_content']='createaccommodation';
        $this->load->view('includes/template',$data);
    }
    
    public function go_createaccommodation(){
        
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        //$config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            //$error = array(
                $data['error'] = $this->upload->display_errors();

            //$this->load->view('upload_form', $error);
        }
        else {
            $upload_data = $this->upload->data();

            //$this->load->view('upload_success', $data);
        }
        
        $this->form_validation->set_rules('name', 'Accommodation-name', 'trim|required|alpha');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('division', 'Division');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('mincost', 'Minimum cost', 'trim|required|numeric|is_natural_no_zero');
        $this->form_validation->set_rules('contactinfo', 'Contact', 'trim|required');
        $this->form_validation->set_rules('webaddress', 'Webaddress', 'trim|required');
        $this->form_validation->set_rules('rating', 'Rating', 'trim|required|numeric|is_natural|less_than[6]');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        //$this->form_validation->set_rules('map', 'Map', 'trim|required');
        
        if ($this->form_validation->run() == TRUE && !isset($data['error']))
        {
            $array=array(
                'name' => $this->input->post('name'),
                'category'=>$this->input->post('category'),
                'division'=> $this->input->post('division'),
                'location'=> $this->input->post('location'),
                'mincost'=>$this->input->post('mincost'),
                'contactinfo'=>$this->input->post('contactinfo'),
                'webaddress'=>$this->input->post('webaddress'),
                'description'=> $this->input->post('description'),
                'rating'=>$this->input->post('rating'),
                'imgdir'=>$upload_data['client_name']
                
            );
            $this->load->model('accommodation_model');
            $success=$this->accommodation_model->insertaccommodation($array);
            if($success==TRUE)$data['message']='This accommodation is created successfully';
        }
        $data['main_content'] = 'createaccommodation';
        $this->load->view('includes/template', $data);
        
    }    

    public function go_accommodationdelete(){
        $this->load->model('accommodation_model');
        $this->accommodation_model->deleteaccommodation($_GET['accommodationid']);
        $this->go_adminaccommodation();
    }
 
    public function go_adminevent(){
 
        $data['main_content']='adminevent';
        $this->load->model('event_model');
        $data['rows']=$this->event_model->getmonthevents('all');
        $this->load->view('includes/template',$data);
    }
    
    public function go_eventcreate(){
        $data['error']='';
        $data['main_content']='createevent';
        $this->load->view('includes/template',$data);
    }
    
    public function go_createevent(){
        
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        //$config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            //$error = array(
                $data['error'] = $this->upload->display_errors();

            //$this->load->view('upload_form', $error);
        }
        else {
            $upload_data = $this->upload->data();

            //$this->load->view('upload_success', $data);
        }
        
        $this->form_validation->set_rules('name', 'event-name', 'trim|required|alpha');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('sdt', 'Date1');
        $this->form_validation->set_rules('start', 'Month1');
        $this->form_validation->set_rules('edt', 'Date2');
        $this->form_validation->set_rules('end', 'Month2');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        //$this->form_validation->set_rules('map', 'Map', 'trim|required');
        
        if ($this->form_validation->run() == TRUE && !isset($data['error']))
        {
            $array=array(
                'name' => $this->input->post('name'),
                'category'=>$this->input->post('category'),
                'location'=> $this->input->post('location'),
                'daterange'=>$this->input->post('sdt').' '.$this->input->post('start').'-'.$this->input->post('edt').' '.$this->input->post('end'),
                'image'=>$upload_data['client_name'],
                'description'=> $this->input->post('description')
                
            );
            $this->load->model('event_model');
            $success=$this->event_model->insertevent($array);
            if($success==TRUE)$data['message']='This event is created successfully';
        }
        $data['main_content'] = 'createevent';
        $this->load->view('includes/template', $data);
        
    }    

    public function go_eventdelete(){
        $this->load->model('event_model');
        $this->event_model->deleteevent($_GET['eventid']);
        $this->go_adminevent();
    }    

    public function go_admintransport(){
 
        $data['main_content']='admintransport';
        $this->load->model('transport_model');
        $data['rows']=$this->transport_model->getall('all','all');
        $this->load->view('includes/template',$data);
    }
    
    public function go_transportcreate(){
        $data['error']='';
        $data['main_content']='createtransport';
        $this->load->view('includes/template',$data);
    }
    
    public function go_createtransport(){
  
        $this->form_validation->set_rules('name', 'transport-name', 'trim|required|alpha');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('contact', 'Contact', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('website', 'Webaddress', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        //$this->form_validation->set_rules('map', 'Map', 'trim|required');
        
        if ($this->form_validation->run() == TRUE && !isset($data['error']))
        {
            $array=array(
                'name' => $this->input->post('name'),
                'category'=>$this->input->post('category'),
                'location'=> $this->input->post('location'),
                'contact'=>$this->input->post('contact'),
                'email'=>$this->input->post('email'),
                'website'=>$this->input->post('website'),
                
            );
            $this->load->model('transport_model');
            $success=$this->transport_model->inserttransport($array);
            if($success==TRUE)$data['message']='This transport is created successfully';
        }
        $data['main_content'] = 'createtransport';
        $this->load->view('includes/template', $data);
        
    }    

    public function go_transportdelete(){
        $this->load->model('transport_model');
        $this->transport_model->deletetransport($_GET['transportid']);
        $this->go_admintransport();
    }    
 
    public function go_adminemergency(){
 
        $data['main_content']='adminemergency';
        $this->load->model('emergency_model');
        $data['rows']=$this->emergency_model->getall('all','all');
        $this->load->view('includes/template',$data);
    }
    
    public function go_emergencycreate(){
        $data['error']='';
        $data['main_content']='createemergency';
        $this->load->view('includes/template',$data);
    }
    
    public function go_createemergency(){
  
        $this->form_validation->set_rules('name', 'emergency-name', 'trim|required|alpha');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('district', 'District', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('contact', 'Contact', 'trim|required');
        
        //$this->form_validation->set_rules('website', 'Webaddress', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        //$this->form_validation->set_rules('map', 'Map', 'trim|required');
        
        if ($this->form_validation->run() == TRUE && !isset($data['error']))
        {
            $array=array(
                'name' => $this->input->post('name'),
                'category'=>$this->input->post('category'),
                'district'=>$this->input->post('district'),
                'location'=> $this->input->post('location'),
                'contact'=>$this->input->post('contact')
                
            );
            $this->load->model('emergency_model');
            $success=$this->emergency_model->insertemergency($array);
            if($success==TRUE)$data['message']='This emergency is created successfully';
        }
        $data['main_content'] = 'createemergency';
        $this->load->view('includes/template', $data);
        
    }    

    public function go_emergencydelete(){
        $this->load->model('emergency_model');
        $this->emergency_model->deleteemergency($_GET['emergencyid']);
        $this->go_adminemergency();
    }
 
    public function go_adminshopping(){
 

        //loads shopping model
       $this->load->model('shopping_model');
        $data['main_content']='adminshopping';
        
        //gets all shopping entity sets according to selected category and division
        $data['rows']=$this->shopping_model->getallshoppingmalls();
        $this->load->view('includes/template',$data);
    }
    
    public function go_shoppingcreate(){
        $data['error']='';
        $data['main_content']='createshopping';
        $this->load->model('place_model');
        $data['places']=$this->place_model->getallidname('all','all');
        $this->load->view('includes/template',$data);
    }
    
    public function go_createshopping(){
        
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        //$config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            //$error = array(
                $data['error'] = $this->upload->display_errors();

            //$this->load->view('upload_form', $error);
        }
        else {
            $upload_data = $this->upload->data();

            //$this->load->view('upload_success', $data);
        }
        
        $this->form_validation->set_rules('name', 'shopping-name', 'trim|required|alpha');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('opening_days', 'Opening days', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('website', 'Website', 'trim|required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required');
        $this->form_validation->set_rules('place_id', 'Spot name', 'trim|required');
        
        if ($this->form_validation->run() == TRUE && !isset($data['error']))
        {
            $array=array(
                'name' => $this->input->post('name'),
                'description'=> $this->input->post('description'),
                'opening_days'=>$this->input->post('opening_days'),
                'location'=> $this->input->post('location'),
                'website'=>$this->input->post('website'),
                'image'=>$upload_data['client_name'],
                'place_id'=>$this->input->post('place_id')
                
            );
            $this->load->model('shopping_model');
            $success=$this->shopping_model->insertshopping($array);
            if($success==TRUE)$data['message']='This shopping is created successfully';
        }
        $this->load->model('place_model');
        $data['places']=$this->place_model->getallidname('all','all');
        $data['main_content'] = 'createshopping';
        $this->load->view('includes/template', $data);
        
    }    

    public function go_shoppingdelete(){
        $this->load->model('shopping_model');
        $this->shopping_model->deleteshopping($_GET['shoppingid']);
        $this->go_adminshopping();
    }
     
    
    public function search(){
        $this->load->model('place_model');
        // Define Output HTML Formating
        $html = '';
        $html .= '<li class="result">';
        $html .= '<a target="_blank" href="urlString">';
        $html .= '<h3>nameString</h3>';
        $html .= '</a>';
        $html .= '</li>';

        // Get Search
        $search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
        $category=$_POST['category'];
        $division=$_POST['division'];
        
        if (strlen($search_string) >= 1 && $search_string !== ' ') {

                $result_array=$this->place_model->getallname($search_string,$category,$division);
                // Check If We Have Results
                if (isset($result_array)) {
                    
                        foreach ($result_array as $result) {
                                    // Format Output Strings And Hightlight Matches
                                    $display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result->name);
                                    $display_url = 'go_placedetails?id='.$result->id;

                                // Insert Name
                                $output = str_replace('nameString', $display_name, $html);
                                // Insert URL
                                $output = str_replace('urlString', $display_url, $output);
//
                                echo($output);
                             }
                }
                else{

                        // Format No Results Output
                        $output = str_replace('urlString', 'javascript:void(0);', $html);
                        $output = str_replace('nameString', '<b>No Results Found.</b>', $output);
                        //$output = str_replace('functionString', 'Sorry :(', $output);

                        // Output
                        echo($output);
                }
                   
        }
        
        
     }
    
}

?>
 