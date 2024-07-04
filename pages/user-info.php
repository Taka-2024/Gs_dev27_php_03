<?php
// ログインユーザーの情報を取得する処理（実際の実装に合わせて調整してください）
$user = [
    'name' => '',
    'kana' => '',
    'birth_date' => '',
    'gender' => '',
    'phone' => '',
    'email' => '',
    'postal_code' => '',
    'prefecture' => '',
    'city' => '',
    'address1' => '',
    'address2' => '',
    'occupation' => '',
    'nationality' => ''
];

// フォームが送信された場合の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ここでPOSTデータを処理し、データベースを更新する処理を実装
    // 例: $user = $_POST; saveUserInfo($user);
}
?>

<link rel="stylesheet" href="css\user-info.css">
<div class="basic-info-container">
    <h2 class="section-title">基本情報</h2>

    <div class="progress-container">
        <div class="progress-steps">
            <div class="step active">
                <span class="step-number">1</span>
                <span class="step-text">基本情報</span>
            </div>
            <div class="step">
                <span class="step-number">2</span>
                <span class="step-text">ご経験・スキル</span>
            </div>
            <div class="step">
                <span class="step-number">3</span>
                <span class="step-text">ご希望条件</span>
            </div>
        </div>
        <div class="completion-rate-container">
            <div class="scout-toggle">
                <span>スカウトを受け取る</span>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="completion-rate">
                <div class="rate-circle">
                    <span class="rate-number">100</span>
                    <span class="rate-percent">%</span>
                </div>
                <span class="rate-label">入力完了率</span>
            </div>
        </div>
    </div>

    <div class="info-box">
        <p>住所、氏名、最寄り駅など基本情報を編集・登録いただけます。</p>
        <p>スカウト機能の設定について、<a href="#">詳しくはこちら</a></p>
    </div>

    <div class="required-note">
        <span class="required-mark">必須</span> マークのある項目は入力必須項目です
    </div>

    <form action="" method="post" class="user-info-form">
        <div class="form-row">
            <div class="form-group">
                <label for="name">氏名 <span class="required-mark">必須</span></label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required readonly>
            </div>
            <div class="form-group">
                <label for="kana">氏名カナ <span class="required-mark">必須</span></label>
                <input type="text" id="kana" name="kana" value="<?php echo htmlspecialchars($user['kana']); ?>" required readonly>
            </div>
            <div class="form-action">
                <button type="button" class="edit-button">氏名・カナ変更</button>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="birth_date">生年月日</label>
                <input type="date" id="birth_date" name="birth_date" value="<?php echo htmlspecialchars($user['birth_date']); ?>" readonly>
            </div>
        </div>

<!-- 以下未修正 -->
        <div class="form-group">
            <label>性別 <span class="required">必須</span></label>
            <div class="radio-group">
                <input type="radio" id="male" name="gender" value="男性" <?php echo $user['gender'] === '男性' ? 'checked' : ''; ?> required>
                <label for="male">男性</label>
                <input type="radio" id="female" name="gender" value="女性" <?php echo $user['gender'] === '女性' ? 'checked' : ''; ?> required>
                <label for="female">女性</label>
            </div>
        </div>

        <div class="form-group">
            <label for="phone">電話番号 <span class="required">必須</span></label>
            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">連絡先メールアドレス <span class="required">必須</span></label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>

        <div class="form-group">
            <label for="postal_code">郵便番号 <span class="required">必須</span></label>
            <input type="text" id="postal_code" name="postal_code" value="<?php echo htmlspecialchars($user['postal_code']); ?>" required>
            <button type="button" class="address-lookup">住所検索</button>
        </div>

        <div class="form-group">
            <label for="prefecture">都道府県 <span class="required">必須</span></label>
            <select id="prefecture" name="prefecture" required>
                <option value="">選択してください</option>
                <!-- 都道府県のオプションを追加 -->
            </select>
        </div>

        <div class="form-group">
            <label for="city">市区町村 <span class="required">必須</span></label>
            <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($user['city']); ?>" required>
        </div>

        <div class="form-group">
            <label for="address1">町名・番地 <span class="required">必須</span></label>
            <input type="text" id="address1" name="address1" value="<?php echo htmlspecialchars($user['address1']); ?>" required>
        </div>

        <div class="form-group">
            <label for="address2">建物名・部屋番号</label>
            <input type="text" id="address2" name="address2" value="<?php echo htmlspecialchars($user['address2']); ?>">
        </div>

        <div class="form-group">
            <label for="occupation">職業 <span class="required">必須</span></label>
            <select id="occupation" name="occupation" required>
                <option value="">選択してください</option>
                <!-- 職業のオプションを追加 -->
            </select>
        </div>

        <div class="form-group">
            <label for="nationality">国籍</label>
            <input type="text" id="nationality" name="nationality" value="<?php echo htmlspecialchars($user['nationality']); ?>">
        </div>

        <div class="form-actions">
            <button type="submit" class="submit-button">確認して次へ・ステップ2へ進む</button>
        </div>
    </form>
</div>