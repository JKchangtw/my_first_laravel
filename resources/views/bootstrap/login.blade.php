<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        #login {
            height: 100vh;
            background-color: gray;
            position: relative;
            /* background-image: url(/image/ocean.jpg); */

        }

        .text {
            background-color: rgba(82, 82, 82, 1);
            padding: 0 96px;
            /* position: relative; */
        }

        .text h2 {
            text-align: left;
            color: white;
            font-size: 2rem;
            font-weight: bold;
        }

        .text p {
            color: white;
            font-size: ;
        }

        .icons {
            position: absolute;
            bottom: 5px;
            left: 25%;
            transform: translateX(-50%);
            color: white;
            font-weight: ;
        }

        .form {
            background-color: #162446;
        }

        @media (max-width:1000px) {
            .text {
                display: none !important;
            }

            .form {
                width: 100% !important;
                background-color: rgba(82, 82, 82, 1);
            }

            .icons {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                color: white;
                font-weight: ;
            }

            .form .logo1 {
                display: none;
            }

            .form .logo2 {
                background-image:url(/digipack_IMG/logo4.jpg);
                width: 80px;
                height: 80px;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
        }


        .form * {
            color: hsl(0, 0%, 100%);
        }

        .form .name img {
            width: 80px;

        }

        .form .login-with div {
            border: 2px solid white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
        }

        .form form input {
            background-color: black;
            border: none;
        }

        .form form button {
            width: calc(100% - 32px);
            border-radius: 28px;
            height: 56px;
            background-color: #6366f1;
            border: none;
        }

        .form .logo1 {
            background-image: url(/digipack_IMG/logo3.jpg);
            width: 80px;
            height: 80px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <section id="login" class="w-100 d-flex ">
        <div class="text w-50 h-100 d-flex flex-column align-items-center justify-content-center">
            <h2 class="w-100 fs-1">Keep it special</h2>
            <p class="w-100 fs-3">Capture your personal memory in unique way, anywhere.</p>
        </div>

        <div class="form w-50 h-100 d-flex flex-column align-items-center justify-content-center">
            <div class="name d-flex flex-row fs-1 mb-4">
                <div class="logo1"></div>
                <div class="logo2"></div>
                <span class="align-self-center">數位方塊</span>
            </div>
            <div class="login-with d-flex mb-4">
                <div class="fb ">f</div>
                <div class="google ms-2 me-2">G+</div>
                <div class="link">in</div>
            </div>
            {{-- 原本的form --}}
            {{-- <form action="./bootstrap.html" class="d-flex w-60 flex-column w-75 align-items-center">
                <span class="mb-3">or use email your account</span>
                <input type="text" name="" id="" placeholder="Email" class="w-100 p-3 mb-4">
                <input type="password" name="" id="" placeholder="Password" class="w-100 p-3 mb-4">
                <a href="" class="mb-2 align-self-end">Forget your password</a>
                <button class="">SIGN IN</button>
            </form> --}}
            <form method="POST" action="{{ route('login') }}" class="d-flex w-60 flex-column w-75 align-items-center">
                @csrf
                <span class="mb-3">or use email your account</span>
                <input type="text" name="email" id="" placeholder="Email" class="w-100 p-3 mb-4">
                <input type="password" name="password" id="" placeholder="Password" class="w-100 p-3 mb-4">
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <a href="{{ route('password.request') }}" class="mb-2 align-self-end">Forget your password</a>
                <button type='submit' class="">SIGN IN</button>
            </form>
            <div class="icons fs-3">
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook ms-2 me-2"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>


    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
