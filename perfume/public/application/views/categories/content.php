<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
						<div class="results">Showing <span>12</span> results</div>
						<div class="sorting_container ml-md-auto">
							<div class="sorting">
								<ul class="item_sorting">
									<li>
										<span class="sorting_text">Sort by</span>
										<i class="fa fa-chevron-down" aria-hidden="true"></i>
										<ul>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
											<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
						<!-- Product -->
						<?php foreach ($products as $row){?>
						<div class="product">
							<div class="product_image"><img src="<?php echo $row['picture']?>" alt=""></div>
							<div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
							<div class="product_content">
								<div class="product_title"><a href="product.php"><?php echo $row['product_name']?></div>
								<div class="product_price"><?php echo $row['buyPrice']?></div>
							</div>
						</div>
						<?php }?>
						
				</div>
				<div class="product_pagination">
					<ul>
						<li class="active"><a href="#">01.</a></li>
						<li><a href="#">02.</a></li>
						<li><a href="#">03.</a></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
	</div>