<template>
    <div class="container-fluid">
        <div class="row">
            <div
                class="col m-4 p-3 border rounded d-flex flex-column justify-content-center align-items-center"
                v-for="articulo in articulos"
                :key="articulo.id"
            >
                <img :src="articulo.imagen" alt="" class="img rounded" />
                <p class="text-center text-uppercase">{{ articulo.nombre }}</p>
                <div class="d-flex m-2">
                    <i class="fa-solid fa-star fa-xl text-warning"></i>
                    <i class="fa-solid fa-star fa-xl text-warning"></i>
                    <i class="fa-solid fa-star fa-xl text-warning"></i>
                    <i class="fa-solid fa-star fa-xl text-warning"></i>
                    <i class="fa-solid fa-star fa-xl text-warning"></i>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p class="mt-5">${{ articulo.precio }}</p>
                    <div class="d-flex flex-row">
                        <button><i class="fa-solid fa-crown fa-sm mx-2 text-warning"></i>LAIKA Member</button>
                        <button class="btn bg-warning">ADQUIERELO YA</button>
                    </div>
                    <!-- <button
                        class="w-25 d-flex flex-column bg-btn-members border-0 rounded bg text-light"
                    >
                        <span>
                            <i class="fa-solid fa-crown fa-sm"></i>LAIKA Member
                        </span>
                        <span class="bg-span rounded text-dark"
                            >ADQUIERELO YA</span
                        >
                    </button> -->
                </div>
                <button class="p-3 btn-cart">
                    <i class="fa-solid fa-cart-arrow-down fa-xl mx-2"></i>Añadir
                    al carrito
                </button>
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
            console.log(this.articulos);
        },
    },
};
</script>
<style scoped>
.img {
    width: 250px;
    height: 300px;
}
.btn{
    border: none;
    color: black;
    font-size: 10px;
    font-weight: bold;
    border-radius: 5px;
    padding: 5px;
    margin: 5px;
}
span{
    font-size: 10px;
}
button{
    border: none;
    background-color: #5f3e85;
    color: white;
    font-size: 10px;
    font-weight: bold;
    border-radius: 5px;
    padding: 5px;
    margin: 5px;
}
</style>
