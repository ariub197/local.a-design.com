// DOMの読み込みが完了したときに実行されるコード
document.addEventListener("DOMContentLoaded", function () {

  // カスタムクラスを要素に追加する関数
  function addCustomClasses(selector, prefix) {
    // 指定されたセレクタに一致するすべての要素を取得
    var elements = document.querySelectorAll(selector);

    // クラス名に付ける番号カウンターの初期値
    var counter = 1;

    // 取得した要素に対して順番に処理を実行
    elements.forEach(function (element) {
      // 要素のクラスリストにカスタムクラスを追加
      element.classList.add(prefix + counter);

      // カウンターを増加して、次の番号を準備
      counter++;
    });
  }

  // メニュー名要素にカスタムクラスを追加する
  addCustomClasses(".wp-menu-name", "custom-class");

  // メニュー画像要素にカスタムクラスを追加する
  addCustomClasses(".wp-menu-image", "custom-img");
});