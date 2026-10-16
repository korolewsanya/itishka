<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>IT_разработка</title>
    <link rel="stylesheet" type="text/css" href="glav.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Marck+Script&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php include "header.html"; ?>
    </header>

    <main>
        <article style="background-color: aliceblue; " class="col-4 ">
            <h2>Сайты</h2>
            <p>Создаю сайты любой сложности: лендинги, сайты - визитки, интернет-магазины. </p>
            <p class="pris">Два подхода в работе</p>
                <ul>
                    <li><b>На PHP без фреймворков</b> — максимальная лёгкость, прозрачность кода, отсутствие зависимостей.</li>
                    <li><b>На Laravel</b> — быстрая разработка, масштабируемость, современная экосистема.</li>
                </ul>
                <p class="pris">Что входит в работу</p>
                <ul>
                    <li>Адаптивный интерфейс и вёрстка</li>
                    <li>Бизнес-логика, работа с БД</li>
                    <li>Кнопки связи через Telegram и WhatsApp</li>
                    <li>REST API для мобильных приложений</li>
                    <li>Деплой: домен, SSL, хостинг</li>
                </ul>

            <div class="stack">
                <b>Стек:</b> 
                HTML5, CSS3, PHP 8.4, Laravel 13, Livewire 4, Tailwind CSS, Alpine.js, Vite, MySQL, JavaScript, jQuery, AJAX, REST API.  
            </div>
            <br>
            <div style="text-align: center; margin-bottom: 20px; ">
                <button class="button" onclick="window.location.href = 'site.php';">Примеры работ</button>
            </div>
        </article>

        <article style="background-color: skyblue; " class="col-4 ">
            <h2>Мобильные приложения</h2>
            <p>Разрабатываю Android-приложения для личного использования, а также полноценные бизнес-приложения, дополняющие веб-проекты.</p>
            <p class="pris">Что умею:</p>
                <ul>
                    <li>Нативные приложения (Java, API 17+)</li>
                    <li>Локальное хранение данных: SQLite</li>
                    <li>Удалённое хранение данных: MySQL через REST API</li>
                    <li>Сеть: Volley, JSON, Gson</li>
                    <li>Изображения: Glide</li>
                    <li>Распознавание речи, уведомления, разрешения</li>
                    <li>Полный цикл до публикации в RuStore</li>
                </ul>

                    <p class="pris">Два типа проектов</p>
                    <ul>
                        <li><b>Для себя</b> — приложения для личного пользования</li>
                        <li><b>Для бизнеса</b> — мобильные админки и CRM</li>
                    </ul>

                    <div class="stack"><b>Стек:</b> Android (Java), Volley, Gson, Glide, SQLite, REST API (JSON), MySQL (backend)</div>
                    <br>
            <div class="center" style="margin-bottom: 20px; ">
                <button class="button" onclick="window.location.href = 'app.php';">Примеры работ</button>
            </div>
        </article>

        <article style="background-color: paleturquoise; " class="col-4 ">
            <h2>CRM системы</h2>
            <p>Проектирую и внедряю CRM-системы и админ-панели для управления бизнесом — от учёта заказов до финансов и сотрудников.</p>
            <p class="pris">Что входит в CRM</p>
                <ul>
                    <li>Заказы, клиенты, товары, материалы</li>
                    <li>Финансы: доходы, расходы, зарплаты</li>
                    <li>Сотрудники, права доступа</li>
                    <li>Рабочий процесс и этапы производства</li>
                    <li>Отчётность и аналитика</li>
                    <li>REST API для мобильных приложений</li>
                </ul>
            <p class="pris">Два подхода в работе</p>
                <ul>
                    <li><b>На чистом PHP</b> — с нуля, включая REST API без фреймворков</li>
                    <li><b>На Laravel + Filament</b> — современный стек для быстрой разработки</li>
                </ul>

            <div class="stack"><b>Стек:</b> HTML5, CSS3, PHP 8.4, Laravel 13, Livewire 4, Filament 5, MySQL, REST API, Tailwind CSS, Alpine.js, Vite, Java (Android).</div>
            <br>
            <div style="text-align: center; margin-bottom: 20px; ">
                <button class="button" onclick="window.location.href = 'CRM.php';">Примеры работ</button>
            </div>
        </article>

    </main>
    <footer>
        <?php include "footer.html"; ?>
    </footer>

</body>

</html>