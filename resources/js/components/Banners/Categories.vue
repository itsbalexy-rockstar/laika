<template>
    <div class="row mx-5">
        <button class="row my-3 border-0 p-2 mx-0 bg-light" @click="toggle">
            <div class="d-flex justify-content-center align-items-center">
                <h1 class="text-color fw-bold text-center">Categorías</h1>
                <i
                    class="fa-solid fa-circle-arrow-down fa-xl mx-2 text-color"
                ></i>
            </div>
        </button>
        <div>
            <h3 class="text-color text-center">{{ mesaggeLoad() }}</h3>
        </div>
        <div :class="{ 'row center my-2': isOpen, 'd-none': !isOpen }">
            <div class="col-12 col-lg-2 m-2 borde center">
                <button
                    class="border-0 bg-light text-color d-flex align-items-center p-2"
                >
                    <i class="fa-solid fa-bowl-food fa-xl mx-4"></i>
                    <span class="mx-4 fs-4 fw-bold">Alimento</span>
                </button>
            </div>
            <div class="col-12 col-lg-2 m-2 borde center">
                <button
                    class="border-0 bg-light text-color d-flex align-items-center p-2"
                >
                    <i class="fa-solid fa-bone fa-xl mx-4"></i>
                    <span class="mx-4 fs-4 fw-bold">Snacks</span>
                </button>
            </div>
            <div class="col-12 col-lg-2 m-2 borde center">
                <button
                    class="border-0 bg-light text-color d-flex align-items-center p-2"
                >
                    <i class="fa-solid fa-pills fa-xl mx-4"></i>
                    <span class="mx-4 fs-4 fw-bold">Farmapet</span>
                </button>
            </div>
            <div class="col-12 col-lg-2 m-2 borde center">
                <button
                    class="border-0 bg-light text-color d-flex align-items-center p-2"
                >
                    <i class="fa-solid fa-soap fa-xl mx-4"></i>
                    <span class="mx-4 fs-4 fw-bold">Cuidado</span>
                </button>
            </div>
            <div class="col-12 col-lg-2 m-2 borde center">
                <button
                    class="border-0 bg-light text-color d-flex align-items-center p-2"
                >
                    <i class="fa-solid fa-basketball fa-xl mx-4"></i>
                    <span class="mx-4 fs-4 fw-bold">Jueguetes</span>
                </button>
            </div>
            <div class="col-12 col-lg-2 m-2 borde center">
                <button
                    class="border-0 bg-light text-color d-flex align-items-center p-2"
                >
                    <i class="fa-solid fa-shield-dog fa-xl mx-4"></i>
                    <span class="mx-4 fs-4 fw-bold">Accesorios</span>
                </button>
            </div>
            <div class="col-12 col-lg-2 m-2 borde center">
                <button
                    class="border-0 bg-light text-color d-flex align-items-center p-2"
                >
                    <i class="fa-solid fa-paw fa-xl mx-4"></i>
                    <span class="mx-4 fs-4 fw-bold">Para PetLovers</span>
                </button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isOpen: false,
            mesagge: "",
        };
    },
    methods: {
        toggle() {
            this.isOpen = !this.isOpen;
        },
        mesaggeLoad() {
            if (!this.isOpen) {
                this.mesagge =
                    "Mira las categorías de productos que tenemos para tí";
                return this.mesagge;
            }
        },
    },
};
</script>
<style scoped>
.center {
    display: flex;
    justify-content: center;
    align-items: center;
}
.text-color {
    color: #5f3e85;
}
.borde {
    border: 1px solid #5f3e85;
    border-radius: 5px;
    /* shadow */
    box-shadow: 0px 0px 5px 0px #5f3e85c7;
}
</style>
