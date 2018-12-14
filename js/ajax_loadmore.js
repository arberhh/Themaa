<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  $(document).ready(function(){
	var limit = 7;
	var start = 0;
	var action = 'inactive';    
	function load_posts(limit, start)
	{
		var htmlString="<?php echo admin_url('admin-ajax.php'); ?>";
		
		$.ajax({
		method:"POST",
		url :htmlString,
		dataType: "json",
		data:{
			action:'get_ajax_posts',
			limit:limit, 
			start:start},
		cache:false,
		success:function(data)
		{
			$('#post').append(data);
			if(data == '')
			{
				$('#load_data').html("<button type='button' class='btn btn-info'>No Data Found</button>");
				action = 'active';
			}
			else
			{
				$('#load_data').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
				action = "inactive";
			}
		}
		});
		}
		if(action == 'inactive')
		{
			action = 'active';
			load_posts(limit, start);
		}
		$(window).scroll(function(){
		if($(window).scrollTop() + $(window).height() > $("#post").height() && action == 'inactive')
		{
			action = 'active';
			start = start + limit;
			setTimeout(function(){
				load_posts(limit, start);
			}, 1000);
		}
		});
		// jQuery.post('/wp-admin/admin-ajax.php', data, function (response) {
		// 	  alert('Got this from the server: ' + response);
		//   });
		});
