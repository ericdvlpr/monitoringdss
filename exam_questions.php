<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          					<h1 class="page-header">Exam Questions</h1>
          					<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModalExam">
							  Add Questions
							</button>
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
			     <textarea class="form-control" id="mcdesc" name="desc" ></textarea>
	      	 	</div>
	       		  
			    </div>
			    <div class="form-group">
			    	<label class="col-sm-10">Please create the first answer for the question</label>
			    	<div class="col-sm-6">
					        <input class="form-control " type="text" id="mcanswer1" name="answer1">
					</div>        
					<div class="col-sm-6">        
					          <label style="cursor:pointer; color:#06F;">
					          <input type="radio" name="iscorrect" value="answer1">Correct Answer?
					        </label>
			    	</div>  
			    </div>  
			     <div class="form-group">
			     	<div class="col-sm-10">
			    		<strong>Please create the second answer for the question</strong>
			    	</div>
			    	<div class="col-sm-6">
				        <input class="form-control" type="text" id="mcanswer2" name="answer2">
				    </div>
				    <div class="col-sm-6">      
				          <label style="cursor:pointer; color:#06F;">
				          <input type="radio" name="iscorrect" value="answer2">Correct Answer?
				        </label>
			      	</div>  
			    </div>
			    <div class="form-group">
			    	<div class="col-sm-10">
					    <strong>Please create the third answer for the question</strong>
					</div>
					<div class="col-sm-6">
							<input class="form-control" type="text" id="mcanswer3" name="answer3">
					</div>
					<div class="col-sm-6">
						<label style="cursor:pointer; color:#06F;">
					          <input type="radio" name="iscorrect" value="answer3">Correct Answer?
					        </label>
					</div>        
					          
				</div>
				<div class="form-group">
					<div class="col-sm-10">
			    			<strong>Please create the fourth answer for the question</strong>
					</div>
					<div class="col-sm-6">
						<input class="form-control" type="text" id="mcanswer4" name="answer4">
					</div>
					<div class="col-sm-6">        
					          <label style="cursor:pointer; color:#06F;">
					          <input type="radio" name="iscorrect" value="answer4">Correct Answer?
					        </label>
					</div>
				</div>
	      </div>
	      <input type="hidden" name="action" id="action" value="addQuestion" />
        <input type="hidden" name="question_id" id="question_id" />
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>  
<?php 
include 'includes/footer.php';
?>
