<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Приложения</title>
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
        <!-- Сетка с макетами страниц (как на скриншоте) -->
        <section class="layout-grid">
            
            <!-- 1. CRM -->
            <article class="layout-card">
                <h2>Админка и CRM</h2>
                <div class="card-preview">
                    <img src="img/App/kovka-laravel/Заказы.png" alt="Превью главной страницы">
                </div>
                <br>
                <a href="app_kovka-laravel.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

            <!-- 2. Тренажер по математике -->
            <article class="layout-card">
                <h2>Математика</h2>
                <div class="card-preview">
                    <img src="img/App/Matemaka/Пример.png" alt="Пример">
                </div>
                <br>
                <a href="app_Matemaka.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

            <!-- 3. Тренажер по русскому языку -->
            <article class="layout-card">
                <h2>Русский язык</h2>
                <div class="card-preview">
                    <img src="img/App/Chasti_rechi/Местоимение.png" alt="Местоимение">
                </div>
                <br>
                <a href="app_Chasti_rechi.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

            <!-- 4. Записная книжка -->
            <article class="layout-card">
                <h2>Записная книжка</h2>
                <div class="card-preview">
                    <img src="img/App/ZapisnayaKniga/Просмотр.png" alt="Просмотр">
                </div>
                <br>
                <a href="app_ZapisnayaKniga.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

            <!-- 5. Доходы и расходы -->
            <article class="layout-card">
                <h2>Доходы и расходы</h2>
                <div class="card-preview">
                    <img src="img/App/DohodRashod/СписокДоходов.png" alt="СписокДоходов">
                </div>
                <br>
                <a href="app_DohodRashod.php" target="_blank" rel="noopener">🔗 Подробнее</a>
            </article>

        </section>
    </main>
    
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>