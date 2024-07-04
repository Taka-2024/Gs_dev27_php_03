
<?php
// pages/user-dashboard.php

// ここでユーザー固有のデータを取得する処理を行います（例：データベースからの取得）
$currentStatus = "稼働中"; // 例
$projectCount = 3; // 例
$proposalCount = 2; // 例
$negotiationCount = 1; // 例
?>

<div class="dashboard-container">
    <h2>ダッシュボード</h2>
    
    <div class="dashboard-grid">
        <div class="dashboard-item">
            <h3>現在状況</h3>
            <p>ステータス: <?php echo htmlspecialchars($currentStatus); ?></p>
            <p>案件数: <?php echo $projectCount; ?></p>
            <p>提案数: <?php echo $proposalCount; ?></p>
            <p>商談数: <?php echo $negotiationCount; ?></p>
        </div>

        <div class="dashboard-item">
            <h3>商談スケジュール</h3>
            <?php if ($negotiationCount > 0): ?>
                <ul>
                    <li>2024/07/01 14:00 - A社との商談</li>
                    <!-- 実際のスケジュールデータをループで表示 -->
                </ul>
            <?php else: ?>
                <p>現在予定されている商談はありません。</p>
            <?php endif; ?>
        </div>

        <div class="dashboard-item">
            <h3>コーディネーター提案リスト</h3>
            <?php if ($proposalCount > 0): ?>
                <ul>
                    <li>B社からの新規提案があります</li>
                    <!-- 実際の提案データをループで表示 -->
                </ul>
            <?php else: ?>
                <p>現在新しい提案はありません。</p>
            <?php endif; ?>
        </div>

        <div class="dashboard-item">
            <h3>スカウトリスト</h3>
            <p>新着スカウト: 3件</p>
            <button onclick="viewScouts()">スカウトを確認する</button>
        </div>
    </div>
</div>

<script>
function viewScouts() {
    // スカウトリストページへの遷移やモーダル表示などの処理
    alert('スカウトリストページへ遷移します。');
    // 実際にはloadContent('pages/scout-list')などを呼び出す
}
</script>