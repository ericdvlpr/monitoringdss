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
           $('#updateresidentform').on('submit', function(event){  
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
                         $('#myModalResidents').modal('toggle');
                         alert(data);  
                         $('#residentform')[0].reset();  
                         load_resident_data();  
                    }  
               });  
           });
           $('#grantform').on('submit', function(event){ 
                event.preventDefault();  
                  $.ajax({  
                          url:"core/action.php",  
                          method:"POST",  
                          data:new FormData(this),  
                          contentType:false,  
                          processData:false,  
                          success:function(data)  
                          {  
                               $('#myModalGrant').modal('toggle');
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
          $('#childform').on('submit', function(event){  
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
                         $('#myModalChild').modal('toggle');
                         alert(data);  
                         $('#childform')[0].reset();
                         window.location.reload();
                    }  
               });  
           });
            $(document).on('click','#addGrant',function(){
              $('#myModalGrant').modal('show');
           });
          $(document).on('click','.updateResident', function(){
                  var res_id = $(this).attr("id");
                  $('#button_action').val("Save changes");

                  var action = "Fetch Resident Data";
                 
                    $.ajax({
                      url:"core/action.php",
                      method:"POST",
                      data:{resident_id:res_id,action:action},
                      dataType:"json",
                      success:function(data){
                        
                        $("#myModalResidents").modal('show');
                        $("#resident_id").val(data.id);
                        $("#residentID").val(data.resident_id);
                        $("#name").val(data.name);
                        $("#address").val(data.address);
                        $("#gender").val(data.gender);
                        $("#bday").val(data.bday);
                        $("#spname").val(data.spouse_name);
                        $("#income").val(data.annual_income);
                        $("#occupation").val(data.occupation);
                        $("#spoccupation").val(data.spoccupation);
                        $("#educ_attained").val(data.educational_attained);
                        $("#speduc_attained").val(data.speducational_attained);
                        $('#action').val("Edit Resident");
                      }
                    });
                });
            $(document).on('click','.updateChild', function(){
                  var res_id = $(this).attr("id");
                  $('#button_action').val("Save changes");
                  
                  var action = "Fetch Child Data";
                 
                    $.ajax({
                      url:"core/action.php",
                      method:"POST",
                      data:{resident_id:res_id,action:action},
                      dataType:"json",
                      success:function(data){
                        
                     $("#myModalChild").modal('show');   
                        $("#resident_id").val(data.id);
                    $("#residentID").val(data.resident_id);
                        $("#name").val(data.resident_name);
                        $("#age").val(data.age);
                        $("#gender").val(data.gender);
                        $("#grade_ave").val(data.grade_ave);
                        $("#educational").val(data.educational);
                        $('#action').val("Edit Child");
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
                $(document).on('click','.updateGrant', function(){
                        var grant_id = $(this).attr("id");
                        $('#button_action').val("Save changes");
                      
                        var action = "Fetch Grant Data";
                        $.ajax({
                          url:"core/action.php",
                          method:"POST",
                          data:{grant_id:grant_id,action:action},
                          dataType:"json",
                          success:function(data){

                            $("#myModalGrant").modal('show');
                            $("#grant_id").val(data.id);
                            $("#grantName").val(data.grant_name);
                            $("#gpa").val(data.grade_average);
                            $("#income").val(data.annual_income);
                            $("#age_ave").val(data.age_average);
                            $('#action').val("Edit Grant");
                          }
                        });
                  });
                $(document).on('click','.deleteResident', function(){
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
                $(document).on('click', '#add', function(){
                     
                          var html = '';

                          html += "<tr>";
                          html += "<td><div class='col-sm-12'><input type='text' name='chname[]' class='form-control name' autofocus /></td>";
                          html += "<td><div class='col-sm-12'><input type='date' name='chbday[]' class='form-control bday' /></div></td>";
                          html += "<td><div class='col-sm-12'><select class='form-control' name='chgender[]' required><option value=''>Please Select</option><option value='Male'>Male</option><option value='Female'>Female</option></select></div></td>";
                          html += "<td><div class='col-sm-12'><input type='number' min='65' max='95' name='chgrade[]' class='form-control grade' /></div></td>";
                          html += "<td><div class='col-sm-12'><input type='text' name='educational[]' class='form-control educational' /></div></td>";
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
                $('#search').on('keyup',function(event){
                   var query = $('#search').val();
                   var action = "Search";
                   if(query != '')
                   {
                    $.ajax({
                     url:"core/action.php",
                     method:"POST",
                     data:{query:query, action:action},
                      dataType:"json",
                     success:function(data)
                     {
                       $('#result').html('<li ><a class="list-group-item link-class" href="search_result.php?id='+data.resident_id+'">'+data.resident_name+'</a> </li>');
                     }
                    })
                   }
                   else
                   {
                     $('#result').append('<li class="list-group-item link-class">No record of resident!</li>');
                   }
                });
});  