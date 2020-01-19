  var link = getUrlParameter("offset");
  var userName = getUrlParameter("user");
  var thisUrl = window.location.pathname;
  var client = "client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb";
  var url = "https://tmi.twitch.tv/group/user/" + userName + "/chatters?";
  var trueUrl = url + client;
  

            
       // $.getJSON(trueUrl + "&offset=" + link + "&limit=10", function(result){
       //$.each(result.follows, function(i, field) {
         // });
       //  });
      
$.ajax({
  dataType: "jsonp",
  jsonp:"callback",
  url: url,
  success: function viewera(data){
 
    //seeing the result in the console
    console.log(data);
    //gets the viewers
      $.each(data.data.chatters.viewers, function(i, field) {
          var viewers = field;
          // Check if they are followers!
            $("#go").append("<a class='" + field + "'>" + field + ", </a>");
 

          
        var follow = "https://api.twitch.tv/kraken/users/" + field + "/follows/channels/" + userName + "?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb";
                 $.getJSON(follow, function(resulta){
                   //    $.each(resulta.channel.display_name, function(fofo) {
                   if(typeof field2 !== "undefined"){
                            $("#followers").append("<a id='fade' class='" + field + "' >" + field + ", </a>");
                 }
                 if(typeof field2 === "undefined")
                 {
                            $("#followers").append("<a id='fade' class='" + field + "' >" + field + ", </a>");
                 }
                            //$("#go").append("<p>" + field + " follows " + userName + "</p>");
$("a").mouseover(function() {
// find matching ids || text || classes .. e.t.c.
$("a."+$(this).attr("class")).css("color","#6441a5").css("font-weight","bold").css("cursor","pointer");
});
//$("a."+$(this).attr("class")).css("font-weight","bold");
//});
$("a").mouseleave(function() {
// find matching ids || text || classes .. e.t.c.
$("a."+$(this).attr("class")).css("color","#ffffff").css("font-weight","normal").css("cursor","pointer");
});      
               // });
                 });
          

          
          
          //
});
  }
});



           
