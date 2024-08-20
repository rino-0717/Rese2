<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ - Rese</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f0f0f0; }
        .container { max-width: 1200px; margin: 0 auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .logo { font-size: 24px; font-weight: bold; color: #2196F3; }
        h1 { font-size: 24px; margin-bottom: 20px; }
        .content { display: flex; gap: 20px; }
        .reservations, .favorite-shops { flex: 1; }
        .reservation-card { background-color: #2196F3; color: white; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .reservation-card h3 { display: flex; justify-content: space-between; align-items: center; margin-top: 0; }
        .close-btn { background: none; border: none; color: white; font-size: 20px; cursor: pointer; }
        .shop-cards { display: flex; gap: 20px; flex-wrap: wrap; }
        .shop-card { background-color: white; border-radius: 5px; overflow: hidden; width: calc(50% - 10px); }
        .shop-card img { width: 100%; height: 200px; object-fit: cover; }
        .shop-info { padding: 15px; }
        .shop-info h3 { margin-top: 0; }
        .shop-info p { margin: 5px 0; }
        .button-group { display: flex; justify-content: space-between; margin-top: 10px; }
        .details-btn, .favorite-btn { padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer; }
        .details-btn { background-color: #2196F3; color: white; }
        .favorite-btn { background-color: white; color: red; border: 1px solid red; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Rese</div>
        </div>
        
        <h1>testさん</h1>
        
        <div class="content">
            <div class="reservations">
                <h2>予約状況</h2>
                <div class="reservation-card">
                    <h3>
                        予約1
                        <button class="close-btn">×</button>
                    </h3>
                    <p>Shop: 仙人</p>
                    <p>Date: 2021-04-01</p>
                    <p>Time: 17:00</p>
                    <p>Number: 1人</p>
                </div>
            </div>
            
            <div class="favorite-shops">
                <h2>お気に入り店舗</h2>
                <div class="shop-cards">
                    <div class="shop-card">
                        <img src="https://via.placeholder.com/300x200.png?text=仙人" alt="仙人">
                        <div class="shop-info">
                            <h3>仙人</h3>
                            <p>#東京都 #寿司</p>
                            <div class="button-group">
                                <button class="details-btn">詳しくみる</button>
                                <button class="favorite-btn">♥</button>
                            </div>
                        </div>
                    </div>
                    <div class="shop-card">
                        <img src="https://via.placeholder.com/300x200.png?text=牛助" alt="牛助">
                        <div class="shop-info">
                            <h3>牛助</h3>
                            <p>#大阪府 #焼肉</p>
                            <div class="button-group">
                                <button class="details-btn">詳しくみる</button>
                                <button class="favorite-btn">♥</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>