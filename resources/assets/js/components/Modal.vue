<template>
    <div class="modal is-active">
        <div class="modal-background" @click="$emit('close')"></div>
        <div class="modal-content" :style="{ 'max-width': maxWidth ? maxWidth : 'auto' }">
            <slot></slot>
        </div>
        <button class="modal-close" @click="$emit('close')"></button>
    </div>
</template>

<script>
export default {
    props: [ 'show', 'max-width' ],
    methods: {
        onClose() {
            alert()
        }
    }
}
</script>
