<?php
include 'database.php';
class usercontrol extends database{

    public function insertTable($id,$title,$content,$imageurl,$createTime,$createDate,$category){
        $stmt="INSERT INTO posts(`id`,`title`,`content`,`image`,`createTime`,`createDate`,`category`) VALUES('$id','$title','$content','$imageurl','$createTime','$createDate','$category')";
        $sql = $this->connection()->query($stmt);
        //$sql = execute([$id,$title,$content,$imageurl]);
    }

   public function getPosts()
   {
       $stmt = "SELECT * from posts";
       $sql = $this->connection()->query($stmt);
       $result= $sql->fetchAll();
       return $result;
   }
   public function getIdPost($id){
     $stmt = "SELECT * FROM posts WHERE `id`='$id'";
     $sql = $this->connection()->query($stmt);
     $result = $sql->fetchAll();
     return $result;
   }
   public function updatePost($id,$title,$content,$imageurl)
   {
        $stmt= "UPDATE posts SET `title`='$title',`content`='$body',`$image`='$image' WHERE `id`='$id'";
        $sql = $this->connection()->query($stmt);
   }
   public function deletePost($id){
        $stmt = "DELETE FROM posts WHERE `id`='$id'";
        $sql = $this->connection()->query($stmt);
   }
   public function categories(){
       $p="SELECT `category` FROM `posts`";
       $sql = $this->connection()->query($p);
        $result = $sql->fetchAll();
        return $result;
   }

   public function generateId(){
    $c=uniqid(rand (),true);
    return $c;
   }
   public function auth($email,$pass){
       $p="SELECT * FROM `authentication` WHERE email='$email'";
       $result = $this->connection()->query($p);
       if(!$result)
       {
           return 0;
       }
       else{
           $row= $result->fetch();
           if(password_verify($pass,$row['password'])){
               return 1;
           }
       }
   }

}

?>