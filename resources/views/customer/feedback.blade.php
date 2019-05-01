@extends('templates.admin.master')
@section('content')
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
	        <div class="col-lg-12">
		        <section class="panel">
		            <header class="panel-heading">
		                Feedback
		            </header>
		            <div class="panel-body">
		                <form action="{{ route('customer.feedback') }}" class="form-horizontal bucket-form" method="post">
		                	{{ csrf_field() }}
		                    <div class="form-group">
		                        <label class="col-sm-3 control-label">Message</label>
		                        <div class="col-sm-6">
		                            <textarea class="form-control" name="message"></textarea>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                    	<label class="col-sm-3 control-label">Rate</label>
		                    	<div class="col-sm-6">
		                        <!-- Rating Stars Box -->
								  <div class='rating-stars text-center'>
								    <ul id='stars'>
								        <li class='star' title='Poor' data-value='1'>
								        	<i class='fa fa-star fa-fw'></i>
								        </li>
								      	<li class='star' title='Fair' data-value='2'>
								        	<i class='fa fa-star fa-fw'></i>
								      	</li>
								      	<li class='star' title='Good' data-value='3'>
								       	 	<i class='fa fa-star fa-fw'></i>
								     	</li>
								      	<li class='star' title='Excellent' data-value='4'>
								       		 <i class='fa fa-star fa-fw'></i>
								      	</li>
								      	<li class='star' title='WOW!!!' data-value='5'>
								        	<i class='fa fa-star fa-fw'></i>
								     	 </li>
								    </ul>
								  </div>
								  <input type="" name="start" style="display: none"  id="start_rate">
								</div>
		                    </div>
		                    <div class="form-group">
		                    	<label class="col-sm-5 control-label"></label>
		                        <div class="col-sm-2">
		                            <input type="submit" class="btn btn-info">
		                        </div>
		                    </div>
		                </form>
		            </div>
		        </section>
	        </div>
        </div>
        <!-- page end-->
    </div>
	</section>
</section>
<script type="text/javascript">
	$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
document.getElementById('start_rate').value = onStar; 
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
</script>
<style type="text/css">
	.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}

</style>
@endsection