<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          					<h1 class="page-header">Exam Questions</h1>
          					<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModalExam">
							  Add Questions
							</button>
							<?php 
								
 			
							?>
					          <div class="row placeholders">
						            <table class="table table-condensed">
									 		<tr>
									 			<td>#</td>
									 			<td>Question</td>
									 			<td>Command</td>
									 		</tr>
									 		<tbody id="question_table"></tbody>
									</table>
					          </div>
					          
          				 </div>
     			</div>  
	</div>
<div class="modal fade" id="myModalExam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Exams</h4>
      </div>
      <form class="form-horizontal" id="questionForm" method="POST">
	      <div class="modal-body">
	      	 <div class="form-group">
	      	 	<div class="col-sm-10">
	      	 		<label for="inputEmail3" class="control-label"><strong>Please type your new question here</strong></label>
					<input name="question" class="form-control" type="text" id="question" required="required"></input>
	      	 	</div>
	       		  
			    </div>
				Choices :
			    <div class="form-group">
			    	 <label for="inputEmail3" class="col-sm-2 control-label">A</label>
			    	<input type="hidden" value="A" readonly="readonly"></input>
					<div class="col-sm-10">
						<input name="cA" id="cA" class="span4 form-control" type="text" required="required"></input>
					</div>
			   	</div>
				<div class="form-group">
			    	 <label for="inputEmail3" class="col-sm-2 control-label">B</label>
			    	<input type="hidden" value="B" readonly="readonly"></input>
					<div class="col-sm-10">
						<input name="cB" id="cB" class="span4 form-control" type="text" required="required"></input>
					</div>
			   	</div>			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">C</label>
					<input type="hidden" value="C" readonly="readonly"></input>
					<div class="col-sm-10">
						<input  name="cC" id="cC" class="span4 form-control" type="text" required="required"></input>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">D</label>
					<input type="hidden" value="D" readonly="readonly"></input>
					<div class="col-sm-10">
						<input name="cD" id="cD" class="span4 form-control" type="text" required="required"></input>
					</div>
				</div>	
				<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Answer :</label>
						<div class="col-sm-2">
							<input name="answer" id="answer" class="span1 form-control" type="text" required="required"></input>
						</div>		
				</div>
						<input type="hidden" name="action" id="action" value="addQuestion" />
				        <input type="hidden" name="question_id" id="question_id" />
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Save changes</button>
					      </div>		
			    </div>  
	      </div>
	      
      </form>
    </div>
  </div>
</div>  
<?php 
include 'includes/footer.php';
?>
