$(document).ready(function(){
	// julz key = AIzaSyCZIJeJz9b1wrCHLKr_dOypiAGtzeAqi10
	// rene key = AIzaSyBcIP9j9aRBSHgJ0rySd9aGb4QwzYTXkj8

	//FOR DEFAULT RETURN FUNCTION
	$.ajax({
	    url: 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=12&regionCode=PH&order=date&q=News%20Philippines&key=AIzaSyBcIP9j9aRBSHgJ0rySd9aGb4QwzYTXkj8',
	    dataType: 'json',
		type: 'GET',
	    success: function(data){
	        console.log(data);
	        var p = $("<p>");
	        var i = 1;
	        $.each(data.items, function(index, val){
	            	
				p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.id.videoId+"' target='_blank'><img src='"+val.snippet.thumbnails.high.url+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.snippet.title+"</strong></h3><h2><i>"+val.snippet.channelTitle+"</i></h2><p>"+val.snippet.publishedAt+"</p><form action='insert_ytapi.php' method='post'><input type='text' name='vidId' value='"+val.id.videoId+"' hidden><input type='text' name='title' value='"+val.snippet.title+"' hidden><input type='text' name='channel' value='"+val.snippet.channelTitle+"' hidden><input type='text' name='image' value='"+val.snippet.thumbnails.high.url+"' hidden><input type='text' name='date' value='"+val.snippet.publishedAt+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

				//putting input into the getall form
				$(".getall").append("<input type='text' name='vidId"+i+"' value='"+val.id.videoId+"' hidden><input type='text' name='title"+i+"' value='"+val.snippet.title+"' hidden><input type='text' name='channel"+i+"' value='"+val.snippet.channelTitle+"' hidden><input type='text' name='image"+i+"' value='"+val.snippet.thumbnails.high.url+"' hidden><input type='text' name='date"+i+"' value='"+val.snippet.publishedAt+"' hidden>");

				i +=1;

			});

			$(".result").append(p);
			// $(".getall").append("<input type='submit' value='GET ALL NEWS' name='all' style='position: fixed; top: 5px; left: 720px; z-index: 10;'>");
			$(".getall").append("<button type='submit' name='all' style='padding:0px; margin:0px; position: fixed; top: 5px; left:50%; transform: translate(-50%); z-index: 10; background-color:#333; height:100px; width:100px; border-radius: 50%; border: none;'><img title='Get All News' src='../image/getall_news.png' style='height:85%; width:85%; border-radius: 50%; background-color:grey; padding:0px; margin:0px;'></button>");
	    }
	});

	//FOR SEARCH FUNCTION
	$("#getNews").click(function(){
		$(".result").empty();
		$(".getall").empty();
		var	search = $("#search").val();
		console.log(search);

		$.ajax({
	        url: 'https://youtube.googleapis.com/youtube/v3/search?',
	        dataType: 'json',
	        type: 'GET',
	        data: {part: 'snippet', maxResults: 12, q: search, regionCode: 'PH', order: 'date', key: 'AIzaSyCZIJeJz9b1wrCHLKr_dOypiAGtzeAqi10'},
	        success: function(data){
	            console.log(data);
	            var p = $("<p>");
	            var i = 1;
	          	$.each(data.items, function(index, val){
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.id.videoId+"' target='_blank'><img src='"+val.snippet.thumbnails.high.url+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3>"+val.snippet.title+"</h3><h2><i>"+val.snippet.channelTitle+"</i></h2><p>"+val.snippet.publishedAt+"</p><form action='insert_ytapi.php' method='post'><input type='text' name='vidId' value='"+val.id.videoId+"' hidden><input type='text' name='title' value='"+val.snippet.title+"' hidden><input type='text' name='channel' value='"+val.snippet.channelTitle+"' hidden><input type='text' name='image' value='"+val.snippet.thumbnails.high.url+"' hidden><input type='text' name='date' value='"+val.snippet.publishedAt+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

					//putting input into the getall form
					$(".getall").append("<input type='text' name='vidId"+i+"' value='"+val.id.videoId+"' hidden><input type='text' name='title"+i+"' value='"+val.snippet.title+"' hidden><input type='text' name='channel"+i+"' value='"+val.snippet.channelTitle+"' hidden><input type='text' name='image"+i+"' value='"+val.snippet.thumbnails.high.url+"' hidden><input type='text' name='date"+i+"' value='"+val.snippet.publishedAt+"' hidden>");

						i +=1;
				});
				$(".result").append(p);
				// $(".getall").append("<input type='submit' value='GET ALL NEWS' name='all' style='position: fixed; top: 5px; left: 720px; z-index: 10;'>");
				$(".getall").append("<button type='submit' name='all' style='padding:0px; margin:0px; position: fixed; top: 5px; left:50%; transform: translate(-50%); z-index: 10; background-color:#333; height:100px; width:100px; border-radius: 50%; border: none;'><img title='Get All News' src='../image/getall_news.png' style='height:85%; width:85%; border-radius: 50%; background-color:grey; padding:0px; margin:0px;'></button>");
	        }
	    });

	});

});
