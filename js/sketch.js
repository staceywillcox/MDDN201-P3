function myuploadsbutton() {
    document.getElementById("myuploads").style.display = "block";
    document.getElementById("history").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("favourites").style.display = "none";

}
function historybutton() {
    document.getElementById("myuploads").style.display = "none";
    document.getElementById("history").style.display = "block";
    document.getElementById("settings").style.display = "none";
    document.getElementById("favourites").style.display = "none";

}

function settingsbutton() {
    document.getElementById("myuploads").style.display = "none";
    document.getElementById("history").style.display = "none";
    document.getElementById("settings").style.display = "block";
    document.getElementById("favourites").style.display = "none";

}

function favouritesbutton() {
    document.getElementById("myuploads").style.display = "none";
    document.getElementById("history").style.display = "none";
    document.getElementById("settings").style.display = "none";
    document.getElementById("favourites").style.display = "block";

}

function editaccount() {
    document.getElementById("editaccount").style.display = "block";
    document.getElementById("password").style.display = "none";
    document.getElementById("privacy").style.display = "none";
    document.getElementById("statistics").style.display = "none";
    document.getElementById("restrictions").style.display = "none";
}

function password() {
    document.getElementById("editaccount").style.display = "none";
    document.getElementById("password").style.display = "block";
    document.getElementById("privacy").style.display = "none";
    document.getElementById("statistics").style.display = "none";
    document.getElementById("restrictions").style.display = "none";
}

function privacy() {
    document.getElementById("editaccount").style.display = "none";
    document.getElementById("password").style.display = "none";
    document.getElementById("privacy").style.display = "block";;
    document.getElementById("statistics").style.display = "none";
    document.getElementById("restrictions").style.display = "none";
}


function statistics() {
    document.getElementById("editaccount").style.display = "none";
    document.getElementById("password").style.display = "none";
    document.getElementById("privacy").style.display = "none";
    document.getElementById("statistics").style.display = "block";
    document.getElementById("restrictions").style.display = "none";
}

function restrictions() {
    document.getElementById("editaccount").style.display = "none";
    document.getElementById("password").style.display = "none";
    document.getElementById("privacy").style.display = "none";
    document.getElementById("statistics").style.display = "none";
    document.getElementById("restrictions").style.display = "block";
}

function signup() {
    document.getElementById("login-container").style.display = "none";
    document.getElementById("signup-container").style.display = "block"; 
}

function login() {
    document.getElementById("login-container").style.display = "block";
    document.getElementById("signup-container").style.display = "none"; 
}


        $(document).ready(function() {
            $("#lightSlider").lightSlider({
                item: 4,
              
            }); 

            $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
            });

        });

        /** ISOTOPE CODE **/


         $('.all').click(function(){
            $('.grid').isotope({filter: '*'});
        });

        $('.recurring_dream_series.button').click(function(){
            $('.grid').isotope({filter: '.recurring_dream_series'});
        });

        $('.food.button').click(function(){
            $('.grid').isotope({filter: '.food'});
        });

         $('.fantasy.button').click(function(){
            $('.grid').isotope({filter: '.fantasy'});
        });

        $('.superpowers.button').click(function(){
            $('.grid').isotope({filter: '.superpowers'});
        });

         $('.celebrity.button').click(function(){
            $('.grid').isotope({filter: '.celebrity'});
        });

        $('.flying.button').click(function(){
            $('.grid').isotope({filter: '.flying'});
        });

        $('.animals.button').click(function(){
            $('.grid').isotope({filter: '.animals'});
        });

         $('.success_power.button').click(function(){
            $('.grid').isotope({filter: '.success_power'});
        });

         $('.film_television.button').click(function(){
            $('.grid').isotope({filter: '.film'});
        });

        $('.travel.button').click(function(){
            $('.grid').isotope({filter: '.travel'});
        });

        $('.love_interests.button').click(function(){
            $('grid').isotope({filter: '.love_interests'});
        });


        //NIGHTMARE ISOTOPE 
        $('.love_interests.button').click(function(){
            $('grid').isotope({filter: '.love_interests'});
        });

        $('.recurring_nightmare_series.button').click(function(){
            $('.grid').isotope({filter: '.recurring_nightmare_series'});
        });

        $('.apocalypse.button').click(function(){
            $('.grid').isotope({filter: '.apocalypse'});
        });

         $('.being_late.button').click(function(){
            $('.grid').isotope({filter: '.being_late'});
        });

        $('.exams.button').click(function(){
            $('.grid').isotope({filter: '.exams'});
        });

         $('.falling.button').click(function(){
            $('.grid').isotope({filter: '.falling'});
        });

        $('.horror.button').click(function(){
            $('.grid').isotope({filter: '.horror'});
        });

        $('.lost.button').click(function(){
            $('.grid').isotope({filter: '.lost'});
        });

         $('.public_nudity.button').click(function(){
            $('.grid').isotope({filter: '.public_nudity'});
        });

         $('.thriller.button').click(function(){
            $('.grid').isotope({filter: '.thriller'});
        });

        $('.transport.button').click(function(){
            $('.grid').isotope({filter: '.transport'});
        });


function goBack() {
    window.history.back();
}
