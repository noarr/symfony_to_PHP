	<?php foreach($posts as &$car)  { ?>

	<div class="card float-left center-block p-4 col-sm-12 col-md-6" style="width: 19rem;">
	  <img class="card-img-top" src="<?php echo $car['img_link']; ?>" alt="Card image cap">
	  
		  <div class="card-body">
		    <h5 class="card-title"></h5>
		    <ul class="list-unstyled">
		    <?php	
		        
		         
		    	  echo "<li><em>Model: </em>".$car['model']."</li>";
		    	  echo "<li><em>Latitude: </em>".$car['latitude']."</li>";
		    	  echo "<li><em>Longitude: </em>".$car['longitude']."</li>";
		    	
		    	  echo "<li><a href='rent.php' class='btn btn-primary'>Book me!</a></li>";
		    	   
		    ?>	
		    </ul>
		  </div>
		</div>
		<?php } ?>