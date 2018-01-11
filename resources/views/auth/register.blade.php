<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Регистрация</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!--<link href="signin.css" rel="stylesheet">-->
</head>

<body>

<div class="container">

    <form class="form-signin" style="max-width:400px;display:block;margin:100px auto 0;" method="post">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">Пожалуйста зарегистрируйтесь</h2>
        <label for="inputName" class="sr-only">Ваше имя</label>
        <input type="text" autocomplete="on" id="inputName" name="user-name" class="form-control" placeholder="Ваше имя" required autofocus>
        <label for="inputEmail" class="sr-only">Email адрес</label>
        <input type="email" autocomplete="on" id="inputEmail" name="user-email" class="form-control" placeholder="Email адрес" required>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" autocomplete="on" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
        <label for="confirmPassword" class="sr-only">Повторите пароль</label>
        <input type="password" autocomplete="on" id="confirmPassword" name="confirm-password" class="form-control" placeholder="Повторите пароль" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" value="1">Запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
    </form>

</div> <!-- /container -->

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>-->

</body>
</html>
