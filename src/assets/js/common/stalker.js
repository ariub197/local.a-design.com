//マウスストーカー用のdivを取得
const stalker = document.getElementById("cursor__stalker");
const cursor = document.getElementById("cursor");
//上記のdivタグをマウスに追従させる処理
document.addEventListener("mousemove", function (e) {
  stalker.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
  cursor.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
});
