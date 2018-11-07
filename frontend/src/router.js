import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './components/Home.vue'
import AddContact from './components/AddContact.vue'
import Edit from './components/Edit.vue'

Vue.use(VueRouter );

const router = new VueRouter({
    mode:'history',
    routes:[
        {path:"/",component:Home},
        {path:"/addContact",component:AddContact},
        {path:"/editContact/:id",component:Edit}
    ]
});

export default router
