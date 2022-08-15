<?php
class projects{
    public function dbconnect(){
        $username = "root";
        $password = "";
        $database = new PDO("mysql:host=localhost;dbname=we_work;",$username,$password);
        return $database;
    } 
    function contact_us(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM contact_us ORDER BY `id` DESC");
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
      }
      }
      function add_team($name,$job_title,$job_description,$fileName1,$file1){
            $database=$this->dbconnect();
            $addsub = $database->prepare("INSERT INTO 
            add_team(name,job_title,job_description,image_name,image_position,created_at)
            VALUES(:name,:job_title,:job_description,:image_name,:image_position,:created_at)");
            $addsub->bindParam("name",$name);
            $addsub->bindParam("job_title",$job_title);
            $addsub->bindParam("job_description",$job_description);
            move_uploaded_file($file1,"category/".$fileName1);
            $position1 = "category/".$fileName1;
            $addsub->bindParam("image_name",$fileName1);
            $addsub->bindParam("image_position",$position1);
            $date=date("Y-m-d h:i:sa");
            $addsub->bindParam("created_at",$date);
            if($addsub->execute()){
                  return "success";                        
                }else{
                    return "fail";
                }
    
    }
    function get_all_admins(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM registration ORDER BY `id` DESC");
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
      }  
    }
    function get_all_team(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM add_team ORDER BY `id` DESC");
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
      }  
    }
    function get_join(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM join1 ORDER BY `id` DESC");
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
      }  
    }
    function get_all_client(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM clients ORDER BY `id` DESC");
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
      }  
    }
      function delete_contact($id){
        $database=$this->dbconnect();
        $delete1=$database->prepare("delete FROM contact_us where id=:id");
        $delete1->bindParam("id",$id);
            if($delete1->execute()){
                    return "success";
            }else{
                    return "fail";
                }
            }
        function delete_admin($id){
                $database=$this->dbconnect();
                $delete1=$database->prepare("delete FROM registration where id=:id");
                $delete1->bindParam("id",$id);
                    if($delete1->execute()){
                            return "success";
                    }else{
                            return "fail";
                        }
                    }
        function delete_team($id){
                $database=$this->dbconnect();
                $delete1=$database->prepare("delete FROM add_team where id=:id");
                $delete1->bindParam("id",$id);
                 if($delete1->execute()){
                                    return "success";
                            }else{
                                    return "fail";
                                }
                            }
         function delete_join($id){
                $database=$this->dbconnect();
                $delete1=$database->prepare("delete FROM join1 where id=:id");
                $delete1->bindParam("id",$id);
                 if($delete1->execute()){
                                    return "success";
                            }else{
                                    return "fail";
                                }
                            }
        function delete_client($id){
                $database=$this->dbconnect();
                $delete1=$database->prepare("delete FROM clients where id=:id");
                $delete1->bindParam("id",$id);
                 if($delete1->execute()){
                                    return "success";
                            }else{
                                    return "fail";
                                }
                            }
        function add_category($cat_name){
            $database=$this->dbconnect();
            $check = $database->prepare("select * from category_name where cat_name=:cat_name");
            $check->bindParam("cat_name",$cat_name);
            if($check->execute()){
            if($check->rowCount() > 0){
                return "failed";
            }else{
            $addcat = $database->prepare("INSERT INTO category_name(cat_name) VALUES(:cat_name)");
            $addcat->bindParam("cat_name",ucfirst($cat_name));
            if($addcat->execute()){
                return "success";
                }else{
                        return "fail";
                    }
            }
        }}
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
        function get_all_category(){
            $database=$this->dbconnect();
            $results = $database->prepare("SELECT * FROM category_name");
            if($results->execute()){
                if ($results->rowCount()>0) {
                     return $results;
                }}
        }
        function get_all_sub(){
            $database=$this->dbconnect();
            $results = $database->prepare("SELECT * FROM sub_cat");
            if($results->execute()){
                if ($results->rowCount()>0) {
                     return $results;
                }}
        }
        function add_subcat1($subcat_name,$category_name,$fileName1,$file1){
            $database=$this->dbconnect();
            $results = $database->prepare("SELECT * FROM category_name where cat_name=:u");
            $results->bindParam("u",$category_name);
            if($results->execute()){
                if ($results->rowCount()>0) {
                    foreach($results as $r){
                    $id=$r['cat_id'];
                }
                $addsub = $database->prepare("INSERT INTO 
                sub_cat(sub_id,cat_name,subcat1_name,subcat1_img,subcat1_position)
                VALUES(:sub_id,:cat_name,:subcat1_name,:subcat1_img,:subcat1_position)");
                $addsub->bindParam("cat_name",$category_name);
                $addsub->bindParam("subcat1_name",ucfirst($subcat_name));
                move_uploaded_file($file1,"category/".$fileName1);
                $position1 = "category/".$fileName1;
                $addsub->bindParam("subcat1_img",$fileName1);
                $addsub->bindParam("subcat1_position",$position1);
                $addsub->bindParam("sub_id",$id);
                if($addsub->execute()){
                      return "success";                        
                    }else{
                        return "fail";
                    }}
        }}
       
        function add_subcat2($sub_subcat_name,$sub,$fileName1,$file1){
            $database=$this->dbconnect();
            $results = $database->prepare("SELECT * FROM sub_cat where subcat1_name=:u");
            $results->bindParam("u",$sub);
            if($results->execute()){
                if ($results->rowCount()>0) {
                    foreach($results as $r){
                    $id=$r['sub_id'];
                    $category_name=$r['cat_name'];
                }
                $addsub = $database->prepare("INSERT INTO 
                sub_sub_cat(sub_sub_id,cat_name,subcat_name,subcat1_name,subcat1_img,subcat1_position)
                VALUES(:sub_sub_id,:cat_name,:subcat_name,:subcat1_name,:subcat1_img,:subcat1_position)");
                $addsub->bindParam("cat_name",$category_name);
                $addsub->bindParam("subcat_name",$sub);
                $addsub->bindParam("subcat1_name",ucfirst($sub_subcat_name));
                move_uploaded_file($file1,"category/".$fileName1);
                $position1 = "category/".$fileName1;
                $addsub->bindParam("subcat1_img",$fileName1);
                $addsub->bindParam("subcat1_position",$position1);
                $addsub->bindParam("sub_sub_id",$id);
                if($addsub->execute()){
                      return "success";                        
                    }else{
                        return "fail";
                    }}
        }}
    function show_projects(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM add_project2 ORDER BY `project_id` DESC");
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
      }
    }
    function delete_cat($cat_name){
        $database=$this->dbconnect();
        $delete1=$database->prepare("delete FROM sub_sub_cat where cat_name=:cat_name");
        $delete1->bindParam("cat_name",$cat_name);
        if($delete1->execute()){
            $delete2=$database->prepare("delete FROM sub_cat where cat_name=:cat_name");
            $delete2->bindParam("cat_name",$cat_name);  
            if($delete2->execute()){
                $delete3=$database->prepare("delete FROM category_name where cat_name=:cat_name");
                $delete3->bindParam("cat_name",$cat_name); 
                if($delete3->execute()){
                    $delete4 = $database->prepare("SELECT * FROM add_project2 where subcat_name1=:subcat_name1");
                        $delete4->bindParam("subcat_name1",$cat_name);
                        if($delete4->execute()){
                            if ($delete4->rowCount()>0) {
                                foreach($delete4 as $r){
                                $id=$r['project_id'];
                                $delete5=$database->prepare("delete FROM add_project_file2 where id=:id");
                                $delete5->bindParam("id",$id); 
                                if($delete5->execute()){
                                $id=$r['project_id'];
                                    $delete6=$database->prepare("delete FROM add_project2 where project_id=:id");
                                    $delete6->bindParam("id",$id); 
                                    if($delete6->execute()){
                                      return "success";
                                    }else{
                                        return "fail";
                                    }
                                } 
                            } 
                    
                }
            }
      }
    } return "success";
}else{
    return "fail";
}          

}
    function register_admin($email,$password){
        $database=$this->dbconnect();
        $checkEmail = $database->prepare("SELECT * FROM registration WHERE email = :EMAIL");
        $checkEmail->bindParam("EMAIL",$email);
        $checkEmail->execute();
        if($checkEmail->rowCount()>0){
           return "failed";
        }else{
            $addUser = $database->prepare("INSERT INTO 
            registration(email,password,created_at)
            VALUES(:email,:password,:created_at)");
            $addUser->bindParam("password",$password);
            $addUser->bindParam("email",$email);
            $date=date("Y-m-d h:i:sa");
            $addUser->bindParam("created_at",$date);
            if($addUser->execute()){
               return "success";
                }else{
                    return "fail";

                        }
                } 

    } //register end

    function login($email,$password){
        $database=$this->dbconnect();
        $login = $database->prepare("SELECT * FROM registration WHERE email = :email AND password = :password");
        $login->bindParam("email",$email);
        $login->bindParam("password",$password);
        $login->execute();
        if($login->rowCount()==1){
        $user = $login->fetchObject();
        session_start();
        $_SESSION['user'] = $user;
        header('Location:add_category.php',true);
        }
         else{
           return "fail" ; 
        }
    }// end login
    function client($fileName1,$file1){
        $database=$this->dbconnect();
            $addsub = $database->prepare("INSERT INTO 
            clients(position)
            VALUES(:position)");
            move_uploaded_file($file1,"client/".$fileName1);
            $position1 = "client/".$fileName1;
            $addsub->bindParam("position",$position1);
            if($addsub->execute()){
                  return "success";                        
                }else{
                    return "fail";
                }
    }

    function delete_subcat($subcat_name){
        $database=$this->dbconnect();
        $delete1=$database->prepare("delete FROM sub_sub_cat where subcat_name=:subcat_name");
        $delete1->bindParam("subcat_name",$subcat_name);
        if($delete1->execute()){
            $delete2=$database->prepare("delete FROM sub_cat where subcat1_name=:subcat1_name");
            $delete2->bindParam("subcat1_name",$subcat_name);  
            if($delete2->execute()){
                    $delete4 = $database->prepare("SELECT * FROM add_project2 where subcat_name2=:subcat_name2");
                        $delete4->bindParam("subcat_name2",$subcat_name);
                        if($delete4->execute()){
                            if ($delete4->rowCount()>0) {
                                foreach($delete4 as $r){
                                $id=$r['project_id'];
                                $delete5=$database->prepare("delete FROM add_project_file2 where id=:id");
                                $delete5->bindParam("id",$id); 
                                if($delete5->execute()){
                                $id=$r['project_id'];
                                    $delete6=$database->prepare("delete FROM add_project2 where project_id=:id");
                                    $delete6->bindParam("id",$id); 
                                    if($delete6->execute()){
                                    
                                  return "success";
                                } else{
                                    return "fail";
                                }
                            } 
                    
                }
            }
           // return "success";
      }
    } return "success";
}else{
    return "fail";
}          

}
    function delete_project($id){
        $database=$this->dbconnect();
        $delete1=$database->prepare("delete FROM add_project_file2 where id=:id");
        $delete1->bindParam("id",$id);
            if($delete1->execute()){
                $delete2=$database->prepare("delete FROM add_project2 where project_id=:id");
                $delete2->bindParam("id",$id);
                if($delete2->execute()){
                    return "success";}
            }else{
                    return "fail";
                }
            }
    function add_project1($project_name,$client_name,$project_date,$project_url,$category_name,
    $fileName,$file3,$home_img,$file1,$description){
        echo $project_name,$client_name,$project_date,$project_url,$category_name,$description;
                $a=explode("/",$category_name);
                $subcat_name1=$a[0]; 
                $subcat_name2=$a[1]; 
                if(count($a)==3){
                $subcat_name3=$a[2];
                }else{
                    $subcat_name3=" ";

                } 
                $database =$this->dbconnect();
                $addUser = $database->prepare("INSERT INTO 
                add_project2(project_name,home_img,home_position,client_name,project_date,project_url,description,created_at,subcat_name1,subcat_name2,subcat_name3)
                VALUES(:project_name,:home_img,:home_position,:client_name,:project_date,:project_url,:description,:created_at,:subcat_name1,:subcat_name2,:subcat_name3)");
                $addUser->bindParam("project_name",$project_name);
                $addUser->bindParam("client_name",$client_name);
                move_uploaded_file($file1,"category/".$home_img);
                $position1 = "category/".$home_img;
                $addUser->bindParam("home_img",$home_img);
                $addUser->bindParam("home_position",$position1);
                $addUser->bindParam("project_date",$project_date);
                $addUser->bindParam("project_url",$project_url);
                $addUser->bindParam("subcat_name1",$subcat_name1);
                $addUser->bindParam("subcat_name2",$subcat_name2);
                $addUser->bindParam("subcat_name3",$subcat_name3);
                $addUser->bindParam("description",$description);
                $date=date("Y-m-d h:i:sa");
                $addUser->bindParam("created_at",$date);
                if($addUser->execute()){
                    $results = $database->prepare("SELECT * FROM add_project2 where project_name=:u and project_url=:u1");
                        $results->bindParam("u",$project_name);
                        $results->bindParam("u1",$project_url);
                        if($results->execute()){
                            if ($results->rowCount()>0) {
                                foreach($results as $r){
                                $id=$r['project_id'];
                            }
                                //save file in server storge
                                foreach($fileName as $index=>$file){
                                    if($fileName[$index]!=""){
                                move_uploaded_file($file3[$index],"category/".$fileName[$index]);
                                $position = "category/".$fileName[$index];
                                $uploadFile = $database->prepare("INSERT INTO add_project_file2(id,name,position) VALUES(:id,:name,:position)");
                                $uploadFile->bindParam("name",$fileName[$index]);
                                $uploadFile->bindParam("position",$position);
                                $uploadFile->bindParam("id",$id);
                                $uploadFile->execute();
                                }
                                }
                                return "success";
                }else{
                    return "fail";
                
                }
            }       
        } 
    }



     // start home ----------------------------------------------------------------------------------
     function home_services($cat,$description,$fileName1,$file1){
        require_once "form_submit.php";
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_services where cat=:cat");
        $results->bindParam("cat",$cat);
        if($results->execute()){
            if ($results->rowCount()==0) {
            $addsub = $database->prepare("INSERT INTO 
            home_services(cat,description,home_position)
            VALUES(:cat,:description,:home_position)");
            move_uploaded_file($file1,"home/".$fileName1);
            $position1 = "home/".$fileName1;
            $addsub->bindParam("cat",$cat);
            $addsub->bindParam("description",$description);
            $addsub->bindParam("home_position",$position1);
            if($addsub->execute()){
                $results2 = $database->prepare("SELECT * FROM home_services where cat=:cat");
                $results2->bindParam("cat",$cat);
                if($results2->execute()){
                    if ($results2->rowCount()>0) {
                        foreach($results2 as $r){
                        $id=$r['id'];
                    }
                if(isset($_SESSION['test'])){
                    $i=0;
                    foreach($_SESSION['test'] as $s){
                    if($_SESSION['test'][$i][0]!=[]){
                    $def = $database->prepare("INSERT INTO home_services2(id,point) VALUES(:id,:point)");
                    $def->bindParam("point",$_SESSION['test'][$i][0]);
                    $def->bindParam("id",$id);
                    $def->execute();
                    $i++;
                }}
                unset($_SESSION['test']);
            }}
            return "success";
        }}
        }else{
            foreach($results as $r){
                $id=$r['id'];
            }
            $update = $database->prepare("UPDATE home_services 
            SET home_position=:home_position , description=:description where id=:e");
            $update->bindParam("e",$id);
            move_uploaded_file($file1,"home/".$fileName1);
            $position1 = "home/".$fileName1;
            $update->bindParam("home_position",$position1);
            $update->bindParam("description",$description);
            if($update->execute()){
                $results2 = $database->prepare("SELECT * FROM home_services2 where id=:e");
                $results2->bindParam("e",$id);
                if($results2->execute()){
                    if ($results2->rowCount()>0) {
                    $delete1=$database->prepare("delete FROM home_services2 where id=:id");
                    $delete1->bindParam("id",$id);
                     if($delete1->execute()){
                        if(isset($_SESSION['test'])){
                            $i=0;
                            foreach($_SESSION['test'] as $s){
                            if($_SESSION['test'][$i][0]!=[]){
                            $def = $database->prepare("INSERT INTO home_services2(id,point) VALUES(:id,:point)");
                            $def->bindParam("point",$_SESSION['test'][$i][0]);
                            $def->bindParam("id",$id);
                            $def->execute();
                            $i++;
                        }}
                        unset($_SESSION['test']);
                        return "success";

                    }
                    return "success";

                }
                      }else{
                        if(isset($_SESSION['test'])){
                            $i=0;
                            foreach($_SESSION['test'] as $s){
                            if($_SESSION['test'][$i][0]!=[]){
                            $def = $database->prepare("INSERT INTO home_services2(id,point) VALUES(:id,:point)");
                            $def->bindParam("point",$_SESSION['test'][$i][0]);
                            $def->bindParam("id",$id);
                            $def->execute();
                            $i++;
                        }}
                        unset($_SESSION['test']);
                        return "success";
                    }   }
                    return "success";

                }else{
                   return "fail";
                 }
            }else{
                return "fail";
           }
           } }  }
     function home_whyus($link,$description,$fileName1,$file1){
        require_once "whyuspoint.php";
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_whyus");
        if($results->execute()){
            if ($results->rowCount()==0) {
            $addsub = $database->prepare("INSERT INTO 
            home_whyus(description,home_position,link)
            VALUES(:description,:home_position,:link)");
            move_uploaded_file($file1,"home/".$fileName1);
            $position1 = "home/".$fileName1;
            $addsub->bindParam("cat",$cat);
            $addsub->bindParam("description",$description);
            $addsub->bindParam("home_position",$position1);
            $addsub->bindParam("link",$link);
            if($addsub->execute()){
                $results2 = $database->prepare("SELECT * FROM home_whyus where id=:id");
                $results2->bindParam("id","1");

                if($results2->execute()){
                    if ($results2->rowCount()>0) {
                        foreach($results2 as $r){
                        $id=$r['id'];
                    }
                if(isset($_SESSION['test2'])){
                    $i=0;
                    foreach($_SESSION['test2'] as $s){
                    if($_SESSION['test2'][$i][0]!=[]){
                    $def = $database->prepare("INSERT INTO home_whyus2(id,point) VALUES(:id,:point)");
                    $def->bindParam("point",$_SESSION['test2'][$i][0]);
                    $def->bindParam("id",$id);
                    $def->execute();
                    $i++;
                }}
                unset($_SESSION['test']);
            }}
            return "success";
        }}
        }else{
            foreach($results as $r){
                $id=$r['id'];
            }
            $update = $database->prepare("UPDATE home_whyus 
            SET home_position=:home_position , description=:description , link=:link where id=:e");
            $update->bindParam("e",$id);
            move_uploaded_file($file1,"home/".$fileName1);
            $position1 = "home/".$fileName1;
            $update->bindParam("home_position",$position1);
            $update->bindParam("description",$description);
            $update->bindParam("link",$link);
            if($update->execute()){
                $results2 = $database->prepare("SELECT * FROM home_whyus where id=:e");
                $results2->bindParam("e",$id);
                if($results2->execute()){
                    if ($results2->rowCount()>0) {
                    $delete1=$database->prepare("delete FROM home_whyus2 where id=:id");
                    $delete1->bindParam("id",$id);
                     if($delete1->execute()){
                        if(isset($_SESSION['test2'])){
                            $i=0;
                            foreach($_SESSION['test2'] as $s){
                            if($_SESSION['test2'][$i][0]!=[]){
                            $def = $database->prepare("INSERT INTO home_whyus2(id,point) VALUES(:id,:point)");
                            $def->bindParam("point",$_SESSION['test2'][$i][0]);
                            $def->bindParam("id",$id);
                            $def->execute();
                            $i++;
                        }}
                        unset($_SESSION['test2']);
                        return "success";

                    }
                    return "success";

                }
                      }else{
                        if(isset($_SESSION['test2'])){
                            $i=0;
                            foreach($_SESSION['test2'] as $s){
                            if($_SESSION['test2'][$i][0]!=[]){
                            $def = $database->prepare("INSERT INTO home_whyus2(id,point) VALUES(:id,:point)");
                            $def->bindParam("point",$_SESSION['test2'][$i][0]);
                            $def->bindParam("id",$id);
                            $def->execute();
                            $i++;
                        }}
                        unset($_SESSION['test2']);
                        return "success";
                    }   }
                    return "success";

                }else{
                   return "fail";
                 }
            }else{
                return "fail";
           }
           } } 
      }
    function home($fileName1,$file1){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_header");
        if($results->execute()){
            if ($results->rowCount()==0) {
            $addsub = $database->prepare("INSERT INTO 
            home_header(home_position)
            VALUES(:home_position)");
            move_uploaded_file($file1,"home/".$fileName1);
            $position1 = "home/".$fileName1;
            // $addsub->bindParam("subcat1_img",$fileName1);
            $addsub->bindParam("home_position",$position1);
            if($addsub->execute()){
                  return "success";                        
                }else{
                    return "fail";
               }
        
        }else{
            foreach($results as $r){
                $id=$r['id'];
            }
            $update = $database->prepare("UPDATE home_header 
            SET home_position=:home_position where id=:e");
            $update->bindParam("e",$id);
            move_uploaded_file($file1,"home/".$fileName1);
            $position1 = "home/".$fileName1;
            $update->bindParam("home_position",$position1);
            if($update->execute()){
                return "success";                        
            }else{
                return "fail";
           }
           }   }}
      function home_categories($cat,$description){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM home_category where cat=:cat");
        $results->bindParam("cat",$cat);
        if($results->execute()){
            if ($results->rowCount()==0) {
            $addsub = $database->prepare("INSERT INTO 
            home_category(cat,description)
            VALUES(:cat,:description)");
            $addsub->bindParam("cat",$cat);
            $addsub->bindParam("description",$description);
            if($addsub->execute()){
                  return "success";                        
                }else{
                    return "fail";
               }
        
        }else{
            foreach($results as $r){
                $id=$r['id'];
            }
            $update = $database->prepare("UPDATE home_category 
            SET description=:description where id=:e");
            $update->bindParam("e",$id);
            $update->bindParam("description",$description);
            if($update->execute()){
                return "success";                        
            }else{
                return "fail";
           }
           }   }}
   //end home ------------------------------------------------------------ 
}
?>