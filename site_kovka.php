<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Сайт на PHP без фреймфорков</title>
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
        <!-- Шапка проекта kovka/ Описание -->
        <section class="project-intro">
            <h2>Интернет-магазин кованых изделий</h2>
            <p class="tech-stack">
                Чистый PHP без фреймворков. Стек: HTML5, CSS3, PHP 8.4, MySQL, JavaScript, jQuery, AJAX.
            </p>
            <p class="tech-stack">
                Проект придуман, спроектирован и реализован полностью самостоятельно: от идеи до деплоя и публикации мобильного приложения.
                <br>
                Изображения для каталога также созданы самостоятельно — отрисовка и монтаж в графических редакторах.
            </p>    
            <div class="project-links">
                <a href="https://example.com" target="_blank" rel="noopener">Демо: site.kovka.ru</a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/kovka" target="_blank" rel="noopener">Код: github.com/korolewsanya/kovka</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная страница -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/site/kovka/glav.png" alt="Превью главной страницы">
                </div>
            </article>

            <!-- 2. Каталог изделий -->
            <article class="layout-card">
                <h2>Каталог изделий</h2>
                <div class="card-preview">
                    <img src="img/site/kovka/izdelie.png" alt="Превью каталога">
                </div>
            </article>

            <!-- 3. Оформление заказа -->
            <article class="layout-card">
                <h2>Оформление заказа</h2>
                <div class="card-preview">
                    <img src="img/site/kovka/zakaz.png" alt="Превью оформления заказа">
                </div>
            </article>

            <!-- 4. Успешный заказ -->
            <article class="layout-card">
                <h2>Успешный заказ</h2>
                <div class="card-preview">
                    <img src="img/site/kovka/finish.png" alt="Превью успешного заказа">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>
</html>