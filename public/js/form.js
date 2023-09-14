// ボタンをクリックしたときの処理
document.getElementById("addForm").addEventListener("click", function () {
  // 新しいフォームのコピーを作成
  var newForm = createForm();

  // 削除ボタンを追加
  var deleteButton = document.createElement("button");
  deleteButton.textContent = "削除";
  deleteButton.className = "btn btn-primary"; // クラスを追加
  deleteButton.addEventListener("click", function () {
    // 削除ボタンがクリックされたときの処理
    var formToRemove = deleteButton.parentNode; // 親要素を取得
    formToRemove.parentNode.removeChild(formToRemove); // フォームを削除
  });

  // フォーム内の要素をコンテナに追加
  newForm.appendChild(deleteButton);
  document.getElementById("add_area").appendChild(newForm);
});

// 新しいフォームを作成する関数
function createForm() {
  var basePartsClone = document.getElementById("base_parts").cloneNode(true);

  // フォーム内のテキストフィールドをクリア
  var textInputs = basePartsClone.querySelectorAll('input[type="text"]');
  textInputs.forEach(function (input) {
    input.value = "";
  });

  // テキストエリアもクリア
  var textarea = basePartsClone.querySelector('textarea');
  textarea.value = "";

  return basePartsClone;
}
