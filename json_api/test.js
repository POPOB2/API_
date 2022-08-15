// 都用let宣告變數,因let名稱 後面的{}或[]或直接宣告 會定義不同的 物件 陣列 變數
// 變數 , 一個資料
let name = 'POPO' 

// 物件{} , 一個人的一組複合資料
let person1 = {
    name:'POPO',
    bloodType:'a',
    id:1
}

// 陣列[] , 好幾筆資料
let team = [
    person1,
    person2,
    person3
]

/* JSON必須用物件做表達, 所以最外層會有一個物件, 下例先用{}作為外層, 再用[]做為陣列, 再往陣列裡面放上物件們
   而再json檔時, 大部分文字內容(資料內容,屬性名稱等皆是)需要用雙引號做成字串 */
// 這裡有一個JSON資料 裡面有陣列user, 再該陣列中有三筆資料, 再js檔該格式錯誤, 再json檔則正確
{
    "users":[
        {
            "id":1,
            "name":"POPO1"
        },
        {
            "id":2,
            "name":"POPO2"
        },
        {
            "id":3,
            "name":"POPO3"
        }
    ]
}
