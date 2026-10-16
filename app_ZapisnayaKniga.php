<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Записная книжка
    </title>
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
         <!-- Шапка проекта / Описание -->
        <section class="project-intro">
            <h2>Android-приложение для записей</h2>
            <p class="tech-stack">
                Стек: Android (Java), SQLite
            </p>    
            <div class="project-links">
                <a href="https://example.com" target="_blank" rel="noopener">🔗 Ссылка на RuStore</a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/ZapisnayaKniga" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Запись -->
            <article class="layout-card">
                <h2>Запись</h2>
                <div class="card-preview">
                    <img src="img/App/ZapisnayaKniga/Запись.png" alt="Запись">
                </div>
                <br>
            </article>

            <!-- 2. Папки -->
            <article class="layout-card">
                <h2>Папки</h2>
                <div class="card-preview">
                    <img src="img/App/ZapisnayaKniga/Папки.png" alt="Папки">
                </div>
            </article>

            <!-- 3. Просмотр -->
            <article class="layout-card">
                <h2>Просмотр</h2>
                <div class="card-preview">
                    <img src="img/App/ZapisnayaKniga/Просмотр.png" alt="Просмотр">
                </div>
            </article>

            <!-- 4. Редактирование -->
            <article class="layout-card">
                <h2>Редактирование</h2>
                <div class="card-preview">
                    <img src="img/App/ZapisnayaKniga/Редактирование.png" alt="Редактирование">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>