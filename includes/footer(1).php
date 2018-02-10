      </body> 
       <script src="js/jquery-1.10.2.min.js"></script> 
		<script src="js/bootstrap.min.js"></script>
		<script src="js/general.js"></script>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>  
		<script type="text/javascript">
			function printContent(el){
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;

		}
		</script>
 </html>  
