;(function ($) {
  $(document).ready(function () {
    function initBgCover(context) {
      if (!context) context = $('body')
      context.find('.bg-cover').each(function () {
        var holder = $(this)
        var image = holder.find('> img').hide()
        var imageSrc = image.prop('src')
        holder.css({
          backgroundImage: 'url(' + imageSrc + ')',
        })
      })
    }

    initBgCover()

    /* smooth scroll*/
    var winWidth = $(window).width()
    $(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash)
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
        if (target.length) {
          if (winWidth > 991) {
            $('html, body').animate(
              {
                scrollTop: target.offset().top - 100,
              },
              1000
            )
          } else {
            $('html, body').animate(
              {
                scrollTop: target.offset().top,
              },
              1000
            )
          }
          return false
        }
      }
    })

    // Faq accordion
    $(document).on('click', '.toggleFaqBtn', function (e) {
      e.stopPropagation() // Prevents the event from bubbling up the DOM tree

      var clickedToggleBtn = $(this) // Refers to the specific button that was clicked

      $('.toggleFaqBtn').not(clickedToggleBtn).removeClass('active') // Removes 'active' class from other buttons
      $('.toggleFaqBtn').not(clickedToggleBtn).parent('.item').removeClass('active') // Removes 'active' class from other parent elements
      $('.toggleFaqBtn').not(clickedToggleBtn).siblings('.toggleBlock').slideUp() // Hides other toggleBlock elements

      clickedToggleBtn.toggleClass('active') // Toggles 'active' class on the clicked button
      clickedToggleBtn.parent('.item').toggleClass('active') // Toggles 'active' class on the parent element
      clickedToggleBtn.siblings('.toggleBlock').slideToggle() // Toggles visibility of the sibling toggleBlock element
    })

    // Footer toggleBtn
    $('.toggleBtn').click(function () {
      $('.toggleBtn').not(this).siblings('.toggleBlock').slideUp()
      $(this).toggleClass('active')
      $('.toggleBtn').not(this).removeClass('active')
      $(this).siblings('.toggleBlock').slideToggle()
    })
    //custom tab
    $('.tab-btn').click(function () {
      // Remove 'active' class from all tab btns
      $('.tab-btn').removeClass('active')

      // Add 'active' class to the clicked tab btn
      $(this).addClass('active')

      // Hide all tab content panes
      $('.tab-item').addClass('hidden')

      // Get the target tab content based on data-target attribute
      var targetId = $(this).attr('data-target')
      $(targetId).removeClass('hidden')
    })

    // Custom tab and dropdown on mobile
    const customTabWrapper = document.querySelector('.ss-custom-tab')
    const dropbtn = document.querySelector('.dropBtn')
    const dropdownContent = document.querySelector('.tabNav')

    if (customTabWrapper) {
      // Function to update drop button text
      function updateDropButtonText(text) {
        dropbtn.textContent = text
      }

      // Function to handle tab click
      function handleTabClick(e) {
        // Check if the clicked element is a navigation item
        if (e.target.classList.contains('nav-item')) {
          e.preventDefault() // Prevent default link behavior
          const itemTarget = e.target.getAttribute('href').replace('#', '')
          const tabPane = document.getElementById(itemTarget) // Get the target tab pane

          if (tabPane) {
            // Remove 'active' class from all navigation items and hide all tab panes
            document.querySelectorAll('.nav-item').forEach((navItem) => navItem.classList.remove('active'))
            document.querySelectorAll('.tabPane').forEach((tabPane) => tabPane.classList.add('hidden'))

            // Add 'active' class to the clicked navigation item and show the corresponding tab pane
            e.target.classList.add('active')
            tabPane.classList.remove('hidden')

            // Update drop button text
            updateDropButtonText(e.target.textContent)

            // Toggle dropdown visibility (only if dropdown is visible on mobile)
            if (!dropdownContent.classList.contains('hidden')) {
              dropdownContent.classList.add('hidden')
              dropbtn.classList.remove('active')
            }
          }
        }
      }

      // Add event listener to handle tab navigation
      customTabWrapper.addEventListener('click', handleTabClick)

      // Add event listener to toggle dropdown visibility
      dropbtn.addEventListener('click', () => {
        dropdownContent.classList.toggle('hidden')
        dropbtn.classList.toggle('active')
      })

      // Update drop button text initially
      const initialActiveNavItem = document.querySelector('.ss-custom-tab .nav-item.active')
      if (initialActiveNavItem) {
        updateDropButtonText(initialActiveNavItem.textContent)
      }
    }

    function stickyFooter() {
      let stickyFooter = $('.sticky-footer')
      let stickyFooterHeight = stickyFooter.innerHeight()
      let siteFooter = $('.site-footer')
      siteFooter.css('margin-bottom', stickyFooterHeight)
    }
    stickyFooter()

    let debounceTimeout
    $(window).on('resize', function () {
      clearTimeout(debounceTimeout)
      debounceTimeout = setTimeout(function () {
        stickyFooter()
      }, 250)
    })
  })
})(jQuery)

// Services Section Slider
var swiper = new Swiper('.services-mySwiper', {
  slidesPerView: 1,
  loop: true,
  // centeredSlides: true,
  spaceBetween: 30,
   navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 15,
      centeredSlides: false,
    },
    768: {
      centeredSlides: false,
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
})
