<?php

/**
 * Template Name: Custom Landing Page
 *
 */
include 'header-custom-landing.php'; ?>

<section class="container">
  <h1>This is Heading One</h1>
  <h2>This is Heading Two</h2>
  <h3>This is Heading Three</h3>
  <h4>This is Heading Four</h4>
  <h5>This is Heading Five</h5>
  <h6>This is Heading Six</h6>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error necessitatibus quibusdam illum ut explicabo repudiandae id mollitia ipsa, maiores aliquam, quidem, voluptatem tenetur debitis voluptatum vitae <a href="#">rerum quas voluptates iusto</a>.</p>
  <a href="#" class="btn btn-primary">Primary Button</a>
  <a href="#" class="btn btn-secondary">Secondary Button</a>

  <a href="#" class="btn btn-primary relative overflow-hidden">
    <span class="absolute inset-0 bg-white"></span>
    <span class="absolute inset-0 flex justify-center items-center">
      Animated Primary Button
    </span>
    Animated Primary Button
  </a>

  <a href="#" class="btn btn-secondary relative overflow-hidden">
    <span class="absolute inset-0 bg-white"></span>
    <span class="absolute inset-0 flex justify-center items-center">
      Animated Secondary Button
    </span>
    Animated Secondary Button
  </a>
</section>

<section class="py-12 md:py-16 lg:py-24 lg:pt-48 bg-ss-dark">
  <div class="container">
    <div class="text-center [&_h3]:pb-5 [&_p]:text-xl [&_p]:italic [&_p]:font-medium [&_p]:uppercase">
      <i class="icon-long-arrow-left text-black"></i>
      <p>Luxury Vessels</p><i class="icon-long-arrow-right text-black"></i>
      <h2>Top Cabo Boat Tour Experience</h2>
      <p>Dive into vibrant reefs. Cruise at sunset. Explore endless adventures with Cabo Sailing Ocean Adventures.
        Embark on your next journey!</p>
    </div>
    <div class="ss-custom-tab space-y-4 flex flex-col justify-between">
      <div class="mobile-dropdown mb-7 xl:mb-9 flex flex-col">
        <button class="dropBtn relative inline-block text-left w-full p-4 leading-normal border border-gray-300 text-[15px] lg:text-[16px] capitalize lg:hidden">Select Option</button>
        <ul class="tabNav list-none space-y-0 pl-0 lg:flex lg:gap-4 xl:gap-10 max-lg:border hidden [&_a]:text-center [&_a]:text-base [&_a]:inline-flex [&_a]:pb-2 justify-center">
          <li class="max-lg:p-4 relative before:absolute before:right-0 before:top-0 before:bottom-0 before:w-1 before:h-full before:bg-gray-200"><a href="#tab-42-yacth" class="nav-item relative w-full text-center transition-all duration-300 active">
              Private 42' yacht
            </a></li>
          <li class="max-lg:p-4"><a href="#tab-45-yacth" class="nav-item relative w-full text-center transition-all duration-300">
              Private 45' luxury yacht
            </a></li>
          <li class="max-lg:p-4"><a href="#tab-46-yacth" class="nav-item relative w-full text-center transition-all duration-300">
              Private 46' yacht
            </a></li>
          <li class="max-lg:p-4"><a href="#tab-snorkeling" class="nav-item relative w-full text-center transition-all duration-300">
              Shared Snorkeling or Sunset Sailing
            </a></li>
          <li class="max-lg:p-4"><a href="#tab-38-sailing" class="nav-item relative w-full text-center transition-all duration-300">
              Private 38' Sailing
            </a></li>
          <li class="max-lg:p-4"><a href="#tab-42-sailing" class="nav-item relative w-full text-center transition-all duration-300">
              Private 42' Sailing
            </a></li>
        </ul>
      </div>
      <div class="tabContent">
        <div class="tabPane" id="tab-42-yacth">
          <div class="flex flex-row flex-wrap items-center">
            <div class="lg:w-1/2 w-full">
              <h3>Private 42' yacht</h3>
              <ul class="marker:text-primary list-disc list-inside">
                <li>1-4 pax: <span class="line-through text-primary">$1,230</span> <span class="text-ss-grey font-bold">$1,045.5</span> USD</li>
                <li>Adult: <span class="line-through text-primary">$90</span> <span class="text-ss-grey font-bold">$76.5</span> USD Child: <span class="line-through text-primary">$45</span> <span class="text-ss-grey font-bold">$38.3 </span>USD</li>
                <li>3 hour cruise / Cap. 18 guests.</li>
                <li>Enjoy Cabo San Lucas on a luxurious 42 feet Sundancer yacht. With a large padded cabin-top cushions and a shaded cockpit, this luxury sport cruiser will accommodate you with style while enjoying snorkeling or sunset cruise in Cabo San Lucas.</li>
              </ul>
              <a href="#" class="btn btn-secondary">Book Now</a>
            </div>
            <div class="lg:w-1/2 w-full">
              <figure class="[&_img]:w-full [&_img]:h-full w-full">
                <img src="./assets/images/cbd-bg-image.jpg" alt="Image">
              </figure>
            </div>
          </div>
        </div>
        <div class="tabPane hidden" id="tab-45-yacth">
          <p>Tab 3</p>
        </div>
        <div class="tabPane hidden" id="tab-46-yacth">
          <p>Tab 3</p>
        </div>
        <div class="tabPane hidden" id="tab-snorkeling">
          <p>Tab 4</p>

        </div>
        <div class="tabPane hidden" id="tab-38-sailing">
          <p>Tab 5</p>

        </div>
        <div class="tabPane hidden" id="tab-42-sailing">
          <p>Tab 6</p>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="container">
  <div class="flex justify-between mb-10 items-end max-lg:flex-wrap max-lg:gap-y-14">
    <div class="max-lg:w-full">
      <strong class="category ss-blue">Services<i class="icon-long-arrow-right"></i></strong>
      <h2>Our Most Popular Activities</h2>
    </div>
    <div class="services-swiper flex pb-[10px] max-lg:w-full max-lg:justify-center">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
  <div class="swiper services-mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide h-auto">
        <div class="h-full p-5 pb-8 bg-gray-100 rounded border-solid border border-primary card-shadow card">
          <picture class="pb-8 [&_img]:w-full">
            <source srcset="./assets/images/cabo-snorkeling-img-01.jpg" type="image/jpg">
            <img width="370" height="280" src="./assets/images/cabo-snorkeling-img-01.jpg" loading="lazy" alt="Cabo Snorkeling Feature Img">
          </picture>
          <div class="[&_h4]:border-solid [&_h4]:border-b [&_h4]:border-black/10 [&_h4]:pb-4 [&_h4]:mb-4">
            <h4>Cabo Snorkeling</h4>
            <h6>Discover the Wonders of Cabo's Underwater World</h6>
            <p>Dive into the crystal-clear waters of the Sea of Cortez and uncover the vibrant marine life. Leave in awe of the natural beauty that lies beneath the surface.</p>
          </div>
        </div>
      </div>
      <div class="swiper-slide h-auto">
        <div class="h-full p-5 pb-8 bg-gray-100 rounded border-solid border border-primary card-shadow card">
          <picture class="pb-8 [&_img]:w-full">
            <source srcset="./assets/images/cabo-snorkeling-img-02.jpg" type="image/jpg">
            <img width="370" height="280" src="./assets/images/cabo-snorkeling-img-02.jpg" loading="lazy" alt="Cabo Snorkeling Feature Img">
          </picture>
          <div class="[&_h4]:border-solid [&_h4]:border-b [&_h4]:border-black/10 [&_h4]:pb-4 [&_h4]:mb-4">
            <h4>Cabo Sunset Cruise</h4>
            <h6>Sail Into The Golden Glow Of The Day's End</h6>
            <p>Witness the awe-inspiring sunsets at the land's end in the stunning Sea of Cortez. The ultimate way to savor the end of your day in this stunning coastal destination.</p>
          </div>
        </div>
      </div>
      <div class="swiper-slide h-auto">
        <div class="h-full p-5 pb-8 bg-gray-100 rounded border-solid border border-primary card-shadow card">
          <picture class="pb-8 [&_img]:w-full">
            <source srcset="./assets/images/cabo-snorkeling-img-03.jpg" type="image/jpg">
            <img width="370" height="280" src="./assets/images/cabo-snorkeling-img-03.jpg" loading="lazy" alt="Cabo Snorkeling Feature Img">
          </picture>
          <div class="[&_h4]:border-solid [&_h4]:border-b [&_h4]:border-black/10 [&_h4]:pb-4 [&_h4]:mb-4">
            <h4>Whale Watching</h4>
            <h6>Discover the Majestic Whales of Cabo</h6>
            <p>Be awestruck as you encounter the gentle giants of the deep. From December through April, watch in wonder as the humpback whales breach the surface, showcasing their sheer size and power.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex justify-center gap-6 mt-6 md:mt-8 lg:mt-10 2xl:mt-12 flex-wrap">
    <a href="#" class="btn btn-outline">Shop Online</a>
    <a href="#" class="btn btn-primary">Request a Quote</a>
  </div>
</section>
<!-- /Services -->
<section class="container relative py-10 sm:py-12 md:py-16 lg:py-24 2xl:py-28">
  <div class="text-center pb-8 lg:pb-10 2xl:pb-12">
    <strong class="category ss-blue"><i class="icon-long-arrow-left"></i>Our Benefits<i class="icon-long-arrow-right"></i></strong>
    <h2>One Of A Kind</h2>
  </div>
  <div class="flex justify-center flex-wrap -mx-5 gap-y-5 lg:gap-y-7 2xl:gap-y-10"> <!-- Card Wrapper -->
    <div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
      <div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-900 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6">
        <h3>Luxurious Boats</h3>
        <h4>Sail Away in Luxury</h4>
        <p>Our boats are not just meticulously maintained; they’re decked out with the latest amenities to make your journey incredibly comfortable and pleasurable, the perfect setting for an unforgettable adventure.</p>
      </div>
    </div> <!-- Card -->
    <div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
      <div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-900 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6">
        <h3>Exclusive Access</h3>
        <h4>Discover Cabo's Hidden Wonders</h4>
        <p>With our intimate knowledge of the area, we’ll whisk you away to the most awe-inspiring, beautiful beaches and breathtaking vistas that most tourists never get to see.</p>
      </div>
    </div> <!-- Card -->
    <div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
      <div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-900 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6">
        <h3>Expert Guides</h3>
        <h4>Passionate Experts, Unforgettable Experiences</h4>
        <p>Our knowledgeable guides are passionate about sharing their deep knowledge of the local marine life, history, and geography. Get ready to be captivated by fascinating insights as you discover the wonders of the Cabo coastline.</p>
      </div>
    </div> <!-- Card -->
    <div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
      <div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-900 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6">
        <h3>Premium Bar</h3>
        <h4>Sail Away with Delightful Drinks</h4>
        <p>Elevate your sailing journey with the perfect blend of breathtaking scenery and premium beverages. Our top-notch bar service will make your trip truly unforgettable, leaving you feeling refreshed, rejuvenated, and overjoyed.</p>
      </div>
    </div> <!-- Card -->
    <div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
      <div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-900 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6">
        <h3>Social Connection</h3>
        <h4>Sail Away with Your Loved Ones Into Unforgettable Moments</h4>
        <p>Gather your friends and family for an exhilarating sailing adventure tailored just for you. Create cherished memories with customized itineraries that cater to all your desires, making every moment on the water special and unforgettable.</p>
      </div>
    </div> <!-- Card -->
    <div class="w-full md:w-1/2 lg:w-1/3 h-auto px-5">
      <div class="h-full bg-ss-grey-100 border-solid border-2 border-ss-grey-900 text-center rounded-2xl pt-5 md:pt-7 lg:pt-9 pb-4 md:pb-7 lg:pb-10 px-6 [&_h3]:h4 [&_h3]:pb-4 [&_h3]:border-solid [&_h3]:border-b [&_h3]:border-[rgba(0,_0,_0,_0.08)] [&_h3]:mb-4 [&_h4]:h6">
        <h3>Safety First</h3>
        <h4>Sail with Confidence, Ease, and Peace of Mind</h4>
        <p>When you set sail with us, your safety and well-being is our top priority. Our skilled and knowledgeable crew are well trained in safety protocols and emergency procedures, so you can enjoy a thrilling yet secure sailing adventure.</p>
      </div>
    </div> <!-- Card -->
    <div class="absolute top-1/2 left-[27%] max-lg:top-[34.7%] max-lg:left-[40.4%] lg:w-[12.8%] animation max-md:hidden">
    <picture class="[&_img]:w-full [&_img]:rounded-full">
      <source srcset="./assets/images/cargo-steering.jpg" type="image/jpg">
      <img width="158" height="158" src="./assets/images/cargo-steering.jpg" loading="lazy" alt="Cargo Steering Image">
    </picture>
  </div>
   <div class="absolute top-1/2 left-[60.2%] max-lg:top-[62.4%] max-lg:left-[40.4%] lg:w-[12.8%] animation max-md:hidden">
    <picture class="[&_img]:w-full [&_img]:rounded-full">
      <source srcset="./assets/images/cargo-steering.jpg" type="image/jpg">
      <img width="158" height="158" src="./assets/images/cargo-steering.jpg" loading="lazy" alt="Cargo Steering Image">
    </picture>
  </div>
  </div>
  
</section>


<?php
include 'footer-custom-landing.php';
