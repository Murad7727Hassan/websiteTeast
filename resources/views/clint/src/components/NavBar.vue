<template>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <template v-if="authenticated">
            <li class="nav-item">
                {{user.name}}
                {{user.email}}
            </li>
            <li class="nav-item">
                <router-link :to="{name:'dashboard'}" class="nav-link">
                    <font-awesome-icon icon="sign-in-alt" /> dashboard
                </router-link>
            </li>
            <li class="nav-item">
                <button  class="nav-link" @click.prevent="logout()">
                    <font-awesome-icon icon="sign-in-alt" /> sign out
                </button>
            </li>
        </template>
         <template v-else>
            <li class="nav-item">
                <router-link :to="{name:'home'}" class="nav-link">
                    <font-awesome-icon icon="home" /> Home
                </router-link>
            </li>
            <li class="nav-item">
            <router-link :to="{name:'singin'}" class="nav-link">
                <font-awesome-icon icon="user-plus" /> sing in
            </router-link>
            </li>
         </template>
    </nav>
</template>
<script>
import { mapGetters,mapActions } from "vuex";
 export default {
    computed:{
        ...mapGetters({
            authenticated:"auth/authenticated",
            user:"auth/user",  
        })
    },
  methods: {
   ...mapActions({
        singOutAction:"auth/logout"
    }),

    logout()
    {
        this.singOutAction().then(() => {
            this.$router.replace({
                name:'home',
            })
        })
    },
  }
};
</script>
<style>
   .bg-dark
    {
        background-color: rebeccapurple;
    }
</style>
