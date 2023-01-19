#Работа №1  
**Разработка статической веб-страницы**
1. Цель работы  
    Получить базовые навыки создания статических веб-страниц с использованием языка разметки HTML и
    каскадных таблиц стилей (CSS).
2. Задача  
По заданному вариантом макету разработать HTML-страницу. Страница должна корректно
отображаться в последних версиях браузеров Google Chrome, Safari, Mozilla Firefox. Необходимо
использовать Flexbox.  
Запрещается использование сторонних библиотек и фреймворков, необходимо использовать «чистые»
HTML и CSS.  
Результаты работы необходимо опубликовать в собственном репозитории на GitHub.  
Варианты заданий приводятся ниже. Также можете предложить собственные варианты (по
согласованию с преподавателем).

#Работа №2  
**Адаптивная верстка и media-запросы**  
Необходимо доработать страницу, полученную в результате выполнения работы №1 таким образом,
чтобы она адаптировалась к экранам различной ширины. В качестве ориентиров используйте как
минимум экран мобильного телефона.  
1. Варианты заданий  
Далее приводятся варианты заданий. Часть из них доступная по ссылке.  
 [Варианты №№1-4](https://www.figma.com/file/5EGZWDsnJEomjvuHDuG6TJ/Untitled)

#Работа №3
**Знакомство с языком JavaScript**
1. Цель  
Познакомиться с синтаксисом и семантикой языка JavaScript, понятием Document Object Model, Browser
Object Model.
2. Задача  
Дано: HTML-страница, на которой есть кнопки «Создать таблицу», «Добавить строку», «Удалить строку
№» и текстовое поле для ввода чисел. Далее описано поведение, связанное с нажатием на каждую из
них. По-умолчанию все кнопки, кроме «Создать таблицу» заблокированы (используйте атрибут
disabled). Таблица должна содержать не менее двух столбцов с произвольным содержимым, однако
первый столбец обязательно содержит номер строки.
3. Создать таблицу  
На страницу добавляется элемент <table>. Для простоты доступа к таблице сразу же задайте ей атрибут
id. При повторном нажатии на кнопку в случае, если таблица уже существует, необходимо показать
модальное окно с сообщением об ошибке (alert).
4. Добавить строку  
Происходит добавление новой строки в конец таблицы.
5. Удалить строку  
Выполняется удаление строки с указанным номером. Номер указывается в текстовом поле,
расположенном рядом с этой кнопкой, при этом должна выполняться валидация значений по
следующим признакам: во-первых, это должно быть число, а во-вторых, строка с соответствующим
номером должна существовать.

#Работа №4
**Разработка клиент-серверного приложения**  
1. Цель  
Изучить основы разработки серверных компонентов приложений, обработки HTTP-запросов.
2. Задача  
Основываясь на результатах выполнения лабораторной работы №2, разработать северную часть вебприложения с использованием языка PHP. Серверная часть должна возвращать пользователю
динамически формируемую веб-страницу, контент которой зависит от полученного запроса.
3. Шаг 1. Настройка веб-сервера  
Для начала необходимо настроить инфраструктуру, которая позволит динамически генерировать вебстраницы в ответ на HTTP-запросы пользователя. Существует множество веб-серверов, некоторые
распространенные, используемые в индустрии – Apache, Nginx, IIS. Развертывание для учебных целей
этих веб-серверов возможно, но может потребовать дополнительного обучения, не связанного с
данным курсом, поэтому предлагается использовать XAMPP. Это пакет приложений, включающий вебсервер (Apache), интерпретатор языка PHP, свободную реализацию СУБД MySQL – MariaDB, и другие
средства. Его легко установить по ссылкам:  
• для Windows: [скачать](https://disk.yandex.ru/d/FyhHB4xkOyKYxQ)  
• для OS X: [скачать](https://disk.yandex.ru/d/H_L1g2J6bpPaDA).  
Для установки XAMPP просто следуйте шагам мастера-установщика. После установки XAMPP можно
проверить, что всё работает. Для этого достаточно нажать кнопку Start напротив Apache, после чего
открыть в браузере [ссылку](http://localhost/dashboard/)
4. Шаг 2. Создание простого веб-приложения  
Необходимо создать набор страниц, которые позволят выполнять операции CRUD для набора данных,
соответствующего варианту задания. То есть, эти страницы позволят создавать, редактировать и удалять элементы данных. Например, для варианта «Социальная сеть» это будут персональные
страницы, для варианта «Интернет-магазин» это товары. Все данные на данном этапе должны
храниться в XML-документе. Структуру документа можно задавать произвольную, главное – обеспечить
хранение заданных вариантом данных.