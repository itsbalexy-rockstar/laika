<template>
    <div class="container-fluid">
        <Navbar />
        <Carousel />
        <Categories />
        <Footer />
        <BannerFooter />
    </div>
</template>
<script>
import Navbar from "./Navbar/Navbar.vue";
import Carousel from "./Carousel/Carousel.vue";
import Footer from "./Footer/Footer.vue";
import BannerFooter from "./Banners/BannerFooter.vue";
import Categories from "./Banners/Categories.vue";

export default {
    components: {
        Navbar,
        Carousel,
        Footer,
        BannerFooter,
        Categories
    },
};
</script>
