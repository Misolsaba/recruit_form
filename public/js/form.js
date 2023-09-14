// グローバル変数を設定してフォームの番号をカウント
var formCount = 1;
var maxForms = 9; // 最大フォーム数

// ボタンをクリックしたときの処理
document.getElementById("addForm").addEventListener("click", function () {
  // 最大フォーム数に達した場合、追加を中止
  if (formCount >= maxForms) {
    alert("最大フォーム数に達しました。これ以上追加できません。");
    return;
  }

  // 新しいフォームのコピーを作成
  var newForm = createForm(formCount);

  // 削除ボタンを追加
  var deleteButton = document.createElement("button");
  deleteButton.textContent = "削除";
  deleteButton.className = "btn btn-primary"; // クラスを追加
  deleteButton.addEventListener("click", function () {
    // 削除ボタンがクリックされたときの処理
    var formToRemove = deleteButton.parentNode; // 親要素を取得
    formToRemove.parentNode.removeChild(formToRemove); // フォームを削除
    formCount--; // フォームの数を減らす
  });

  // フォーム内の要素をコンテナに追加
  newForm.appendChild(deleteButton);
  document.getElementById("add_area").appendChild(newForm);

  // フォームの番号をインクリメント
  formCount++;
});

// 新しいフォームを作成する関数
function createForm(count) {
  var basePartsClone = document.getElementById("base_parts").cloneNode(true);

  // フォーム内のテキストフィールドをクリア
  var textInputs = basePartsClone.querySelectorAll('input[type="text"]');
  textInputs.forEach(function (input) {
    input.value = "";
    input.name = "job" + count; // name属性を動的に設定
  });

  // テキストエリアもクリア
  var textarea = basePartsClone.querySelector('textarea');
  textarea.value = "";
  textarea.name = "job_naiyo" + count; // name属性を動的に設定

  // フォームのタイトルを追加
  var titleLabel = document.createElement("h3");
  titleLabel.textContent = "職歴 " + count;
  basePartsClone.insertBefore(titleLabel, basePartsClone.firstChild);

  return basePartsClone;
}
