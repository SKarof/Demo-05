<form method="post" action="src/actions/registration-handler.php">
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="floatingInputEmail" placeholder="name@example.com" required>
        <label for="floatingInputEmail">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="name" id="floatingInputName" placeholder="Иван" required>
        <label for="floatingInputName">Ваше имя</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" id="floatingInputPassword" placeholder="Пароль" required>
        <label for="floatingInputPassword">Пароль</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password_confirm" id="floatingInputPasswordConfirm" placeholder="Пароль" required>
        <label for="floatingInputPassword">Повторите пароль</label>
    </div>
    <div class="input-group mb-5">
        <span class="input-group-text" id="inputGroup-sizing-lg">+7</span>
        <input type="tel" class="form-control py-3" name="phone" aria-label="Поле для ввода номера телефона" placeholder="Номер телефона (Необязательно)">
    </div>
    <button type="submit" class="btn btn-primary btn-lg w-100 p-3 mb-2">Зарегистрироваться</button>
    <p>У меня уже есть аккаунт <a href="login.php">Войти</a>.</p>
</form>