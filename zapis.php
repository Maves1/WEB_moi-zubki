<?php

    if ($_POST)
    {

        $phoneNumLength = strlen( (string) $_POST["phoneNumber"]);

        if ($phoneNumLength >= 10 && $phoneNumLength <= 12 && $_POST["userName"] != "")
        {
            $emailTo = "seva.mikulik@gmail.com";
            $subject = "Online запись!";
            $body = "Заявка на онлайн запись! "."Номер телефона: ".$_POST["phoneNumber"]." Имя: ".$_POST["userName"]." Примечание: ".$_POST["additionalInfo"];
            $headers = "From: radugaonlinezapis@radugadent-ufa.ru";

            if (mail($emailTo, $subject, $body, $headers)) {
                echo "<script type='text/javascript'>alert('Заявка успешно оставлена!');</script>";
            } else {
                echo "<script type='text/javascript'>alert('Что-то пошло не так, попробуйте еще раз');</script>";
            }

        } else
        {
            echo "<script type='text/javascript'>alert('Что-то не так с номером телефона или именем, проверьте введенные вами данные');</script>";
        }
    }

?>

<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link id="pageStyles" type="text/css" rel="stylesheet" href="css/styles.css">

    <title>Онлайн запись | Стоматология "Мои Зубки"</title>

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#f1d600"
                    }
                },
                "position": "top",
                "static": true,
                "content": {
                    "message": "Наш сайт использует Cookies, если Вы не согласны с этим, то покиньте его, пожалуйста",
                    "dismiss": "Закрыть",
                    "link": "Узнать больше"
                }
            })
        });
    </script>
</head>

<body style="overflow-wrap: break-word">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-brown">
            <a class="navbar-brand text-light" href="index.html">Мои Зубки</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.html">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="uslugi.html">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="price-list.html">Цены</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="strahovanie-dms.html">Страхование ДМС</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" data-toggle="dropdown">Пациентам</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="faq.html">Часто задаваемые вопросы</a>
                            <a class="dropdown-item" href="telephone-numbers.html">Телефоны вышестоящих организаций</a>
                            <a class="dropdown-item" href="pamyatka.html">Памятка пациенту перед посещением врача</a>
                            <a class="dropdown-item" href="about-us.html">О нас</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="documents.html">Документы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="feedback.html">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contacts.html">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron">

            <div class="row">
                <div class="col-xs-12 col-md-7">
                    <h1 class="jumbotron-h">Стоматология "Мои Зубки"</h1>
                    <p class="jumbotron-p mt-5">Если Вы застрахованы по программе добровольного медицинского страхования в страховой
                        компании "ВСК", "МетЛайф", "ВТБ", "РесоГарантия", "Альфа Страхование", то Ваше лечение может быть
                        оплачено страховой компанией.
                    </p>
                </div>

                <div class="col-xs-12 col-md-4">
                    <p class="jumbotron-p font-weight-bold">+7 (000) 000-12-34</p>
                    <p class="jumbotron-p">г. Уфа, ул. Кота Матроскина 112/4</p>
                    <p class="jumbotron-p">Пн. - Пт.: 9.00 - 21.00
                        <br> Сб.: 9.00 - 18.00
                        <br> Вс.: выходной</p>
                    <p class="jumbotron-p">E-mail: seva.mikulik@gmail.com</p>
                    <p class="jumbotron-p">Лицензия №: 000-000-000</p>
                    <a id="btnBook" class="btn btn-brown" role="button" href="zapis.php">Онлайн запись на прием</a>
                </div>

                <div class="col-xs-12 col-md-1">
                    <button id="btnEyes" class="btn btn-contrast">A+</button>
                </div>
            </div>


        </div>

        <div class="row">

            <div class="col">

                <h1 class="display-4">Онлайн запись</h1>
                <p class="lead">Оставьте заявку и мы Вам перезвоним</p>

                <form class="mt-5" method="post">

                    <div class="form-group">

                        <label for="phoneNumber">Ваш номер телефона</label>
                        <input id="phoneNumber" class="form-control" type="tel" name="phoneNumber">

                    </div>

                    <div class="form-group">

                        <label for="name">Ваше имя</label>
                        <input id="name" class="form-control" type="text" name="userName">

                    </div>

                    <div class="form-group">

                        <label for="note">Примечание</label>
                        <input id="note" class="form-control" type="text" name="additionalInfo">

                    </div>

                    <button type="submit" id="btnSubmit" class="btn btn-success">Оставить заявку</button>

                </form>

            </div>

        </div>

        <div id="div-bottom" class="row mt-5">
            <div class="col">
                <div class="card bg-bisque">

                    <div class="row p-2">
                        <div class="card-body text-left border-right border-brown">
                            <p class="card-text">Ответственный за оформление и обновление сайта:
                                <br> Матроскин К.О.Т.</p>
                        </div>

                        <div class="card-body text-right">
                            <p class="card-text">Стоматология "Мои Зубки", г. Уфа
                                <br> 450000, г. Уфа, ул. Кота Матроскина 112/4
                                <br> +7 (000) 000-12-34
                                <br> E-mail: seva.mikulik@gmail.com
                                <br> Лицензия №: 000-000-000</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="js/high-contrast.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>