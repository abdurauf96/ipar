$('.data').keyup(function(){
	var data=$(this).val();
  var cat_id=1*($('#cat_id').val());
	$.ajax({
		headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   		},
   		data: {data:data, cat_id:cat_id},
   		method: 'post',
   		url: '/product_search',
   		success: function(data){
   			$('#search_result').html(data);
   		}
	})
})

$('.page').click(function(e){
  e.preventDefault();
  var id=$(this).data('id');
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {id:id},
      method: 'post',
      url: '/about_pages',
      success: function(data){
        //$('#result').html(data);
        $('#result').fadeOut(700, function(){
            $('#result').html(data).fadeIn().delay(2000);

        });
      }
  })
})

$('#post_search').keyup(function(){
  var data=$(this).val();
  var cat_id=$('#post_cat_id').val();
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {data:data, cat_id:cat_id},
      method: 'post',
      url: '/post_search',
      success: function(data){
        $('#search_result').html(data);
      }
  })
})

$('.sort_posts').click(function(e){
  e.preventDefault();
  var key=$(this).data('key');
  var cat_id=$('#post_cat_id').val();
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {key:key, cat_id:cat_id},
      method: 'post',
      url: '/posts_sort',
      success: function(data){
        //$('#search_result').html(data);
        $('#search_result').fadeOut(800, function(){
              $('#search_result').html(data).fadeIn().delay(2000);

          });
      }
  })
})

$('.add_comment').click(function(e){
  e.preventDefault();
  var name=$('#name').val();
  var body=$('#body').val();
  var post_id=$('#post_id').val();
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {name:name, body:body, post_id:post_id},
      method: 'post',
      url: '/add_comment',
      success: function(data){
         //location.reload();
         $('#comment').fadeOut(800, function(){
              $('#comment').html(data).fadeIn().delay(2000);

          });

      }
  })
})

$(".send_message").click(function(e){
      e.preventDefault();
      var name = $(this).parent().siblings('.name').val();
      var phone = $(this).parent().siblings('.phone').val();
      if ( name=='' ) {
          $('.name').attr('placeholder', 'Заполните это поле');
      }else if(phone==''){
           $('.phone').attr('placeholder', 'Заполните это поле');
      }else{
          $.ajax({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              method: 'POST',
              url: '/send_message',
              data:{name:name, phone:phone},
              success:function(){
                  $(".otprovlen").css('display', 'block');
              }
          })
          
      }
      
  });

$('.zakazat').click(function(e){
  e.preventDefault();
  var id=$(this).data('id');
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {id:id},
      method: 'post',
      url: '/get_product',
      success: function(data){
        $('.modal__form').slideDown(500);
        $('.product_name').html(data);
      }
  })
})

$('.send_zakas').click(function(e){
  e.preventDefault();
  var name=$('#name').val();
  var phone=$('#phone').val();
  var product=$('.product_name').html();

   if ( name=='' ) {
          $('#name').attr('placeholder', 'Заполните это поле');
      }else if(phone==''){
           $('#phone').attr('placeholder', 'Заполните это поле');
      }else{
          $.ajax({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              method: 'POST',
              url: '/send_zakas',
              data:{name:name, phone:phone, product:product},
              success:function(){
                  $(".otprovlen").css('display', 'block');
              }
          })
          
      }
})

$(".contact_msg").click(function(e){
      e.preventDefault();
      var name = $('.name').val();
      var phone = $('.phone').val();
      var msg = $('.msg').val();
      if ( name=='' ) {
          $('.name').attr('placeholder', 'Заполните это поле');
      }else if(phone==''){
           $('.phone').attr('placeholder', 'Заполните это поле');
      }else{
          $.ajax({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              method: 'POST',
              url: '/send_message',
              data:{name:name, phone:phone, msg:msg},
              success:function(){
                  $(".otprovlen").css('display', 'block');
              }
          })   
      }
      
  });

$(".send_question").click(function(e){
      e.preventDefault();
      var name = $(this).siblings('.name').val();
      var phone = $(this).siblings('.phone').val();
      var msg = $(this).siblings('.question').val();
      if ( name=='' ) {
          $('.name').attr('placeholder', 'Заполните это поле');
      }else if(phone==''){
           $('.phone').attr('placeholder', 'Заполните это поле');
      }else if(msg==''){
           $('.question').attr('placeholder', 'Заполните это поле');
      }else{
          $.ajax({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              method: 'POST',
              url: '/send_question',
              data:{name:name, phone:phone, msg:msg},
              success:function(){
                  $(".otprovlen").css('display', 'block');
              }
          })   
      }
      
  });