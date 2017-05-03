<modal v-if="showModal.login" @close="showModal.login = false" v-cloak max-width="400px">
    <div class="box has-text-centered">

        <form action="">

            <div class="field">
                <label class="label">Логин</label>
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="text" name="login">
                    <span class="icon is-small is-left">
                    <i class="fa fa-user"></i>
                </span>
                    <span class="icon is-small is-right">
                    <i class="fa fa-check"></i>
                </span>
                </p>
                <!--<p class="help is-success">This username is available</p>-->
            </div>

            <div class="field">
                <label class="label">Пароль</label>
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="password" name="password">
                    <span class="icon is-small is-left">
                    <i class="fa fa-key"></i>
                </span>
                    <span class="icon is-small is-right">
                    <i class="fa fa-warning"></i>
                </span>
                </p>
                <!--<p class="help is-danger">This email is invalid</p>-->
            </div>

            <div class="level is-mobile">
                <div class="level-item">
                
                    <div class="field has-addons">
                        <p class="control">
                            <button class="button is-primary">Авторизоваться</button>
                        </p>
                        <p class="control">
                            <button class="button is-light">Зарегистрироваться</button>
                        </p>
                    </div>

                </div>
            </div>

        </form>

    </div>
</modal>