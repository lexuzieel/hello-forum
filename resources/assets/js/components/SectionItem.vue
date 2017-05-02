<template>
    <div class="column is-half">
        <a class="section box">
            <p class="title">{{ title }}</p>
            <p class="subtitle">
                <span class="is-pulled-left">{{ author }}</span>
                <span class="is-pulled-right">{{ date }}</span>
                <span class="is-clearfix"></span>
            </p>
        </a>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    props: ['title'],
    data() {
        return {
            author: '',
            date: ''
        }
    }
}
</script>