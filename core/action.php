<?php  
 //action.php  
 include 'database.php';  
 $object = new Database();  
if(isset($_POST["action"])) {
        if($_POST["action"] == "Load") {  
             echo $object->get_data_in_table("SELECT * FROM users ORDER BY id DESC");  
        }
        if($_POST["action"] == "Resident") {  
             echo $object->get_resident_data("SELECT * FROM employees");  
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
                $occupation = mysqli_escape_string($object->connect,$_POST['occupation']);  
                $spoccupation = mysqli_escape_string($object->connect,$_POST['spoccupation']);  
                $educ_attained = mysqli_escape_string($object->connect,$_POST['educ_attained']);
                $speduc_attained = mysqli_escape_string($object->connect,$_POST['speduc_attained']);  
          for($count = 0; $count < count($_POST["chname"]); $count++) {  
            $code = substr(str_shuffle("0123456789"), -4);
            $residentCode = substr(str_shuffle("0123456789"), -4);
            $name = $_POST["chname"][$count];
            $chbday = $_POST["chbday"][$count];
            $educational = $_POST["educational"][$count];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($chbday), date_create($today));
            $age=$diff->format('%y');
            $gender = $_POST["chgender"][$count];
            $grade = $_POST["chgrade"][$count];
            $query1="INSERT INTO family_table(fam_id,resident_id,resident_name,age,gender,grade_ave,educational,code) VALUES ('".$residentID."','".$residentCode."','".$name."','".$age."','".$gender."','".$grade."','".$educational."','".$code."')";
            $query3 = "INSERT INTO codes(name,passcode)VALUES('".$name."','".$code."')";
           
              $object->execute_query($query1);
              $object->execute_query($query3);

          }
            $query2="INSERT INTO residents(resident_id,resident_name,address,gender,birthday,spouse_name,annual_income,occupation,spoccupation,educational_attained,speducational_attained) VALUES ('".$residentID."','".$resident_name."','".$address."','".$resident_gender."','".$bday."','".$spouse."','".$income."','".$occupation."','".$spoccupation."','".$educ_attained."','".$speduc_attained."')";
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
          if($_POST["action"]=="Fetch Resident Data") {
              $output =array();
              $query = "SELECT * FROM residents WHERE id ='".$_POST['resident_id']."'";
              $result = $object->execute_query($query);
              while($row = mysqli_fetch_array($result)) {
                $output["id"] = $row["id"];
                $output["resident_id"] = $row["resident_id"];
                $output["name"] = $row["resident_name"];
                $output["address"] = $row["address"];
                $output["gender"] = $row["gender"];
                $output["bday"] = $row["birthday"];
                $output["spouse_name"]=  $row["spouse_name"];
                $output["annual_income"] = $row["annual_income"];
                $output["occupation"] = $row["occupation"];
                $output["spoccupation"] = $row["spoccupation"];
                $output["educational_attained"] = $row["educational_attained"];
                $output["speducational_attained"] = $row["speducational_attained"];
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
          if($_POST["action"]=="Fetch Grant Data") {
            $output =array();
            $query = "SELECT * FROM grant_table WHERE id ='".$_POST['grant_id']."'";
            $result = $object->execute_query($query);
            while($row = mysqli_fetch_array($result)) {
              $output["id"] = $row["id"];
              $output["grant_name"] = $row["grant_name"];
              $output["grade_average"] = $row["grade_average"];
              $output["annual_income"] = $row["annual_income"];
              $output["age_average"] = $row["age_average"];

              
            }
            echo json_encode($output);
          }
          if($_POST["action"]=="Fetch Child Data") {
            $output =array();
            $query = "SELECT * FROM family_table WHERE id ='".$_POST['resident_id']."'";
            $result = $object->execute_query($query);
            while($row = mysqli_fetch_array($result)) {
              $output["id"] = $row["id"];
              $output["resident_id"] = $row["resident_id"];
              $output["resident_name"] = $row["resident_name"];
              $output["age"] = $row["age"];
              $output["gender"] = $row["gender"];
              $output["grade_ave"] = $row["grade_ave"];

              
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
              echo 'Questions Updated';/**/
          }
          if($_POST['action']=="Edit Grant") {
              $grantName = mysqli_escape_string($object->connect,$_POST['grantName']);
              $gpa = mysqli_escape_string($object->connect,$_POST['gpa']);
              $income = mysqli_escape_string($object->connect,$_POST['income']);
              $age_ave = mysqli_escape_string($object->connect,$_POST['age_ave']);
          $query="UPDATE grant_table SET grant_name='$grantName',grade_average='$gpa',annual_income='$income',age_average='$age_ave' WHERE id ='".$_POST['grant_id']."'";
              $object->execute_query($query);

              echo 'Data Updated';/**/
          }
          if($_POST['action']=="Edit Resident") {

               $name = mysqli_escape_string($object->connect,$_POST['name']);
               $address = mysqli_escape_string($object->connect,$_POST['address']);
               $gender = mysqli_escape_string($object->connect,$_POST['gender']);
               $bday = mysqli_escape_string($object->connect,$_POST['bday']);
               $spname = mysqli_escape_string($object->connect,$_POST['spname']);
               $income = mysqli_escape_string($object->connect,$_POST['income']);
                $occupation = mysqli_escape_string($object->connect,$_POST['occupation']);  
                $spoccupation = mysqli_escape_string($object->connect,$_POST['spoccupation']);  
                $educ_attained = mysqli_escape_string($object->connect,$_POST['educ_attained']);
                $speduc_attained = mysqli_escape_string($object->connect,$_POST['speduc_attained']);  
               $query = "UPDATE residents SET resident_name ='$name', address='$address', gender='$gender', birthday='$bday',spouse_name='$spname',annual_income='$income',occupation='$occupation',spoccupation='$spoccupation',educational_attained='$educ_attained',speducational_attained='$speduc_attained' WHERE id = '".$_POST['resident_id']."' ";
              $object->execute_query($query);
              echo 'Data Updated';/**/
          }
          if($_POST['action']=="Edit Child") {
               $name = mysqli_escape_string($object->connect,$_POST['name']);
               $age = mysqli_escape_string($object->connect,$_POST['age']);
               $gender = mysqli_escape_string($object->connect,$_POST['gender']);
               $grade_ave = mysqli_escape_string($object->connect,$_POST['grade_ave']);
               $educational = mysqli_escape_string($object->connect,$_POST['educational']);
               $query = "UPDATE family_table SET resident_name ='$name',  age='$age', gender='$gender', grade_ave='$grade_ave',educational='$educational' WHERE id = '".$_POST['resident_id']."' ";
              $object->execute_query($query);
              echo 'Data Updated';/**/
          }
          if($_POST['action']=="Delete") {
  
            $query = "DELETE FROM employees WHERE id = '".$_POST['employee_id']."' ";
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
           if($_POST["action"] == "Search") {
            $search = mysqli_real_escape_string($object->connect, $_POST["query"]);
            $query = "
            (SELECT resident_id,resident_name FROM residents
            WHERE resident_name LIKE '%".$search."%' OR resident_id LIKE '%".$search."%'
            GROUP BY id DESC
            )UNION(SELECT resident_id,resident_name FROM family_table
            WHERE resident_name LIKE '%".$search."%' OR resident_id LIKE '%".$search."%'
            GROUP BY id DESC
            )";
           $result = $object->execute_query($query);
            while($row = mysqli_fetch_assoc($result)) {
             $output['resident_id'] = $row["resident_id"];
             $output['resident_name'] = $row["resident_name"];
            
            }

          echo json_encode($output);
        }
   }  
 ?>  