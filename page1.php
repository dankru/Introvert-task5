<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page1</title>
</head>
<body>
<form action="/form.php" method="post">
    <input type="text" name="name_2180124" placeholder="Ваше имя">
    <input type="text" name="email_2180124" placeholder="Почта">
    <input type="text" name="phone_2180124" placeholder="Ваш телефон">
    <input type="textarea" name="comment_2180124" placeholder="Ваш комментарий">
    <input type="hidden" name="status" value="51282313">
    <input type="hidden" name="source" value="Тестовый сайт">
    <input type="hidden" name="new_entities" value="lead">
    <input type="hidden" name="intr_group" value="bbb@bb.ru;deemird2@yandex.ru;olgamooha2212@mail.com">
    <button type="submit">Отправить заявку</button>
</form>
<script type="text/javascript">
    (function (d, w, k) {
        w.introvert_callback = function () {
            try {
                w.II = new IntrovertIntegration(k);
            } catch (e) {
                console.log(e)
            }
        };

        var n = d.getElementsByTagName("script")[0],
            e = d.createElement("script");

        e.type = "text/javascript";
        e.async = true;
        e.src = "https://api.yadrocrm.ru/js/cache/" + k + ".js";
        n.parentNode.insertBefore(e, n);
    })(document, window, '3363f0c5');
</script>
</body>
</html>