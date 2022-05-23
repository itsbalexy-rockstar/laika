<template>
    <div class="card-group">
        <div
            class="card center m-2 card-details rounded-5"
            v-for="articulo in articulos"
            :key="articulo.id"
        >
            <img
                :src="articulo.imagen"
                class="card-img-top img rounded-circle mtb"
                alt="..."
            />
            <div class="card-body center">
                <div class="d-flex flex-md-row flex-column align-items-center">
                    <h3 class="card-title text-uppercase mtb fs-6 fs-md-2">
                        {{ articulo.nombre }}
                    </h3>
                    <button
                        class="rounded-circle mx-1 mx-md-2 bg-warning border-0 p-1 p-md-2"
                    >
                        <i class="fa-solid fa-cart-plus fa-xl text-dark"></i>
                    </button>
                </div>
                <div class="d-flex mtb">
                    <i class="fa-solid fa-star fa-sm text-warning"></i>
                    <i class="fa-solid fa-star fa-sm text-warning"></i>
                    <i class="fa-solid fa-star fa-sm text-warning"></i>
                    <i class="fa-solid fa-star fa-sm text-warning"></i>
                    <i class="fa-solid fa-star fa-sm text-warning"></i>
                </div>
                <span class="mtb fw-bold fs-5 fs-md-3"
                    >$ {{ articulo.precio }}</span
                >
                <div class="d-flex">
                    <p class="bg-warning mx-md-2">
                        <i class="fa-solid fa-crown fa-sm mx-md-2"></i
                        ><span class="mx-2">Laika MEMBER</span>
                    </p>
                    <p class="text-center fw-bold mx-md-2">
                        $ {{ articulo.precio - articulo.precio * 0.1 }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            articulos: [],
        };
    },
    mounted() {
        this.getArticulos();
    },
    methods: {
        async getArticulos() {
            const response = await axios.get("api/snacks");
            this.articulos = response.data;
        },
    },
};
</script>
<style scoped>
.center {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.img {
    width: 100px;
    height: 100px;
}
.background {
    background-color: #5f3e85;
}
.mtb {
    margin-top: 12px;
    margin-bottom: 12px;
}
.card-details {
    box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
}
</style>
