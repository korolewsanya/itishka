<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Сайты</title>
    <link rel="stylesheet" type="text/css" href="site.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Marck+Script&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php include "header.html"; ?>
    </header>
    
    <main>
        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная страница kovka-->
            <article class="layout-card">
                <h2>Интернет магазин. Выполнен на PHP без фреймворков</h2>
                <div class="card-preview">
                    <img src="img/site/kovka/glav.png" alt="Превью главной страницы">
                </div>
                <br>
                <a href="site_kovka.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

            <!-- 2. страница kovka-LARAVEL -->
            <article class="layout-card">
                <h2>Интернет магазин. Выполнен на LARAVEL + LIVEWIRE</h2>
                <div class="card-preview">
                    <img src="img/site/kovka-laravel/Товары.png" alt="Товары">
                </div>
                <br>
                <a href="site_kovka-laravel.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>
</html>