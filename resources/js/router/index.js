import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routers'

Vue.use(VueRouter)

const router = new VueRouter({
    routes,
    mode:'history'
})

const isLogin =Boolean(localStorage.getItem('token'))
router.beforeEach((to, from, next) => {
    if (to.meta.guest && isLogin) {
        location.href='/'
    }
    else if (to.meta.auth && !isLogin){
        location.href ='/login'
    }
    else {
        next()
    }
})

export default router;