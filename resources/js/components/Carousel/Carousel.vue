<template>
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="true"
    >
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img :src="image1" class="d-block w-100" alt="banner-1" />
            </div>
            <div class="carousel-item">
                <img :src="image2" class="d-block w-100" alt="banner-2" />
            </div>
            <div class="carousel-item">
                <img :src="image3" class="d-block w-100" alt="banner-3" />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            image1: "/images/image-1.jpg",
            image2: "/images/image-2.jpg",
            image3: "/images/image-3.jpg",
        };
    },
};
</script>
<style></style>
