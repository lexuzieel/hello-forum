/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('modal', require('./components/Modal.vue'));

const app = new Vue({
    el: '#app',
    data: {
        loginModal: {
            show: false,
            fields: {
                login: '',
                password: ''
            }
        },
        sectionName: '',
        topicName: '',
        postContent: ''
    },
    methods: {
        onLogin() {
            let login = this.loginModal.fields.login;
            let password = this.loginModal.fields.password;
            axios.post('/login', {
                    login,
                    password
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onRegistration() {
            let login = this.loginModal.fields.login;
            let password = this.loginModal.fields.password;
            axios.post('/register', {
                    login,
                    password
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onSectionAdd() {
            axios.post('/section/add', {
                    name: this.sectionName
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onSectionDelete(id) {
            axios.post('/section/delete', {
                    id: id
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onTopicAdd(section) {
            axios.post('/section/' + section + '/topic/add', {
                    name: this.topicName
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onTopicDelete(id) {
            axios.post('/section/topic/delete', {
                    id: id
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onPostAdd(topic) {
            axios.post('/section/topic/' + topic + '/post/add', {
                    content: this.postContent
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onPostDelete(id) {
            axios.post('/section/topic/post/delete', {
                    id: id
                })
                .then(response => {
                    //console.log(response);
                    location.reload();
                })
                .catch(error => {
                    console.log(error);
                });
            // TODO: Remove logs
        },
        onUserUpdate() {
            let value = document.getElementById('user-role').value;
            if (value) {
                // TODO: Send request to the server
                console.log(value);
            }
        }
    }
});