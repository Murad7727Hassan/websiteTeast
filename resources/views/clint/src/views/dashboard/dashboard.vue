<template>
  <div class="container">
    <header class="jumbotron">
      <h3>Dashboardh</h3>
       <h3>Dashboard</h3>
      <router-link :to="{name:'addNewService'}" class="nav-item nav-link">ggg</router-link>
    </header>
  </div>
</template>

<script>

export default {
  name: "dashboard",
  data() {
    return {
      content: "",
    };
  },
  mounted() {

  },
};
</script>
