# messageboard-api
用基礎的CRUD開的留言板api功能為儲存留言、瀏覽全部或部份留言、更新留言及刪除留言
- C:用post取回傳資料並用function store把資料創建並存進資料庫
- R:用get拿資料，並用function show呈現部份自己想看的資料或indext呈現所有資料
- U:用patch和function update更新資料
- D:用delete和function destroy刪除欲刪除的資料

- post, get, update, delete為api.php的route資料拿取方式
- function為controller裡設定要如何處理資料、呈現資料的功能創建
- 開始route和controller前要先建好所需資料庫，並到.env設定好相關資料，確定能順利連到資料庫後續才能順利進行.env設定後先去migration創好所需table。
