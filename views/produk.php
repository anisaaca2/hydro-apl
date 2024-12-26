<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Produk</h1>
    <ul>
        <?php foreach ($produk as $item): ?>
            <li>
                <?= htmlspecialchars($item['name']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/hydro-apl/">Kembali ke Halaman Utama</a>
</body>
</html>
