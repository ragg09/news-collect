$(document).ready(function(){
	$.ajax({
		url:"../html/user_favpub.php",
        method:'GET',
        dataType:'json',
        success:function(data){
        	console.log(data);
        	//looping trough yt data
               $.each(data.fav_yt, function(index, val){
                    $(".result").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button_favyt' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough news org data
               $.each(data.fav_newsorg, function(index, val){
                    $(".result").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='newsorgid' value='"+val.id+"' hidden><button type='submit' name='button_favnewsorg' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough listen note data
               $.each(data.fav_listen, function(index, val){
                    $(".result").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button_favlisten' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough article data
               $.each(data.fav_article, function(index, val){
                    $(".result").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_article' style='background-color: transparent; border: none; margin: 0;width:100%; height: 200px; border-radius:10px;'><img src='../image/article/"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='articleid' value='"+val.id+"' hidden><button type='submit' name='button_favarticle' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough audio data
               $.each(data.fav_audio, function(index, val){
                    $(".result").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_audio' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/audio/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='audioid' value='"+val.id+"' hidden><button type='submit' name='button_favaudio' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough video data
               $.each(data.fav_video, function(index, val){
                    $(".result").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_video' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/video/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='videoid' value='"+val.id+"' hidden><button type='submit' name='button_favvideo' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough publis_article data
               $.each(data.user_article, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_article' style='background-color: transparent; border: none; margin: 0;width:100%; height: 200px; border-radius:10px;'><img src='../image/article/"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='articleid' value='"+val.id+"' hidden><button type='submit' name='button_article' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div></center>");
               });

               //looping trough publish_article data
               $.each(data.user_audio, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_audio' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/audio/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='audioid' value='"+val.id+"' hidden><button type='submit' name='button_audio' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div></center>");
               });

               //looping trough publish_video data
               $.each(data.user_video, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_video' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/video/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='videoid' value='"+val.id+"' hidden><button type='submit' name='button_video' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div></center>");
               });

        }
	});

});