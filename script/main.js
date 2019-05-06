document.onload = init();
var target;
var idVoie;
function init() {
  $(".thumbnail").click(ChangeVoie);
  $(".paris").click(retourHome);
  $(".macdo").click(openNav);
}
function openNav() {
  $(".macdo").toggleClass("open");
  $(".voieItem.voie" + idVoie + " .voieNav").toggleClass("open");
  $(".voieItem.voie" + idVoie + " .voieDesc").toggleClass("backStyle");
  $(".paris").toggleClass("brightLow");
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
  if ($(this).hasClass("open")) {
  } else {
    $(this).toggleClass("open");
    idVoie = $(this).attr("data-id");
    $(".voieItem.voie" + idVoie).toggleClass("open");
    $(".paris").toggleClass("visible");
    $(".macdo").toggleClass("visible");
    $("main").toggleClass("backStyle");
    $("body, main").toggleClass("noscroll");
  }
}
