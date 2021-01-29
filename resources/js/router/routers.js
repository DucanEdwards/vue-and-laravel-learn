import Login from '../views/auth/Login.vue'
// import Register from '../views/auth/Register.vue'

const routes = []

const components = require.context('@/views',true,/\.vue$/);
components.keys().forEach(path=>{
    const url=path.slice(1,-4);
    const component = components(path).default
    if (component.route!==false){
        const route={path:url,component:component}
        routes.push(Object.assign(route,component.route||{}))
    }
})

export default routes;