import Vue from 'vue';

const components = require.context('@/components',true,/\.vue$/);
components.keys().forEach(path=>{
    const name=path.slice(2,-4);
    // console.log(name)
    // console.log(components(path).default)
    Vue.component(`${name}`,components(path).default)
})
