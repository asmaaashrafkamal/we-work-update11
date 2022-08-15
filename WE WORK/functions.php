<?php
class get{
    public function dbconnect(){
        $username = "root";
        $password = "";
        $database = new PDO("mysql:host=localhost;dbname=we_work;",$username,$password);
        return $database;
    }
    function get_all_team(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM add_team ");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    function get_all_client(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM clients ");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    function get_all_projects(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM add_project where category_name='web'");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    //start home function--------------------------------------------------------------
    function home_category(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_category");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    function home_whyus(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_whyus");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    function home_header(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_header");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    function get_category(){
        $database=$this->dbconnect();
        //ORDER BY `id` DESC
        $results = $database->prepare("SELECT * FROM home_services");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    function get_category2($cat){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_services where cat=:cat");
        $results->bindParam("cat",$cat);
        if($results->execute()){
            if ($results->rowCount() > 0) {
                foreach($results as $r){
                    $id=$r['id'];
                }
                $results1 = $database->prepare("SELECT * FROM home_services2 where id=:id");
                $results1->bindParam("id",$id);
                if($results1->execute()){
                    if ($results1->rowCount() > 0) {
                        return $results1;
                    } 
              }
            } 
      }
    }
//end home function--------------------------------------------------------------
function whyuspoints(){
    $database=$this->dbconnect();
    $results = $database->prepare("SELECT * FROM home_whyus2");
    if($results->execute()){
        if ($results->rowCount() > 0) {
            return $results;
        } 
  }
}
    function get_all_projects1(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM add_project2 where category_name='Mobile'");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
public function get_specific1($id){
    $database=$this->dbconnect();
  $results1 = $database->prepare("SELECT * FROM add_project_file2 where id =:u");
    $results1->bindParam("u",$id);
    if($results1->execute()){
        if ($results1->rowCount() > 0) {
            return $results1;
        } 
  }
}
public function get_specific($id){
    $database=$this->dbconnect();
    $results = $database->prepare("SELECT * FROM add_project2 where project_id=:u");
    $results->bindParam("u",$id);
    if($results->execute()){
        if ($results->rowCount() > 0) {
            return $results;
        } 
  }

}

function contact($name,$email,$subject,$messeges){
    $database=$this->dbconnect();
    $contact = $database->prepare("INSERT INTO 
    contact_us(name, email, subject,messege)VALUES(:name,:email,:subject,:messege)");
    $contact->bindParam("name",$name);
    $contact->bindParam("email",$email);
    $contact->bindParam("subject",$subject);
    $contact->bindParam("messege",$messeges);
    if($contact->execute()){
     return "success";
    }else{
       return "fail";
    }
}
function check_on_sub($sub1,$sub2){
    $database=$this->dbconnect();
    $results = $database->prepare("SELECT * FROM sub_sub_cat where cat_name=:s1 and subcat_name=:s2");
    $results->bindParam("s1",$sub1);
    $results->bindParam("s2",$sub2);
    if($results->execute()){
        if ($results->rowCount() > 0) {
            return $results;
        } 
  }
}
function get_all_exterior($sub_category){
    $database=$this->dbconnect();
    $results = $database->prepare("SELECT * FROM add_project2 where category_name=:s");
    $results->bindParam("s",$sub_category);
    if($results->execute()){
        if ($results->rowCount() > 0) {
            return $results;
        } 
  }
}
function get_cat(){
    $database=$this->dbconnect();
    $results = $database->prepare("SELECT * FROM category_name");
    if($results->execute()){
        if ($results->rowCount() > 0) {
            return $results;
        } 
  }
}
function get_subcat(){
    $database=$this->dbconnect();
    $results = $database->prepare("SELECT * FROM sub_cat");
    if($results->execute()){
        if ($results->rowCount() > 0) {
            return $results;
        } 
  }
}
function join($name,$email,$job_title,$job_description,$fileName1,$file1){
    $database=$this->dbconnect();
    $addsub = $database->prepare("INSERT INTO join1(name,email,job_title,job_description,image_position,created_at)
    VALUES(:name,:email,:job_title,:job_description,:image_position,:created_at)");
    $addsub->bindParam("name",$name);
    $addsub->bindParam("email",$email);
    $addsub->bindParam("job_title",$job_title);
    $addsub->bindParam("job_description",$job_description);
    move_uploaded_file($file1,"../dashboard/join/".$fileName1);
    $position1 = "join/".$fileName1;
    $addsub->bindParam("image_position",$position1);
    $date=date("Y-m-d h:i:sa");
    $addsub->bindParam("created_at",$date);
    if($addsub->execute()){
          return "success";                        
        }else{
            return "fail";
        }

}
function get_projects($sub1,$sub2,$sub3){
    $database=$this->dbconnect();
    $results = $database->prepare("SELECT * FROM add_project2 where subcat_name1=:s1 and subcat_name2=:s2 and subcat_name3=:s3 ORDER BY `project_id` DESC");
    $results->bindParam("s1",$sub1);
    $results->bindParam("s2",$sub2);
    $results->bindParam("s3",$sub3);
    if($results->execute()){
        if ($results->rowCount() > 0) {
            return $results;
        } 
  }
}
}
?>