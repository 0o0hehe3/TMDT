</div>
				</div>
			  	</div>
			</div>
		</div><!--end content -->  
	</div>
</div>
	</div>
	<script type = "text/javascript">
		$(document).ready(function(){
			$(".list-group-item > a").on('click',function(){	
				$(".list-group-item > a").removeClass("active");
				$(this).addClass("active");
				if( $(".list-group-item > a.active + ul").is(":visible") ){
					$(".list-group-item > a.active + ul").slideUp(400);
				}else{	
					$(".list-group-item > a.active + ul").slideToggle(400);	
					$(".list-group-item :not(.active) + ul").slideUp(400);
				}
			});
			$("#checkall").click(function () {
			    $(".check").prop('checked', $(this).prop('checked'));
			});
			$("#mobile-menu").click(function(e) {
	        	e.preventDefault();
	        	$("#wrapper").toggleClass("toggled");
    		});
		});
	</script>
</body>
</html>