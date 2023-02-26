import { createWebHistory, createRouter } from "vue-router";
import Home from "./views/home/Home.vue";
import About from "./views/about/About.vue";
import Team from "./views/team/Team.vue";
import Services from "./views/services/Services.vue";
import Projects from "./views/projects/Projects.vue";
import Signin from "./views/auth/Signin.vue";
import Dashboard from "./views/dashboard/Dashboard.vue";
import addNewService from "./views/dashboard/services/addNewService.vue";

import store from "./store";
const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/about",
    name: "about",
    component: About,
  },
  {
    path: "/team",
    name: "team",
    component: Team,
  },
  {
    path: "/services",
    name: "services",
    component: Services,
  },
  {
    path: "/projects",
    name: "projects",
    component: Projects,
  },
  {
    path: "/singin",
    name: "singin",
    component: Signin,
   
},
  {
    path: "/dashboard",
    name: "dashboard",
    component: Dashboard,
    beforeEnter:(next) =>{
        if(!store.getters["auth/authenticated"])
        return next({
            name:'home',
        })
    }
  },
  {
    path: "/add",
    name: "addNewService",
    component: addNewService,
   
  }
  ];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
