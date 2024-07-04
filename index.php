<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKILL LAKE</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <div class="header-container">
            <nav>
                <div class="logo">SKILL LAKE</div>
                <ul>
                    <li><a href="#features">特徴</a></li>
                    <li><a href="#benefits">メリット</a></li>
                    <li><a href="./select.php">お問い合わせ</a></li>
                    <li><a href="./login-form.php" class="btn btn-primary">サインイン</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="hero">
            <div class="container">
                <h1>スキルで繋がる、<br>新しいキャリアの形</h1>
                <p>AIを活用した最先端のスキルマッチングプラットフォーム</p>
                <a href="#" class="btn btn-primary btn-large">今すぐ始める</a>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <h2>主な特徴</h2>
                <div class="feature-grid">
                    <div class="feature-item">
                        <img src="img\AI.svg" alt="AIマッチング">
                        <h3>AIマッチング</h3>
                        <p>最新のAI技術で、あなたのスキルと最適な求人をマッチング</p>
                    </div>
                    <div class="feature-item">
                        <img src="img\visual.svg" alt="スキル可視化">
                        <h3>スキル可視化</h3>
                        <p>あなたのスキルセットを分かりやすく可視化</p>
                    </div>
                    <div class="feature-item">
                        <img src="img\career.svg" alt="キャリア分析">
                        <h3>キャリア分析</h3>
                        <p>現在のスキルと市場ニーズを比較し、最適なキャリアパスを提案</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="benefits">
            <div class="container">
                <h2>メリット</h2>
                <div class="tabs">
                    <button class="tab-btn active" data-target="individual">個人向け</button>
                    <button class="tab-btn" data-target="company">企業向け</button>
                </div>
                <div class="tab-content active" id="individual">
                    <div class="card">
                        <i class="fas fa-bullseye"></i>
                        <p>スキルに基づいた最適な求人の探索</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-chart-line"></i>
                        <p>キャリア分析とスキルギャップの可視化</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-rocket"></i>
                        <p>効率的なスキルアップのサポート</p>
                    </div>
                </div>
                <div class="tab-content" id="company">
                    <div class="card">
                        <i class="fas fa-search"></i>
                        <p>必要なスキルセットを持つ人材の効率的な発見</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-chess"></i>
                        <p>データに基づいた採用戦略の立案</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-industry"></i>
                        <p>業界のスキルトレンド分析</p>
                    </div>
                </div>
            </div>
        </section>

        <script>
            document.querySelectorAll('.tab-btn').forEach(button => {
                button.addEventListener('click', () => {
                    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
                    document.getElementById(button.getAttribute('data-target')).classList.add('active');
                });
            });
        </script>

        <section id="cta">
            <div class="container">
                <h2>今すぐ始めましょう</h2>
                <p>新しいキャリアの可能性が待っています</p>
                <a href="#" class="btn btn-primary btn-large">無料で登録</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h4>SKILL LAKE</h4>
                    <p>スキルベースの<br>キャリアマッチングプラットフォーム</p>
                </div>
                <div class="footer-column">
                    <h4>リンク</h4>
                    <ul>
                        <li><a href="#">ホーム</a></li>
                        <li><a href="#">特徴</a></li>
                        <li><a href="#">料金プラン</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>フォローする</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon">Twitter</a>
                        <a href="#" class="social-icon">LinkedIn</a>
                        <a href="#" class="social-icon">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SKILL LAKE. All rights reserved.</p>
            </div>
        </div>
    </footer>


</body>
</html>
