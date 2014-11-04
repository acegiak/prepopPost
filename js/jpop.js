var $j = jQuery.noConflict();

$j(function(){

    $j("#sidebar li a").hover(function(){
    	$j(this).stop().animate({
    		paddingLeft: "20px&"
    	}, 400);
    }, function() {
    	$j(this).stop().animate({
    		paddingLeft: 0
    	}, 400);
    });

});
$j(window).load(function() {

    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {   
        var sParameterName = sURLVariables[i].split('=');
        if(sParameterName[1].toLowerCase() == "checked"){
                $j("li label:contains('"+sParameterName[0]+"') input").prop('checked', true);
        }else{
                $j("input#"+sParameterName[0]).val(sParameterName[1]);
        }
    }
       
});
