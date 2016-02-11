
		<div class="row footer">
			
			<div class="col-s-12 col-m-12">
				Handcrafted with &#x2764; and &#127851; by Svanhild Egge
			</div>

		

		</div>

	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script type="text/javascript">

		$(".hamburger-link").click(function(){
		      $("#mobile-nav").toggleClass("active");
		      $(this).toggleClass("active");
		      $(".siteblocker").toggleClass("active");
		});

		$(".siteblocker").click(function(){
		      $("#mobile-nav").toggleClass("active");
		      $(".hamburger-link").toggleClass("active");
		      $(".siteblocker").toggleClass("active");
		});

	</script>
		
	
<?php wp_footer(); ?> 
</body>
</html>