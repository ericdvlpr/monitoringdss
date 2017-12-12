 $(document).ready(function(){  
           load_resident_data();  
           load_questions_data();
           function load_resident_data(){  
                var action = "Employee";  
                $.ajax({  
                     url:"core/action.php",  
                     method:"POST",  
                     data:{action:action},  
                     success:function(data)  
                     {  
                          $('#resident_table').html(data);  
                     }  
                });  
           }
           function load_questions_data(){  
                var action = "Questions";  
                $.ajax({  
                     url:"core/action.php",  
                     method:"POST",  
                     data:{action:action},  
                     success:function(data)  
                     {  
                          $('#question_table').html(data);  
                     }  
                });  
           }  
           $('#employeeform').on('submit', function(event){  
                event.preventDefault();  
                // var action=$('#action').val();
               $.ajax({  
                    url:"core/action.php",  
                    method:"POST",  
                    data:new FormData(this),  
                    contentType:false,  
                    processData:false,  
                    success:function(data)  
                    {  
                         $('#myModal').modal('toggle');
                         alert(data);  
                         $('#employeeform')[0].reset();  
                         load_resident_data();  
                    }  
               });  
           });
           $('#questionForm').on('submit', function(event){  
                event.preventDefault();  
                // var action=$('#action').val();
               $.ajax({  
                    url:"core/action.php",  
                    method:"POST",  
                    data:new FormData(this),  
                    contentType:false,  
                    processData:false,  
                    success:function(data)  
                    {  
                         $('#myModalExam').modal('toggle');
                         alert(data);  
                         $('#questionForm')[0].reset();  
                         load_questions_data();  
                    }  
               });  
           });
          $(document).on('click','.updateEmployee', function(){
                  var res_id = $(this).attr("id");
                  $('#button_action').val("Save changes");

                  var action = "Fetch Single Data";
                  $.ajax({
                    url:"core/action.php",
                    method:"POST",
                    data:{employee_id:res_id,action:action},
                    dataType:"json",
                    success:function(data){
                      
                      $("#myModal").modal('show');
                      $("#employee_id").val(data.id);
                      $("#employeeID").val(data.employees_id);
                      $("#lname").val(data.lname);
                      $("#fname").val(data.fname);
                      $("#mdname").val(data.mdname);
                      $("#address").val(data.address);
                      $("#gender").val(data.gender);
                      $("#bday").val(data.bday);
                      $('#action').val("Edit");
                    }
                  });
                });
                $(document).on('click','.deleteEmployee', function(){
                    var res_id = $(this).attr("id");

                    var action = "Delete";
                    if(confirm("Are you sure you want to delete?") == true) {
                    
                          $.ajax({
                            url:"core/action.php",
                            method:"POST",
                            data:{employee_id:res_id,action:action},
                            success:function(data){
                              
                              alert(data);
                              window.location.reload();
                              }
                          });
                    }else {
                         return false;
                        }
                  });         
});  