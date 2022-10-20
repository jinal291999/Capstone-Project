$(document).ready(function () {
    SearchYouTube('yoga');
    $( "#searchButton" ).click(function() {
        var querystring = $('#searchtext').find(":selected").val();
        // var querystring = $("#searchtext").val();
        SearchYouTube(querystring);
      });

   function SearchYouTube(query) {
    console.log("query",query);
    $("#videoList").empty();
        $.ajax({
            url: `https://www.googleapis.com/youtube/v3/search?key=AIzaSyCo5rSDrHLXecN5ysAQQi5N8lXj7RVkwUo&part=snippet&q=${query}&maxResults=100`,
            type: 'GET',
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            success: function (result) {
                console.log("res",result);
                result.items.forEach((item) => {
                    videoData = `                            
                                  <div style="padding-bottom:15px;">                                
                                  <img width="300" height="400"  src="${item.snippet.thumbnails.high.url}" style="display:inline;"/>
                              <h6 style="padding-top:10px;"><a style="text-decoration:none;color:#620404;"  target="_blank" href="https://www.youtube.com/watch?v=${item.id.videoId}">
                                  ${item.snippet.title}
    
                                </a></h6>
                                  </div>
                                
                                  `;
                                  
                    $("#videoList").append(videoData);
                  });
            },
            error: function (error) {
                
            }
        });
    }

  });