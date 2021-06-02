<?php
  class Pages extends Controller {
    public function __construct(){
      $this->userModel = $this->model('modelchat');
     
    }


    public function show($id){
      $data=   $this->userModel->getblogbyid($id);

      $this->view('pages/show',$data);
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('blogers');
      }

      $data = $this->userModel->getblog();

      $this->view('pages/index', $data);
    }
  


    public function about(){
      $data = [
        'title' => '',
        'description' => ''
      ];

      $this->view('pages/about', $data);
    }
    public function login(){
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_err' => '',
          'password_err' => '',      
        ];

        // Validate Email
        if(empty($data['email'])){
          $data['email_err'] = 'Pleae enter email';
        }

        // Validate Password
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password';
        }

        // Check for bloger/email
        if($this->userModel->findUserByEmail($data['email'])){
          // bloger found
        } else {
          // bloger not found
          $data['email_err'] = 'No user found';
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){
          // Validated
          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);
          
          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
            // header("Location: ".   APPROOT .  "views/Pages/index");
          } else {
            $data['password_err'] = 'Password incorrect';

            $this->view("users/login", $data);
          }
        } else {
          // Load view with errors
          $this->view('users/login', $data);
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',        
        ];

        // Load view
        $this->view('users/login', $data);
      }
    }
    public function update($id){
$result1=$this->userModel->getblogbyid($id);

$this->view('Pages/update',$result1);

    }

    public function user(){
      
      $data = $this->userModel->getblog();

      $this->view('pages/user',$data );

    }
    public function updateid($id){
      $data=[
        'id' => $id,
        'nameart' => $_POST['nameart'],
        'art'=>$_POST['art'],
        'description'=>$_POST['description'],
      ];
      $this->userModel->update($data);


redirect('pages/user');
    }
    public function addblog(){
      $data=[
        'nameart' => $_POST['nameart'],
        'art'=>$_POST['art'],
        'description'=>$_POST['description'],

      ];
      $this->userModel->addblog($data);
      redirect('Pages/user');
        }
   public function delete($id){
     $this->userModel->deleteblog($id);
     redirect('pages/user');
      }

 

    public function createUserSession($bloger){
      $_SESSION['id'] = $bloger->id;
      $_SESSION['name'] = $bloger->name;
      $_SESSION['email'] =$bloger->email;
      redirect('Pages/user');
    }
   

  }