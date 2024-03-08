//font
(function(d) {
	var config = {
		kitId: 'tmd3soq',
		scriptTimeout: 3000,
		async: true
	},
	h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

jQuery(function() {
  //header-toggle
  $('#js-drawer').on('click', function(e){
	  e.preventDefault();
	  $(this).toggleClass('is-active');
	  $('.c-drawer-content').toggleClass('is-active');
	  $('.c-drawer-background').toggleClass('is-active');
		if($(this).hasClass('is-active')) {
			$('body,html').css('overflow-y', 'hidden');
		} else {
			$('body,html').css('overflow-y', 'visible');
		}
	  return false;
	});

	//swiper
	const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 24,
    speed: 800,
    effect: "fade",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: 'true',
    },
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  //to-top
  $("#c-pagetop").hide();

  $(window).scroll(function(){
    if($(this).scrollTop() > 100){
      $("#c-pagetop").fadeIn();
    } else {
      $("#c-pagetop").fadeOut();
    }
  });

  $('#c-pagetop').on('click', ()=>{
    $('body,html').animate({ scrollTop: 0 }, 500);
    return false;
  })
})

