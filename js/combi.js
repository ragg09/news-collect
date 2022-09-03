  $(document).ready(function(){

    // julz key = AIzaSyCZIJeJz9b1wrCHLKr_dOypiAGtzeAqi10
    // rene key = AIzaSyBcIP9j9aRBSHgJ0rySd9aGb4QwzYTXkj8

fetch_customer_data();
function fetch_customer_data(query = ''){
    $.ajax({
        url:"../html/getData.php",
        method:'GET',
        data:{query:query},
        dataType:'json',
        success:function(data){
            if(!data.email){ //for guest or viewers
                
               console.log("nice!");
               console.log(data);

                //looping trough yt data
               $.each(data.yt_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p></div>");
               });

               //looping trough news org data
               $.each(data.newsorg_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p></div>");
               });

               //looping trough listen note data
               $.each(data.listen_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p></div>");
               });

               //looping trough publis_article data
               $.each(data.publish_article, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_article' style='background-color: transparent; border: none; margin: 0;width:100%; height: 200px; border-radius:10px;'><img src='../image/article/"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p></div></center>");
               });

               //looping trough publish_article data
               $.each(data.publish_audio, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_audio' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/audio/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p></div></center>");
               });

               //looping trough publish_video data
               $.each(data.publish_video, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_video' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/video/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p></div></center>");
               });
               
              //SELECT DESIRED NEWS FORMAT
               $("#Myselect").change(function(){
                    var myvalue = $(this).val();
                    console.log("You have selected : "+myvalue);

                    if(myvalue === "Video First"){
                         $(".result").empty();
                         //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p></div>");
                       });

                       //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p></div>");
                         });

                         //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p></div>");
                         });
                    }

                    if(myvalue === "Article First"){
                         $(".result").empty();
                       //looping trough news org data
                       $.each(data.newsorg_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p></div>");
                       });

                        //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p></div>");
                       });

                       //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p></div>");
                         });
                    }

                    if(myvalue === "Audio First"){
                         $(".result").empty();

                         //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p></div>");
                         });

                         //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p></div>");
                       });

                       //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p></div>");
                         });
                    }


                    if(myvalue === "Video Only"){
                         $(".result").empty();
                        //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p></div>");
                       });
                    }

                     if(myvalue === "Article Only"){
                         $(".result").empty();
                          //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p></div>");
                         });
                    }

                    if(myvalue === "Audio Only"){
                         $(".result").empty();
                          //looping trough listen note data
                           $.each(data.listen_data, function(index, val){
                                $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p></div>");
                           });
                    }

                    if(myvalue === "User Publish"){
                        $(".result").empty();

                    }

                });
            }else if(data.email == "news.collect2021@gmail.com"){ //for admin 
                console.log("nice!");
                console.log(data);

                //looping trough yt data
               $.each(data.yt_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button_yt' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
               });

               //looping trough news org data
               $.each(data.newsorg_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button_newsorg' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
               });

               //looping trough listen note data
               $.each(data.listen_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button_listen' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div>");
               });

               //looping trough publis_article data
               $.each(data.publish_article, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_article' style='background-color: transparent; border: none; margin: 0;width:100%; height: 200px; border-radius:10px;'><img src='../image/article/"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='articleid' value='"+val.id+"' hidden><button type='submit' name='button_article' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div></center>");
               });

               //looping trough publish_article data
               $.each(data.publish_audio, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_audio' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/audio/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='audioid' value='"+val.id+"' hidden><button type='submit' name='button_audio' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div></center>");
               });

               //looping trough publish_video data
               $.each(data.publish_video, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_video' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/video/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='videoid' value='"+val.id+"' hidden><button type='submit' name='button_video' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div></center>");
               });
               
              //SELECT DESIRED NEWS FORMAT
               $("#Myselect").change(function(){
                    var myvalue = $(this).val();
                    console.log("You have selected : "+myvalue);

                    if(myvalue === "Video First"){
                         $(".result").empty();
                         //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button_yt' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                       //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button_newsorg' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });

                         //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button_listen' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div>");
                         });
                    }

                    if(myvalue === "Article First"){
                         $(".result").empty();
                       //looping trough news org data
                       $.each(data.newsorg_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button_newsorg' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                        //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button_yt' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                       //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button_listen' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div>");
                         });
                    }

                    if(myvalue === "Audio First"){
                         $(".result").empty();
                         //looping trough yt data

                       //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button_listen' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div>");
                         });
                           
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button_yt' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                       //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button_newsorg' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });

                    }

                    if(myvalue === "Video Only"){
                         $(".result").empty();
                        //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button_yt' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });
                    }

                     if(myvalue === "Article Only"){
                         $(".result").empty();
                          //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button_newsorg' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });
                    }

                    if(myvalue === "Audio Only"){
                         $(".result").empty();
                          //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='delete_newscollect.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button_listen' style='background-color: transparent;'><img src='../image/delete.png' style='background-color:black; height:25px; width: 25px;'></button></form></div>");
                         });
                    }

                    if(myvalue === "User Publish"){
                        $(".result").empty();

                    }

                    

                });
            }else{ //for registered user
                console.log("nice!");
                console.log(data);

                //looping trough yt data
               $.each(data.yt_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='insert_ytapi_fav.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
               });

               //looping trough news org data
               $.each(data.newsorg_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='insert_newsapi_fav.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
               });

               //looping trough listen note data
               $.each(data.listen_data, function(index, val){
                    $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='insert_listenapi_fav.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
               });

               //looping trough publis_article data
               $.each(data.publish_article, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_article' style='background-color: transparent; border: none; margin: 0;width:100%; height: 200px; border-radius:10px;'><img src='../image/article/"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='insert_publish_fav.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><button type='submit' name='button_article' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough publish_article data
               $.each(data.publish_audio, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_audio' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/audio/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='insert_publish_fav.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><button type='submit' name='button_audio' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });

               //looping trough publish_video data
               $.each(data.publish_video, function(index, val){
                    $(".result-publish").append("<center><div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><form action='publish_view.php' method='post'><input type='text' value='"+val.id+"' name='id' hidden><input type='text' value='"+val.user_id+"' name='user_id' hidden><button type='submit' name='btn_video' style='background-color: transparent; border: none; margin:0px padding:0px;;width:100%; height: 200px; border-radius:10px;'><img src='../image/video/"+val.image+"' style='width:100%; height: 100%; border-radius:10px; margin:0px;'/></button></form><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publishAt+"</p><form action='insert_publish_fav.php' method='post'><input type='text' name='id' value='"+val.id+"' hidden><button type='submit' name='button_video' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div></center>");
               });
               
              //SELECT DESIRED NEWS FORMAT
               $("#Myselect").change(function(){
                    var myvalue = $(this).val();
                    console.log("You have selected : "+myvalue);

                    if(myvalue === "Video First"){
                         $(".result").empty();
                         //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='insert_ytapi_fav.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                       //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='insert_newsapi_fav.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });

                         //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='insert_listenapi_fav.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });


                    }

                    if(myvalue === "Article First"){
                         $(".result").empty();
                       //looping trough news org data
                       $.each(data.newsorg_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='insert_newsapi_fav.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                        //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='insert_ytapi_fav.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                       //looping trough listen note data
                       $.each(data.listen_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='insert_listenapi_fav.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });
                    }

                    if(myvalue === "Audio First"){
                         $(".result").empty();

                        //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='insert_listenapi_fav.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });
                         
                         //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='insert_ytapi_fav.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });

                       //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='insert_newsapi_fav.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });

                    }

                    if(myvalue === "Video Only"){
                         $(".result").empty();
                        //looping trough yt data
                       $.each(data.yt_data, function(index, val){
                            $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='https://www.youtube.com/watch?v="+val.vid_id+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h2><i>"+val.channel+"</i></h2><p>"+val.publishAt+"</p><form action='insert_ytapi_fav.php' method='post'><input type='text' name='ytid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                       });
                    }

                     if(myvalue === "Article Only"){
                         $(".result").empty();
                          //looping trough news org data
                         $.each(data.newsorg_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.urlimage+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.author+"</i></h4><p>"+val.publishat+"</p><form action='insert_newsapi_fav.php' method='post'><input type='text' name='newsid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         });
                    }

                    if(myvalue === "Audio Only"){
                        $(".result").empty();
                        //looping trough listen note data
                         $.each(data.listen_data, function(index, val){
                              $(".result").append("<div style='margin: 0.5%; height: 450px; width: 24%; float: left; padding: 1px; background-color: #454748; color: #ebebeb;   border-radius: 10px;'><a href='"+val.url+"' target='_blank'><img src='"+val.image+"' style='width:100%; height: 200px; border-radius:10px;'/></a><h3><strong>"+val.title+"</strong></h3><h4><i>"+val.publisher+"</i></h4><p>"+val.publish_date+"</p><form action='insert_listenapi_fav.php' method='post'><input type='text' name='listenid' value='"+val.id+"' hidden><button type='submit' name='button' style='background-color: transparent;'><img src='../image/favorite.png' style='background-color:black; height:25px; width 25px;'></button></form></div>");
                         }); 
                         
                    }

                    if(myvalue === "User Publish"){
                        $(".result").empty();

                    }

                });
            }

        }
    });

}

//FOR ALL IN ONE LIVE SEARCH FUNCTION
$(document).on('keyup', '#search', function(){
    var query = $(this).val();
    fetch_customer_data(query);
    // $("#right").empty();
    // $("#left").empty();
    $(".result").empty();
});

    //this function is from news org top headlines
    $.ajax({
        url: 'https://newsapi.org/v2/top-headlines?country=ph&apiKey=28dd0a5e68dc444992b9d334dda7238b',
        dataType: 'json',
        type: 'GET',
        success: function(data){
            console.log(data);
            $.each(data.articles, function(index, val){    
                $("#headline").append("<a href='"+val.url+"' style ='color: steelblue; text-decoration: none; text-shadow: 1px 1px black;' target='_blank'>~"+val.title+"~&nbsp;</a>");
            });

        }
    });


   



    //GETTING ID ADDRESS USING IPGEOLCATION API
  $.ajax({
    url: 'https://api.ipgeolocation.io/ipgeo?apiKey=b8668c328d524ce5a5809f1a5a0e4d4f',
    dataType: 'json',
    type: 'GET',
    success: function(data){
      //console.log(data)
        console.log("ipgeolocation | ip add: "+data.ip);

        //USING IP2LOCATION API FOR ACCURATE GEOLOCATION
        //key=QSKCEPEZYZ  official free key, gamit muna tayo ng demo key para d maubos 5000 lang lahat ng limit nito
        //backup key=4OWC6LVVKX
        //key=demo      20 request a day lang,    
        $.ajax({
        url: 'https://api.ip2location.com/v2/?ip='+data.ip+'&key=4OWC6LVVKX&package=WS24&format=json',
        //url: 'https://api.ip2location.com/v2/?ip='+data.ip+'&key=demo&package=WS24&format=json',
        dataType: 'json',
        type: 'GET',
        success: function(datum){
          //console.log(datum)
            console.log("ip2location | accurate city: " +datum.city_name);

            //itong ajax call na to double purpose,
          //kasi nag tatawag na ng data sa DB
          //nag tatawag pa ng data sa API
          $.ajax({
            url:"../html/weatherinsert.php",
                method:'GET',
                data: {city: datum.city_name},
                dataType:'json',
                success:function(data){
                    console.log("Ito na ung mga data na gagmaitin sa lahat ng viewing galing na to sa db");
                    console.log(data)
                //looping user city info || para sa city ng current user
                        $.each(data.user_city_info, function(index, val){
                          $(".livenews_weather").append("<a href='../html/weatherapi.php' style='position: relative; left: 83%; color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; font-size: 20px;'>See more</a><center><img src='http://openweathermap.org/img/w/"+val.image+".png' style='width: 200px; height: 200px; margin-top: -100px; padding: 0px; margin-bottom: 10px;'/></center><div style=' width:80%; height:70%; margin-top: -105px; margin-left: 50px; border-radius: 10px;'>"
                            + "<center><h3>"+val.description.toUpperCase()+"</h3>"
                            + "<h1>Temp: "+val.temp+"&deg;C</h1>"
                            + "<h4>City of "+val.name+"</h4>"
                            + "</center></div><hr style='width: 70%;'>");
                        });
                       
            }
          });
           

        }
      });
       
    }
  });


 //this function is for summary of covid cases in PH by DOH
    $.ajax({
        url: 'https://covid19-api-philippines.herokuapp.com/api/summary',
        dataType: 'json',
        type: 'GET',
        success: function(data){
            console.log("DOH");
            console.log(data);
            var tr = $("<tr>");
            var tr2 = $("<tr>");

            tr.append($("<td>").html("<center><h4>Total: "+data.data.total+"</h4></center>"), $("<td>").html("<center><h4>Active: "+data.data.active_cases+"</h4></center>"));
            tr2.append($("<td>").html("<center><h4>Death: "+data.data.deaths+"</h4></center>"), $("<td>").html("<center><h4>Recovered: "+data.data.recoveries+"</h4></center>"));
            $("#fetch_data").append(tr);
            $("#fetch_data").append(tr2);
        }

    });


    //this function is from youtube api live news
    $.ajax({
        url: 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=UCE2606prvXQc_noEqKxVJXA&eventType=live&maxResults=1&order=date&q=covid&regionCode=ph&type=video&key=AIzaSyCZIJeJz9b1wrCHLKr_dOypiAGtzeAqi10',
        dataType: 'json',
        type: 'GET',
        success: function(data){
            console.log(data);
            // $(".livenews").append(data.items[0].id.videoId);
            if (data.length > 0 ){
                $(".livenews").append("<iframe width='560' height='315' src='https://www.youtube.com/embed/"+data.items[0].id.videoId+"?autoplay=1' frameborder='0' allow='accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>");
            }
            else{
                console.log("no live news available");
                $(".livenews").append("<iframe width='560' height='315' src='https://www.youtube.com/embed/i-anJpLrpHc?autoplay=0' frameborder='0' allow='accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>");
            }
            

        }
    });

    $("#livebutton").click(function(){
        $(".livenews").toggle();
    }); 



});
