$(document).ready(function(){
	// julz key = 609570e0bf894a2d9d8aa918b9e03d38
	// rene key = AIzaSyBcIP9j9aRBSHgJ0rySd9aGb4QwzYTXkj8

	//FOR DEFAULT RETURN FUNCTION
	
	$.ajax({
	    //url: 'https://newsapi.org/v2/everything?q=pnp&sortBy=publishedAt&pageSize=12&language=en&apiKey=609570e0bf894a2d9d8aa918b9e03d38',
	    url: 'https://newsapi.org/v2/top-headlines?country=ph&pageSize=20&apiKey=609570e0bf894a2d9d8aa918b9e03d38',
	    dataType: 'json',
		type: 'GET',
		// data: {maxResults: 12, q: search, country: 'ph', from: 'publishedAt', apiKey: '609570e0bf894a2d9d8aa918b9e03d38'},
	    success: function(data){
	        console.log(data);
	        var p = $("<p>");
	        // var g = $();
	        var i = 1;
	        $.each(data.articles, function(index, val){
	        	if(!val.urlToImage && !val.author){
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.source.name+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.source.name+"' hidden><input type='text' name='urlimage' value='"+val.urlToImage+"' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.source.name+"' hidden><input type='text' name='urlimage"+i+"' value='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden></form></div>");
				}
	        	else if(!val.author){
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlToImage+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.source.name+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.source.name+"' hidden><input type='text' name='urlimage' value='"+val.urlToImage+"' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.source.name+"' hidden><input type='text' name='urlimage"+i+"' value='"+val.urlToImage+"' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden></form></div>");
				}

				else if(!val.urlToImage){
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.author+"' hidden><input type='text' name='urlimage' value='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.author+"' hidden><input type='text' name='urlimage"+i+"' value='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden></form></div>");
				}
				else{
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlToImage+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.author+"' hidden><input type='text' name='urlimage' value='"+val.urlToImage+"' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>"); 

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.author+"' hidden><input type='text' name='urlimage"+i+"' value='"+val.urlToImage+"' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden>");
				}
				
				i +=1;



			});

			$(".result").append(p);
			//$(".getall").append("<input type='submit' value='GET ALL NEWS' name='all' style='position: fixed; top: 5px; left: 720px; z-index: 10;'>");
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
	        url: 'https://newsapi.org/v2/everything?q='+search+'&pageSize=12&sortBy=publishedAt&language=en&apiKey=609570e0bf894a2d9d8aa918b9e03d38',
	        dataType: 'json',
	        type: 'GET',
	        // data: {q: search, pageSize: 12, sortBy: 'publishedAt', language: 'en', apiKey: '609570e0bf894a2d9d8aa918b9e03d38'},
	        success: function(data){
	            console.log(data);
	            var p = $("<p>");
	            var g = $("<input type='submit' value='GET ALL NEWS' name='all' style='position: absolute; top: 5px; left: 620px'>");
	            var i = 1;
	          	$.each(data.articles, function(index, val){
	        	if(!val.urlToImage && !val.author){
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.source.name+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.source.name+"' hidden><input type='text' name='urlimage' value='"+val.urlToImage+"' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.source.name+"' hidden><input type='text' name='urlimage"+i+"' value='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden></form></div>");
				}
	        	else if(!val.author){
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlToImage+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.source.name+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.source.name+"' hidden><input type='text' name='urlimage' value='"+val.urlToImage+"' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.source.name+"' hidden><input type='text' name='urlimage"+i+"' value='"+val.urlToImage+"' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden></form></div>");
				}

				else if(!val.urlToImage){
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.author+"' hidden><input type='text' name='urlimage' value='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.author+"' hidden><input type='text' name='urlimage"+i+"' value='https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden></form></div>");
				}
				else{
					p.append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlToImage+"' style='width:100%; height: 200px; border-radius: 10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishedAt+"</p><form action='insert_newsapi.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><input type='text' name='title' value='"+val.title+"' hidden><input type='text' name='author' value='"+val.author+"' hidden><input type='text' name='urlimage' value='"+val.urlToImage+"' hidden><input type='text' name='publishat' value='"+val.publishedAt+"' hidden><input type='text' name='url' value='"+val.url+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/get_news.png' style='background-color:black; height:25px; width 25px;'></button></form></div>"); 

					$(".getall").append("<input type='text' name='id"+i+"' value='"+val.id+"' hidden><input type='text' name='title"+i+"' value='"+val.title+"' hidden><input type='text' name='author"+i+"' value='"+val.author+"' hidden><input type='text' name='urlimage"+i+"' value='"+val.urlToImage+"' hidden><input type='text' name='publishat"+i+"' value='"+val.publishedAt+"' hidden><input type='text' name='url"+i+"' value='"+val.url+"' hidden>");
				}

						i +=1;
				});
				$(".result").append(p);
				// $(".getall").append("<input type='submit' value='GET ALL NEWS' name='all' style='position: fixed; top: 5px; left: 720px; z-index: 10;'>");
				$(".getall").append("<button type='submit' name='all' style='padding:0px; margin:0px; position: fixed; top: 5px; left:50%; transform: translate(-50%); z-index: 10; background-color:#333; height:100px; width:100px; border-radius: 50%; border: none;'><img title='Get All News' src='../image/getall_news.png' style='height:85%; width:85%; border-radius: 50%; background-color:grey; padding:0px; margin:0px;'></button>");
	        }
	    });

	});

});




