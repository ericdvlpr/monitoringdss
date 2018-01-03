<div class="row">
<?php 
$questions = mysqli_query($connect,"SELECT * FROM questions WHERE qset='C'");
while($fetch = mysqli_fetch_array($questions)){
?>
	<div class="span6">
		<div class="thumbnail well">
			<div class="caption">
			<p>
			<b><?php echo $fetch[6].'. '.$fetch[1]; ?></b><br />
				<ul style="list-style:none;">
					<li>A. <?php echo $fetch[2]; ?></li>
					<li>B. <?php echo $fetch[3]; ?></li>
					<li>C. <?php echo $fetch[4]; ?></li>
					<li>D. <?php echo $fetch[5]; ?></li>
					<hr />
					<li>
					Your Answer: 
					<select class="span2" name="<?php  echo 'Q'.$fetch[6];?>" required="required">
						<option value="">-</option>
						<option>A</option><option>B</option>
						<option>C</option><option>D</option>
					</select>
					</li>
				</ul>
			</p>
			</div>
		</div>
	</div>
<?php 
}
?>
<div class="pull-right">
<button name="submit" class="btn-success btn-large" >Submit Exam</button>
</div>
</div>