<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Marck+Script&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="site.css" />
    <title>CRM_kovka-laravel</title>
</head>

<body>
    <header>
        <?php include "header.html"; ?>
    </header>
    
    <main>
        <!-- Шапка проекта kovka-laravel/ Описание -->
        <section class="project-intro">
            <h2>Админ-панель + CRM для интернет-магазина кованых изделий</h2>
            <p class="tech-stack">
                Выполнено на фреймфорке <strong>LARAVEL</strong>. 
                Стек: HTML5, PHP 8.4, Laravel 13, Livewire 4, MySQL, Tailwind CSS, Alpine.js, Vite.
            </p>    
            <div class="project-links">
                <a href="https://example.com" target="_blank" rel="noopener">🔗 Ссылка на сайт (логин: admin@kovka.com, пароль:12345678)</a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/kovka-laravel" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная страница -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka-laravel/Инфопанель.png" alt="Превью главной страницы">
                </div>
            </article>

            <!-- 2. Товары -->
            <article class="layout-card">
                <h2>Товары</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka-laravel/Товары.png" alt="Товары">
                </div>
            </article>

            <!-- 3. Материалы -->
            <article class="layout-card">
                <h2>Материалы</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka-laravel/Материалы.png" alt="Материалы">
                </div>
            </article>

            <!-- 4. Заказы -->
            <article class="layout-card">
                <h2>Заказы</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka-laravel/ЗаказыРедактирование.png" alt="Заказы">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>