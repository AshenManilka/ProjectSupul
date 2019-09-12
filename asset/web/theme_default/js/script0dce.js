$(document).ready(function() {

    //Homepage slider
    $(".hero-slider .owl-carousel").owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        margin:0,
        nav: false,
        dots: true,
        responsiveClass:true,
        animateOut: 'fadeOut',
        // responsive:{
     //        1022:{
     //            nav: false,
     //            dots: true
     //        }
     //    }
    });
   
    var alterClass = function() {
        var ww = document.body.clientWidth;
            if (ww > 768) {
              $('#mobfilter').removeClass('collapse');
            }
        };
        $(window).resize(function(){
            alterClass();
        });
        //Fire it when the page first loads:
    alterClass();

    // Enable tabs collapse and expand on click
    $(".ptabs-wrap .nav-link").click(function(){
        if ($(this).hasClass('active')){
            $('#' + this.hash.substr(1).toLowerCase()).toggleClass('active');
        }
    });

    // Flaoting lable on checkout member page
    $('.is-floating-label input, .is-floating-label textarea').on('focus blur', function (e) {
      $(this).parents('.is-floating-label').toggleClass('is-focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // Product carousel are here
    $(".product-carousel.owl-carousel").owlCarousel({
        loop:false,
        items: 6,
        nav: true,
        dots: false,
        margin: 8,
        responsiveClass:true,
        // Please change the relevant path to show arrows for the product carousel.        
        navText: ['<img src="' + AppData.base_url + '/assets/web/theme_default/images/icons/prev.png" alt="" width="20">','<img src="' + AppData.base_url + '/assets/web/theme_default/images/icons/next.png" alt="" width="20">'],
        responsive:{
            0:{
                items:1,
                nav:true,
                slideBy: 1
            },

            576:{
                items:2,
                nav:true,
                slideBy: 2
            },

            768:{
                items:3,
                nav:true,
                slideBy: 3
            },

            992:{
                items:6,
                nav:true,
                slideBy: 6
            }
        }
    });

    $(".home-carousel.4ximg.owl-carousel").owlCarousel({
        loop:false,
        items: 4,
        nav: true,
        dots: false,
        margin: 30,
        responsiveClass:true,
        // Please change the relevant path to show arrows for the product carousel.        
        navText: ['<img src="' + AppData.base_url + '/assets/web/theme_default/images/icons/prev.png" alt="" width="20">','<img src="' + AppData.base_url + '/assets/web/theme_default/images/icons/next.png" alt="" width="20">'],
        responsive:{
            0:{
                items:1,
                nav:true,
                slideBy: 1
            },

            768:{
                items:2,
                nav:true,
                slideBy: 2
            },

            992:{
                items:4,
                nav:true,
                slideBy: 4
            }
        }
    });
    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function(e) {
        $(this).on('wheel', function(e) {
            e.preventDefault();
        });
    });

    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function(e) {
        $(this).off('wheel');
    });

    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function(e) {
        if ( e.which == 38 || e.which == 40 )
            e.preventDefault();
    });

    // Create password slide down.
    //$('.create-pass').hide();
    $('input:checkbox[id="createAccount_g"]').change(function() {
        $('.create-pass').slideToggle();    
    })

    // Nested Radio button enabled.
    $('input:radio[name="shipmethod"]').attr('disabled', true);
    $('.pickup select').attr('disabled', true);    
    $('input.datepicker').attr('disabled', true);
        
    $('input:radio[name="shipselector"]').change(function() {
        if($('input:radio[id="d_option1"]').is(':checked')){
            $('input:radio[name="shipmethod"]').attr('disabled', false); 
            $('.pickup select').attr('disabled', true);    
            $('input.datepicker').attr('disabled', true);
        } else {
        $('input:radio[name="shipmethod"]').attr('disabled', true);
        //$(this).prop('checked', false);      
        $('.pickup select').attr('disabled', false);    
        $('input.datepicker').attr('disabled', false);     
        }
    });

    //Date picker
    $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        startDate: new Date(),
        todayHighlight: true,
    });
    //$('#datepicker').datepicker("setDate", new Date());

    $('[data-toggle=tooltip]').tooltip();

    // gift wrap options
    $('.gift-options').hide();    
    $('input:checkbox[name="giftWrapOption"]').change(function() {
        $('.gift-options').slideToggle();         
    })

    //Enable gift wrapping on radio select
    $('input:radio[name="giftees"]').attr('disabled', true);
    $('.swatch.gw').addClass('grayscale');
    $('.swatch.gw.grayscale').tooltip('disable');
    $('input:radio[name="giftwrap_box"]').change(function() {
        if($('input:radio[id="giftWrapOption1"]').is(':checked')){
            $('input:radio[name="giftees"]').attr('disabled', false);
            $('.swatch.gw').tooltip('enable');
            $('.swatch.gw').removeClass('grayscale'); 
        } else {
            $('input:radio[name="giftees"]').attr('disabled', true);            
            $('.swatch.gw').addClass('grayscale');
            $('.swatch.gw.grayscale').tooltip('disable'); 
        }    
    })


    // Add new delivery address
    $('.address-book select').attr('disabled', true);
    $('#a_newAddress').attr('aria-disabled', true);
    $('input:radio[name="altdelivery_address"]').change(function() {
        $('.address-book select').attr('disabled', false);
        $('#a_newAddress').attr('aria-disabled', false);
        $('#a_newAddress').removeClass('disabled');

        $('#a_newAddress').on('click', function(e){
            e.preventDefault();
            $('.add-new-address').slideToggle();
        })
    })


    // Checkout page order summary collapse
    $('#order_summ_checkout a').click(function(e){
        $('.cbproducts').fadeToggle();
        $('#order_summ_checkout').toggleClass('show');
        e.preventDefault();
    })

    // Mini Shopping cart toggle
    $("#miniCart").on("click", function() {
        $(".mini-cart").fadeToggle( "fast").toggleClass('show');
        return false;
    });

    // Fix mobile navbar issue
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar.menu").height() + "px" });
  
    // Product image gallery
    $(".thumbLink").click(function(event) {        
        var image = $(this).attr("rel");
        $(".thumbLink").removeClass('active');
        $( this ).addClass( "active" );
        $('.main-pimage').hide();
        $('.main-pimage').fadeIn('slow');
        $('.main-pimage').html('<img src="' + image + '" class="custom img-fluid"/>');
        $('.main-pimage').zoom({ on:'click' });
        return false;
    });

    // Prev Next Navigation on the product gallery
    // -----------------------------------------------------------------------------------

    $("#next").click(function(event) {        
        $(".thumbLink.active").parent().next().find(".thumbLink").trigger('click');
    });

    $("#prev").click(function(event) {        
        $(".thumbLink.active").parent().prev().find(".thumbLink").trigger('click');
    });

    // -----------------------------------------------------------------------------------
    

    // Select box styling wrapper
    // and custom select box styling.
    $('.fancy-select').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;
      
        $this.addClass('select-hidden'); 
        $this.wrap('<div class="selectee"></div>');
        $this.after('<div class="select-styled border"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());
      
        var $list = $('<ul />', {
            'class': 'select-options border'
        }).insertAfter($styledSelect);
      
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }
      
        var $listItems = $list.children('li');
      
        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();            
        });
      
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));            
            $list.hide();
            $(this).addClass('lthis').siblings().removeClass('lthis');
            //console.log($this.val());
        });
      
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });      

    });

    
    // add class on scroll
    var s = $(".pheader");
    var pos = s.position();                      
    $(window).scroll(function() {
        var ww  = $(window).width();
        var windowpos = $(window).scrollTop();
        
        if (windowpos >= pos.top & windowpos >=820 & ww > 768) {
            s.addClass("stickit");
            s.fadeIn();
            $('ul.nav li div.dropdown-menu.show').dropdown('toggle');
            
        } else if (windowpos >= pos.top & windowpos >=500 & ww < 768) {
            s.addClass("stickit");
            //s.fadeIn(); 
        } else {
            s.removeClass("stickit");
            //s.fadeOut();
        }    
        
    });

    // Zooming image with click
    $('#izoomy').zoom({ on:'click' });

    // image upload input
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    
    //show and hide password button    
    $(".pwdtoggle").click(function() {
        var el = $(this);
        el.text() == el.data("text-swap") 
        ? el.text(el.data("text-original")) 
        : el.text(el.data("text-swap"));
        var input = $($(this).attr("toggle"));
        $(this).toggleClass("revealpwd");
        
        if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
        }
    });

    //Fire modal on myaccount password change
    $('#ipassword').focus(function () {
        $('#passResetModal').modal({
           show: true
        });
    })

    //style iframe content
    //$("#recaptcha-wrapper iframe").contents().find("..rc-anchor-light").css('background', 'black');
    function displayVals() {
      var singleValues = $( "#enqType" ).val();      
      // When using jQuery 3:
      // var multipleValues = $( "#multiple" ).val();
      $( ".enqType-here" ).html( "<span>" + singleValues + "</span>");
    }
     
    $( "#enqType" ).change( displayVals );
    displayVals();
});


// Add to cart incrementer
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

// Google recaptcha responsive work.
var width = $('.g-recaptcha').parent().width();
if (width < 302) {
    var scale = width / 302;
    $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
    $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
    $('.g-recaptcha').css('transform-origin', '0 0');
    $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
}

// var ww  = $(window).width();
// if (width < 768) {
//     $('.filter-collapse').collapse()
// } else {
//     $('.filter-collapse').removeClass('.collapse');
// }