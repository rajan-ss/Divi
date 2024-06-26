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
      <i class="icon-long-arrow-left text-black"></i><p>Luxury Vessels</p><i class="icon-long-arrow-right text-black"></i>
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

<?php
include 'footer-custom-landing.php';
