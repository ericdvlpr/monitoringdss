 $(document).ready(function(){  
           load_resident_data();  
           load_questions_data();
            load_grant_data();
           function load_resident_data(){  
                var action = "Resident";  
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
           function load_grant_data(){  
                var action = "Grant";  
                $.ajax({  
                     url:"core/action.php",  
                     method:"POST",  
                     data:{action:action},  
                     success:function(data)  
                     {  
                          $('#grant_table').html(data);  
                     }  
                });  
           }
           // $('#residentform').on('submit', function(event){  
           //      event.preventDefault();  
           //      // var action=$('#action').val();
           //     $.ajax({  
           //          url:"core/action.php",  
           //          method:"POST",  
           //          data:new FormData(this),  
           //          contentType:false,  
           //          processData:false,  
           //          success:function(data)  
           //          {  
           //               $('#myModal').modal('toggle');
           //               alert(data);  
           //               $('#residentform')[0].reset();  
           //               load_resident_data();  
           //          }  
           //     });  
           // });
           $('#grantform').on('submit', function(event){  
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
                         $('#grantform')[0].reset();  
                         load_grant_data();  
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
           $(document).on('click','#addGrant',function(){
              $('#myModal').modal('show');
           });
          $(document).on('click','.updateResident', function(){
                  var res_id = $(this).attr("id");
                  $('#button_action').val("Save changes");

                  var action = "Fetch Single Data";
                  $.ajax({
                    url:"core/action.php",
                    method:"POST",
                    data:{res_id:res_id,action:action},
                    dataType:"json",
                    success:function(data){

                      $("#myModal").modal('show');
                      $("#res_id").val(data.id);
                      $("#residentID").val(data.resident_id);
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
          $(document).on('click','.updateQuestion', function(){
                  var question_id = $(this).attr("id");
                  $('#button_action').val("Save changes");
                  
                  var action = "Fetch Question Data";
                  $.ajax({
                    url:"core/action.php",
                    method:"POST",
                    data:{question_id:question_id,action:action},
                    dataType:"json",
                    success:function(data){

                      $("#myModalExam").modal('show');
                      $("#question_id").val(data.id);
                      $("#question").val(data.question);
                      $("#cA").val(data.a);
                      $("#cB").val(data.b);
                      $("#cC").val(data.c);
                      $("#cD").val(data.d);
                      $("#answer").val(data.answerki);
                      $('#action').val("Edit Question");
                    }
                  });
                });
                $(document).on('click','.deleteResident', function(){
                    var res_id = $(this).attr("id");

                    var action = "Delete Resident";
                    if(confirm("Are you sure you want to delete?") == true) {
                    
                          $.ajax({
                            url:"core/action.php",
                            method:"POST",
                            data:{res_id:res_id,action:action},
                            success:function(data){
                              
                              alert(data);
                              window.location.reload();
                              }
                          });
                    }else {
                         return false;
                        }
                  });  
            $(document).on('click', '#add', function(){
                     
                          var html = '';

                          html += "<tr>";
                          html += "<td><div class='col-sm-12'><input type='text' name='chname[]' class='form-control name' autofocus /></td>";
                          html += "<td><div class='col-sm-12'><input type='date' name='chbday[]' class='form-control bday' /></div></td>";
                          html += "<td><div class='col-sm-12'><input type='number' min='65' max='95' name='chgrade[]' class='form-control grade' /></div></td>";
                          html += "<td><div class='col-sm-12'><select class='form-control' name='chgender[]' required><option value=''>Please Select</option><option value='male'>Male</option><option value='female'>Female</option></select></div></td>";
                          html += '<td><div class="col-sm-12"><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
                          $('#children_table').append(html);
                     });
                    

                      $('#residentform').on('submit', function(event){
                          event.preventDefault();
                          var error = '';

                          $('.name').each(function(){
                           var count = 1;
                           if($(this).val() == '')
                           {
                            error += "<p>Enter Child's Name at "+count+" Row</p>";
                            return false;
                           }
                           count = count + 1;
                          });
                          
                          $('.bday').each(function(){
                           var count = 1;
                           if($(this).val() == '')
                           {
                            error += "<p>Enter Child's Age</p>";
                            return false;
                           }
                           count = count + 1;
                          });
                          $('.gender').each(function(){
                           var count = 1;
                           if($(this).val() == '')
                           {
                            error += "<p>Enter Child Gender</p>";
                            return false;
                           }
                           count = count + 1;
                          });
                         
                          var form_data = $(this).serialize();
                         
                           $.ajax({
                            url:"core/action.php",
                            method:"POST",
                            data:form_data,
                            success:function(data)
                            {
                              alert(data);
                              window.location.href = "resident.php";
                            }
                           });
                  });       

});  