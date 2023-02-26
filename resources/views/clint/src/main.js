import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import { FontAwesomeIcon } from './plugins/font-awesome'
import axios from 'axios';
import "@/store/subscribar.js"
import i18n from "./i18n";
const lang=localStorage.getItem('lang') || 'en';
axios.defaults.baseURL ="http://127.0.0.1:8000/api/"
axios.defaults.headers ['Accept-Language'] =lang;
document.documentElement.lang =lang
store.dispatch("auth/attempt",localStorage.getItem('token')).then(()=>{
    createApp(App)
    .use(router)
    .use(store)
    .use(i18n)
    .component("font-awesome-icon", FontAwesomeIcon)
    .mount("#app");
})
;
