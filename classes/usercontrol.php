<?php
include 'database.php';
class usercontrol extends database{

    public function insertTable($id,$title,$content,$imageurl){
        $stmt="INSERT INTO posts(`id`,`title`,`content`,`image`) VALUES('$id','$title','$content','$imageurl')";
        $sql = $this->connection()->query($stmt);
        //$sql = execute([$id,$title,$content,$imageurl]);
    }

   public function getPosts()
   {
       $stmt = "SELECT * from posts";
       $sql = $this->connection()->query($stmt);
       $result= $sql->fetch_assoc();
       return $result;
   }
   public function getIdPost($id){
     $stmt = "SELECT * FROM posts WHERE `id`='$id'";
     $sql = $this->connection()->query($stmt);
     $result = $sql->fetch_assoc();
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

   public function generateId(){
    $c=uniqid(rand (),true);
    return $c;
   }

}

?>