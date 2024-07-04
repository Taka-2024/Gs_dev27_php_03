// main.js

document.addEventListener('DOMContentLoaded', function() {
    const mainContent = document.getElementById('main-content');
    const menuItems = document.querySelectorAll('.menu-item, .sub-menu-item');

    function loadContent(page) {
        // ページパスの正規化
        const normalizedPath = page.replace(/\\/g, '/');
        
        fetch(`${normalizedPath}.php`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                mainContent.innerHTML = html;
            })
            .catch(error => {
                console.error('Error loading content:', error);
                mainContent.innerHTML = '<p>エラーが発生しました。再度お試しください。</p>';
            });
    }

    menuItems.forEach(item => {
        item.addEventListener('click', function(event) {
            const page = this.dataset.page;
            const submenu = this.dataset.submenu;

            if (submenu) {
                // サブメニューの表示/非表示の切り替え
                event.preventDefault();
                this.classList.toggle('active');
                const subMenu = this.nextElementSibling;
                if (subMenu && subMenu.classList.contains('sub-menu')) {
                    subMenu.style.display = this.classList.contains('active') ? 'block' : 'none';
                }
            } else if (page) {
                // ページコンテンツの読み込み
                event.preventDefault();
                loadContent(page);
            }
        });
    });

    // 初期ページの読み込み
    loadContent('pages/user-dashboad');
});