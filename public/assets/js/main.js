// dropdown
function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
};
//modal
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    });

// materi_home
var span = document.getElementsByTagName('span');
var post = document.getElementsByClassName('post');
var l = 0;
span[1].onclick = ()=>{
    l++;
    for(var i of post)
    {
        if(l==0){i.style.left = "0px";}
        if(l==1){i.style.left = "-1050px";}
        if(l>3){l=3;}
    }
}

span[0].onclick = ()=>{
    l--;
    for(var i of post)
    {
        if(l==0){i.style.left = "0px";}
        if(l==1){i.style.left = "-1050px";}
        if(l<0){l=0;}
    }
}
$(window).scroll(function() {
  if ($(document).scrollTop() > 100) {
    $('.navbar').addClass('color-change');
  } else {
    $('.navbar').removeClass('color-change');
  }
});
// Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      768: {
        items: 4
      },
      900: {
        items: 6
      }
    }
  });