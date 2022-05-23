<template>
    <div class="width">
        <Navbar />
        <!-- Content -->
        <div class="mt-auto">
            <Carousel />
            <Categories />
            <Shop />
            <Footer />
            <BannerFooter />
        </div>
    </div>
</template>
<script>
import Navbar from './Navbar/Navbar.vue'
import Carousel from './Carousel/Carousel.vue'
import Footer from "./Footer/Footer.vue";
import BannerFooter from "./Banners/BannerFooter.vue";
import Categories from "./Banners/Categories.vue";
import Shop from "./Shop/Shop.vue";
export default {
    components: {
        Navbar,
        Carousel,
        Footer,
        BannerFooter,
        Categories,
        Shop,
    },
};
</script>
<style scoped>
.width {
    width: 100vw;
    overflow: hidden;
    scroll-behavior: smooth;
    margin: 0;
    padding: 0;
}
</style>
