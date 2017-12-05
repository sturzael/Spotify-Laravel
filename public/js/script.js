window.addEventListener("scroll", yScroll);

function yScroll() {

  pagetop = document.getElementById('pagetop');
  menu = document.getElementById('menu');
  yPos = window.pageYOffset;
  if (yPos > 50) {
    pagetop.style.backgroundColor = "rgba(0, 0, 0, 0.9)";
    pagetop.style.height = "90px";
    pagetop.style.paddingTop = "0px";
    pagetop.style.top = "0";
    // $('#menu-item').style.Color = "#cfcfcf !important";
    pagetop.style.zIndex = "100001";

  } else if (yPos < 10) {
    pagetop.style.backgroundColor = "transparent";
    pagetop.style.height = "160px";
    pagetop.style.paddingTop = "45px";
    pagetop.style.zIndex = "100";
  }
}
