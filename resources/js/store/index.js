import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
      //共享数据
    errors:{}
  },
  getters:{
    errors:state=> {
        return (name)=> {
            return state.errors[name] && state.errors[name][0]
        }
    }
  },
  mutations: {
    setErrors (state,{errors}) {
      state.errors =errors
    }
  }
})