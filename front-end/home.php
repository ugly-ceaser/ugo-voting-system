<?php

	include './header.php';
?>    
    <section class="py-lg-80 py-30 " style="background-color: #008751">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="text-center">
						<h1 class="box-title text-white mb-20">Your Vote Is Your POWER</h1>
						<p class="text-white-50 fs-18 mb-30"></p>
					</div>
					<form class="cours-search mb-30">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Find candidates, campaign timetable">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit">Search Campaigns</button> 
							</div>
						</div>
					</form>	
				</div>
				<div class="col-lg-6 col-12">							
					<div class="text-center">
						<ul class="list-inline">
							<li><a href="#" class="btn btn-dark btn-sm mb-20">Candidates</a></li>
							<li><a href="#" class="btn btn-dark btn-sm mb-20">Campaigns</a></li>
							<li><a href="#" class="btn btn-dark btn-sm mb-20">Manifestoes</a></li>
							<li><a href="#howToVote" class="btn btn-dark btn-sm mb-20">how to vote</a></li>
							<li><a href="#hoeToRegister" class="btn btn-dark btn-sm mb-20">How to register</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="py-20 logo-slide bb-1" data-aos="fade-up">
		<div class="container">			
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel owl-theme owl-btn-1" data-nav-arrow="false" data-nav-dots="false" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
						<div class="item"><img src="../images/front-end-img/unilogo/l-1.png" class="img-fluid my-15" alt="" ></div>
						<div class="item"><img src="../images/front-end-img/unilogo/l-2.png" class="img-fluid my-15" alt="" ></div>
						<div class="item"><img src="../images/front-end-img/unilogo/l-3.png" class="img-fluid my-15" alt="" ></div>
						<div class="item"><img src="../images/front-end-img/unilogo/l-4.png" class="img-fluid my-15" alt="" ></div>
						<div class="item"><img src="../images/front-end-img/unilogo/l-5.png" class="img-fluid my-15" alt="" ></div>
						<div class="item"><img src="../images/front-end-img/unilogo/l-6.png" class="img-fluid my-15" alt="" ></div>
						<div class="item"><img src="../images/front-end-img/unilogo/l-7.png" class="img-fluid my-15" alt="" ></div>
						<div class="item"><img src="../images/front-end-img/unilogo/l-8.png" class="img-fluid my-15" alt="" ></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section class="bt-1 py-lg-100 py-50 overflow-xh" data-aos="fade-up">
		<div class="container">		
			<div class="row mt-30 align-items-center">
				<div class="col-lg-5 col-12 d-lg-block d-none">
					<div class="browserMockup browserMockup--perspectiveLeft2 me-70 position-relative">
						<div class="browserMockup__addressBar">
							<span class="browserMockup__button"></span>
							<span class="browserMockup__button"></span>
							<span class="browserMockup__button"></span>
							<span class="browserMockup__addressInput"></span>
						</div>
						<span class="homeScreenshot  homeScreenshot--gcs" style="background-position-y: 0px;"></span>
					</div>
				</div>
				<div class="col-lg-7 col-12">					
					<h6 class="sub-heading">Your Vote is Your Power</h6>
					<h1 class="mb-15">Registration is ongoing</h1>					
					<hr class="w-100 bg-primary ms-0">					
					<p class="fs-18 my-30">lorem ipsum dolor sit amet, consect</p>
					
					<div class="countnm-bx">
						<div class="row">
							<div class="col-xl-3 col-6">
								<div class="bg-white box-shadowed rounded p-20 mb-30">
									<h1 class="my-10 fw-300"><span class="countnm"><?= getVoters($conn) ?></span></h1>
									<p class="text-uppercase mb-0">voters</p>
								</div>
							</div>
							<div class="col-xl-3 col-6">
								<div class="bg-white box-shadowed rounded p-20 mb-30">
									<h1 class="my-10 fw-300"><span class="countnm"><?= getCandidates($conn) ?></span></h1>
									<p class="text-uppercase mb-0">Candidates</p>
								</div>
							</div>
							<div class="col-xl-3 col-6">
								<div class="bg-white box-shadowed rounded p-20 mb-30">
									<h1 class="my-10 fw-300"><span class="countnm"><?= getPositions($conn) ?></span></h1>
									<p class="text-uppercase mb-0">positions</p>
								</div>
							</div>
							<div class="col-xl-3 col-6">
								<div class="bg-white box-shadowed rounded p-20 mb-30">
									<h1 class="my-10 fw-300"><span class="countnm"><?= getVotes($conn) ?></span></h1>
									<p class="text-uppercase mb-0"> Total Votes</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="text-center d-flex gap-3 justify-content-start">
						<a href="#" class="btn btn-primary">Explore the Site</a>
						<a href="#" class="btn btn-outline btn-primary"> <i class="fa fa-youtube-play me-10"></i>Watch Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="howToVote" class="py-50 bg-white" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">					
					<h6 class="sub-heading">How To Vote</h6>
					<h1 class="mb-15">Your Vote Is Your Power</h1>					
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-xl-4 col-md-4 col-12">
					<div class="box no-shadow">
						<div class="box-body">
							<span class="text-primary fs-50"><i class="fa fa-database"></i></span>
							<div class="fw-600 fs-18 mb-2 mt-15">Registration</div>
							<div class="fs-16">Go to Any of the Commision Approved Registration Center with Your National Identification Card And Bank Verification Number</div>
							
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-4 col-12">
					<div class="box no-shadow">
						<div class="box-body">
							<span class="text-primary fs-50"><i class="fa fa-user-secret"></i></span>
							<div class="fw-600 fs-18 mb-2 mt-15">Vote</div>
							<div class="fs-16">Visit our page on ElectVote 1.0 Page and login with the details sent to your mail</div>
							<a href="../engin/index.php" class="d-block mt-30 fs-18 hover-primary">Vote Now<i class="ms-5 fa fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-4 col-12">
					<div class="box no-shadow">
						<div class="box-body">
							<span class="text-primary fs-50"><i class="fa fa-flag"></i></span>
							<div class="fw-600 fs-18 mb-2 mt-15">Preview</div>
							<div class="fs-16">select your prefered candidates in each category. double check your selection before submiting . Once you submit your ballot, you can not unvote</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-50" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Reviews & Ratings</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-12">
					<div class="owl-carousel owl-theme owl-btn-1" data-nav-arrow="true" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
						<div class="item">
							<div class="text-center">
								<div class="bg-primary-light w-50 mx-auto rounded-circle overflow-hidden">
									<img src="../images/front-end-img/avatar/4.jpg" class="avatar-lg w-auto" alt="">
								</div>
								<div class="max-w-750 mx-auto">									
									<div class="testimonial-info">
										<h4 class="name mb-0 mt-10">Peter Packer</h4>
										<p>-Art Director</p>
									</div>
									<div class="testimonial-content">
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<p class="fs-16">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto dolore aliquam autem quibusdam necessitatibus ipsam accusamus doloremque fugiat, ratione deserunt a, sapiente similique culpa odit. Libero iure non laboriosam ipsa?.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="text-center">
								<div class="bg-primary-light w-50 mx-auto rounded-circle overflow-hidden">
									<img src="../images/front-end-img/avatar/5.jpg" class="avatar-lg w-auto" alt="">
								</div>
								<div class="max-w-750 mx-auto">									
									<div class="testimonial-info">
										<h4 class="name mb-0 mt-10">Peter Packer</h4>
										<p>-Art Director</p>
									</div>
									<div class="testimonial-content">
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<p class="fs-16"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto dolore aliquam autem quibusdam necessitatibus ipsam accusamus doloremque fugiat, ratione deserunt a, sapiente similique culpa odit. Libero iure non laboriosam ipsa?. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="text-center">
								<div class="bg-primary-light w-50 mx-auto rounded-circle overflow-hidden">
									<img src="../images/front-end-img/avatar/9.jpg" class="avatar-lg w-auto" alt="">
								</div>
								<div class="max-w-750 mx-auto">									
									<div class="testimonial-info">
										<h4 class="name mb-0 mt-10">Peter Packer</h4>
										<p>-Art Director</p>
									</div>
									<div class="testimonial-content">
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<p class="fs-16">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto dolore aliquam autem quibusdam necessitatibus ipsam accusamus doloremque fugiat, ratione deserunt a, sapiente similique culpa odit. Libero iure non laboriosam ipsa?.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="py-80 bg-dark bg-img countnm-bx" data-aos="fade-up" style="background-image: url(../images/front-end-img/map-2.png); background-position: top center;">
		<div class="container">			
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 mb-30">
					<h1 class="mb-15 text-white text-center">Voter Registration Countdown</h1> 	
					<hr class="w-100 bg-primary">
					<p class="text-white text-center fs-18">Over 500,000 People registered daily</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<div class="d-md-flex d-inline-block align-items-center justify-content-center gap-3">
						<div class="countdown small days b-3 border-white mb-30 rounded min-w-150"></div>
						<div class="countdown small hours b-3 border-white mb-30 rounded min-w-150"></div>
						<div class="countdown small minutes b-3 border-white mb-30 rounded min-w-150"></div>
						<div class="countdown small seconds b-3 border-white mb-30 rounded min-w-150"></div>
					</div>
				</div>
			</div>
			<div class="row mt-50">
				<div class="col-12 text-center">
					<p class="text-white fs-18">
						Registered Voters
					</p>
					<h1 class="fs-60 text-white fw-600">71, 145, 100</h1>
					<a href="#" class="btn btn-primary">Register Now</a>
				</div>
			</div>
		</div>
	</section>	
	
	<section class="py-50" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-12 text-center">
					<h1 class="mb-15">Latest Blog</h1>				
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-xl-4 col-md-4 col-12">
					<div class="blog-post">
						<div class="entry-image clearfix">
							<img class="img-fluid" src="../images/front-end-img/courses/1f.jpg" alt="">
						</div>
						<div class="blog-detail">
							<div class="entry-title mb-10">
								<a href="#">Blog Post With Image</a>
							</div>
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
							</div>
							<div class="entry-share d-flex justify-content-between align-items-center">
								<div class="entry-button">
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-4 col-12">
					<div class="blog-post">
						<div class="entry-image clearfix">
							<div class="owl-carousel bottom-dots-center owl-theme" data-nav-dots="true" data-autoplay="true"  data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
								<div class="item">
									<img src="../images/front-end-img/courses/2f.jpg" alt="">
								</div>
								<div class="item">
									<img src="../images/front-end-img/courses/3f.jpg" alt="">
								</div>
								<div class="item">
									<img src="../images/front-end-img/courses/4f.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="blog-detail">
							<div class="entry-title mb-10">
								<a href="#">Blog Post With Image Slider</a>
							</div>
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
							</div>
							<div class="entry-share d-flex justify-content-between align-items-center">
								<div class="entry-button">
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-4 col-12">
					<div class="blog-post">
						<div class="entry-image clearfix">
							<ul class="grid-post list-unstyled">
								<li>
									<img class="img-fluid" src="../images/front-end-img/courses/5f.jpg" alt="">
								</li>
								<li>
									<img class="img-fluid" src="../images/front-end-img/courses/6f.jpg" alt="">
								</li>
								<li>
									<img class="img-fluid" src="../images/front-end-img/courses/7f.jpg" alt="">
								</li>
								<li>
									<img class="img-fluid" src="../images/front-end-img/courses/8f.jpg" alt="">
								</li>
							</ul>
						</div>
						<div class="blog-detail">
							<div class="entry-title mb-10">
								<a href="#">Blogpost With Image Grid Gallery</a>
							</div>
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga laborum totam itaque architecto! Laudantium sed delectus assumenda, doloribus non.</p>
							</div>
							<div class="entry-share d-flex justify-content-between align-items-center">
								<div class="entry-button">
									<a href="#" class="btn btn-primary btn-sm">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php include './footer.php'; ?>
