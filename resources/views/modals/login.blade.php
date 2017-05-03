<modal v-if="loginModal.show" @close="loginModal.show = false" v-cloak max-width="400px">
    <div class="box has-text-centered">

        <form class="login-form" @submit.prevent>

            <div class="field">
                <label class="label">Логин</label>
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="text" name="login" v-model="loginModal.fields.login">
                    <span class="icon is-small is-left">
                        <i class="fa fa-user"></i>
                    </span>
                    <!--
                    <span class="icon is-small is-right">
                        <i class="fa fa-check"></i>
                    </span>
                    -->
                </p>
                <!--<p class="help is-success">This username is available</p>-->
            </div>

            <div class="field">
                <label class="label">Пароль</label>
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="password" name="password" v-model="loginModal.fields.password">
                    <span class="icon is-small is-left">
                        <i class="fa fa-key"></i>
                    </span>
                    <!--
                    <span class="icon is-small is-right">
                        <i class="fa fa-warning"></i>
                    </span>
                    -->
                </p>
                <!--<p class="help is-danger">This email is invalid</p>-->
            </div>

            <div class="level is-mobile">
                <div class="level-item">
                
                    <div class="field has-addons">
                        <p class="control">
                            <button class="button is-primary" @click="onLogin">Авторизоваться</button>
                        </p>
                        <p class="control">
                            <button class="button is-light" @click="onRegistration">Зарегистрироваться</button>
                        </p>
                    </div>

                </div>
            </div>

        </form>

    </div>
</modal>