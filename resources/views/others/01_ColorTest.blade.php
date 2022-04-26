<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100vw;
        height: 100vh;
        background-color: palevioletred;
        padding: 15vh 0 0 35vw;
    }

    .boxes {
        width: 500px;
        height: 500px;
        display: flex;
        /* flex-direction: row;
        justify-content: space-around; */
        flex-wrap: wrap;
        background-color: white;
        border-radius: 10px;
        border: 5px solid white;
    }

    .answer-box {
        opacity: 0.5;
    }
</style>

<body>
    <div class="container">
        <div id="main" class="boxes">
        </div>
    </div>


    <script>
        // 起始設定
        // 假設一開始為lv.2
        // 每次有lv*lv
        var level = 2;
        // 設定點擊次數
        var count = 0;
        var size;
        // var size = 100 / level;
        // 呼叫函數
        game();
        // for (var i=0 ; i< level; i++){
        //     boxes.innerHTML= <div class="box"></div>;
        // }
        // 函數
        function game() {
            // 先偵測大box 自動產生小box
            // 偵測大box
            var boxes = document.querySelector('.boxes');
            // 過關之後 進入下一關前 要再清空 再算一次size 
            boxes.innerHTML = "";
            size = 100 / level;

            // 顏色隨機變化 亂數 Math.random()*256 搭配 Math.floor()
            // 亂數會產生大於0，小於1的小數 要取0~255的RGB 所以乘以256再取floor
            var r = Math.floor(Math.random() * 256);
            var g = Math.floor(Math.random() * 256);
            var b = Math.floor(Math.random() * 256);
            // 顏色變數設定
            // var color = ' rgb(' + r + ',' + g + ',' + b + ')';
            //或用以下樣板語言寫法  `內容 ` 
            var color = `rgb(${r},${g},${b})`;

            // 生成 subbox
            for (var i = 0; i < level ** 2; i++) {
                // boxes.innerHTML = boxes.innerHTML + '<div class="box" style=" width: '+size+' %; height:'+size+'%; background-color:'+color+' "></div>'
                // 或以下樣板語言寫法
                boxes.innerHTML += `<div class="box" style=" width:${size}%; height:${size}%; background-color:${color} ;border:3px solid white"></div>`
            }
            // 答案box
            // var answer = Math.floor(Math.random()*level)+1;
            // querySelector(`.boxes `)
            // 設定答案 第幾格是答案 floor( (0~(lvX)^2) ) +1  多設一格???
            var answer = Math.floor(Math.random() * level ** 2) + 1;

            // 找到答案box 第幾格 將他設為變數abox
            var abox = document.querySelector(`.boxes .box:nth-child(${answer})`);
            // 其他都是錯誤box
            var nabox = document.querySelectorAll(`.boxes .box:not(:nth-child(${answer}))`);
            // 添加class
            abox.classList.add('answer-box');
            // 每個level難度提高(顏色越來越難分辨)
            abox.style.opacity = 0.5 + level * 0.015;

            // querySelector(`.boxes .box:nth:${answer}`).style
            // var answerBox = document.querySelector('.answer-box')

            //點到錯誤的box dowhat
            //第一個參數nbox為代表單元個體(nabox裡面的東西 一次一個) 可自訂
            //第二個參數index代表注標(標示編號) 第一次傳1...以此類推
            //還有第三個參數
            nabox.forEach(function (nbox, index) {
                nbox.addEventListener('click', function () {
                    alert("wrong!");

                });
            });
            abox.addEventListener('click', function () {
                //2x2的玩2次 依此類推 
                count++;
                if (count == level) {
                    // 2x2的過兩關了 進入下一關
                    level++;
                    // count歸零 重新計算
                    count = 0;
                    // alert('恭喜你過關!')

                }
                // recall fuction
                game();
            });
           

        }  
    </script>
</body>

</html>