<template>
    <div class="todo">
        <input type="text" v-model="todo.title">
        <div @click="remove">删除</div>
    </div>
</template>

<script>
export default {
    props:["todo"],
    methods: {
        remove() {
            this.$emit('del',this.todo);
        }
    }
}
</script>

<style>
    .todo {
        display:flex;
        border:solid 2px #ccc;
        margin:10px 0;
    }
    .todo input {
        flex:1;
    }
    .todo div{
        background:white;
        color:black;
        padding:10px;
    }
</style>