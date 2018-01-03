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
             echo $object->get_question_data("SELECT * FROM questions WHERE qset='A'");  
        }
        if($_POST["action"] == "Grant") {  
             echo $object->get_grant_data("SELECT * FROM grant_table");  
        } 

        if($_POST["action"] == "addResident") {
                $residentID = mysqli_escape_string($object->connect,$_POST['residentID']);
                $resident_name = mysqli_escape_string($object->connect,$_POST['name']);
                $address = mysqli_escape_string($object->connect,$_POST['address']);
                $resident_gender = mysqli_escape_string($object->connect,$_POST['gender']);
                $bday = mysqli_escape_string($object->connect,$_POST['bday']);
                $spouse = mysqli_escape_string($object->connect,$_POST['spname']);
                $income = mysqli_escape_string($object->connect,$_POST['income']);  
          for($count = 0; $count < count($_POST["chname"]); $count++)
          {  
            $code = substr(str_shuffle("0123456789"), -4);
            $name = $_POST["chname"][$count];
            $chbday = $_POST["chbday"][$count];
            $today = date("Y-m-d");
            $diff = date_diff(date_create( $bday), date_create($today));
            $age=$diff->format('%y');
            $gender = $_POST["chgender"][$count];
            $grade = $_POST["chgrade"][$count];
            $query1="INSERT INTO family_table(fam_id,child_name,age,gender,grade_ave,code) VALUES ('".$residentID."','".$name."','".$age."','".$gender."','".$grade."','".$code."')";
            $query3 = "INSERT INTO codes(name,passcode)VALUES('".$name."','".$code."')";
            $query4="INSERT INTO residents(resident_id,resident_name,address,gender,birthday) VALUES ('". $code."','".$name."','".$address."','".$gender."','".$chbday."')";  
              $object->execute_query($query1);
              $object->execute_query($query3);
              $object->execute_query($query4);

          }
            $query2="INSERT INTO residents(resident_id,resident_name,address,gender,birthday,spouse_name,annual_income) VALUES ('".$residentID."','".$resident_name."','".$address."','".$resident_gender."','".$bday."','".$spouse."','".$income."')";
          $object->execute_query($query2);
         echo 'Data Inserted';
        }
        if($_POST['action'] == "addGrant"){
          $grantName = mysqli_escape_string($object->connect,$_POST['grantName']);
          $gpa = mysqli_escape_string($object->connect,$_POST['gpa']);
          $income = mysqli_escape_string($object->connect,$_POST['income']);
          $age_ave = mysqli_escape_string($object->connect,$_POST['age_ave']);
          $query="INSERT INTO grant_table(grant_name,grade_average,annual_income,age_average) VALUES ('".$grantName."','".$gpa."','".$income."','".$age_ave."')";
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
              $output["name"] = $row["resident_name"];
              $output["address"] = $row["address"];
              if($row["gender"]== 'M'){
                $gender = 'Male';
              }else{
                $gender = 'Female';
              }
              $output["gender"] = $gender ;
              $output["bday"] = $row["birthday"];
                            $output["spouse_name"]=  $row["spouse_name"];
              $output["annual_income"] = $row["annual_income"];
            }
            echo json_encode($output);
          }
          if($_POST["action"]=="Fetch Question Data") {
            $output =array();
            $query = "SELECT * FROM questions WHERE id ='".$_POST['question_id']."'";
            $result = $object->execute_query($query);
            while($row = mysqli_fetch_array($result)) {
              $output["id"] = $row["id"];
              $output["question"] = $row["question"];
              $output["a"] = $row["a"];
              $output["b"] = $row["b"];
              $output["c"] = $row["c"];
              $output["d"] = $row["d"];
              $output["answerki"] = $row["answerki"];
              
            }
            echo json_encode($output);
          }
          if($_POST['action']=="Edit Question") {
               $question = mysqli_escape_string($object->connect,$_POST['question']);
               $a = mysqli_escape_string($object->connect,$_POST['cA']);
               $b = mysqli_escape_string($object->connect,$_POST['cB']);
               $c = mysqli_escape_string($object->connect,$_POST['cC']);
               $d = mysqli_escape_string($object->connect,$_POST['cD']);
               $answer = mysqli_escape_string($object->connect,$_POST['answer']);
               $query = "UPDATE questions SET question='$question', a='$a', b='$b', c='$c', d='$d', answerki='$answer' WHERE id ='".$_POST['question_id']."' ";
              $object->execute_query($query);
              echo 'Data Updated';/**/
          }
          if($_POST['action']=="Edit") {
               $lname = mysqli_escape_string($object->connect,$_POST['question']);
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
            $sql = "SELECT numassign FROM questions WHERE qset='A' ORDER BY id DESC";
                $result = mysqli_query($object->connect,$sql);
                $row = mysqli_fetch_array($result);
                 $lastnumber=$row['numassign'];
                 $answerKey = $lastnumber + 1;
                
             $alterTable="ALTER TABLE answer_key ADD `$answerKey` VARCHAR(50) AFTER `$lastnumber`";
            $question = mysqli_escape_string($object->connect,$_POST['question']);
             $cA = mysqli_escape_string($object->connect,$_POST['cA']);
             $cB = mysqli_escape_string($object->connect,$_POST['cB']);
             $cC = mysqli_escape_string($object->connect,$_POST['cC']);
             $cD = mysqli_escape_string($object->connect,$_POST['cD']);
             $answer = mysqli_escape_string($object->connect,$_POST['answer']);
            $query="INSERT INTO questions(question,a,b,c,d,answerki,numassign,qset) VALUES ('".$question."','".$cA."','".$cB."','".$cC."','".$cD."','". $answer."','". $answerKey."','A')";
              $queryInsertAnswer = "INSERT INTO answer_key(`a$answerKey`)VALUES('".$answer."')";
              $object->execute_query($query);
              $object->execute_query($alterTable);
            echo 'Data Inserted';
            
          }

          
   }  
 ?>  