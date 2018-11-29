<template>
    <ul>
        <TodoItem v-for="item in items" :item="item" />
    </ul>
</template>

<script>
    import TodoItem from './TodoItem.vue'

    export default {
        data() {
            return {
                items: []
            }
        },
        components: {
            TodoItem
        },
        mounted: function() {
            axios.get('/items')
                .then((response) => console.log(response));
        }
    }
</script>

<style scoped>

</style>