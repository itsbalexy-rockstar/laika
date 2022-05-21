<template>
    <div class="container-fluid d-flex flex-column bg-light p-4 mx-5">
        <h2 class="font-weight-bold text-md mx-5">Categorías</h2>
        <div class="d-flex flex-row justify-content-center mt-5">
            <div class="mx-5 d-flex justify-content-center align-items-center rounded p-2 border">
                <img class="img-categories rounded-circle mx-2" :src="alimento" alt="">
                <p class="text-center">Alimento</p>
            </div>
            <div class="mx-5 d-flex justify-content-center align-items-center rounded p-2 border">
                <img class="img-categories rounded-circle mx-2" :src="snack" alt="">
                <p class="text-center">Snakcs</p>
            </div>
            <div class="mx-5 d-flex justify-content-center align-items-center rounded p-2 border">
                <img class="img-categories rounded-circle mx-2" :src="farmapet" alt="">
                <p class="text-center">Farmapet</p>
            </div>
            <div class="mx-5 d-flex justify-content-center align-items-center rounded p-2 border">
                <img class="img-categories rounded-circle mx-2" :src="cuidado" alt="">
                <p class="text-center">Cuidado</p>
            </div>
            <div class="mx-5 d-flex justify-content-center align-items-center rounded p-2 border">
                <img class="img-categories rounded-circle mx-2" :src="juguete" alt="">
                <p class="text-center">Juguetes</p>
            </div>
            <div class="mx-5 d-flex justify-content-center align-items-center rounded p-2 border">
                <img class="img-categories rounded-circle mx-2" :src="accesorio" alt="">
                <p class="text-center">Accesorios</p>
            </div>
            <div class="mx-5 d-flex justify-content-center align-items-center rounded p-2 border">
                <img class="img-categories rounded-circle mx-2" :src="petlover" alt="">
                <p class="text-center">Para PetLovers</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            alimento: '/images/alimento.png',
            snack: '/images/snack.png',
            farmapet: '/images/farmapet.png',
            cuidado: '/images/cuidado.png',
            juguete: '/images/juguete.png',
            accesorio: '/images/accesorio.png',
            petlover: '/images/petlover.png',
        }
    }
}
</script>
<style scoped>
.img-categories{
    width: 40px;
    height: 40px;
}
</style>>
.cate
</style>
