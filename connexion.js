$(document).ready(function() {

    $("#false").hide();

    $(".user").submit(function (e){
        e.preventDefault();

        if($("#exampleInputEmail")[0].value && $("#exampleInputPassword")[0].value){


            localStorage.setItem('Email', $("#email").val());

            var request = $.ajax({
                method: "GET",
                url: "http://51.210.151.13/btssnir/projets2022/bornegel/api/connexion.php",
                data: {email: $("#exampleInputEmail")[0].value,password:$("#exampleInputPassword")[0].value},
                dataType: "json",
                success: (response)=>{
                    console.log(response);
                }
            });

            request.done(function (msg){
                if(msg.success==true){
                    if(msg.grade==1){
                        window.location="";
                    }
                    else if(msg.grade==2){
                        window.location="responsableTechnique.html";
                    }
                    else if(msg.grade==3){
                        window.location="responsableAgent.html";
                    }
                    else if(msg.grade==4){
                        window.location="agent.html";
                    }
                }
                else {
                    $("#false").text('Le compte inextant');
                    $("#false").show();
                    setTimeout(() => { $("#false").hide(); }, 1500);
                }
            })
        }
        else{
            $("#false").text('Veuillez remplir tout les champs');
            $("#false").show();
            setTimeout(() => { $("#false").hide(); }, 2000);
        }
    })
    if(window.closed){
        localStorage.clear();
    }
})


