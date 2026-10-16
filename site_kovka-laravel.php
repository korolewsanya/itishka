<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Сайт на LARAVEL + LIVEWIRE
    </title>
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
        </section>

        <!-- Шапка проекта kovka-laravel/ Описание -->
        <section class="project-intro">
            <h2>Интернет-магазин кованых изделий</h2>
            <p class="tech-stack">
                Выполнен на фреймфорке <strong>LARAVEL</strong>. 
                Стек: HTML5, PHP 8.4, Laravel 13, Livewire 4, MySQL, Tailwind CSS, Alpine.js, Vite.
            </p>
            <p class="tech-stack">
                Проект придуман, спроектирован и реализован полностью самостоятельно: от идеи до деплоя и публикации мобильного приложения.
                <br>
                Изображения для каталога также созданы самостоятельно — отрисовка и монтаж в графических редакторах.
            </p> 
            <div class="project-links">
                <a href="https://example.com" target="_blank" rel="noopener">🔗 Ссылка на сайт </a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/kovka-laravel" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

 <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная страница -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/site/kovka-laravel/главная.png" alt="Превью главной страницы">
                </div>
            </article>

            <!-- 2. Товары -->
            <article class="layout-card">
                <h2>Товары</h2>
                <div class="card-preview">
                    <img src="img/site/kovka-laravel/Товары.png" alt="Товары">
                </div>
            </article>

            <!-- 3. Поиск изделий -->
            <article class="layout-card">
                <h2>Поиск изделий</h2>
                <div class="card-preview">
                    <img src="img/site/kovka-laravel/поиск.png" alt="Поиск">
                </div>
            </article>

            <!-- 4. Оформление заказа -->
            <article class="layout-card">
                <h2>Оформление заказа</h2>
                <div class="card-preview">
                    <img src="img/site/kovka-laravel/Заказ.png" alt="Оформление заказа">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>
</html>