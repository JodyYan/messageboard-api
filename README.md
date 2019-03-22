# messageboard-api
用基礎的CRUD開的留言板api功能為儲存留言、瀏覽全部或部份留言、更新留言及刪除留言
- C:用post取回傳資料並用function store把資料創建並存進資料庫
- R:用get拿資料，並用function show呈現部份自己想看的資料或indext呈現所有資料
- U:用patch和function update更新資料
- D:用delete和function destroy刪除欲刪除的資料

- post, get, update, delete為api.php的route資料拿取方式
- function為controller裡設定要如何處理資料、呈現資料的功能創建
- 開始route和controller前要先建好所需資料庫，並到.env設定好相關資料，確定能順利連到資料庫後續才能順利進行.env設定後先去migration創好所需table。

---

# api使用方式

**POST /api/message**

 REQUEST
 
 {
 
	"name": "5",
    
	"email": "123@mail.com",
    
	"message": "test"
	
}


RESPONSE


{

    "id": 7,
  
    "name": "5",
  
    "email": "123@mail.com",
  
    "message": "test",
  
    "created_at": "2019-03-22 07:47:21",
  
    "updated_at": "2019-03-22 07:47:21"
  
}


**GET  /api/message**

RESPONSE

[
  {
  
    "id": 1,
    "name": "1",
    "email": "852",
    "message": "dfsd",
    "created_at": "2019-03-22 02:40:16",
    "updated_at": "2019-03-22 02:40:16"
  },
  {
  
    "id": 2,
    "name": "2",
    "email": "gdfg",
    "message": "ertgfgb",
    "created_at": "2019-03-22 02:49:08",
    "updated_at": "2019-03-22 02:49:08"
    
  },
  
  {
  
    "id": 3,
    "name": "3",
    "email": "tj",
    "message": "12",
    "created_at": "2019-03-22 02:49:57",
    "updated_at": "2019-03-22 03:37:50"
    
  },
  
  {
  
    "id": 6,
    "name": "5",
    "email": "tjjfde",
    "message": "12345",
    "created_at": "2019-03-22 02:51:12",
    "updated_at": "2019-03-22 02:51:12"
    
  },
  
  {
  
    "id": 7,
    "name": "5",
    "email": "123@mail.com",
    "message": "test",
    "created_at": "2019-03-22 07:47:21",
    "updated_at": "2019-03-22 07:47:21"
  
  }
  
]



**GET  /api/message/{id}**

RESPONSE

{

    "id": 1,
    "name": "1",
    "email": "852",
    "message": "dfsd",
    "created_at": "2019-03-22 02:40:16",
    "updated_at": "2019-03-22 02:40:16" 
    
}

**PATCH  /api/message/{id}**


REQUEST

 {
 
	"name": "5",
    
	"email": "1234@mail.com",
    
	"message": "test"
	
}

RESPONSE

 {
 
	"name": "5",
    
	"email": "1234@mail.com",
    
	"message": "test"
	
}


**DELETE /api/message/{id}**

RESPONSE

ok
