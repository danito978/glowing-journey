/*
$(document).ready(function() {
  var url = "https://api.twitch.tv/kraken/channels/sodapoppin/follows?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb&limit=100";
  $("#followers").click(function() {
    $.getJSON(url, function(result) {
      $.each(result.follows, function(i, field) {
        $("#fccStatus").append('<p>' + field.user.display_name + '</p>');
      });
    });
  });
});

// cursor - edin vid pagination v json fila
$(document).ready(function()
{
    var url = "https://api.twitch.tv/kraken/channels/springtraptkn/follows?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb&limit=100";

    $("#cursa").click(function()
    {
        $.getJSON(url, function(result)
        {
            $("#links").append("<p> SELF: " + result._links.self + "</p>");
            $("#links").append("<p> NEXT: " + result._links.next + "</p>");
            var nextlink = result._links.next;
            
        });
    });
    });
    
    */
   
   /*
  // VSICHKI VAR ZA URL 
  var client = "client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb";
  var url = "https://api.twitch.tv/kraken/channels/springtraptkn/follows?";
  var trueUrl = url + client;
//vzemame json datata
$(document).ready(function() {

  var thisUrl = window.location.pathname;
$.getJSON(trueUrl + "&limit=1", function(resulta){
     $.each(resulta.follows, function(i, field) {
        
             $("#fccStatus").append('<p>' + field.user.display_name + '</p>');
                
    // nextlink e cursora za "pagination"
    var nextlink = resulta._cursor;
        //ako kursora sashtestvuva, izkarai imenata

});
});
});
*/

// GET URL PAR IS A VAR TO CHECK THE URL LIKE: GET IN PHP !!!!





/*   
    if(window.location.href.indexOf("?cursor=") > 1){
$.getJSON(trueUrl + "&cursor=" + link + "&limit=25", function(result){
     $.each(result.follows, function(i, field) {
             $("#fccStatus").append('<p>' + field.user.display_name + '</p>');
});
});
    }
    else{

        $(document).ready(function() {
  var trueUrl = url + client  + "&limit=25";
  var thisUrl = window.location.pathname;

$.getJSON(trueUrl, function(resulta){
     $.each(resulta.follows, function(i, field) {
        //  var fBack = "https://api.twitch.tv/kraken/users/" + userName  + "/follows/channels/" + field.user.display_name + "?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb";
             $("#fccStatus").append('<p>' + field.user.display_name + '</p>');
});
});
});
    }
    
    */
       // PAGINATION BELOW
    
    
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
  var link = getUrlParameter("cursor");
  var userName = getUrlParameter("user");
  var thisUrl = window.location.pathname;
  var client = "client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb";
  var url = "https://api.twitch.tv/kraken/channels/" + userName + "/follows?";
  var trueUrl = url + client;
  

    
 


    
    
    // AKO IMAME KURSOR = DA VZEME NOVIQ LINK S KURSORA 
     if(window.location.href.indexOf("?cursor=") > 1){
             function nextPage(){
        $.getJSON(trueUrl + "&cursor=" + link, function(result)
        {
        var nextlink = result._cursor;
        window.location= thisUrl + "?cursor=" + nextlink + "&user=" + userName;
        });
    }
     }
else{
    function nextPage(){
        $.getJSON(trueUrl , function(result)
        {
        var nextlink = result._cursor;
        window.location= thisUrl + "?cursor=" + nextlink + "&user=" + userName;
        });
    }
    }
    
    
    
    if(window.location.href.indexOf("cursor=") > 1){
$.getJSON(trueUrl + "&cursor=" + link + "&limit=25", function(result){
     $.each(result.follows, function(i, field) {
             var fBack = "https://api.twitch.tv/kraken/users/" + userName + "/follows/channels/" + field.user.display_name + "?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb" + "&cursor=" + link + "&limit=25";
             $("#fccStatus").append('<p  style="color:white;">' + field.user.display_name + '</p>');
             $.getJSON(fBack, function(resulta2){
             $.each(resulta2._links, function(i2, field2) {
                 $("#links").append("<p style='color:white;'>" + field2 + "</p>");
             
             });
             });
});
});
    }
    else{

        $(document).ready(function() {
$.getJSON(trueUrl, function(resulta){
     $.each(resulta.follows, function(i, field) {
          var fBack = "https://api.twitch.tv/kraken/users/" + userName + "/follows/channels/" + field.user.display_name + "?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb" + "&limit=25";
             $("#fccStatus").append('<p style="color:white;">' + field.user.display_name + '</p>');
             $.getJSON(fBack, function(resulta2){
             $.each(resulta2._links, function(i2, field2) {
                 if(typeof field2 !== "undefined"){
                     $("#links").append("<p style='color:white;'>" + field2 + "</p>");
                 }
                 else
                 {
                     $("#links").html("<p style='color:white;'> Not following </p>");
                 }
             });
             });
});
});
});
    }