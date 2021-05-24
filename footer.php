<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								
							<h3 class="footer-title">ABOUT US</h3>
							
								<ul class="footer-links">
								<li><a href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i>shop</a></li>
								<li><a href=""><i class="fa fa-briefcase" aria-hidden="true"></i>Careers</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i>Chennai</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+91-9964713807</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>vnivi2000@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
						<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Mobiles</a></li>
									<li><a href="#">SmartPhones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Others</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
						<div class="footer">
								<h3 class="footer-title">Make money with us</h3>
								<ul class="footer-links">
									<li><a href="#">Sell on Bazo</a></li>
									<li><a href="#">Sell your products</a></li>
									<li><a href="#">Become an affliate</a></li>
									<li><a href="#">Become Bazo vendor</a></li>
									<li><a href="#">Others</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
						<div class="footer">
								<h3 class="footer-title">Let us help you</h3>
								<ul class="footer-links">
									<li><a href="#">Your Account</a></li>
									<li><a href="#">Your orders</a></li>
									<li><a href="#">Bazo prime</a></li>
									<li><a href="#">Assistant for you</a></li>
									<li><a href="#">Help from us</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});


		window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#LoggedIn';
        window.location.reload();
    }
}
	</script>
	
