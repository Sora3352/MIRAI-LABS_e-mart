<?php
// 商品データ（PHPで管理）
$products = [
    [
        "name" => "商品A",
        "img" => "https://via.placeholder.com/100x100?text=A",
        "link" => "https://example.com/a"
    ],
    [
        "name" => "商品B",
        "img" => "https://via.placeholder.com/100x100?text=B",
        "link" => "https://example.com/b"
    ],
    [
        "name" => "商品C",
        "img" => "https://via.placeholder.com/100x100?text=C",
        "link" => "https://example.com/c"
    ],
    [
        "name" => "商品D",
        "img" => "https://via.placeholder.com/100x100?text=D",
        "link" => "https://example.com/d"
    ],
    [
        "name" => "商品E",
        "img" => "https://via.placeholder.com/100x100?text=E",
        "link" => "https://example.com/e"
    ]
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-MART 商品ページ</title>
<style>
    body {
        font-family: "Meiryo", sans-serif;
        margin: 40px;
    }
    h2 {
        font-size: 1.2em;
        font-weight: bold;
        border-bottom: 2px solid #ccc;
        display: inline-block;
        margin-bottom: 10px;
    }
    .categories a {
        text-decoration: underline;
        color: #333;
        margin-right: 10px;
    }
    .categories a:hover {
        color: #0078ff;
    }
    .products {
        display: flex;
        align-items: center;
    }
    .product-container {
        display: flex;
        overflow: hidden;
        width: 600px;
    }
    .product {
        width: 100px;
        text-align: center;
        margin: 10px;
        flex-shrink: 0;
    }
    .product img {
        width: 100px;
        height: 100px;
        cursor: pointer;
        border-radius: 10px;
        transition: transform 0.2s;
    }
    .product img:hover {
        transform: scale(1.05);
    }
    .next-button {
        font-size: 24px;
        cursor: pointer;
        background: none;
        border: none;
        margin-left: 10px;
    }
</style>
</head>
<body>

<h2>商品カテゴリ</h2>
<div class="categories">
    <a href="https://example.com/category1" target="_blank">食品＆飲料</a>
    <a href="https://example.com/category2" target="_blank">パソコン</a>
    <a href="https://example.com/category3" target="_blank">家電</a>
    <a href="https://example.com/category4" target="_blank">健康・美容</a>
    <a href="https://example.com/category5" target="_blank">アウトドア</a>
</div>

<hr>

<h2>お得なE-MARTオリジナル商品</h2>
<div class="products">
    <div class="product-container" id="product-container">
        <?php foreach ($products as $p): ?>
        <div class="product">
            <a href="<?= $p['link'] ?>" target="_blank">
                <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>">
            </a>
            <p><?= htmlspecialchars($p['name']) ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <button class="next-button" id="next-btn">▶</button>
</div>

<script>
const container = document.getElementById('product-container');
const nextBtn = document.getElementById('next-btn');

let scrollAmount = 0;

nextBtn.addEventListener('click', () => {
    scrollAmount += 200;
    if (scrollAmount > container.scrollWidth - container.clientWidth) {
        scrollAmount = 0; // 最初に戻す
    }
    container.scrollTo({
        left: scrollAmount,
        behavior: 'smooth'
    });
});
</script>

</body>
</html>
