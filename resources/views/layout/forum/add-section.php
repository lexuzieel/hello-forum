<modal v-if="showModal.addSection" @close="showModal.addSection = false" v-cloak max-width="300px">
    <div class="box has-text-centered">

        <form action="">

            <div class="field is-horizontal">

                <label class="label">Название</label>
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
            
            <button class="button">Авторизоваться</button>

        </form>

    </div>
</modal>