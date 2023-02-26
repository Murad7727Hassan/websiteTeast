<template>
  <div class="container">
    <Header />
    <header class="jumbotron">
      <h3>{{$t('home')}}</h3>
    </header>
    <Footer />
  </div>
</template>

<script>
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
export default {
  name: "Home",
   components:{
        Header,
        Footer
     },
  data() {
    return {
      content: "",
    };
  },
  mounted() {

  },
};

</script>
