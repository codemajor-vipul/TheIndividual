<?php 
include 'usercontrol.php';
class user extends usercontrol{
    /*public $title;
    public $content;
    public $id;
    public $imageurl;

    public function __construct($title,$content,$imageurl){
        $this->title = $title;
        $this->content = $content;
        $this->imageurl=$imageurl;
    }*/
    public function id()
    {
        return uniqid(rand (),true);
    }
    /*public function display(){
        echo $this->title;
        echo $this->content;
        echo $this->id;
        echo $this->imageurl;
    }*/
    public function get(){
        return $this->getPosts();
    }
    public function getpostbyid()
    {
        return $this->getPostId($this->$id);
    }
    public function update(){
        $this->updatePosts($this->id,$this->title,$this->content,$this->imageurl);
    }
    public function insert($id,$title,$content,$imageurl,$currenTime,$currentDate,$category){
        $this->insertTable($id,$title,$content,$imageurl,$currenTime,$currentDate,$category);
    }
    public function authenticate($email,$pass){
            return $this->auth($email,$pass);
    }
   

}

?>