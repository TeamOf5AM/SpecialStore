$(function($){

    $('.scrollToTop').fadeOut();

    /* ----------------------------------------------------------- */
    /*  1. CARTBOX 
    /* ----------------------------------------------------------- */
      
    //    $(".aa-cartbox").hover(function(){
    //     $(this).find(".aa-cartbox-summary").fadeIn(500);
    //   }
    //     ,function(){
    //         $(this).find(".aa-cartbox-summary").fadeOut(500);
    //     }
    //    );   
    
    /* ----------------------------------------------------------- */
    /*  2. TOOLTIP
    /* ----------------------------------------------------------- */    
      // jQuery('[data-toggle="tooltip"]').tooltip();
      // jQuery('[data-toggle2="tooltip"]').tooltip();
  
    /* ----------------------------------------------------------- */
    /*  3. PRODUCT VIEW SLIDER 
    /* ----------------------------------------------------------- */    
  
    //   jQuery('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
    //       loading_image: 'demo/images/loading.gif'
    //   });
  
    //   jQuery('#demo-1 .simpleLens-big-image').simpleLens({
    //       loading_image: 'demo/images/loading.gif'
    //   });
  
    /* ----------------------------------------------------------- */
    /*  4. POPULAR PRODUCT SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */      
  
    //   jQuery('.aa-popular-slider').slick({
    //     dots: false,
    //     infinite: false,
    //     speed: 300,
    //     slidesToShow: 4,
    //     slidesToScroll: 4,
    //     responsive: [
    //       {
    //         breakpoint: 1024,
    //         settings: {
    //           slidesToShow: 3,
    //           slidesToScroll: 3,
    //           infinite: true,
    //           dots: true
    //         }
    //       },
    //       {
    //         breakpoint: 600,
    //         settings: {
    //           slidesToShow: 2,
    //           slidesToScroll: 2
    //         }
    //       },
    //       {
    //         breakpoint: 480,
    //         settings: {
    //           slidesToShow: 1,
    //           slidesToScroll: 1
    //         }
    //       }
    //       // You can unslick at a given breakpoint now by adding:
    //       // settings: "unslick"
    //       // instead of a settings object
    //     ]
    //   }); 
  
    
    /* ----------------------------------------------------------- */
    /*  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */      
  
    //   jQuery('.aa-featured-slider').slick({
    //       dots: false,
    //       infinite: false,
    //       speed: 300,
    //       slidesToShow: 4,
    //       slidesToScroll: 4,
    //       responsive: [
    //         {
    //           breakpoint: 1024,
    //           settings: {
    //             slidesToShow: 3,
    //             slidesToScroll: 3,
    //             infinite: true,
    //             dots: true
    //           }
    //         },
    //         {
    //           breakpoint: 600,
    //           settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 2
    //           }
    //         },
    //         {
    //           breakpoint: 480,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1
    //           }
    //         }
    //         // You can unslick at a given breakpoint now by adding:
    //         // settings: "unslick"
    //         // instead of a settings object
    //       ]
    //   });
      
    /* ----------------------------------------------------------- */
    /*  6. LATEST PRODUCT SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */      
    //   jQuery('.aa-latest-slider').slick({
    //       dots: false,
    //       infinite: false,
    //       speed: 300,
    //       slidesToShow: 4,
    //       slidesToScroll: 4,
    //       responsive: [
    //         {
    //           breakpoint: 1024,
    //           settings: {
    //             slidesToShow: 3,
    //             slidesToScroll: 3,
    //             infinite: true,
    //             dots: true
    //           }
    //         },
    //         {
    //           breakpoint: 600,
    //           settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 2
    //           }
    //         },
    //         {
    //           breakpoint: 480,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1
    //           }
    //         }
    //         // You can unslick at a given breakpoint now by adding:
    //         // settings: "unslick"
    //         // instead of a settings object
    //       ]
    //   });
  
    /* ----------------------------------------------------------- */
    /*  7. TESTIMONIAL SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */     
      
      jQuery('.aa-testimonial-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
      });
  
    /* ----------------------------------------------------------- */
    /*  8. CLIENT BRAND SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */  
  
    //   jQuery('.aa-client-brand-slider').slick({
    //       dots: false,
    //       infinite: false,
    //       speed: 300,
    //       autoplay: true,
    //       autoplaySpeed: 2000,
    //       slidesToShow: 5,
    //       slidesToScroll: 1,
    //       responsive: [
    //         {
    //           breakpoint: 1024,
    //           settings: {
    //             slidesToShow: 4,
    //             slidesToScroll: 4,
    //             infinite: true,
    //             dots: true
    //           }
    //         },
    //         {
    //           breakpoint: 600,
    //           settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 2
    //           }
    //         },
    //         {
    //           breakpoint: 480,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1
    //           }
    //         }
    //         // You can unslick at a given breakpoint now by adding:
    //         // settings: "unslick"
    //         // instead of a settings object
    //       ]
    //   });
  
    /* ----------------------------------------------------------- */
    /*  9. PRICE SLIDER  (noUiSlider SLIDER)
    /* ----------------------------------------------------------- */        
  
      jQuery(function(){
        if($('body').is('.productPage')){
         var skipSlider = document.getElementById('skipstep');
  
         var filter_price_start=jQuery('#filter_price_start').val();
         var filter_price_end=jQuery('#filter_price_end').val();
         
         if(filter_price_start=='' || filter_price_end==''){
          var filter_price_start=10;
          var filter_price_end=10000;
         }
  
          noUiSlider.create(skipSlider, {
              range: {
                  'min': 0,
                  '5%': 10,
                  '10%': 100,
                  '15%': 200,
                  '20%': 300,
                  '25%': 400,
                  '30%': 500,
                  '35%': 600,
                  '40%': 700,
                  '45%': 800,
                  '50%': 900,
                  '55%': 1000,
                  '60%': 1100,
                  '65%': 1200,
                  '70%': 1300,
                  '75%': 1400,
                  '80%': 1500,
                  '85%': 1600,
                  '90%': 1700,
                  '95%': 1800,
                  'max': 10000
              },
              snap: true,
              connect: true,
              start: [filter_price_start, filter_price_end]
          });
          // for value print
          var skipValues = [
            document.getElementById('skip-value-lower'),
            document.getElementById('skip-value-upper')
          ];
  
          skipSlider.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = values[handle];
          });
        }
      });
  
  
      
    /* ----------------------------------------------------------- */
    /*  10. SCROLL TOP BUTTON
    /* ----------------------------------------------------------- */
  
    //Check to see if the window is top if not then display button
  
      $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
          $('.scrollToTop').fadeIn();
        } else {
          $('.scrollToTop').fadeOut();
        }
      });
       
      //Click event to scroll to top
  
      $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
      });
    
    /* ----------------------------------------------------------- */
    /*  11. PRELOADER
    /* ----------------------------------------------------------- */
  
      jQuery(window).load(function() { // makes sure the whole site is loaded      
        jQuery('#wpf-loader-two').delay(200).fadeOut('slow'); // will fade out      
      })
  
    /* ----------------------------------------------------------- */
    /*  12. GRID AND LIST LAYOUT CHANGER 
    /* ----------------------------------------------------------- */
  
    jQuery("#list-catg").click(function(e){
      e.preventDefault(e);
      jQuery(".aa-product-catg").addClass("list");
    });
    jQuery("#grid-catg").click(function(e){
      e.preventDefault(e);
      jQuery(".aa-product-catg").removeClass("list");
    });
  
  
    /* ----------------------------------------------------------- */
    /*  13. RELATED ITEM SLIDER (SLICK SLIDER)
    /* ----------------------------------------------------------- */      
  
      jQuery('.aa-related-item-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      }); 
      
  });


function showColor(size){
    $('#size_id').val(size);
    $('.product_color').hide();
    $('.size_'+size).show();
    $('.size_link').css('border','1px solid #ddd');
    $('#size_'+size).css('border','1px solid black');
  }
  function home_add_to_cart(id,size_str_id,color_str_id){
    $('#color_id').val(color_str_id);
    $('#size_id').val(size_str_id);
    add_to_cart(id,size_str_id,color_str_id);
  }
  function add_to_cart(id,size_str_id,color_str_id){
    $('#add_to_cart_msg').html('');
    // var color_id=$('#color_id').val();
    // var size_id=$('#size_id').val();
  
    
      $('#product_id').val(id);
      $('#pqty').val($('#qty').val());
      $.ajax({
        url:'/add_to_cart',
        data:$('#frmAddToCart').serialize(),
        type:'post',
        success:function(result){
          var totalPrice=0;
          if(result.msg=='not_avaliable'){
            alert(result.data);
            Swal.fire({
              icon: 'warning',
              title: result.data,
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true
            })
          }else{
            Swal.fire({
              icon: 'success',
              title: 'Product '+result.msg,
              showConfirmButton: false,
              timer: 1000,
              timerProgressBar: true
            })
            if(result.totalItem==0){
              $('.aa-cart-notify').html('0'); 
              $('.aa-cartbox-summary').remove();
           }else{
             
             $('.aa-cart-notify').html(result.totalItem); 
             var html='<div class="card min-h-30 bg-transparent mb-5 p-2">';
             $.each(result.data, function(arrKey,arrVal){
               totalPrice=parseInt(totalPrice)+(parseInt(arrVal.qty)*parseInt(arrVal.price));
               html+='<div class="card mb-1 bg-prdct-card border border-dark p-2"><div class="row"><div class="col-6"><img class="w-75 rounded" src="'+PRODUCT_IMAGE+'/'+arrVal.image+'" alt=""></div><div class="col-6"><h6 class="mb-0 text-wraping"><a href="#">'+arrVal.name+'</a></h6><p class="mb-0 smaller"><b>Subtotal : </b> '+arrVal.qty+' * Rs  '+arrVal.price+'</p><p class="mb-0 smaller"><b>Total : </b>Rs '+totalPrice+'</p></div></div></div>';
             });
            
           }
        //    html+='<li><span class="aa-cartbox-total-title">Total</span><span class="aa-cartbox-total-price">Rs '+totalPrice+'</span></li>';
           html+='</div><div class="p-1"><a class="btn btn-danger btn-sm position-absolute bottom-0 mb-2" href="cart" style="width:94%">View Cart</a></div>';
           $('.aa-cartbox-summary').html(html);
          }
        }
      });
    }
  
  function deleteCartProduct(pid,size,color,attr_id){
    $('#color_id').val(color);
    $('#size_id').val(size);
    $('#qty').val(0)
    add_to_cart(pid,size,color);
    // $('#total_price_'+attr_id).html('Rs '+qty*price);
    $('#cart_box'+attr_id).hide();
    html = '<p>Your Cart Is Empty <br><i class="fa fa-shopping-cart"></i></p>';
    $('#cart_empty_msg').html(html);
  }


function updateQty(pid,size,color,attr_id,price){
    $('#color_id').val(color);
    $('#size_id').val(size);
    var qty=$('#qty'+attr_id).val();
    $('#qty').val(qty)
    add_to_cart(pid,size,color);
    $('#total_price_'+attr_id).html('Rs '+qty*price);
  }
  
  function sort_by(){
    var sort_by_value=$('#sort_by_value').val();
    $('#sort').val(sort_by_value);
    $('#categoryFilter').submit();
  }
  
  function sort_price_filter(){
    $('#filter_price_start').val($('#skip-value-lower').html());
    $('#filter_price_end').val($('#skip-value-upper').html());
    $('#categoryFilter').submit(); 
  }

function setColor(color,type){
    var color_str=$('#color_filter').val();
    if(type==1){
      var new_color_str=color_str.replace(color+':','');
      $('#color_filter').val(new_color_str);
    }else{
      $('#color_filter').val(color+':'+color_str);
      $('#categoryFilter').submit();
    }
   
    $('#categoryFilter').submit();
  }


//Login And Registration Functions
$('#frmLogin').submit(function(e)
{
    $('#login_msg').html("");
    e.preventDefault();
    $.ajax({
      url:'/login_process',
      data:$('#frmLogin').serialize(),
      type:'post',
      success:function(result){
        if(result.status=="error"){
          $('#login_msg').html(result.msg);
        }
        if(result.status=="success"){
            $('#frmLogin')[0].reset();
            var referrer =  document.referrer;
            window.location.href = referrer;
            // var url = "";
            // $('#login_button').css("display","none");
            // $('#user_login').css("display","block");
            // $('#user_login').html('<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i></a><ul class="dropdown-menu dropdown-menu-dark"><li><a class="dropdown-item" href="'+url+'/account">My Account</a></li><li><a class="dropdown-item" href="'+url+'/order">My Orders</a></li><li><a class="dropdown-item" href="'+url+'/logout">Logout</a></li></ul>');
        }
      }
    });
});

$('#frmRegistration').submit(function(e)
{
    e.preventDefault();
    $('.field_error').html('');
    $.ajax({
      url:'registration_process',
      data:$('#frmRegistration').serialize(),
      type:'post',
      success:function(result){
        if(result.status=="error"){
          $.each(result.error,function(key,val){
            $('#'+key+'_error').html(val[0]);
          });
        }
        
        if(result.status=="success"){
          $('#frmRegistration')[0].reset();
          $('#thank_you_msg').html(result.msg);
          window.location.href = window.location.href;
        }
      }
    });
});

function forgot_password(){
$('#popup_forgot').show();
$('#popup_login').hide();
}
  
function show_login_popup(){
$('#popup_forgot').hide();
$('#popup_login').show();
}

$('#frmForgot').submit(function(e){
    $('#forgot_msg').html("Please wait...");
    e.preventDefault();
    $.ajax({
      url:'/forgot_password',
      data:$('#frmForgot').serialize(),
      type:'post',
      success:function(result){
        $('#forgot_msg').html(result.msg);
      }
    });
});

$('#frmUpdatePassword').submit(function(e){
    $('#thank_you_msg').html("Please wait...");
    $('#thank_you_msg').html("");
    e.preventDefault();
    $.ajax({
      url:'/forgot_password_change_process',
      data:$('#frmUpdatePassword').serialize(),
      type:'post',
      success:function(result){
        $('#frmUpdatePassword')[0].reset();
        $('#thank_you_msg').html(result.msg);
      }
    });
  });


function applyCouponCode(){
$('#coupon_code_msg').html('');
$('#order_place_msg').html('');
var coupon_code=$('#coupon_code').val();
if(coupon_code!=''){
    $.ajax({
    type:'post',
    url:'/apply_coupon_code',
    data:'coupon_code='+coupon_code+'&_token='+$("[name='_token']").val(),
    success:function(result){
        console.log(result.status);
        if(result.status=='success'){
        $('.show_coupon_box').removeClass('hide');
        $('#coupon_code_str').html(coupon_code);
        $('#total_price').html('INR '+result.totalPrice);
        $('.apply_coupon_code_box').hide();
        }else{
        
        }
        $('#coupon_code_msg').html(result.msg);
    }
    });
}else{
    $('#coupon_code_msg').html('Please enter coupon code');
}
}

function remove_coupon_code(){
    $('#coupon_code_msg').html('');
    var coupon_code=$('#coupon_code').val();
    $('#coupon_code').val('');
    if(coupon_code!=''){
      $.ajax({
        type:'post',
        url:'/remove_coupon_code',
        data:'coupon_code='+coupon_code+'&_token='+$("[name='_token']").val(),
        success:function(result){
          if(result.status=='success'){
            $('.show_coupon_box').addClass('hide');
            $('#coupon_code_str').html('');
            $('#total_price').html('INR '+result.totalPrice);
            $('.apply_coupon_code_box').show();
          }else{
            
          }
          $('#coupon_code_msg').html(result.msg);
        }
      });
    }
}

$('#frmPlaceOrder').submit(function(e){
    $('#order_place_msg').html("Please wait...");
    e.preventDefault();
    $.ajax({
      url:'/place_order',
      data:$('#frmPlaceOrder').serialize(),
      type:'post',
      success:function(result){
        if(result.status=='success'){
            if(result.payment_url!=''){
              window.location.href=result.payment_url;
            }else{
              window.location.href="/order_placed";
            }
           
        }
        $('#order_place_msg').html(result.msg);
      }
    });
});

function prod_search(val){
    $val=val;
    $.ajax({
      url:'/prod_search',
      data:{'prod_search':$val},
      type:'get',
      success:function(data){
        $('#tbody').html(data);
      }
    })
}

$('#frmProductReview').submit(function(e){
    //$('#thank_you_msg').html("Please wait...");
    //$('#thank_you_msg').html("");
    e.preventDefault();
    $.ajax({
      url:'/product_review_process',
      data:$('#frmProductReview').serialize(),
      type:'post',
      success:function(result){
        if(result.status=="success"){
          $('.review_msg').html(result.msg);
          $('#frmProductReview')[0].reset();
          setInterval(function(){
            window.location.href=window.location.href
          },3000);
        }if(result.status=="error"){
          Swal.fire({
            icon: 'warning',
            title: 'Please Login First',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true
          })
        }
        //$('#frmUpdatePassword')[0].reset();
        //$('#thank_you_msg').html(result.msg);
      }
    });
});

$(document).ready(function(){
    $value=$('#contact-form-msg').val();
    if($value != null && $value != ''){
      Swal.fire({
        icon: 'success',
        title: $value,
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
      })
    }
  })
  