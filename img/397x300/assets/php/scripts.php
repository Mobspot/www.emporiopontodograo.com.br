<script type='text/javascript'>
	window.onload = function(){
		$.get("assets/php/load_bar.php")
			.done(function (data) {
				document.getElementById('carrinho').innerHTML = data;
			});
  }
  
</script>

<script src="assets/js/jquery.js"></script>
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>