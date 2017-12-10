<?php  
 //action.php  
 include 'database.php';  
 $object = new Database();  
if(isset($_POST["action"])) {  
        if($_POST["action"] == "Load") {  
             echo $object->get_data_in_table("SELECT * FROM users ORDER BY id DESC");  
        }
        if($_POST["action"] == "Resident") {  
             echo $object->get_resident_data("SELECT * FROM residents");  
        } 
        if($_POST["action"] == "Questions") {  
             echo $object->get_question_data("SELECT * FROM exam_questions");  
        } 
        if($_POST["action"] == "addResident") {  
           $residentID = mysqli_escape_string($object->connect,$_POST['residentID']);
           $lname = mysqli_escape_string($object->connect,$_POST['lname']);
           $fname = mysqli_escape_string($object->connect,$_POST['fname']);
           $mdname = mysqli_escape_string($object->connect,$_POST['mdname']);
           $address = mysqli_escape_string($object->connect,$_POST['address']);
           $gender = mysqli_escape_string($object->connect,$_POST['gender']);
           $bday = mysqli_escape_string($object->connect,$_POST['bday']);    
           $query="INSERT INTO residents(resident_id,last_name,first_name,middle_name,address,gender,birthday) VALUES ('".$residentID."','".$lname."','".$fname."','".$mdname."','".$address."','".$gender."','".$bday."')";
          $object->execute_query($query);
          echo 'Data Inserted';
        }
        if($_POST["action"]=="Fetch Single Data") {
            $output =array();
            $query = "SELECT * FROM residents WHERE id ='".$_POST['res_id']."'";
            $result = $object->execute_query($query);
            while($row = mysqli_fetch_array($result)) {
              $output["id"] = $row["id"];
              $output["resident_id"] = $row["resident_id"];
              $output["lname"] = $row["last_name"];
              $output["fname"] = $row["first_name"];
              $output["mdname"] = $row["middle_name"];
              $output["address"] = $row["address"];
              if($row["gender"]== 'M'){
                $gender = 'Male';
              }else{
                $gender = 'Female';
              }
              $output["gender"] = $gender ;
              $output["bday"] = $row["birthday"];
            }
            echo json_encode($output);
          }
          if($_POST['action']=="Edit") {
               $lname = mysqli_escape_string($object->connect,$_POST['lname']);
               $fname = mysqli_escape_string($object->connect,$_POST['fname']);
               $mdname = mysqli_escape_string($object->connect,$_POST['mdname']);
               $address = mysqli_escape_string($object->connect,$_POST['address']);
               $gender = mysqli_escape_string($object->connect,$_POST['gender']);
               $bday = mysqli_escape_string($object->connect,$_POST['bday']);
              $query = "UPDATE residents SET last_name ='$lname', first_name = '$fname', middle_name='$mdname', address='$address', gender='$gender', birthday='$bday' WHERE id = '".$_POST['res_id']."' ";
              $object->execute_query($query);
              echo 'Data Updated';/**/
          }
          if($_POST['action']=="Delete") {
  
            $query = "DELETE FROM residents WHERE id = '".$_POST['res_id']."' ";
             $object->execute_query($query);
             echo "Data Deleted";
          }
          if($_POST['action']=="addQuestion") {
            echo $question = mysqli_escape_string($object->connect,$_POST['desc']);
            echo $answer1 = mysqli_escape_string($object->connect,$_POST['answer1']);
            echo $answer2 = mysqli_escape_string($object->connect,$_POST['answer2']);
            echo $answer3 = mysqli_escape_string($object->connect,$_POST['answer3']);
            echo $answer4 = mysqli_escape_string($object->connect,$_POST['answer4']);
            echo $isCorrect = mysqli_escape_string($object->connect,$_POST['iscorrect']);
            $query = "INSERT INTO exam_questions (question) VALUES ('$question')";
            $lastId = mysqli_insert_id($object->connect);
          }



   }  
 ?>  