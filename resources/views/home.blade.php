@extends('master')

@section('content')
  	<!-- Banner Start here -->
  	<section class="banner banner-two">
		<div class="banner-slider swiper-container">
		  	<div class="swiper-wrapper">
			  	<div class="banner-item slide-one swiper-slide">
			    	<div class="banner-overlay"></div>
			      	<div class="container">
				        <div class="banner-content">
				        	<h3>Building Brighter Futures Together</h3>
				        	<h2>The Best Education Starts Here</h2>
				        	<p>At All Study Citadel, we inspire curiosity, nurture talent, and empower every child to reach their full potential in a supportive and innovative learning environment.</p>
							<ul>
								<li><a href="#" class="button-default">Discover More</a></li>
							</ul>
				        </div><!-- banner-content -->
			      	</div><!-- container -->
		    	</div><!-- slide item -->
			  	<div class="banner-item slide-two swiper-slide">
			    	<div class="banner-overlay"></div>
			      	<div class="container">
				        <div class="banner-content">
				        	<h3>Where Learning Comes Alive</h3>
				        	<h2>Your Child’s Journey to Excellence</h2>
				        	<p>We combine academic rigor with creativity and character development, preparing students not just for exams, but for life.</p>
							<ul>
								<li><a href="#" class="button-default">Explore Our Programs</a></li>
							</ul>
				        </div><!-- banner-content -->
			      	</div><!-- container -->
		    	</div><!-- slide item -->
			  	<div class="banner-item slide-three swiper-slide">
			    	<div class="banner-overlay"></div>
			      	<div class="container">
				        <div class="banner-content">
				        	<h3>Education That Shapes Tomorrow</h3>
				        	<h2>Join a Community of Achievers</h2>
				        	<p>Our dedicated teachers, modern facilities, and holistic approach help every student shine — academically, socially, and personally.</p>
							<ul>
								<li><a href="#" class="button-default">Take the First Step</a></li>
							</ul>
				        </div><!-- banner-content -->
			      	</div><!-- container -->
		    	</div><!-- slide item -->
		  	</div><!-- swiper-wrapper -->
		  	<div class="swiper-pagination"></div>
        </div><!-- swiper-container -->
  	</section><!-- banner -->
  	<!-- Banner End here -->


  	<!-- About Start here -->
  	<section class="about padding-120">
  		<div class="container">
  			<h3>Welcome to All Study Citadel</h3>
  			<h4>Inspiring Creative Minds Since Day One</h4>
  			<p>At All Study Citadel, we believe every child deserves an education that sparks curiosity, builds confidence, and prepares them for a successful future. Our experienced teachers create engaging lessons that blend academic excellence with real-world skills, emotional growth, and creativity. We focus on small class sizes, personalized attention, and a safe, joyful environment where students thrive every single day.</p>
  			<ul>
  				<li><a href="#" class="button-default">Learn More About Us</a></li>
  			</ul>
  		</div><!-- container -->
  	</section>
  	<!-- About End here -->


  	<!-- Achievements Start here -->
  	<section class="achievements section-notch">
  		<div class="overlay padding-120">
  			<div class="container">
	  			<div class="row">
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-student"></i>
		                <span class="counter">500+</span>
		                <p>Happy Students Enrolled</p>
		              </div><!-- achievement item -->
		            </div>
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-cup"></i>
		                <span class="counter">12</span>
		                <p>Awards for Excellence</p>
		              </div><!-- achievement item -->
		            </div>
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-drawing"></i>
		                <span class="counter">370+</span>
		                <p>Classes Successfully Completed</p>
		              </div><!-- achievement item -->
		            </div>
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-book"></i>
		                <span class="counter">64</span>
		                <p>Quality Courses Offered</p>
		              </div><!-- achievement item -->
		            </div>
		          </div><!-- row -->
  			</div><!-- container -->
  		</div><!-- overlay -->
  	</section><!-- achievements -->
  	<!-- Achievements End here -->


  	<!-- Gallery Start here -->
  	<section class="gallery gallery-two section-bg padding-120">
		<div class="section-header">
			<h3>Our School Gallery</h3>
			<p>Capturing the joy of learning, friendship, and unforgettable moments at All Study Citadel.</p>
		</div>

        <div class="gallery-two-items">
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/5.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/5.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Science Lab Discovery Day</h4>
            		<span>Hands-on experiments that spark curiosity</span>
            	</div>
            </div>
          </div><!-- gallery item -->
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/6.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/6.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Sports Day Victory Moments</h4>
            		<span>Team spirit and healthy competition</span>
            	</div>
            </div>
          </div><!-- gallery item -->
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/7.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/7.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Art Exhibition Showcase</h4>
            		<span>Creative expressions from our talented students</span>
            	</div>
            </div>
          </div><!-- gallery item -->
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/8.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/8.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Annual Cultural Day</h4>
            		<span>Celebrating diversity and tradition</span>
            	</div>
            </div>
          </div><!-- gallery item -->
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/9.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/9.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Group Study & Teamwork</h4>
            		<span>Learning together, growing together</span>
            	</div>
            </div>
          </div><!-- gallery item -->
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/10.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/10.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Outdoor Learning Adventure</h4>
            		<span>Nature as our classroom</span>
            	</div>
            </div>
          </div><!-- gallery item -->
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/11.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/11.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Assembly Performance</h4>
            		<span>Building confidence on stage</span>
            	</div>
            </div>
          </div><!-- gallery item -->
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/12.jpg')}}" alt="gallery image" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/12.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Friendly Faces & Big Smiles</h4>
            		<span>Where every child feels at home</span>
            	</div>
            </div>
          </div><!-- gallery item -->
        </div><!-- gallery items -->
  	</section><!-- gallery -->
  	<!-- Gallery End here -->


  	<!-- Teachers Start here -->
  	{{-- <section class="teachers padding-120">
		<div class="container">
			<div class="section-header">
				<h3>Meet Our Dedicated Teachers</h3>
				<p>Our passionate educators bring expertise, care, and inspiration to every lesson — helping your child thrive every day.</p>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="teacher-item">
						<div class="teacher-image">
							<img src="{{ asset('html/assets2/all-study/images/teachers/teacher_01.jpg')}}" alt="teacher image" class="img-responsive">
						</div>
						<div class="teacher-content">
							<h4><a href="teacher-profile.html">Mr. Robert Johnson</a></h4>
							<span>Mathematics Specialist</span>
							<p>With over 10 years of experience, Mr. Johnson makes numbers exciting and helps students build strong problem-solving skills.</p>
							<ul class="teacher-share">
				  				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
				  			</ul>
						</div>
					</div><!-- teacher item -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="teacher-item">
						<div class="teacher-image">
							<img src="{{ asset('html/assets2/all-study/images/teachers/teacher_02.jpg')}}" alt="teacher image" class="img-responsive">
						</div>
						<div class="teacher-content">
							<h4><a href="teacher-profile.html">Ms. Janaton Doe</a></h4>
							<span>English & Literature Expert</span>
							<p>Ms. Doe loves stories and helps students discover the power of words through reading, writing, and creative expression.</p>
							<ul class="teacher-share">
				  				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
				  			</ul>
						</div>
					</div><!-- teacher item -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="teacher-item">
						<div class="teacher-image">
							<img src="{{ asset('html/assets2/all-study/images/teachers/teacher_03.jpg')}}" alt="teacher image" class="img-responsive">
						</div>
						<div class="teacher-content">
							<h4><a href="teacher-profile.html">Mr. Alex Johnson</a></h4>
							<span>Art & Creative Design Teacher</span>
							<p>Mr. Johnson encourages imagination and self-expression, turning every art class into a joyful journey of discovery.</p>
							<ul class="teacher-share">
				  				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				  				<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
				  			</ul>
						</div>
					</div><!-- teacher item -->
				</div>
			</div><!-- row -->
		</div><!-- container -->
  	</section> --}}
    <!-- teacher -->
  	<!-- Teachers End here -->


  	<!-- Pricing Start here -->
  	{{-- <section class="pricing padding-120">
  		<div class="container">
	      <div class="section-header">
	        <h3>Our Transparent School Fees</h3>
	        <p>Affordable quality education with everything your child needs to succeed — included in one clear package.</p>
	      </div>
	      <div class="row">
	      	<div class="col-md-4 col-sm-6 col-xs-12">
	      		<div class="pricing-item">
	      			<div class="title">
	      				<h3>JSS 1 <span><sup>₦</sup>52,000</span></h3>
	      			</div>
	      			<div class="content">
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Full Tuition & Academic Support</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> School Uniforms (2 Sets)</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Textbooks & Learning Materials</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Weekly Lessons & Assessments</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Medical Check-ups & First Aid</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Vocational & Life Skills Classes</p>
	      			</div>
	      			<div class="bottom">
	      				<!-- <a href="#" class="button-default">Enroll Now</a> -->
	      			</div>
	      		</div><!-- pricing item -->
	      	</div>
	      </div><!-- row -->
  		</div><!-- container -->
  	</section> --}}
  	<!-- Pricing End here -->
@endsection
