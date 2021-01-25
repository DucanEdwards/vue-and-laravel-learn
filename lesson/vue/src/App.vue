<template>
  <div class="todos">
      <todo v-for="(todo,index) in todos" :key="index" :todo="todo" @del='delTodo'></todo>
      <div class="add">
        <input v-model="more" @keyup.enter="add" placeholder="输入任务以添加">
        <div @click='add'>添加</div>  
      </div>
  </div>
</template>

<script>

import Todo from './components/Todo.vue'
export default {
  name: 'App',
  components: {
      Todo
  },
  data() {
    return {
      more:'',
      todos:[{title: 'Learn Vue'},{title: 'Do homework'}]
    }
  },
  methods: {
    add() {
      if (this.more.trim()){
        this.todos.push({title: this.more})
        this.more=''
      }
    },
    delTodo(todo) {
      let num=this.todos.indexOf(todo)
      this.todos.splice(num,1)
    }
  }
}
</script>

<style>
    .todos {
      width:700px;
      margin: 0 auto;
    }
    .todos>.add {
      display: flex;
    }
    .todos>.add>input {
      flex: 1;
      padding:10px;
    }
    .todos>.add>div {
       background:white;
        color:black;
        padding:10px;
        border: solid 2px #ccc;
    }
</style>
