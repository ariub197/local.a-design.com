/*--------------------------------------------------------------------------*
 *
 *  stalker
 *
 *--------------------------------------------------------------------------*/
const stalker = document.getElementById("pointer__stalker");
const pointer = document.getElementById("pointer");
//上記のdivタグをマウスに追従させる処理
document.addEventListener("mousemove", function (e) {
  stalker.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
  pointer.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
});
