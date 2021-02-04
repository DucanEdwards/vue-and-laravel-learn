import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        errors: {},
        user:{}
    },
    getters: {
        errors: state => {
            return name => {
                return state.errors[name] && state.errors[name][0];
            };
        },
        auth() {
            return Boolean(localStorage.getItem("token"));
        },
        token() {
            return window.localStorage.getItem("token")
        }
    },
    mutations: {
        setErrors(state, { errors }) {
            state.errors = errors;
        },
        setUser(state, user) {
            state.user = user;
        },
    },
    // 异步操作
    actions:{
        async getUserInfo({commit}) {
            commit("setUser",await axios.get(`user/info`))
        }
    }
});

export default store;
