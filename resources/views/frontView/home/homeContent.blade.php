@extends('frontView.master')

@section('title')
	Soft-Buy : HTML Template
@endsection

@section('main_content')
		<div class="feature_products_area mt-4"><!-- start of feature_products_area -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="feature_title"><!-- start of feature_title -->
						<h2>Feature Products</h2>
						<div class="big_hor"></div>
						<div class="small_hor"></div>
					</div><!-- End of feature_title -->
				</div><!-- End of col-md-12 -->
			</div><!-- End of row -->
	
			<div class="row">
				<div class="col-md-12">
					<div class="freture_tab_area"><!-- start of freture_tab_area -->
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						  <li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#Electronics" role="tab"  aria-selected="true">
								<i class="icofont icofont-lamp"></i>
								<h4>Electronics</h4>
							</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link"  data-toggle="pill" href="#fashion" role="tab"  aria-selected="true">
								<i class="icofont icofont-karate"></i>
								<h4>fashion</h4>
							</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link"  data-toggle="pill" href="#gifts" role="tab"  aria-selected="true">
								<i class="icofont icofont-bag"></i>
								<h4>gifts</h4>
							</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link"  data-toggle="pill" href="#home-decor" role="tab"  aria-selected="true">
								<i class="icofont icofont-home"></i>
								<h4>home decor</h4>
							</a>
						  </li>
						</ul>
						<div class="clearfix"> </div>
						
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="Electronics" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="tabcontent_grids">
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>15% Off</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product1.jpg" alt="a" class="img-responsive"/>
											</a>
											
												<div class="feature_hover">
													<a href="#">
														<h2>View product</h2>
													</a>
												</div>
											
										</div>
											<div class="view_product_caption">
												<h4><a href="">Nikon lens camera</a></h4>
												<p><del>$45.99</del>$38.99</p>
												<a href="#">
													<h3>Add to cart</h3>
												</a>
											</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product2.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										
										</div>
										<div class="view_product_caption">
											<h4><a href="">windows phone</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product3.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">Nikon lens camera</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>15% Off</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product4.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">digital caera</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product5.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">dell mouse</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product6.jpg" alt="a" class="img-responsive"/>
												</a>
											
												<div class="feature_hover">
													<a href="#">
														<h2>View product</h2>
													</a>
												</div>
											</div>
											<div class="view_product_caption">
												<h4><a href="">Karma Drone</a></h4>
												<p><del>$45.99</del>$38.99</p>
												<a href="#">
													<h3>Add to cart</h3>
												</a>
											</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
										<div class="gerlly_item gerlly">
											<div class="product_new_tag">
												<h5>New</h5>
											</div>
											<a href="#">
												<img src="{{ asset('frontEnd') }}/images/f_product3.jpg" alt="a" class="img-responsive"/>
											</a>
										
											<div class="feature_hover">
												<a href="#">
													<h2>View product</h2>
												</a>
											</div>
										</div>
										<div class="view_product_caption">
											<h4><a href="">Microsoft Desktop Pc</a></h4>
											<p><del>$45.99</del>$38.99</p>
											<a href="#">
												<h3>Add to cart</h3>
											</a>
										</div>
									</div>
								</div>
								
								<div class="col-sm-4 col-md-3 item_grids">
									<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product1.jpg" alt="a" class="img-responsive"/>
												</a>
											
												<div class="feature_hover">
													<a href="#">
														<h2>View product</h2>
													</a>
												</div>
											</div>
											<div class="view_product_caption">
												<h4><a href="">Karma Drone</a></h4>
												<p><del>$45.99</del>$38.99</p>
												<a href="#">
													<h3>Add to cart</h3>
												</a>
											</div>
									</div>
								</div>
				
							</div>
						</div><!-- End of Electronics Tab -->
							
						  
						 
						<div class="tab-pane fade" id="fashion" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="tabcontent_grids">
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product9.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">black short tops</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product10.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">White party dress</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>New</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product11.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">Red pills pips</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product12.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">black pills</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product13.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">Night party</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product14.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">red party</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product15.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">wedding dress</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
												<div class="gerlly_item gerlly">
													<div class="product_new_tag">
														<h5>10% Off</h5>
													</div>
													<a href="#">
														<img src="{{ asset('frontEnd') }}/images/f_product16.jpg" alt="a" class="img-responsive"/>
													</a>
													
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
												</div>
												<div class="view_product_caption">
													<h4><a href="">hand ring</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
								</div>
						</div><!-- End of fashion Tab -->
						  
						   <div class="tab-pane fade" id="gifts" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="tabcontent_grids">
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product17.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">bag-for-gifts</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product18.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">art-artistic</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product19.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">annie-spratt</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product20.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">freestocks-org</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product21.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">hand ring</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product22.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">birthday-bow-box</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product23.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">lilac</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product24.jpg" alt="a" class="img-responsive"/>
												</a>
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">hope-house</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
								</div>
						  </div><!-- End of gifts Tab -->
						  
						<div class="tab-pane fade" id="home-decor" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="tabcontent_grids">
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product25.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">annie-sprattsh</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product26.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">apartment-bookcase</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product27.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">art-cabinet</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product28.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">bookcase-chairs</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product29.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">jessica-castro</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product30.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">living-room</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>10% Off</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product31.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">nursery</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
									
									<div class="col-sm-4 col-md-3 item_grids">
										<div class="feature_item">
											<div class="gerlly_item gerlly">
												<div class="product_new_tag">
													<h5>new</h5>
												</div>
												<a href="#">
													<img src="{{ asset('frontEnd') }}/images/f_product32.jpg" alt="a" class="img-responsive"/>
												</a>
												
													<div class="feature_hover">
														<a href="#">
															<h2>View product</h2>
														</a>
													</div>
											</div>
												<div class="view_product_caption">
													<h4><a href="">nathan-dumlao</a></h4>
													<p><del>$45.99</del>$38.99</p>
													<a href="#">
														<h3>Add to cart</h3>
													</a>
												</div>
										</div>
									</div>
							
								</div>
						  </div><!-- End of home-decor Tab -->
						  
						</div>
					</div><!-- start of freture_tab_area -->
				</div>
			</div>
			
		</div>
	</div>
@endsection

@section('araival_product')
		<div class="product_slider_area"><!-- start of product_slider_area -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="feature_title"><!-- start of feature_title -->
						<h2>new arrivals</h2>
						<div class="big_hor"></div>
						<div class="small_hor"></div>
					</div><!-- End of feature_title -->
				</div><!-- End of col-md-12 -->
			</div><!-- End of row -->
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="product_slider text-center owl-carousel"><!-- start of product_slider -->
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product30.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product31.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product33.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product34.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product35.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product31.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product32.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
						
						<div class="single_product">
							<div class="product_slider_tag">
								<h5>New</h5>
							</div>
								<img src="{{ asset('frontEnd') }}/images/product35.jpg" alt="product_slider" class="img-responsive"/>
							<div class="product_slider_hover">
								<h4>Formal Shirt</h4>
								<div class="slider_hor"></div>
								<div class="hover_price">
									<h5>$45</h5>
								</div>
								<a href="#" class="hover_add_btn hover_btn"><i class="icofont icofont-shopping-cart"></i>Add cart</a>
							</div>
						</div>
					</div><!-- End of product_slider -->
					
					<div class="sliderControls">
							<div class="owl-nav">
								<div class="thin-left"><i class="icofont icofont-thin-left"></i></div>
								<div class="thin-right"><i class="icofont icofont-thin-right"></i></div>
							</div>
						</div>
					
				</div>
			</div>
		</div>
	</div><!-- End of product_slider_area -->
@endsection