<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        h1, h3{
            text-align: center;
        }
        .box{
            width: 800px;
            height: 550px;
            border: 5px dotted skyblue;
        }
        .box_mid{
            text-align: center;
        }
        .output{
            width: 400px;
            height: 24px;
            border: 2px solid goldenrod;
            margin: 0 auto;
            line-height: 24px;
        }
        .bmi{
            
            color: goldenrod;
        }
        .box_btm{
            width: 194.4px;
            height: 212.4px;
            margin: 0 auto;
        }
        table{
            border: 1px double skyblue;
            font-size: 18px;
            
        }
        table td, th{
            border: 1px double skyblue;
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="box">
        <div class="box_top">
            <h1>BMI計算機</h1>
            <h3>身體質量指數(Body Mass Index，簡稱BMI)是公認用來估計肥胖程度的方法</h3>
            <!-- <br> -->
            <h3>BMI = 體重(公斤) / 身高的平方(公尺)</h3>
        </div>
        <br>
        <div class="box_mid">
            <b><input type="number" id="height" placeholder="我的身高">公分</b>
            <b><input type="number" id="weight" placeholder="我的體重">公斤</b>
            <button id="calc">計算</button>
            <button id="reset">重新填寫</button>
            <br>
            <br>
            <b class="bmi">您的BMI指數如下：<div class="output" id="bmi"></div></b>
        </div>
        <br>
        <br>
        <div class="box_btm">
            <table>
                <thead>
                    <tr>
                        <th colspan="3">BMI值</th>
                        <!-- <th></th>
                        <th></th> -->
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th></th>
                        <th>男性</th>
                        <th>女性</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>體重過輕</td>
                        <td> < 20 </td>
                        <td> < 19 </td>
                    </tr>
                    <tr>
                        <td>正常範圍</td>
                        <td>20 - 25</td>
                        <td>19 - 25</td>
                    </tr>
                    <tr>
                        <td>體重過重</td>
                        <td>25 - 30</td>
                        <td>25 - 30</td>
                    </tr>
                    <tr>
                        <td>肥胖</td>
                        <td>30 - 40</td>
                        <td>30 - 40</td>
                    </tr>
                    <tr>
                        <td>病態肥胖</td>
                        <td>> 40</td>
                        <td>> 40</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                      
                    </tr>
                </tfoot>
                
            </table>
        </div>
    </div>

    <script>
        var calc = document.querySelector('#calc');
        var h = document.querySelector('#height');
        var w = document.querySelector('#weight');
        var o = document.querySelector('#bmi');

        calc.addEventListener('click', function(){
            var height = ((h.value)*0.01)**2;
            var weight = w.value;
            console.log(weight);
            console.log(height);
            if(height == 0 || weight ==0){
                alert("請輸入身高體重!")
                return;
            }
            bmi = Number(weight)/Number(height);
            console.log(bmi);
            if(bmi<20){
                document.querySelector('#bmi').innerHTML = bmi + '，體重過輕';
            }else if(bmi >=20 && bmi <25){
                document.querySelector('#bmi').innerHTML = bmi + '，體重正常';
            }else if(bmi >=25 && bmi <30){
                document.querySelector('#bmi').innerHTML = bmi + '，體重過重';
            }else if(bmi >=30 && bmi <40){
                document.querySelector('#bmi').innerHTML = bmi + '，肥胖';
            }else{
                document.querySelector('#bmi').innerHTML = bmi + '，病態肥胖';
            }
        
            })


            var reset = document.querySelector('#reset');
            reset.addEventListener('click', function(){
                document.querySelector('#bmi').innerHTML='';
                weight.value='';
                height.value='';
            })

    </script>
</body>

</html>