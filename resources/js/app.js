import './bootstrap';
import Vue from 'vue'
import {createApp} from 'vue'

//import App from './Vue/App.vue'

import helloworld from './components/helloworld'
import navbar from './components/navbar'

const app = new Vue({

    el:'#app',
    component : [
        
    ]


});
app.component('hello', helloworld)
app.component('navigation', navbar)
app.mount('#navigation')
app.mount('#hello')

//createApp(App).mount("#app")

//createApp(HelloWorld).mount("#app")