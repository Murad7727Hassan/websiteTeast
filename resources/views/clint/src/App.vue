<template>
  <div id="app">
    
    <div class="container">
        <Navbar />
      <router-view />
    </div>
  </div>
</template>

<script>
import Navbar from '@/components/NavBar.vue';
 export default {
     components:{
        Navbar
     }
  };
</script>
<style>
html:lang(ar)  *{
    text-align:right;
    direction: rtl;
}
</style>