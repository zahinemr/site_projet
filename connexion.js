$(document).ready(function() {
    var url="../api/"

    $("#false").hide();

    $("#confirm").click(function (){

        if($("#email").val()&&$("#mdp").val()){


            localStorage.setItem('Email', $("#email").val());

            var request = $.ajax({
                method: "GET",
                url: url+"connexion.php",
                data: {mail: localStorage.getItem('Email'),password:$("#mdp").val()},
                dataType: "json"
            });

            request.done(function (msg){
                if(msg.succes==true){
                    if(msg.grade<4){
                        window.location="";
                    }

                    else if(msg.grade==4){
                        window.location="";
                    }
                }
                else {
                    $("#false").text('Le compte n\'existe pas');
                    $("#false").show();
                    setTimeout(() => { $("#false").hide(); }, 1500);
                }
            })
        }
        else{
            $("#false").text('Veuillez renseigner tout les champs');
            $("#false").show();
            setTimeout(() => { $("#false").hide(); }, 2000);
        }
    })
    if(window.closed){
        localStorage.clear();
    }
})