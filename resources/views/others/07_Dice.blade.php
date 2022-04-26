<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .output {
        width: 400px;
        height: 200px;
        border: 2px double black;
    }
</style>

<body>
    <button class="start">START</button>
    <br>
    <br>
    <br>
    <div class="output"></div>
    <div class="outputtime"></div>

    <script>
        var d = [];
        d.length = 3;
        var start = document.querySelector('.start');
        var output = document.querySelector('.output');
        var outputtime = document.querySelector('.outputtime');
        start.addEventListener('click', function () {

            // d[0] = Math.floor(Math.random() * 6) + 1;
            // d[1] = Math.floor(Math.random() * 6) + 1;
            // d[2] = Math.floor(Math.random() * 6) + 1;


            // if (d[0] == d[1] && d[1] == d[2]) {
            //     alert('您過關了!')
            //     console.log(d);
            //     output.innerHTML+='{'+d+'}'+',';
            // } else {
            //     // alert('失敗!')
            //     output.innerHTML+='{'+d+'}'+',';
            //     console.log(d);
            // }
            output.innerHTML='';
            var count = 0;
            do {
                d[0] = Math.floor(Math.random() * 6) + 1;
                d[1] = Math.floor(Math.random() * 6) + 1;
                d[2] = Math.floor(Math.random() * 6) + 1;
                if(d[0] == d[1] && d[1] == d[2]){
                    output.innerHTML+='{'+d+'}'+',';
                    count++;
                    break;
                }else{
                    output.innerHTML+='{'+d+'}'+',';
                    count++;
                }
            }while(count>0);
            outputtime.innerHTML="共骰了"+count+"次";
        })

    // 按下按鈕後會不斷擲骰，直到三顆色子相等時停止
    //紀錄每次輸出的結果
    //最後總共擲了幾次
    </script>
</body>

</html>