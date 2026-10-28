<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Доходы и расходы</title>
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
            <h2>Android-приложение для учёта личных доходов и расходов</h2>
            <p class="tech-stack">
                Стек: Android (Java) · SQLite
            </p>    
            <div class="project-links">
                <a href="https://https://www.rustore.ru/catalog/app/com.example.dohodrashod" target="_blank" rel="noopener">🔗 Ссылка на RuStore </a>&nbsp;&nbsp;
                <a href="https://github.com/korolewsanya/DohodRashod" target="_blank" rel="noopener">💻 Ссылка на GitHub</a>
            </div>
        </section>

        <!-- Сетка с макетами страниц -->
        <section class="layout-grid">
            
            <!-- 1. Главная -->
            <article class="layout-card">
                <h2>Главная страница</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/Главная.png" alt="Главная страница">
                </div>
                <br>
            </article>

            <!-- 2. Ввод -->
            <article class="layout-card">
                <h2>Ввод</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/Ввод.png" alt="Ввод">
                </div>
            </article>

            <!-- 3. СписокДоходов -->
            <article class="layout-card">
                <h2>Список Доходов</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/СписокДоходов.png" alt="Список Доходов">
                </div>
            </article>

            <!-- 4. СписокРасходов -->
            <article class="layout-card">
                <h2>Список Расходов</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/СписокРасходов.png" alt="Список Расходов">
                </div>
            </article>

            <!-- 5. Сравнение -->
            <article class="layout-card">
                <h2>Сравнение</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/Сравнение.png" alt="Сравнение">
                </div>
            </article>

             <!-- 6. ВыборКатегории -->
            <article class="layout-card">
                <h2>ВыборКатегории</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/ВыборКатегории.png" alt="ВыборКатегории">
                </div>
                <br>
            </article>

            <!-- 7. Удаление -->
            <article class="layout-card">
                <h2>Удаление</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/Удаление.png" alt="Удаление">
                </div>
            </article>

            <!-- 8. Редактирование -->
            <article class="layout-card">
                <h2>Редактирование</h2>
                <div class="card-preview">
                        <img src="img/App/DohodRashod/Редактирование.png" alt="Редактирование">
                </div>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>