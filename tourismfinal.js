window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  var navbar = document.querySelector('.navbar');
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    navbar.classList.add('transparent');
    document.body.classList.add('fixed-nav');
  } else {
    navbar.classList.remove('transparent');
    document.body.classList.remove('fixed-nav');
  }
}

// slide scroll
// $('.Explore-Destination').slick({
//   infinite: true,
//   autoplay: true,
//   autoplaySpeed: 2000,
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   dots: true,
//   responsive: [
//   {
//   breakpoint: 1023,
//   settings: {
//   slidesToShow: 2,
//   slidesToScroll: 1
//   }
//   },
//    {
//    breakpoint: 767,
//    settings: {
//    slidesToShow: 1,
//    slidesToScroll: 1
//  }
//  }
// ]
// });



// for description link of image card
// function loadMore() {
//   // Make an AJAX request to fetch the content from the link
//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       // Replace the description with the fetched content
//       document.querySelector('.description').innerHTML = this.responseText;
//     }
//   };
//   xhr.open("GET", "https://www.nepalglaciertreks.com/blog/gosaikunda-lake.html", true);
//   xhr.send();
// }



// slide scroll for explore

$('.Explore-Destination').slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  responsive: [
  {
      breakpoint: 1023,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
      },
      {
      breakpoint: 767,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
      }
  ]
});


// description
// document.getElementById("gosaikunda-readmore").addEventListener("click", function() {
//   // Redirect to description.html page
//   window.location.href = "gosaikunda-des.html";
// });

// slider for trending
$('.trending-destination').slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  responsive: [
  {
      breakpoint: 1023,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
      },
      {
      breakpoint: 767,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
      }
  ]
});
// slider for festival and events
$('.festivals-Destination').slick({
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  responsive: [
  {
      breakpoint: 1023,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
      },
      {
      breakpoint: 767,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
      }
  ]
});


