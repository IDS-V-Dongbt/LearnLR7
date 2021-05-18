<!DOCTYPE html>
<html lang="en">

@include('website.frontend_Hyas.head')
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
                    <label class="container">ログイン情報を保存する
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    
                    
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
    @include('website.frontend_Hyas.footer')
</body>

</html>
