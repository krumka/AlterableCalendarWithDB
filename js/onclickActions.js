var r;
var berror;
$(document).ready(function(){
    berror = $("#error");
});
function addAction(){
    $(".day").click(function(e){
        var date = $(this).attr('id').split('_');
        date = date[date.length-2];
        var data = {
            "date" : date,
            "classname" : r
        };
        if(r && r!=0){
            $.post( "inc/book.php", data, function(an){console.log(an)} );
            berror.html("");
            var num = $(this).text();
            $(this).removeClass('haute_saison');
            $(this).removeClass('reserv');
            $(this).removeClass('basse_saison');
            $(this).html("");
            if(r!="del"){
                $(this).addClass(r);
                $(this).html("<span class=\"badge badge-event badge-0\">"+num+"</span>");
            }else{
                $(this).html(num);
            }
        }else{
            berror.html("Vous devez cocher un des choix.");
        }

    });
};
function chR(sr){
    r=sr.value;
}