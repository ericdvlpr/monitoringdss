<?php  
session_start();
 class Database  
 {  
      //crud class  
      public $connect;  
      private $host = "localhost";  
      private $username = 'root';  
      private $password = '123456';  
      private  $database = 'db_monitoring';  
      function __construct()  
      {  
           $this->database_connect();  
      }  
      public function database_connect()  
      {  
           $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);  
      }  
      public function execute_query($query)  
      {  
           return mysqli_query($this->connect, $query);  
      }  
      public function can_login($table_name,$where_condition){
          $condition = '';
          foreach ($where_condition as $key => $value) {
             $condition .= $key . " = '".$value."' AND ";
          }
           $condition = substr($condition, 0, -5);
             $query = "SELECT * FROM ".$table_name." WHERE ". $condition;
           $result = mysqli_query($this->connect, $query);  
                while ($record = mysqli_fetch_array($result)) {
                   $array[] = $record;
              }
              return $array;
          if(mysqli_num_rows($result) ){
            return true;
            
          }else{
            $this->error .= "<p>Wrong data</p>";
          }

        }
      public function get_resident_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
             
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                if($row->gender== 'M'){
                  $gender = 'Male';
                }else{
                  $gender = 'Female';
                }
                $output .= '  
                <tr>       
                     <td><a href="viewResident.php?id='.$row->resident_id.'">'.$row->resident_id.'</a></td>  
                     <td>'.$row->resident_name.'</td>   
                     <td>'.$row->address.'</td>  
                     <td>'.$gender.'</td>  
                     <td>'.$row->birthday.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateResident">Update</button></td>  

                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      } 
      public function get_question_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
             
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                $output .= '  
                <tr>       
                     <td>'.$row->numassign.'</td>  
                     <td>'.$row->question.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateQuestion">Update</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      } 
      public function get_grant_data($query) {  
           $output = '';  
           $result = $this->execute_query($query);   
           while($row = mysqli_fetch_object($result))  
           {  
                $output .= '  
                <tr>       
                     <td>'.$row->id.'</td>  
                     <td>'.$row->grant_name.'</td>  
                     <td>'.$row->grade_average.'</td> 
                     <td>'.number_format($row->annual_income).'</td> 
                     <td>'.$row->age_average.'</td> 
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateQuestion">Update</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      }
      function count_total_user() {
          $query = "SELECT * FROM users";
          $statement = $this->execute_query($query);
          $result = mysqli_num_rows($statement);
          return $result;
      }
      function count_total_resident() {
          $query = "SELECT * FROM residents";
          $statement = $this->execute_query($query);
          $result = mysqli_num_rows($statement);
          return $result;
      }
      function count_total_scholarship() {
          $query = "SELECT * FROM grant_table";
                $result = $this->execute_query($query);   
                     while($row = mysqli_fetch_object($result))  
                     {    
                  $grantGradeAve=$row->grade_average; 
                    $query3 = "SELECT * FROM family_table ft JOIN exams e ON ft.code = e.passcode WHERE e.percentage >= 80  "; 

                    $result3 = $this->execute_query($query3);
                    }
          $result = mysqli_num_rows($result3);
          return $result;
      }
      function count_total_medicines() {
          $query = "SELECT * FROM grant_table";
                $result = $this->execute_query($query);   
                     while($row = mysqli_fetch_object($result))  
                     {    
                  $grantAnnualIncome=$row->annual_income;  
          $query1 = "SELECT * FROM residents WHERE annual_income < '$grantAnnualIncome' ";  
          $result1 = $this->execute_query($query1);
                    }
          $result = mysqli_num_rows($result1);
          return $result;
      }
      function count_total_supplies() {
          $query = "SELECT * FROM grant_table";
                $result = $this->execute_query($query);   
                     while($row = mysqli_fetch_object($result))  
                     {    
                  $grantAgeAve=$row->age_average;   
                      
            $annual_income=$row->annual_income; 
          $query1 = "SELECT * FROM family_table ft JOIN residents rs ON ft.fam_id=rs.resident_id WHERE ft.age <= '$grantAgeAve' AND rs.annual_income <= '$annual_income'";

          $result1 = $this->execute_query($query1); 
                    }
          $result = mysqli_num_rows($result1);
          return $result;
      }
 
 }  
 ?>  