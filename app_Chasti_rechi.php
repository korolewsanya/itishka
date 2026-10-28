<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Части речи</title>
    <link rel="stylesheet" type="text/css" href="app.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Marck+Script&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
   <header>
        <?php include "header.html"; ?>
    </header>
    
    <main>
         <!-- Шапка проекта kovka-laravel/ Описание -->
        <section class="project-intro">
            <h2>Android-приложение тренажёр по русскому языку на тему «Части речи»</h2>
            <p class="tech-stack">
                Стек: Android (Java)
            </p>    
            <div class="project-links">
                <a href="https://www.rustore.ru/catalog/app/rus.test.chasti_rechi" target="_blank" rel="noopener">🔗 Ссылка на RuStore</a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/Chasti_rechi" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/App/Chasti_rechi/Главная.png" alt="Главная страница">
                </div>
                <br>
            </article>

            <!-- 2. Глаголы -->
            <article class="layout-card">
                <h2>Глаголы</h2>
                <div class="card-preview">
                    <img src="img/App/Chasti_rechi/Глаголы.png" alt="Глаголы">
                </div>
            </article>

            <!-- 3. Местоимение -->
            <article class="layout-card">
                <h2>Местоимение</h2>
                <div class="card-preview">
                    <img src="img/App/Chasti_rechi/Местоимение.png" alt="Местоимение">
                </div>
            </article>

            <!-- 4. Предлоги -->
            <article class="layout-card">
                <h2>Предлоги</h2>
                <div class="card-preview">
                    <img src="img/App/Chasti_rechi/Предлоги.png" alt="Предлоги">
                </div>
            </article>

             <!-- 5. Существительное -->
            <article class="layout-card">
                <h2>Существительное</h2>
                <div class="card-preview">
                    <img src="img/App/Chasti_rechi/Существительное.png" alt="Существительное">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>