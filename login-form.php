<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-form.css">
    <title>ログイン【SKILL LAKE】</title>

</head>
<body>
    <div class="container">
        <div class="login-section">
            <h3>ログイン</h3>
            <div class="section-content">
                <form name=userid action="login_act.php" method="post">
                    <input placeholder="ID名もしくはメールアドレス" name="lid" required>
                    <input type="password" placeholder="パスワード" name="lpw" required>
                    <!-- <button type="submit" onclick="location.href='./user-index.php'">ログイン</button> -->
                    <button>ログイン</button>
                </form>
                <div class="register-link">
                    <p>はじめてご利用の方</p>
                    <button  onclick="location.href='./signin-form.php'">無料会員登録</button>
                </div>
            </div>
        </div>
        <div class="external-login-section">
            <h3>外部アカウントでログイン</h3>
            <div class="section-content">
                <div class="sns-login">
                    <button style="background-color: #DB4437;">
                        <span>Google</span>でログイン
                    </button>
                    <button style="background-color: #4267B2;">
                        <span>Facebook</span>でログイン
                    </button>
                    <button style="background-color: #1DA1F2;">
                        <span>Twitter</span>でログイン
                    </button>
                    <button style="background-color: #0077B5;">
                        <span>LinkedIn</span>でログイン
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
