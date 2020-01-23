//SETTING A FUNCTION WHICH TAKES THE PARAMETERS FROM THE URI
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
// GLOBAL VARIABLE 
var cursor = getUrlParameter("cursor");
var userName = getUrlParameter("user");
var token = getUrlParameter("fragmentaccess_token")
var thisUrl = window.location.pathname;
var client = "client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb";
var url = "https://api.twitch.tv/helix/users/" + userName + "/follows/channels?";
var trueUrl = url + client;
// VZEMI USER ID-TO
let urlUserName = "https://api.twitch.tv/helix/users";


//form action

if (cursor === undefined) {
    // GETTING THE USER ID FROM FRAGMENT ACCESS TOKEN OR BEARER TOKEN
    $.ajax({
        url: urlUserName,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
        }, success: function (data) {

            //console.log(data);
            $.each(data, function (a, b) {
                $.each(b, function (b1, b2) {
                    console.log(b2.id); // <--- This is users ID
                    var urlUserFollows = "https://api.twitch.tv/helix/users/follows?from_id=" + b2.id;
                    var urlFollowingUser = "https://api.twitch.tv/helix/users/follows?to_id=" + b2.id;




                    // GETTING USERS FOLLOWED CHANNELS
                    $.ajax({
                        url: urlUserFollows,
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
                        }, success: function (data) {
                            //console.log(data);
                            $.each(data, function (c, d) {
                                //MAKE PAGINATION POSSIBLE
                                console.log(d.cursor); // FOR NEXT PAGE
                                document.getElementById("next").addEventListener("click", nextPage, false);
                                function nextPage() {

                                    window.location = thisUrl + '?fragmentaccess_token=' + token + '&scope=analytics%3Aread%3Aextensions&token_type=bearer' + '&cursor=' + d.cursor;
                                }
                                $.each(d, function (c1, d1) {                                    
                                    $('#fccStatus').append('<p>' + '<span class="' + d1.to_name + '">' + d1.to_name + '</span>' + '</p>'); // APPENDS USERS WHO USER FOLLOWED
                                    
                                    // THIS RIGHT HERE IS TO CHECK IF THE GUY THE USER FOLLOWS, FOLLOWS HIM BACK
                                    $.ajax({
                                        url: 'https://api.twitch.tv/helix/users/follows?from_id=' + d1.to_id + '&to_id=' + b2.id,
                                        beforeSend: function (xhr) {
                                            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
                                        }, success: function (data) {
                                            
                                            console.log(data)
                                            if(data.total === 0){
                                               $('#links').append('<p>' + '<span class="' + d1.to_name + '">' + d1.to_name + '</span>' + ' doesn\'t follow you!</p>');
                                            }
                                            else{
                                                $('#links').append('<p>' + '<span class="' + d1.to_name + '">' + d1.to_name + '</span>' + ' follows you!</p>');
                                            }
                                            
                                        }
                                    });
                                    // TO HERE ^
                                    
                                });
                            });
                        }
                    });
                    /*
                    // GETTING FOLLOWERS OF USER
                    $.ajax({
                        url: urlFollowingUser,
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
                        }, success: function (data) {
                            //console.log(data);
                            $.each(data, function (c, d) {
                                console.log(d);
                                $.each(d, function (c1, d1) {
                                    $('#links').append('<p>' + d1.from_name + '</p>'); // APPENDS USERS WHO USER FOLLOWED
                                });
                            });
                        }
                    });
                    */
                });
            });
        }
    });
    
    
    
} else {
    // GETTING THE USER ID FROM FRAGMENT ACCESS TOKEN OR BEARER TOKEN
    $.ajax({
        url: urlUserName,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
        }, success: function (data) {

            //console.log(data);
            $.each(data, function (a, b) {
                $.each(b, function (b1, b2) {
                    console.log(b2.id); // <--- This is users ID
                    var urlUserFollowsNext = "https://api.twitch.tv/helix/users/follows?from_id=" + b2.id + '&after=' + cursor;
                    var urlFollowingUserNext = "https://api.twitch.tv/helix/users/follows?to_id=" + b2.id + '&after=' + cursor;
                    // GETTING USERS FOLLOWED CHANNELS
                    $.ajax({
                        url: urlUserFollowsNext,
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
                        }, success: function (data) {
                            //console.log(data);
                            $.each(data, function (c, d) {
                                console.log(d);
                                //MAKE PAGINATION POSSIBLE
                                console.log(d.cursor); // FOR NEXT PAGE
                                document.getElementById("next").addEventListener("click", nextPage, false);
                                function nextPage() {

                                    window.location = thisUrl + '?fragmentaccess_token=' + token + '&scope=analytics%3Aread%3Aextensions&token_type=bearer' + '&cursor=' + d.cursor;
                                }
                                $.each(d, function (c1, d1) {
                                    $('#fccStatus').append('<p>' + '<span class="' + d1.to_name + '">' + d1.to_name + '</span>' + '</p>'); // APPENDS USERS WHO USER FOLLOWED
                                    
                                    
                                    // THIS RIGHT HERE IS TO CHECK IF THE GUY THE USER FOLLOWS, FOLLOWS HIM BACK
                                    $.ajax({
                                        url: 'https://api.twitch.tv/helix/users/follows?from_id=' + d1.to_id + '&to_id=' + b2.id,
                                        beforeSend: function (xhr) {
                                            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
                                        }, success: function (data) {
                                            if(data.total === 0){
                                               $('#links').append('<p>' + '<span class="' + d1.to_name + '">' + d1.to_name + '</span>' +  ' doesn\'t follow you!</p>');
                                            }
                                            else{
                                                $('#links').append('<p>' + '<span class="' + d1.to_name + '">' + d1.to_name + '</span>' + ' follows you!</p>');
                                            }
                                            
                                        }
                                    });
                                    // TO HERE ^

                                    
                                    
                                });
                            });
                        }
                    });
                    
                    
                   /*
                    // GETTING FOLLOWERS OF USER
                    $.ajax({
                        url: urlFollowingUserNext,
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token)
                        }, success: function (data) {
                            //console.log(data);
                            $.each(data, function (c, d) {
                                console.log(d);
                                $.each(d, function (c1, d1) {
                                    $('#links').append('<p>' + d1.from_name + '</p>'); // APPENDS USERS WHO USER FOLLOWED
                                });
                            });
                        }
                    });
                    */  
                    
                });
            });
        }
    });
}




$(document).ready(function() {
    $("span").mouseover(function() {
// find matching ids || text || classes .. e.t.c.
$("span."+$(this).attr("class")).css("color","grey");
});
$("span").mouseleave(function() {
// find matching ids || text || classes .. e.t.c.
$("span."+$(this).attr("class")).css("color","white");
});
});
    
 
/*

    
    
    // AKO IMAME KURSOR = DA VZEME NOVIQ LINK S KURSORA 
     if(window.location.href.indexOf("?offset=") > 1){
             function nextPage(){
        var twoFive = 10;
        var nextlink = parseInt(link) + 10;
        window.location= thisUrl + "?offset=" + nextlink + "&user=" + userName;
        
    }
     }
else{
    function nextPage(){
       
       
        window.location= thisUrl + "?offset=10" + "&user=" + userName;
        
    }
    }
    
    
    
    if(window.location.href.indexOf("offset=") > 1){
$.getJSON(trueUrl + "&offset=" + link + "&limit=10", function(result){
     $.each(result.follows, function(i, field) {
             var fBack = "https://api.twitch.tv/helix/users/" + field.channel.display_name + "/follows/channels/" + userName + "?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb" + "&offset=" + link + "&limit=10";
             $("#fccStatus").append('<p class="' + field.channel.display_name + '" style="color:white;">' + field.channel.display_name + '<a target="_blank" href="https://www.twitch.tv/' + field.channel.display_name + '"> Link to the Twitch channel</a>' + '</p>');
                                  // on hover find matches   
$("p").mouseover(function() {
// find matching ids || text || classes .. e.t.c.
$("p."+$(this).attr("class")).css("color","grey");
});
$("p").mouseleave(function() {
// find matching ids || text || classes .. e.t.c.
$("p."+$(this).attr("class")).css("color","white");
});
    
             $.getJSON(fBack, function(resulta2){
             $.each(resulta2._links, function(i2, field2) {
                 $("#links").append("<p class='" + field.channel.display_name + "' style='color:white;'>" + field.channel.display_name + "</p>");
             
             });
             });
});
});
    }
    else{

        $(document).ready(function() {
$.getJSON(trueUrl + "&limit=10", function(resulta){
     $.each(resulta.follows, function(i, field) {
             var fBack = "https://api.twitch.tv/helix/users/" + field.channel.display_name + "/follows/channels/" + userName + "?client_id=40pbvj5imeg5ma36gla9p8ryfkyyyb&limit=10";
             $("#fccStatus").append('<p class="' + field.channel.display_name + '" style="color:white;">' + field.channel.display_name + '<a target="_blank" href="https://www.twitch.tv/' + field.channel.display_name + '"> Link to the Twitch channel</a>' + '</p>');
                     // on hover find matches   
$("p").mouseover(function() {
// find matching ids || text || classes .. e.t.c.
$("p."+$(this).attr("class")).css("color","grey");
});
$("p").mouseleave(function() {
// find matching ids || text || classes .. e.t.c.
$("p."+$(this).attr("class")).css("color","white");
});
    
             $.getJSON(fBack, function(resulta2){
             $.each(resulta2._links, function(i2, field2) {
                 if(typeof field2 !== "undefined"){
                     $("#links").append("<p class='" + field.channel.display_name + "' style='color:white;'>" + field.channel.display_name + "</p>");
                 }
                 if(typeof field2 === "undefined")
                 {
                     $("#links").html("<p style='color:white;'> Not following </p>");
                 }
             });
             });
});
});
});
    }
    
    
    
    */