<?php
$MESS["SEC_REDIRECT_ACTIONS"] = "Дії захисту від фішингу";
$MESS["SEC_REDIRECT_ACTIONS_HEADER"] = "Дії";
$MESS["SEC_REDIRECT_ACTION_REDIRECT"] = "Перенаправити на заданий URL.";
$MESS["SEC_REDIRECT_ACTION_REDIRECT_URL"] = "URL:";
$MESS["SEC_REDIRECT_ADD"] = "Додати";
$MESS["SEC_REDIRECT_BUTTON_OFF"] = "Вимкнути захист редиректів від фішингу";
$MESS["SEC_REDIRECT_BUTTON_ON"] = "Увімкнути захист редиректів від фішингу";
$MESS["SEC_REDIRECT_HREF_SIGN"] = "Додавати цифровий підпис до перелічених нижче URL.";
$MESS["SEC_REDIRECT_LOG"] = "Занести спробу фішингу у журнал";
$MESS["SEC_REDIRECT_MAIN_TAB"] = "Захист редиректів";
$MESS["SEC_REDIRECT_MAIN_TAB_TITLE"] = "Увімкнення захисту редиректів від фішингу.";
$MESS["SEC_REDIRECT_MESSAGE"] = "Повідомлення";
$MESS["SEC_REDIRECT_METHODS"] = "Методи захисту від фішингу:";
$MESS["SEC_REDIRECT_METHODS_HEADER"] = "Методи";
$MESS["SEC_REDIRECT_NOTE"] = "<p>Фішинг (англ. phishing, від password — пароль та fishing — рибна ловля, вивуджування) — вид інтернет-шахрайства, метою якого є отримання доступу до конфіденційних даних користувачів (наприклад, логінів і паролів).</p>
<p>Це досягається шляхом проведення масових розсилок електронних листів від імені популярних брендів, наприклад, від імені соціальних мереж, банків, порталів. У листі часто міститься пряме посилання на сайт, яку ззовні не відрізнити від справжньої.</p>
<p>Наприклад, така: </p>
<p>http://www.good-company.com/redirect.php?event1=www&event2=%D0%BE%D1%87%D0%B5%D0%BD%D1%8C%D0%B4%D0%BB%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5&goto=www.good-conpany.com&event3=%D0%BE%D1%87%D0%B5%D0%BD%D1%8C%D0%B4%D0%BB%D0%B8%D0%BD%D0%BD%D0%BE%D0%B5%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D0%B5</p>
<p>Зрозуміло, адреси сайту фішерів тут не видно — вона замаскована редіректом, тобто автоматичним перенаправленням запиту користувача між сайтами. Оскільки посилання дуже довге, користувач може не розібратися чи просто не помітити, що має справу не з посиланням на сайт сервісу, а з перенаправленням на сайт фішерів.</p>
<p> Опинившись на такому сайті, користувач може повідомити шахраям цінну інформацію, що дозволяє отримати доступ до облікових записів і банківських рахунків.</p>
<p> Фішинг грунтується на незнанні користувачами основ мережевої безпеки: зокрема, багато хто не знають простого факту: сервіси не розсилають листів з проханнями повідомити свої облікові дані, пароль та інше.</p>
<p> Захист редиректів від фішингу здійснюється двома методами:
<ul style=\"font-size:100%\">
<li> По-перше, можна визначити зловмисний редірект по відсутності заголовка http протоколу — сторінки, що посилається.</li>
<li> По-друге, можна підписати посилання, які генеруються на сайті, цифровим підписом і перевіряти цей підпис при спробі редіректу.</li>
</ul>
</p>
<p> Захист може полягати у наступних варіантах дій:
<ul style=\"font-size:100%\">
<li> Або показати користувачеві попередження, що його буде перенаправлено на інший сайт і показати на якій саме.</li>
<li> Або примусово перенаправити його на завідомо безпечну адресу. Наприклад, головну сторінку сайту, що атакується.</li>
</ul>
</p>
<p><i>Рекомендується увімкнути для високого рівня.</i></p>";
$MESS["SEC_REDIRECT_OFF"] = "Захист редиректів від фішингу вимкнено";
$MESS["SEC_REDIRECT_ON"] = "Захист редиректів від фішингу увімкнено";
$MESS["SEC_REDIRECT_PARAMETERS_TAB"] = "Параметри";
$MESS["SEC_REDIRECT_PARAMETERS_TAB_TITLE"] = "Налаштування параметрів захисту редиректів";
$MESS["SEC_REDIRECT_PARAMETER_NAME"] = "Ім'я параметру:";
$MESS["SEC_REDIRECT_REFERER_CHECK"] = "Перевіряти наявність HTTP заголовка, що описує сторінку, яка посилається.";
$MESS["SEC_REDIRECT_REFERER_SITE_CHECK"] = "HTTP заголовок, що описує сторінку, яка посилається, повинен містити поточний сайт.";
$MESS["SEC_REDIRECT_SHOW_MESSAGE_AND_STAY"] = "Показати повідомлення про спробу перенаправлення на інший сайт.";
$MESS["SEC_REDIRECT_SYSTEM"] = "Системні";
$MESS["SEC_REDIRECT_TITLE"] = "Захист редиректів від фішингу";
$MESS["SEC_REDIRECT_URL"] = "URL:";
$MESS["SEC_REDIRECT_URLS"] = "URLs, що підписуються ";
$MESS["SEC_REDIRECT_USER"] = "Користувацькі";
