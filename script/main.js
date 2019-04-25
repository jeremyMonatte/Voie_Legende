document.onload = init();
var target;
var idVoie;
function init() {
  $(".thumbnail").click(ChangeVoie);
}
function ChangeVoie() {
  target = this;
  if ($(this).hasClass("open")) {
    $(".cleaner").animate(
      { left: "0vw" },
      {
        duration: 500,
        complete: function() {
          $(target).toggleClass("open");
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
  } else {
    $(this).toggleClass("open");
    idVoie=$(this).attr('data-id');
    $('.voieItem.voie'+idVoie).toggleClass('open');
  }
  $("main").toggleClass("backStyle");
  $("body, main").toggleClass("noscroll");
}
