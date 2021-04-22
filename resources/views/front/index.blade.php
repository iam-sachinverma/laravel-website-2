@extends('layouts.front_layout.front_layout')
@section('content')
  
  <!-- Modal -->
  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-dark text-white" style="background-image: url('images/front_images/02.png')">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Get in Touch !</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <form action="{{ url('/add-query') }}" role="form" name="queryForm" id="queryForm" method="post">@csrf
                <div class="form-group">
                  <input class="form-control" type="text" name="query_name" id="query_name" placeholder="Your Name" aria-label="default input example">
                </div>
                <div class="form-group mt-4">
                  <input class="form-control" type="number" name="query_phone" id="query_phone" placeholder="Your Phone Number" aria-label="default input example">
                </div>
                <select class="form-select mt-4" name="query_service" id="query_service" aria-label="Default select example">
                  <option selected>Select Service</option>
                  <option value="SEO">SEO</option>
                  <option value="Google Adwords">Google Adwords</option>
                  <option value="Website Design">Website Design</option>
                  <option value="Facebook Marketing">Facebook Marketing</option>
                  <option value="Youtube Marketing">Youtube Marketing</option>
                </select>
                <div class="d-grid gap-2 mt-4">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<section id="home" class="home">
  <div class="container">
      <div class="row height">
          <div class="col-12 col-md-6 height d-flex align-items-center text-left">
              <div class="text d-flex align-items-center">
                  <div class="home-text text-black height1">
                      <h1 class="main-heading mb-0">Don't Let Your Business Be Lost!</h1>
                      <h4 class="heading mb-5">Start Your Digital Success Story Today</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <svg class="yellow-square" viewBox="0 0 200 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="28" ry="28" fill="#5CD85A" transform = "rotate(-45 200 100)"/>
  </svg>

  <svg class="left-square small-view" viewBox="0 0 310 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#ffc107" transform = "rotate(135 100 245)"/>
  </svg>

</section>

 
<section id="feature" class="feature">
  <div class="container">
          <div class="row">
              <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 text-center">
                  <div class="text">
                      <div class="home-text text-black">
                          <h1 class="main-heading mb-4">We are Digital Agency</h1>
                          <p class="sub-heading mb-4">Transform Your Vision into Results With the best Digital Marketing Agency in Delhi NCR, India</p>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row mt-90">
              <div class="col-12 col-md-4 mb-3 mb-md-0">
                  <div class="card box text-center">
                      <div class="feature-icon text-center">
                          <i class="bi bi-app-indicator"></i>
                      </div>
                      <div class="card-body">
                          <p class="card-text sub-heading text-black">We have some creative ideas for you.</p>
                      </div>
                  </div>
              </div>

              <div class="col-12 col-md-4 mt-5 mt-md-0 mb-3 mb-md-0">
                  <div class="card box text-center">
                      <div class="feature-icon text-center center">
                          <i class="bi bi-list-check"></i>
                      </div>
                      <div class="card-body">
                          <p class="card-text sub-heading text-black">Your business is our top priority.</p>
                      </div>
                  </div>

              </div>

              <div class="col-12 col-md-4 mt-5 mt-md-0">
                  <div class="card box text-center">
                      <div class="feature-icon text-center">
                          <i class="bi bi-heart-half"></i>
                      </div>
                      <div class="card-body">
                          <p class="card-text sub-heading text-black">We love our valued customers.</p>
                      </div>
                  </div>

              </div>
          </div>
      </div>
</section>

<section id="stats" class="stats">
      <div class="container">
          <div class="row m-0">
                  <div class="col-lg-6 offset-lg-4 col-md-10 offset-md-0 col-sm-12 text-left p-0">
                      <div class="stats-text">
                          <div class="home-text text-black">
                              <h1 class="sub-heading">We live our customers dream!</h1>
                              <h1 class="main-heading mt-3 mb-4">Transform Your Vision into Results</h1>
                              <p class="sub-heading mb-3">Your idea is in great hands. We believe in maintaining long term relationships with our clients and maintain the promise that is made during the sales process. Our success is directly proportional to client satisfaction.</p>
                          </div>
                      </div>
                  </div>
               </div>

          <div class="row mt-40">
              <div class="col-lg-8 offset-lg-4 col-md-12 offset-md-0 col-sm-12">
                  <div class="row">
                      <div class="col-12 col-md-4">
                              <div class="stats-box d-flex">
                                  <div class="stats-icon">
                                      <i class="bi bi-emoji-smile"></i>
                                  </div>
                                  <div class="stats-box-text ml-4">
                                      <h1 class="numbering">500+</h1>
                                      <p class="sub-heading">Happy Clients</p>
                                  </div>
                              </div>
                          </div>

      

                      <div class="col-12 col-md-4 mt-4 mt-md-0">
                          <div class="stats-box d-flex">
                              <div class="stats-icon">
                                  <i class="bi bi-check2-circle"></i>
                              </div>
                              <div class="stats-box-text ml-4">
                                  <h1 class="numbering">200+</h1>
                                  <p class="sub-heading">Project Completed</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  <svg class="left-square stats" viewBox="0 0 310 655" xmlns="http://www.w3.org/2000/svg"> 
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#ffc107" transform = "rotate(135 100 245)"/>
  </svg>

</section>

<section id="team" class="team">
  <div class="container">
      <div class="row">
          <div class="col-12 col-md-8 col-lg-6">
              <div class="home-text text-black">
                  <h1 class="main-heading mt-3 mb-4"><span class="text-yellow">Google</span> AdWords</h1>
                  <p class="sub-heading mb-3">We’re a performance-based, full service agency that does more than just sales and branding: we speak fluent internet. That means we create images that stop the scrolling, words that get people thinking (hi), and marketing strategies that ensure our other talents don’t get lost in the digital abyss.</p>
                  <img src="images/front_images/web.jpg" class="img-fluid" alt="...">
                  <a href="#" class="btn btn-main pink-btn rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#Modal">Succeed Today</a>
              </div>
          </div>
      </div>
  </div>

  <svg class="right-square team" viewBox="0 0 280 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#FF2511" transform = "rotate(-45 310 100)"/>
  </svg>
  <svg class="right-square team small-view" viewBox="0 0 280 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#FF8300" transform = "rotate(-45 310 100)"/>
  </svg>
</section>

<section id="design" class="design">
  <div class="container">
      <div class="row m-0">
          <div class="col-lg-6 offset-lg-4 col-md-12 offset-md-0 col-sm-12 text-left p-0">
              <div class="home-text text-black">
                  <h1 class="main-heading mt-5 mb-4"><span class="text-yellow">Website Design  </span>& Development</h1>
                  <p class="sub-heading mb-3">First impressions is the last impression & we can get that deal sealed for you right away. As a website design and development company, we work in a consultative manner, serving as your advisors, designers and developers to fulfil our your requirements.</p>
                  <img src="images/front_images/website.jpg" class="img-fluid" alt="...">
                  <a href="#" class="btn btn-main pink-btn rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#Modal">Succeed Today</a> 
              </div>
          </div>
      </div>
  </div>

  <svg class="left-square blog" viewBox="0 0 310 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#FF8300" transform = "rotate(135 100 245)"/>
  </svg>

  <svg class="left-square gallery small-view" viewBox="0 0 310 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#ffc107" transform = "rotate(135 100 245)"/>
  </svg>
  
</section>

<section id="gallery" class="gallery">
  <div class="container">
      <div class="section-heading">
          <div class="row">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                  <div class="ex-detail">
                      <h1 class="main-heading mt-3 mb-4"><span class="text-yellow">(SEO)  </span>Search Engine Optimization </h1>
                  </div>
                  <p class="sub-heading mb-3">We are experts in Search Engine Optimization and know all the tricks of the trade. From on page SEO to off page SEO, we know it all. We utilize all the SEO strategies to make sure that your brand gets the recognition it truly deserves on the web.</p>
                  <img src="images/front_images/seo.jpg" class="img-fluid" alt="...">
                  <a href="#" class="btn btn-main pink-btn rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#Modal">Succeed Today</a> 
              </div>
              
          </div>
      </div>

     <svg class="right-square small-blog small-view" viewBox="0 0 312 600" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#FF8300" transform = "rotate(-45 310 100)"/>
     </svg>

  </div>
</section>

<section id="testimonial" class="testimonial">
  <div class="container">
      <div class="row">
          <div class="col-12 col-md-8 col-lg-6">
             <h1 class="main-heading mt-5 mb-4"><span class="text-yellow">Facebook</span> Marketing</h1>
              <p class="sub-heading mb-3">Facebook Pages are the gateway for businesses to market to this holy grail of users. Fans receive content updates from the Page on their News Feed, while the business is able to raise brand awareness, deploy and track advertising, collect detailed audience insights, and chat with users who seek customer service.</p>
              <img src="images/front_images/facebook.jpg" class="img-fluid" alt="...">
              <a href="#" class="btn btn-main pink-btn rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#Modal">Succeed Today</a> 
          </div>
      </div>

  </div>

  <svg class="right-square test" viewBox="0 0 312 600" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#fa2851" transform = "rotate(-45 310 100)"/>
  </svg>

  <svg class="left-square gallery small-view" viewBox="0 0 310 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#fa2851" transform = "rotate(135 100 245)"/>
  </svg>

</section>

<section id="blog" class="blog">
  <div class="container">
      <div class="row m-0">
          <div class="col-lg-6 offset-lg-4 col-md-12 offset-md-0 col-sm-12 text-left p-0">
              <div class="home-text text-black">
                  <h1 class="main-heading mt-3 mb-4"><span class="text-yellow">YouTube </span>Media Marketing </h1>
                  <p class="sub-heading mb-3">YouTube marketing is different than other social channels and how to use that to your advantage. We’ll go over setting up your channel, optimizing and editing your videos, how to think outside the box with new strategies, monetization, and how to advertise on YouTube, all with plenty of great examples and screenshot tutorials included.</p>
                  <img src="images/front_images/youtube.jpg" class="img-fluid" alt="...">
                  <a href="#" class="btn btn-main pink-btn rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#Modal">Succeed Today</a> 
              </div>
          </div>
      </div>
  </div>

  <svg class="left-square blog" viewBox="0 0 310 655" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#FF8300" transform = "rotate(135 100 245)"/>
  </svg>

  <svg class="right-square small-blog small-view" viewBox="0 0 312 600" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="48" ry="48" fill="#FF8300" transform = "rotate(-45 310 100)"/>
  </svg>

</section>

<section id="contact" class="contact">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <h1 class="main-heading text-black">Interested?<br>Let's Get In Touch</h1>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-md-7">
              <form class="contact-form" id="contact-form-data">
                  <div class="row mt-5">
                      <div class="col-sm-12" id="result"></div>
                  </div>
                      <div class="row">
                          <div class="col-12 col-md-5">
                          <div class="form-group">
                              <input class="form-control" type="text" placeholder="Your Name" required  id="candidate_name" name="userName">
                          </div>

                          <div class="form-group">
                              <input class="form-control" type="email" placeholder="Email Address*" required  id="user_email" name="userEmail">
                          </div>

                          <div class="form-group ">
                              <input class="form-control" type="text" placeholder="Subject" id="user_subject" name="userSubject">
                          </div>
                          </div>

                          <div class="col-12 col-md-7">
                              <div class="form-group ">
                                  <textarea class="form-control" placeholder="Your Message" required rows="7" id="user_message" name="userMessage"></textarea>
                              </div>
                          </div>
                      </div>

                  <button type="button" class="btn btn-slider pink-btn rounded-pill w-100 contact_btn" id="submit_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> <b>Send Message</b></button>
              </form>
          </div>

          <div class="col-12 col-md-5 mt-5">
              <div class="address-part ml-3">
              <div class="address d-flex mb-4">
                  <i class="bi bi-geo-alt-fill address-icon mr-3"></i>
                  <p>123 Pak  Avenue, New York,<br> United States</p>
              </div>
              <div class="address d-flex mb-4">
                  <i class="bi bi-telephone-outbound-fill address-icon mr-3"></i>
                  <p>+1 631 12345678<span class="ml-3 mb-3"></p>
              </div>
              <div class="address d-flex mr-3">
                  <i class="bi bi-mailbox2 address-icon mr-3"></i>
                  <p>email@website.com</p>
              </div>
              </div>
          </div>
      </div>

<!--        FOOTER SECTION ROW-->
      <div class="row footer">
          <div class="col-12 col-md-5">
              <ul class="footer_ul mb-50">
                  <li class="footer_list"><i class="bi bi-facebook"></i></li>
                  <li class="footer_list"><i class="bi bi-twitter"></i></li>
                  <li class="footer_list"><i class="bi bi-linkedin"></i></li>
                  <li class="footer_list"><i class="bi bi-instagram"></i></li>     
              </ul>
          </div>
      </div>

  </div>
  <svg class="right-square contact-square" viewBox="0 0 150 390" xmlns="http://www.w3.org/2000/svg">
      <rect  x = "0" y = "32" width = "1616" height = "1616" rx="18" ry="18" fill="#000" transform = "rotate(-45 310 100)"/>
  </svg>
  
</section>

@endsection  