		
		<footer class="footer mt-auto py-3 fixed-bottom">
			<div class="container">
				<span class="text-muted">Autor: Gabriel P. Oliveira</span>
			</div>
		</footer>

		<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
		
		<script>
			$(document).ready(function(){

				load_data();

				function load_data(query)
				{
				$.ajax({
				url:"<?php echo base_url(); ?>ajaxsearch/fetch",
				method:"POST",
				data:{query:query},
				success:function(data){
					$('#result').html(data);
				}
				})
				}

				$('#search_text').keyup(function(){
				var search = $(this).val();
				if(search != '')
				{
				load_data(search);
				}
				else
				{
				load_data();
				}
				});
			});
	</script>

	</body>

</html>