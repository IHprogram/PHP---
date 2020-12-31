$(function() {
  $('select[name="question"]').change(function()
  {
    var value = "";

    value = $(this).val();
    console.log(value);

    $.ajax("int.php", {
      type: "get",
      data: { val: value },
      datatype: "json"
    })
    // ↓.done(function(data){})の中にある「data」という変数に、PHPから送られてくる値が入る
    .done(function(data){
      // ここにPHPからしっかりと値が送り返された時の処理を書く
      console.log(data);
      // name属性がanswerの<select>タグの中の<option>タグを削除する
      $('select[name="answer"] > option').remove();
      // 利用する配列（data変数に入っている配列）の値を繰り返し処理
      // data変数を繰り返し処理内ではtimesという変数に置き換えていく
      data.forEach(function(times) {
        $('select[name="answer"]').append(
          $("<option>")
          .val(times)
          .text(times)
        );
      });
    })
    .fail(function(){
      // ここにPHPからの値が、何かしらの原因でJQuery側に届いてなかったり、そもそも値が送り返されることがないときに対応する処理を書く
      console.log("PHPからのデータ受け取りが失敗しました");
    });
  });
});
