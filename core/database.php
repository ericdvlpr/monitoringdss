<?php  
 class Database  
 {  
      //crud class  
      public $connect;  
      private $host = "localhost";  
      private $username = 'root';  
      private $password = '';  
      private  $database = 'db_gfctps';  
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
      public function get_data_in_table($query)  
      {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
           <table class="table table-bordered table-striped">  
                <tr>  
                     <th width="10%">Image</th>  
                     <th width="35%">First Name</th>  
                     <th width="35%">Last Name</th>  
                     <th width="10%">Update</th>  
                     <th width="10%">Delete</th>  
                </tr>  
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                $output .= '  
                <tr>       
                     <td><img src="upload/'.$row->image.'" class="img-thumbnail" width="50" height="35" /></td>  
                     <td>'.$row->first_name.'</td>  
                     <td>'.$row->last_name.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs update">Update</button></td>  
                     <td><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '</table>';  
           return $output;  
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
                     <td>'.$row->employee_id.'</td>  
                     <td>'.$row->first_name.'</td>  
                     <td>'.$row->last_name.'</td>  
                     <td>'.$row->address.'</td>  
                     <td>'.$gender.'</td>  
                     <td>'.$row->birthday.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs updateEmployee">Update</button><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs deleteEmployee">Delete</button></td>  
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
                     <td>'.$row->question_id.'</td>  
                     <td>'.$row->question.'</td>  
                     <td><button type="button" name="update" id="'.$row->question_id.'" class="btn btn-success btn-xs updateQuestion">Update</button></td>  
                </tr>  
                ';  
           }  
           $output .= '';  
           return $output;  
      }      
      // function upload_file($file)  
      // {  
      //      if(isset($file))  
      //      {  
      //           $extension = explode('.', $file["name"]);  
      //           $new_name = rand() . '.' . $extension[1];  
      //           $destination = './upload/' . $new_name;  
      //           move_uploaded_file($file['tmp_name'], $destination);  
      //           return $new_name;  
      //      }  
      // }  
 }  
 ?>  