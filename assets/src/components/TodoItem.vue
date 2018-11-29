<template>
    <li>
        <label>
            <input type="checkbox" v-model="done">
            {{ name }}
        </label>

    </li>
</template>

<script>
    export default {
        props: {
            item: Object
        },

        data() {
            return {
                name: this.item['name'],
                done: this.item['done']
            }
        }
    }
</script>

<style scoped>

</style>