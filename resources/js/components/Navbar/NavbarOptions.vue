<template>
    <div
        class="d-flex flex-row justify-content-around align-items-center p-2 bg-light"
    >
        <div class="d-flex flex-row">
            <div
                class="dropdown mx-2"
                v-for="animal in animales"
                :key="animal.name"
            >
                <button
                    class="btn btn-secondary dropdown-toggle bg-dog-cat bg-light text-color border-0"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    {{ animal.name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Alimento</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Snacks</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Farmapet</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Cuidado</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Juguetes</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Accesorios</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown mx-2">
                <button
                    class="btn btn-secondary dropdown-toggle bg-light text-color border-0"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    Servicios
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Veterinaria</a></li>
                </ul>
            </div>
            <div>
                <button class="border-0 p-2 mx-2 rounded" href="#">
                    Promociones
                </button>
            </div>
            <div>
                <button class="border-0 p-2 mx-2 rounded" href="#">Blog</button>
            </div>
        </div>
        <div class="d-flex flex-row">
            <button class="bg-btn-vet mx-2 p-2 border-0 rounded text-light">
                <i class="fa-solid fa-dog fa-xl mx-2"></i>LAIKA VetCare
            </button>
            <button
                class="bg-btn-members mx-2 p-2 border-0 rounded bg text-light"
            >
                <i class="fa-solid fa-crown fa-xl mx-2"></i>LAIKA Member
                <span class="bg-span p-1 rounded text-dark">ADQUIERELO YA</span>
            </button>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            animales: [{name: 'Perro'}, {name: 'Gato'}]
        }
    }
}
</script>
<style>
.bg-span{
    background-color: #ffcb02;
}
</style>

