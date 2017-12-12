<?php  
 //action.php  
 include 'database.php';  
 $object = new Database();  
if(isset($_POST["action"])) {  
        if($_POST["action"] == "Load") {  
             echo $object->get_data_in_table("SELECT * FROM users ORDER BY id DESC");  
        }
        if($_POST["action"] == "Employee") {  
             echo $object->get_resident_data("SELECT * FROM employees");  
        } 
        if($_POST["action"] == "Questions") {  
             echo $object->get_question_data("SELECT * FROM exam_questions");  
        } 
        if($_POST["action"] == "addEmployee") {  
           $employeeID = mysqli_escape_string($object->connect,$_POST['employeeID']);
           $lname = mysqli_escape_string($object->connect,$_POST['lname']);
           $fname = mysqli_escape_string($object->connect,$_POST['fname']);
           $mdname = mysqli_escape_string($object->connect,$_POST['mdname']);
           $address = mysqli_escape_string($object->connect,$_POST['address']);
           $gender = mysqli_escape_string($object->connect,$_POST['gender']);
            $bday = mysqli_escape_string($object->connect,$_POST['bday']);    
           $query="INSERT INTO employees(employee_id,last_name,first_name,middle_name,address,gender,birthday) VALUES ('".$employeeID."','".$lname."','".$fname."','".$mdname."','".$address."','".$gender."','".$bday."')";
          $object->execute_query($query);
          echo 'Data Inserted';
        }
        if($_POST["action"]=="Fetch Single Data") {
            $output =array();
            $query = "SELECT * FROM employees WHERE id ='".$_POST['employee_id']."'";
            $result = $object->execute_query($query);
            while($row = mysqli_fetch_array($result)) {
              $output["id"] = $row["id"];
              $output["employees_id"] = $row["employee_id"];
              $output["lname"] = $row["last_name"];
              $output["fname"] = $row["first_name"];
              $output["mdname"] = $row["middle_name"];
              $output["address"] = $row["address"];
              if($row["gender"]== 'M'){
                $gender = 'Male';
              }else{
                $gender = 'Female';
              }
              $output["gender"] = $row["gender"];
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
              $query = "UPDATE employees SET last_name ='$lname', first_name = '$fname', middle_name='$mdname', address='$address', gender='$gender', birthday='$bday' WHERE id = '".$_POST['employee_id']."' ";
              $object->execute_query($query);
              echo 'Data Updated';/**/
          }
          if($_POST['action']=="Delete") {
  
            $query = "DELETE FROM employees WHERE id = '".$_POST['employee_id']."' ";
             $object->execute_query($query);
             echo "Data Deleted";
          }

   }  
 ?>  