<?php
class modelchat {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }


    public function login($email, $password){
        $this->db->query('SELECT * FROM blogers WHERE email = :email AND password=:password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
  
       return $this->db->single();
  
     
      }
      public function getblog(){
        $data = $this->db->query('SELECT * FROM blog');
        $result = $this->db->resultSet();
        return  $result;
      }

      public function getblogbyid($id){
        $this->db->query('SELECT * FROM blog where `id` = :id');
$this->db->bind(':id',$id);
        $result = $this->db->single();
        return  $result;
      }
public function update($data){
  $this->db->query('UPDATE `blog` SET nameart=:nameart, art=:art, description=:description  WHERE id = :id');

  $this->db->bind(':id',$data['id']);
  $this->db->bind(':nameart',$data['nameart']);
  $this->db->bind(':art',$data['art']);
  $this->db->bind(':description',$data['description']);
  if($this->db->execute()){
    return true;
  }else{
    return false;
  }
}

public function addblog($data){
  $this->db->query('INSERT INTO `blog`(`nameart`, `art`, `description`) VALUES (:nameart,:art,:description)');
 $this->db->bind(':nameart',$data['nameart']);
  $this->db->bind(':art',$data['art']);
  $this->db->bind(':description',$data['description']);
  $this->db->execute();
}

public function deleteblog($id){
  $this->db->query('DELETE FROM `blog` WHERE id = :id');
  $this->db->bind(':id',$id);
 
  if($this->db->execute()){
    return true;
  }else{
    return false;
  }
}


    
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM blogers WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);
  
        $row = $this->db->single();
  
        // Check row
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }

}