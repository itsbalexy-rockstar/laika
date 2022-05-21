<template>
    <div>
        <Navbar />
        <Carousel />
        <Footer />
        <BannerFooter />
    </div>
</template>
<script>
import Navbar from "./Navbar/Navbar.vue";
import Carousel from "./Carousel/Carousel.vue";
import Footer from "./Footer/Footer.vue";
import BannerFooter from "./Banners/BannerFooter.vue";

export default {
    components: {
        Navbar,
        Carousel,
        Footer,
        BannerFooter,
    },
};
</script>
