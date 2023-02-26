<template>
  <div class="container">
    <header class="jumbotron">
      <h3>Signin</h3>
      <form @submit.prevent="submit">
        {{form}}
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input v-model="form.email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input v-model="form.password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </header>
  </div>
</template>

<script>
// import { createNamespacedHelpers } from 'vuex'
import { mapActions } from "vuex";
export default {
  name: "sign-in",
  data() {
    return {
      content: "",
      form:{
        email:"admin@ids.com",
        password:"password",
      }
    };
  },
  methods:{
    ...mapActions({
        login:'auth/login',
    }),
    submit (){
        this.$store.dispatch("auth/login", this.form).then(()=>{
            this.$router.replace({
                name:"dashboard",
            })
            console.log("singin")
        });
    }
  }

};
</script>
