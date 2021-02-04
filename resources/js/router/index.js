import Vue from "vue";
import VueRouter from "vue-router";
import routes from "./routers";
import store from "@/store";

Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    mode: "history"
});

const isLogin = Boolean(localStorage.getItem("token"));
router.beforeEach(async (to, from, next) => {
    if (isLogin){
        await store.dispatch("getUserInfo")
    }
    if (to.matched.some(route => route.meta.auth) && !isLogin) {
        // 需要验证未登录
        next("/login");
    } else if (to.matched.some(route => route.meta.guest) && isLogin) {
        // 游客访问但已经登录
        location.href = "/";
    } else {
        next();
    }
});

export default router;
