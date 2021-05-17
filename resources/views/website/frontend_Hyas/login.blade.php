<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Hyas/frontend_login/css/main.css')}}" />   <!--Add this-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">  <!--Add this-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  <!--Add this-->

    <title>Login Hyas</title>

</head>

<body>
    <div class="login">
        <div class="login__logo-box">
            <img src="{{asset('Hyas/frontend_login/img/logooutline.png')}}" class="login__logo" alt="logo">          
        </div>
        <div class="login__form">
            <div class="login__form-box login__form-box1">
                    <span class="login__form-box--title">ログイン</span>
                    <div class="login__form-box--id">
                        <span>ログインID</span>
                        <input type="text" placeholder="メールアドレスまたは電話番号">
                    </div>
                    <div class="login__form-box--pwd">
                        <span>パスワード</span>
                        <input type="text" placeholder="パスワード">
                    </div>
                    <label for="check1"><a class="login__form-box--remember">
                        <input type="checkbox" id="check1">
                        ログイン情報を保存する
                    </a></label>
                    
                    <div class="btn_block">
                        <a href="#loginsubmit" class="btn btn-text">ログイン</a>
                    </div>
                    <label for=""></label>
                    <a href="#forgetpwd" class="btn-forgot">パスワードをお忘れですか？</a>
            </div>
            <div class="login__form-box login__form-box--social">
                <span class="login__form-box--title">他サービスIDでログイン</span>
                <a href="#line" class="login__form-box--social--line">
                    <img src="{{asset('Hyas/frontend_login/img/icon_line.PNG')}}" alt="icon_line">
                    <span>LINE</span>
                </a>
                <a href="#line" class="login__form-box--social--google">
                    <img src="{{asset('Hyas/frontend_login/img/icon_google.PNG')}}" alt="icon_google">
                    <span>GOOGLE</span>
                </a>
            </div>
        </div>
      
    </div>
    <div class="footer">
        <div class="footer_left">
            <div class="footer_left--text">
                <a>個人情報保護法 <span></span></a>
                <img src="{{asset('Hyas/frontend_login/img/icon_sent.PNG')}}" alt="">
            </div>
            <div class="footer_left--text">
                <a>運営会社<span class="nth_2"></span></a>
                <img src="{{asset('Hyas/frontend_login/img/icon_sent.PNG')}}" alt="">
            </div>
        </div>
        <div class="footer_right">
            <div class="footer_right--text">
                <a>©2021 </a>
            </div>
            <div class="footer_left--text">
                <a>株式会社家価値サポート</a>
            </div>
        </div>
    </div>
</body>

</html>
