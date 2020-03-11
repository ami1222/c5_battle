$("#battle_button").on("click", function () {
  // この中に書く
  if ($cpu === 1 && $_POST['attack1']) {
    $("#title").html("あなたの勝ちです");
  } else if ($cpu === 2 && $_POST['attack2']) {
    $("#title").html("あなたの負けです");
  } else if ($cpu === 3 && $_POST['attack3']) {
    $("#title").html("あいこです");
  } else if ($cpu === 3 && $_POST['attack3']) {
    $("#title").html("あなたの勝ちです");
  } else if ($cpu === 3 && $_POST['attack3']) {
    $("#title").html("あなたの負けです");
  }
  // この下は消さない
});
