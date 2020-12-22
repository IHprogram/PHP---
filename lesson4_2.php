<!-- SQL -->

SELECT * FROM テーブル名; （*は「全てのカラム項目」と言う意味）
SELECT カラム名 FROM テーブル名
SELECT カラム名 FROM テーブル名 WHERE カラム名=レコードの値;
SELECT カラム名 FROM テーブル名 WHERE カラム名=レコード1 OR カラム名=レコード2;
SELECT カラム名 FROM テーブル名 WHERE カラム名1=レコード1 AND カラム名2=レコード2;


<!-- 曖昧検索 -->
SELECT * FROM テーブル名 WHERE  カラム名 like "%検索ワード%";

<!-- レコードの追加 -->
INSERT INTO テーブル名(カラム1, カラム2, カラム3, ...) VALUES(レコード1, レコード2, レコード3, ...);

<!-- レコードの更新 -->
UPDATE テーブル名 SET カラム名 = "新しいレコード" WHERE id=更新したい番号;

<!-- レコードの削除 -->
DELETE FROM テーブル名 WHERE id = 削除したい番号;
