<template>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; top: -100px;">
        <a href="#" class="navbar-brand ms-3 d-lg-none">
            <img class="img-fluid" src="https://technodive-yemen.com/assets/img/logo.jpg" alt="Image" style="width: 66px;">
        </a>
        <button type="button" class="navbar-toggler ms-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0 w-100 navbar-nav-english">
                <a href="https://technodive-yemen.com" class="nav-item nav-link active"> {{$t('home')}}</a>
                <router-link :to="{name:'about'}" class="nav-item nav-link">{{$t('about')}}</router-link>
                <router-link :to="{name:'services'}" class="nav-item nav-link">{{$t('services')}}</router-link>
                <router-link :to="{name:'projects'}" class="nav-item nav-link">{{$t('projects')}}</router-link>
                <!-- <router-link :to="{name:'hardware'}" class="nav-item nav-link">Equipments</router-link> 
                <router-link :to="{name:'our-expertise'}" class="nav-item nav-link">Certificates</router-link>
                <router-link :to="{name:'contact'}" class="nav-item nav-link">Contact us</router-link> -->
            </div>
            <h1>{{this.lang}}</h1>
            <div class="nav-item dropdown">
                <select class="custom-select" v-model="lang"  @change="handleChange($event)">
                    <option value="en">English</option>
                    <option value="ar">عربي</option>
                </select>
            </div>
            
            <img class="img-fluid" src="https://technodive-yemen.com/assets/img/logo.jpg" alt="Image" style="width: 66px;">
        </div>
    </nav>
</template>
<script>
 export default {
   data() {
    const lang=localStorage.getItem('lang') || 'en';
    return {
     lang:lang
   }
   },
  methods: {
 
    handleChange(event)
    {
        localStorage.setItem('lang',event.target.value);
        window.location.reload();
    },
  }
};
</script>
