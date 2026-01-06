@extends('master')

@section('content')
  	<!-- Banner Section -->
  	<section id="home" class="banner banner-two">
		<div class="banner-slider swiper-container">
		  	<div class="swiper-wrapper">
			  	<div class="banner-item slide-one swiper-slide">
			    	<div class="banner-overlay"></div>
			      	<div class="container">
				        <div class="banner-content">
				        	<h3>Excellence | Discipline | Success</h3>
				        	<h2>Welcome to Victory Comprehensive College, Ondo</h2>
				        	<p>A premier secondary school in Ondo State, Nigeria, committed to academic excellence, moral uprightness, and holistic development of every student.</p>
							<ul>
								<li><a href="#about" class="button-default">Discover More</a></li>
							</ul>
				        </div>
			      	</div>
		    	</div>
			  	<div class="banner-item slide-two swiper-slide">
			    	<div class="banner-overlay"></div>
			      	<div class="container">
				        <div class="banner-content">
				        	<h3>Shaping Future Leaders</h3>
				        	<h2>Quality Education in a Caring Environment</h2>
				        	<p>We combine rigorous academics, character formation, and extracurricular opportunities to prepare students for higher education and responsible citizenship.</p>
							<ul>
								<li><a href="#gallery" class="button-default">View Gallery</a></li>
							</ul>
				        </div>
			      	</div>
		    	</div>
			  	<div class="banner-item slide-three swiper-slide">
			    	<div class="banner-overlay"></div>
			      	<div class="container">
				        <div class="banner-content">
				        	<h3>Join a Legacy of Achievement</h3>
				        	<h2>Become Part of the Victory Family</h2>
				        	<p>At VCC, every student is empowered to dream big, work hard, and achieve greatness in a supportive and disciplined community.</p>
							<ul>
								<li><a href="#contact" class="button-default">Contact Us Today</a></li>
							</ul>
				        </div>
			      	</div>
		    	</div>
		  	</div>
		  	<div class="swiper-pagination"></div>
        </div>
  	</section>


  	<!-- About Section -->
  	<section id="about" class="about padding-120">
  		<div class="container">
  			<h3>Welcome to Victory Comprehensive College, Ondo</h3>
  			<h4>A Centre of Learning, Character, and Excellence</h4>
  			<p>Victory Comprehensive College (VCC), Ondo, is a co-educational secondary school located in the heart of Ondo town, Ondo State, Nigeria. Established with a vision to raise generations of disciplined, intellectually sound, and morally upright leaders, we have consistently produced outstanding students who excel in national examinations (WAEC, NECO, JAMB) and beyond.</p>
  			<p>Our school offers a balanced curriculum that integrates academic rigor, spiritual growth, vocational skills, and extracurricular activities. With qualified and dedicated teachers, modern learning facilities, and a safe environment, we nurture each child to reach their fullest potential.</p>
  			<ul>
  				<li><a href="#contact" class="button-default">Enroll Your Child Today</a></li>
  			</ul>
  		</div>
  	</section>


  	<!-- Vision & Mission Section -->
  	<section id="vision-mission" class="section-notch" style="background: #0a3d62; color: #fff;">
  		<div class="overlay padding-120">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-6 col-sm-12">
  						<div style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 12px; text-align: center;">
  							<h3>Our Vision</h3>
  							<p>To be a leading secondary educational institution in Nigeria, producing morally sound, academically excellent, and globally competitive graduates who make positive impacts in society.</p>
  						</div>
  					</div>
  					<div class="col-md-6 col-sm-12">
  						<div style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 12px; text-align: center;">
  							<h3>Our Mission</h3>
  							<p>To provide qualitative, holistic education through dedicated teaching, modern facilities, moral instruction, and character development, empowering students to excel academically and become responsible citizens.</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>


  	<!-- Achievements Section -->
  	<section class="achievements section-notch">
  		<div class="overlay padding-120">
  			<div class="container">
	  			<div class="row">
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-student"></i>
		                <span class="counter">600</span>
		                <p>Students Enrolled</p>
		              </div>
		            </div>
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-cup"></i>
		                <span class="counter">25</span>
		                <p>Awards & Recognitions</p>
		              </div>
		            </div>
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-drawing"></i>
		                <span class="counter">98%</span>
		                <p>Average WAEC/NECO Pass Rate</p>
		              </div>
		            </div>
		            <div class="col-md-3 col-sm-6 col-xs-12">
		              <div class="achievement-item">
		              	<i class="icon flaticon-book"></i>
		                <span class="counter">18</span>
		                <p>Years of Academic Excellence</p>
		              </div>
		            </div>
		          </div>
  			</div>
  		</div>
  	</section>


  	<!-- Gallery Section -->
  	<section id="gallery" class="gallery gallery-two section-bg padding-120">
		<div class="section-header">
			<h3>School Gallery</h3>
			<p>Capturing moments of learning, growth, celebration, and achievement at Victory Comprehensive College.</p>
		</div>

        <div class="gallery-two-items">
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/5.jpg')}}" alt="Classroom learning" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/5.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Interactive Classroom Sessions</h4>
            		<span>Engaging lessons that inspire curiosity</span>
            	</div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/6.jpg')}}" alt="Sports day" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/6.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Inter-House Sports Competition</h4>
            		<span>Teamwork, fitness, and school spirit</span>
            	</div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/7.jpg')}}" alt="Science lab" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/7.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Hands-On Science Experiments</h4>
            		<span>Practical learning in modern labs</span>
            	</div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/8.jpg')}}" alt="Cultural day" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/8.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Cultural Day Celebration</h4>
            		<span>Embracing heritage and diversity</span>
            	</div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/9.jpg')}}" alt="Group study" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/9.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Collaborative Learning</h4>
            		<span>Students supporting each other</span>
            	</div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/10.jpg')}}" alt="Assembly" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/10.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Morning Assembly & Devotion</h4>
            		<span>Building character and unity</span>
            	</div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/11.jpg')}}" alt="Prize giving" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/11.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Prize-Giving Day</h4>
            		<span>Celebrating hard work and success</span>
            	</div>
            </div>
          </div>
          <div class="gallery-item">
            <div class="gallery-image">
            	<img src="{{ asset('html/assets2/all-study/images/victory/12.jpg')}}" alt="Happy students" class="img-responsive">
            	<div class="gallery-overlay"><div class="bg"></div></div>
            	<div class="gallery-content">
            		<a href="{{ asset('html/assets2/all-study/images/victory/12.jpg')}}" data-rel="lightcase:myCollection"><i class="icon flaticon-expand"></i></a>
            		<h4>Smiles of Victory</h4>
            		<span>A community where every child thrives</span>
            	</div>
            </div>
          </div>
        </div>
  	</section>


  	<!-- Teachers Section -->
  	<section class="teachers padding-120">
		<div class="container">
			<div class="section-header">
				<h3>Meet Our Dedicated Teachers</h3>
				<p>Our highly qualified and passionate educators are committed to guiding and inspiring every student.</p>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="teacher-item">
						<div class="teacher-image">
							<img src="{{ asset('html/assets2/all-study/images/teachers/teacher_01.jpg')}}" alt="Teacher" class="img-responsive">
						</div>
						<div class="teacher-content">
							<h4><a href="#">Mr. Emmanuel Ogunleye</a></h4>
							<span>Principal / Mathematics</span>
							<p>Over 20 years of experience in educational leadership and mathematics teaching.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="teacher-item">
						<div class="teacher-image">
							<img src="{{ asset('html/assets2/all-study/images/teachers/teacher_02.jpg')}}" alt="Teacher" class="img-responsive">
						</div>
						<div class="teacher-content">
							<h4><a href="#">Mrs. Grace Adebayo</a></h4>
							<span>English Language</span>
							<p>Passionate about literature and helping students express themselves confidently.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="teacher-item">
						<div class="teacher-image">
							<img src="{{ asset('html/assets2/all-study/images/teachers/teacher_03.jpg')}}" alt="Teacher" class="img-responsive">
						</div>
						<div class="teacher-content">
							<h4><a href="#">Mr. Tunde Akintola</a></h4>
							<span>Physics & ICT</span>
							<p>Brings science to life with practical experiments and modern technology.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</section>


  	<!-- Fees Section -->
  	<section class="pricing padding-120">
  		<div class="container">
	      <div class="section-header">
	        <h3>School Fees Structure</h3>
	        <p>Affordable, transparent fees that cover quality education and essential services.</p>
	      </div>
	      <div class="row">
	      	<div class="col-md-4 col-sm-6 col-xs-12">
	      		<div class="pricing-item">
	      			<div class="title">
	      				<h3>JSS 1 <span><sup>₦</sup>65,000</span></h3>
	      			</div>
	      			<div class="content">
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Tuition & Lessons</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Textbooks & Materials</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Uniforms (2 Sets)</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Medical Care</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Extracurricular Activities</p>
	      			</div>
	      		</div>
	      	</div>
	      	<div class="col-md-4 col-sm-6 col-xs-12">
	      		<div class="pricing-item">
	      			<div class="title">
	      				<h3>SSS 1 <span><sup>₦</sup>75,000</span></h3>
	      			</div>
	      			<div class="content">
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Advanced Tuition</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> WAEC/NECO Preparation</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Science Lab Access</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Career Guidance</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> All School Activities</p>
	      			</div>
	      		</div>
	      	</div>
	      	<div class="col-md-4 col-sm-6 col-xs-12">
	      		<div class="pricing-item">
	      			<div class="title">
	      				<h3>Boarding (Optional) <span><sup>₦</sup>120,000</span></h3>
	      			</div>
	      			<div class="content">
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Accommodation</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> 3 Meals Daily</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Supervised Study</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> Laundry Services</p>
	      				<p><i class="fa fa-check-circle" aria-hidden="true"></i> 24/7 Security</p>
	      			</div>
	      		</div>
	      	</div>
	      </div>
  		</div>
  	</section>


  	<!-- Contact Section -->
  	<section id="contact" class="padding-120 section-bg">
  		<div class="container">
  			<div class="section-header">
  				<h3>Contact Victory Comprehensive College</h3>
  				<p>We are here to answer your questions and welcome new families.</p>
  			</div>
  			<div class="row text-center">
  				<div class="col-md-4 col-sm-12">
  					<h4><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h4>
  					<p>3 Dele Basiru Street,<br>Off Ofosu/Onisere Road,<br>Ondo City, Ondo State,<br>Nigeria</p>
  				</div>
  				<div class="col-md-4 col-sm-12">
  					<h4><i class="fa fa-phone" aria-hidden="true"></i> Phone</h4>
  					<p>+234 803 123 4567<br>+234 806 987 6543</p>
  				</div>
  				<div class="col-md-4 col-sm-12">
  					<h4><i class="fa fa-envelope" aria-hidden="true"></i> Email & Hours</h4>
  					<p>info@vcc-ondo.edu.ng<br>admissions@vcc-ondo.edu.ng<br><br>Monday – Friday: 8:00 AM – 4:00 PM</p>
  				</div>
  			</div>
  		</div>
  	</section>
@endsection
