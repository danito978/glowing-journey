    var parts = location.href.split('#');
if(parts.length > 1)
{
    var params = parts[0].split('?');
    var mark = '?';
    if(params.length > 1)
    {
        mark = '&';
    }
    location.href = parts[0] + mark + 'fragment' + parts[1];
}
    
    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
if (typeof getUrlParameter("fragmentacess_token") !== 'null'){
    sessionStorage.setItem("token",getUrlParameter('fragmentaccess_token'));
} 

var tkn = getUrlParameter("fragmentaccess_token");
if (tkn !== "undefined"){
    $.ajax({
        url: 'https://api.twitch.tv/helix/users',
        beforeSend: function(xhr) {
             xhr.setRequestHeader("Authorization", "Bearer "+ getUrlParameter('fragmentaccess_token'))
        }, success: function(json){
            //process the JSON data etc
            $.each(json.data, function(i, field) {
            
            $('#myTopnav').append('<a style="float:right;padding:0px;"><img  height="50" src="'+ field.profile_image_url +'" /></a><a style="float:right;color:white"> ' + field.display_name + ' </a> ');
            
            });
        }
})
}
if (tkn === ""){
    //$('#log').append('<a href=""><img src="img/login.png"></a>');
    $('#log').append("<a style=\"display:block;margin:auto;text-align:center;\" href=\"https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=v8jjvzxpx7byti5lykiyy5001gueh4&redirect_uri=http://unfollowers.tv/unfollow.php&scope=analytics:read:extensions\"><img height=\"35\" src=\"img/login.png\"></a>")
}








/*FOR NAVIGATION - TAKE LOCATION OF HREF + ACCESS TOKEN*/
if(typeof getUrlParameter("fragmentaccess_token") !== "undefined"){
    function page(elem) {
         event.preventDefault();
      location.href = elem.href + "?fragmentaccess_token=" + sessionStorage.getItem("token") + "&scope=analytics%3Aread%3Aextensions&token_type=bearer";
    }
    }
    else{
         function page(elem) {
         event.preventDefault();
        location.href = elem.href;
         }
    }
     if(typeof tkn === "string"){
             var hide = document.getElementById("hidden");
      hide.style.display = "none";
         }