@extends('layouts.web')
@section('title')
origin solutions
@endsection
@section('content')

       <section class="site-section" id="about">
      <div class="container">
        
        <div class="row">
          
          <div class="col-md-5 mr-auto mb-5">
<br>
            <h2 class="text-black mb-4 ">Welcome To Our Website</h2>
			<p>
			Origin Solutions Company was established in 2019 To keep pace with evolution of our country and to meet
the growing regional demand for IT companies. Through the introduction of strategic solutions to meet the
needs and requirements of development in various sectors of government and semi-governmental
institutions and private sector companies 
Origin Solutions Company: is a company specialized in information technology, information security and
intelligent network solutions.
			<p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="row">
              <div class="col-md-6">
                <div class="service px-0">
                  <div class=""></div>
                  <h4 class="text-black mb-3">Why us?</h4>
                  <p>Our staff has more than 10 years of experience in variety fields.Our team includes experts in information
                    systems, networks, communications, information security, procedures and policies, project management,
                      we have a multinational team.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service px-0">
                  <div class=""><span class=""></span></div>
                  <h4 class="text-black ">Our Slogan <span class="typed-word slogan"></span></h4>
                  <p>In our view choosing the right solution is the fastest way to achieve successful
business goals We are constantly working on the latest technology and simplify
the connections ways of the best technology solutions to our customers to achieve
the results that ensure the success of work.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <hr style="border:3px solid #373A6D;"></hr>

      </div>
    </section>
  

    <section class="site-section bg-light" id="Our_Produts">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
		  <br>
            <h2 class="text-black">Our Products</h2>
            <p></p>
          </div>
        </div>

        <div class="nonloop-block-13 owl-style owl-carousel">
            @foreach($category as $category)
          <div class="training">
            <figure class="mb-4"><img src="images/{{$category->image}}" alt="Image" class="img-fluid"style="height:200px;border:1px solid black;border-radius: 10px;" ></figure>
            <h3 class="text-black mb-3">{{$category->name}}</h3>
            <p>
 {{$category->description}}</p><a href="dcn.html">Read More....</a>


 
          </div>
@endforeach
          
        </div>

      </div>
    </section>
    


    

     
    <section class="site-section bg-default" id="Our_Services">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
		  <br>
            <h2 class="text-black">Our Services</h2>
            <p class="text-"></p>
          </div>
        </div>
    
        <div class="nonloop-block-13 owl-style owl-style-md owl-carousel">
          <div class="service bg-my">
            <div class=""><span class=""></span>
						<img src="images/network.jpg" alt="Image" class="img-fluid" style="height:200px;">

			</div>
            <h3 class="text-black mb-3">Networks</h3>
            <p>- Design, implementation, maintenance and operation of servers, data centers_and ﬁber optic</p>
			<p>- Establish and submit of wired and wireless networks
Security Information Technology</p>
<p> - Secure networks and protect against threats and breaches.
</p>
          </div>
    
          <div class="service bg-my">
            <div class=""><span class=""></span>
			<img src="images/consulting.png" alt="Image" class="img-fluid" style="height:200px;">
			</div>
            <h3 class="text-black mb-3">IT consulting </h3>
            <p>- Planning and engineering procedures of solutions and development</p>
			            <p> - System development consultancy</p>
						<p>- Project Management Consultancy</p>

          </div>
    
          <div class="service  bg-my">
            <div class=""><span class=""></span>
						<img src="images/net.jpg" alt="Image" class="img-fluid" style="height:200px;">

			</div>
            <h3 class="text-black mb-3">Design, implementation,protect and
                                                                              maintenance of networks</h3>
			            <p>- Network infrastructure ,</p>
						 <p>- Protect the network and servers from any potential attacks</p>
							<p>-Save the network infrastructure and tracking the periodic maintenance . </p>
                               <p>- Building data centers with the latest technologies . </p>
                               <p>- Network test mechanism according to the latest techniques of performance testing</p>
                               <p>- Provide a full report on the network status.</p>


          </div>
    
          <div class="service  bg-my">
            <div class=""><span class=""></span>
						<img src="images/hosting.png" alt="Image" class="img-fluid" style="height:200px;">

			</div>
            <h3 class="text-black mb-3">Web Hosting & Development</h3>
            <p>- Design and develop sites .</p>
			 <p>- Web Hosting </p>
			<p>- Advanced smart solutions</p>
			 <p>- Training in web management.</p>
			 <p></p>




          </div>
    
          <div class="service  bg-my">
    
            <div class=""><span class=""></span>
						<img src="images/support.jpg" alt="Image" class="img-fluid" style="height:200px;">

			</div>
            <h3 class="text-black mb-3">Technical support</h3>
            <p>- Provide the best levels of service</p>
			<p>- Ensure periodic visits to the customers’ sites</p>
			<p>- Providing continuous technical support through: E-mail - Telephone - Mobile - Social media</p>
			 <p>- Commitment to meet all customer opinions.</p>



          </div>
    <div class="service  bg-my">
    
            <div class=""><span class=""></span>
						<img src="images/prodenergy.jpg" alt="Image" class="img-fluid" style="height:200px;">

			</div>
            <h3 class="text-black mb-3">Power Products</h3>
            <p>- Battery system</p>
			<p>-  Power Systems.</p>
			<p>- Power Protection And Distribution.</p>
			 <p>-Power Systems.</p>



          </div>
		      <div class="service  bg-my">
    
            <div class=""><span class=""></span>
						<img src="images/energysolution.png" alt="Image" class="img-fluid" style="height:200px;">

			</div>
            <h3 class="text-black mb-3">Energy Solutions</h3>
            <p>- Solar power systems</p>
			<p>-  Wind power systems</p>
			<p>-Generator cyclic battery systems </p>
			 <p>-Generator Dual battery systems</p>
			 <p>-Generator Solar systems</p>
<p>-DC Generators Solutions</p>
			 <p>-Integrated Easy — deployable energy Packs</p>
			 <p>-Full civil and electromechanical Design, installation and integration</p>


          </div>
    <div class="service  bg-my">
    
            <div class=""><span class=""></span>
						<img src="images/cameras.jpg" alt="Image" class="img-fluid" style="height:200px;">

			</div>
            <h3 class="text-black mb-3">Network Cameras</h3>
            <p>- Dome Fixed Ca mera</p>
			<p>- Pinhole Cameras</p>
			<p>-PTZ Cameras </p>
			 



          </div>
    
         
        </div>
    
      </div>
    </section>

    <div class="site-section bg-light" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
		  <br>
            <h2 class="text-black">Contact</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold text-primary">Address</p>
            <p class="mb-4">Al-Shahbandar Square, Damascus, Syria
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold text-primary">Phone</p>
            <p class="mb-4"><a href="#">+963 11 1047 21092 </a></p>
          </div>
          <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
            <p class="mb-0 font-weight-bold text-primary">Email Address</p>
            <p class="mb-0"><a href="#">support@o-solutions net</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mb-5">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-2 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    
@endsection