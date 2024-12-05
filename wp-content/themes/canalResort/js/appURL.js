document.addEventListener('DOMContentLoaded', function () {
    // リンクを取得
    var appDownloadLink = document.querySelectorAll('.app-download-link');
    console.log(appDownloadLink);

    // リンクが存在する場合、クリックイベントを監視
    if (appDownloadLink) {
        for(let i = 0; i < appDownloadLink.length; i ++) {
            appDownloadLink[i].addEventListener('click', function (event) {
                event.preventDefault(); // デフォルトのリンク動作をキャンセル
        
                // ユーザーエージェントを取得
                var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    
                // iOSの場合
                if (/iPhone|iPad|iPod/i.test(userAgent)) {
                window.location.href = 'https://apps.apple.com/jp/app/%E6%B8%A9%E6%B3%89%E3%83%90%E3%83%AB%E3%82%B3%E3%83%8B%E3%83%BC-king-queen/id6717577509'; // iOS用のURLにリダイレクト
                }
                // Androidの場合
                else if (/Android/i.test(userAgent)) {
                window.location.href = 'https://play.google.com/store/apps/details?id=net.mail_mobile.kandq'; // Android用のURLにリダイレクト
                }
                else {
                alert('お使いのデバイスではサポートされておりません。'); // 対応していないデバイスへの通知
                }
            });
        }
    }
});
