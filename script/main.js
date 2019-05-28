/*
     __      __   ______     _______     ___    __     _    _________
    |  \    /  | |  __  \   |   ___  \  |   \  |  |   | )  /  _____  \
    |   \  /   | | |__|  |  |  |   \  | |    \ |  |  / /  |  |     |__|
    |    \/    | | _____/   |  |___/  | |     \|  | |_/   |  |   _______
    |  |\  /|  | |   __  \  |   _____/  |  |\     |       |  |  |__    _|
    |  | \/ |  | |  |__|  | |  |______  |  | \    |       |  |_____|  |
    |__|    |__| |_______/  |_________| |__|  \___|       |__________/

*/
document.onload = init();
var target;
var idVoie;
function init() {
    $(".thumbnail").click(ChangeVoie);
    $(".paris").click(retourHome);
    $(".macdo").click(toggleNav);
    $('body a[href^="#"]').click(smoothscroll);
}
function toggleNav() {
    $(".macdo").toggleClass("open");
    $(".voieItem.voie" + idVoie + " .voieNav").toggleClass("open");
    $(".voieItem.voie" + idVoie + " .voieDesc").toggleClass("backStyle");
    $("body").toggleClass("noEve");
}
function retourHome() {
    $(".cleaner").animate(
        { left: "0vw" },
        {
            duration: 500,
            complete: function() {
                $(".thumbnail.open").toggleClass("open");
                $(".voieItem.open").toggleClass("open");
                $("main").toggleClass("backStyle");
                $(".paris").toggleClass("visible");
                $(".macdo").toggleClass("visible");
            }
        }
    );
    $(".cleaner").animate(
        { left: "100vw" },
        {
            duration: 500,
            complete: function() {
                $(".cleaner").css("left", "-100vw");
            }
        }
    );
}
function ChangeVoie() {
    target = this;
    $(this).toggleClass("open");
    idVoie = $(this).attr("data-id");
    $("main").toggleClass("backStyle");
    $("body, main").toggleClass("noscroll");
}

/*
function checkFinAnim(){
  if ($(".open .backLeft").h) {
  }
}*/

function smoothscroll() {
    var hreff = $(this).attr("href");
    if (hreff === "#") {
        return;
    }
    $(".voieItem.voie" + idVoie + " .voieDesc").animate(
        {
            scrollTop: $(hreff).offset().top
        },
        "slow"
    );
    return false;
}
