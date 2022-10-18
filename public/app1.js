$(document).ready(function () {
    $.ajax({
        url: "https://www.googleapis.com/youtube/v3/search?key=AIzaSyAeXJqhvfJgYblVwYhzjASS8cbyyD_yXhg&part=snippet&q=yoga&maxResults=100",
        type: 'GET',
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        success: function (result) {
            console.log(result);
            result.items.forEach((item) => {
                videoData = `                            
                              <div style="padding-bottom:15px;">
                            
                              <img width="200" height="200" src="${item.snippet.thumbnails.high.url}" style="display:inline;"/>
                          <h6 style="padding-top:10px;">   <a style="text-decoration:none;color:#620404;"  target="_blank" href="https://www.youtube.com/watch?v=${item.id.videoId}">
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
  });