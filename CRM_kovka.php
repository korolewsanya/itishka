<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Marck+Script&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="site.css" />
    <title>CRM_kovka</title>
</head>

<body>
 <header>
        <?php include "header.html"; ?>
    </header>
    
    <main>
        <!-- Шапка проекта kovka/ Описание -->
        <section class="project-intro">
            <h2>Админ-панель + CRM для интернет-магазина кованых изделий</h2>
            <p class="tech-stack">
                Выполнено на <strong>PHP</strong> (без фреймворков). 
                Используемый стек технологий: HTML5, CSS3, PHP 8.4, MySQL, JavaScript, jQuery, AJAX.
            </p>
            <div class="project-links">
                <a href="https://example.com" target="_blank" rel="noopener">🔗 Ссылка на сайт (пароль: 1111)</a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/kovka" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц (как на скриншоте) -->
        <section class="layout-grid">
            
            <!-- 1. Главная страница -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka/admin.png" alt="Главная страница">
                </div>
            </article>

            <!-- 2. Финансы -->
            <article class="layout-card">
                <h2>Финансы</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka/fin.png" alt="Финансы">
                </div>
            </article>

            <!-- 3. Изделия -->
            <article class="layout-card">
                <h2>Изделия</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka/izdelie.png" alt="Изделия">
                </div>
            </article>

            <!-- 4. Детали заказа -->
            <article class="layout-card">
                <h2>Детали заказа</h2>
                <div class="card-preview">
                    <img src="img/CRM/kovka/zakazDetail.png" alt="Детали заказа">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>