
		
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="#">Review</a></li>
				<li class="active"><a href="#">Order</a></li>
				<li><a href="#">Payment</a></li>
			</ol>
		</div>
		<div class="container text-center">

			
		</div>
		
                           
           <?php $cart = $this->cart->contents() ;  ?>
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span >NB personne</span>
						<span>Nom</span>
				        <span > Date debut </span>
						<span > Date Fin </span>
						
						<span >Prix</span>
						
					</li>
					<?php foreach ($cart as $item) : ?>
					<li class="row">

						<span class="quantity"><?php echo $item['nbpersonne']; ?> </span>
						<span class="itemName"><?php echo $item['name']; ?></span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">DT  <?php echo $item['price']; ?></span>

						<span class="itemName"> le <b><?php echo $item['datedb']; ?></b></span>
						<span class="itemName"> le <b><?php echo $item['datefin']; ?></b></span>
						



					</li>
					<?php endforeach; ?>
					
					<li class="row totals">
						<span class="itemName">Total:</span>
						<span class="price"><?php echo $this->cart->total(); ?> DT</span>
						<span class="order"> <a href="User/insert_to_db" class="text-center">Reserver</a></span>
					</li>
				</ul>
			</div>
			
		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="<?php echo base_url('Shop/remove/'.$item['rowid']);?>"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		
		
	