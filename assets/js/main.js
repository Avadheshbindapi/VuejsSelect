import Page from './components/page.js';

const routes = [
    { path : '/', component : Page }
]

const router = VueRouter.createRouter({
    history : VueRouter.createWebHashHistory(),
    routes,
})

import App from './App.js'
Vue.createApp(App).use(router).mount('#app')