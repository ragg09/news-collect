$(document).ready(function(){
	//'https://listen-api.listennotes.com/api/v2/search?q=covid&sort_by_date=0&type=podcast&len_min=10&len_max=30&language=English&X-ListenAPI-Key=
	//X-ListenAPI-Key=

	$.ajax({
		//for search
		// url: 'https://listen-api.listennotes.com/api/v2/search?q=covid&sort_by_date=0&type=podcast&len_min=10&len_max=30&language=English',

		//best podcast
	    url: 'https://listen-api.listennotes.com/api/v2/best_podcasts?genre_id=99&page=2&region=PH&safe_mode=0',

	    //for genre show
	    // url: 'https://listen-api.listennotes.com/api/v2/genres?top_level_only=1',
	    headers: { 'X-ListenAPI-Key': '' },
	    dataType: 'json',
		type: 'GET',
	    success: function(data){
	        console.log(data);
	        var p = $("<p>");
	        var i = 1;
	        $.each(data.podcasts, function(index, val){
	        	var pubdate = val.latest_pub_date_ms;
	            	
				p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.listennotes_url+"' target='_blank'><img src='"+val.thumbnail+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.publisher+"</i></h2><p>"+latestPub(pubdate)+"</p><form action='insert_listenapi.php' method='post'><input type='text' name='url' value='"+val.listennotes_url+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='publisher' value='"+val.publisher+"' hidden><input type='text' name='image' value='"+val.thumbnail+"' hidden><input type='text' name='latest_pub_date_ms' value='"+latestPub(pubdate)+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

				//putting input into the getall form
				$(".getall").append("<input type='text' name='url"+i+"' value='"+val.listennotes_url+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='publisher"+i+"' value='"+val.publisher+"' hidden><input type='text' name='image"+i+"' value='"+val.thumbnail+"' hidden><input type='text' name='latest_pub_date_ms"+i+"' value='"+latestPub(pubdate)+"' hidden>");

				i +=1;

			});

			$(".result").append(p);
			$(".getall").append("<button type='submit' name='all' style='padding:0px; margin:0px; position: fixed; top: 5px; left:50%; transform: translate(-50%); z-index: 10; background-color:#333; height:100px; width:100px; border-radius: 50%; border: none;'><img title='Get All News' src='../image/getall_news.png' style='height:85%; width:85%; border-radius: 50%; background-color:grey; padding:0px; margin:0px;'></button>");
	    }


	});


	$("#getNews").click(function(){
		$(".result").empty();
		$(".getall").empty();
		var	search = $("#search").val();
		console.log(search);

		$.ajax({
	        url: 'https://listen-api.listennotes.com/api/v2/search?q='+search+'&sort_by_date=0&genre_id=99&offset=0&type=podcast&language=English',
	        headers: { 'X-ListenAPI-Key': '' },
	        dataType: 'json',
	        type: 'GET',
	        success: function(data){
	            console.log(data);
	            var p = $("<p>");
	            var i = 1;
	        $.each(data.results, function(index, val){
	        	var pubdate = val.latest_pub_date_ms;
	            	
				p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.listennotes_url+"' target='_blank'><img src='"+val.thumbnail+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title_original+"</strong></h3><h2><i>"+val.publisher_original+"</i></h2><p>"+latestPub(pubdate)+"</p><form action='insert_listenapi.php' method='post'><input type='text' name='url' value='"+val.listennotes_url+"' hidden><input type='text' name='title' value='"+val.title_original+"' hidden><input type='text' name='publisher' value='"+val.publisher_original+"' hidden><input type='text' name='image' value='"+val.thumbnail+"' hidden><input type='text' name='latest_pub_date_ms' value='"+latestPub(pubdate)+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

				//putting input into the getall form
				$(".getall").append("<input type='text' name='url"+i+"' value='"+val.listennotes_url+"' hidden><input type='text' name='title"+i+"' value='"+val.title_original+"' hidden><input type='text' name='publisher"+i+"' value='"+val.publisher_original+"' hidden><input type='text' name='image"+i+"' value='"+val.thumbnail+"' hidden><input type='text' name='latest_pub_date_ms"+i+"' value='"+latestPub(pubdate)+"' hidden>");

				i +=1;

			});

				$(".result").append(p);
				$(".getall").append("<button type='submit' name='all' style='padding:0px; margin:0px; position: fixed; top: 5px; left:50%; transform: translate(-50%); z-index: 10; background-color:#333; height:100px; width:100px; border-radius: 50%; border: none;'><img title='Get All News' src='../image/getall_news.png' style='height:85%; width:85%; border-radius: 50%; background-color:grey; padding:0px; margin:0px;'></button>");
	        }
	    });

	});

	function latestPub(pubdate){
		var time = pubdate; 
		var date = new Date(time); 
		var options = {
			year : 'numeric', month: 'numeric', day: 'numeric',
		};

		var month = date.getUTCMonth() + 1;
		var day = date.getUTCDate();
		var year = date.getUTCFullYear();

		// newpubdate = date.toString();
		// newpubdate = date.toLocaleDateString('en', options);
		newdate = year + "/" + month + "/" + day;
		return newdate;
	}

});
