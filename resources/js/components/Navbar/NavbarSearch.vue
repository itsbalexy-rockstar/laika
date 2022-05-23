<template>
    <div class="row text-light background">
        <!-- MenuAccount -->
        <div class="row pb-2 pt-2 align-items-center">
            <div class="col-1 d-flex d-md-none">
                <button class="border-0 background mr-2" @click="toggle">
                    <i class="fa-solid fa-bars fa-2xl text-light"></i>
                </button>
            </div>
            <div class="col-md-2 col-lg-3 col-2 center">
                <i class="fa-solid fa-cat fa-2xl"></i>
            </div>
            <div class="col-md-4 col-lg-5 d-none d-md-block center">
                <input
                    class="form-control"
                    type="search"
                    placeholder="Encuentra lo mejor para tu mascota"
                    aria-label="Search"
                />
            </div>

            <div class="col-md-6 col-lg-4 col-9 d-flex justify-content-end">
                <div class="dropdown center">
                    <span>Ubicación:</span>
                    <select
                        class="background text-light rounded border-0 p-2 dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        v-model="optionsCountry"
                    >
                        <option>Medellín</option>
                        <option>Bogotá</option>
                        <option>Cali</option>
                        <option>Chía</option>
                    </select>
                </div>
                <div class="dropdown">
                    <button
                        class="mx-2 p-2 rounded border-0 background-account text-light"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        data-bs-auto-close="outside"
                    >
                        <i
                            class="fa-solid fa-circle-user mx-2 fa-xl text-warning"
                        ></i>
                        <p class="d-none d-md-inline">Crear cuenta</p>
                    </button>
                    <form class="dropdown-menu p-2 background">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="mb-3">
                                <label
                                    for="exampleDropdownFormEmail2"
                                    class="form-label text-light"
                                    >Correo</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="exampleDropdownFormEmail2"
                                    placeholder="email@example.com"
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleDropdownFormPassword2"
                                    class="form-label text-light"
                                    >Contraseña</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="exampleDropdownFormPassword2"
                                    placeholder="Password"
                                />
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="dropdownCheck2"
                                    />
                                    <label
                                        class="form-check-label text-light"
                                        for="dropdownCheck2"
                                    >
                                        Recuérdame
                                    </label>
                                    <a
                                        href="#"
                                        class="text-decoration-none text-warning mt-2"
                                        >¿No tienes una cuenta?</a
                                    >
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="border-0 rounded bg-warning p-2"
                            >
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>
                <button class="border-0 rounded-circle bg-warning">
                    <i
                        class="fa-solid fa-cart-arrow-down fa-lg mx-2 text-dark"
                    ></i>
                </button>
            </div>
        </div>
        <!-- MenuAccountEnd -->
        <!-- MenuMobile -->
        <div
            :class="{
                'd-flex col-12 center background position-relative mt-2 mb-2':
                    isOpen,
                'd-none': !isOpen,
            }"
        >
            <div
                class="dropdown mx-1"
                v-for="animal in animales"
                :key="animal.name"
            >
                <button
                    class="border-0 rounded dropdown-toggle bg-light fw-bold"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    {{ animal.name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li v-for="element in elements" :key="element.name">
                        <a class="dropdown-item" href="#">{{ element.name }}</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown mx-1">
                <button
                    class="border-0 rounded dropdown-toggle bg-light fw-bold"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    Servicios
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a class="dropdown-item" href="#">Veterinaria</a>
                    </li>
                </ul>
            </div>
            <div>
                <button
                    class="border-0 p-1 mx-1 rounded fw-bold text-color"
                    href="#"
                >
                    Promociones
                </button>
            </div>
            <div>
                <button
                    class="border-0 p-1 mx-1 rounded fw-bold text-color"
                    href="#"
                >
                    Blog
                </button>
            </div>
        </div>
        <!-- MenuMobileEnd -->
        <!-- BtnSearch -->
        <div class="d-flex d-md-none mt-2 mb-2">
            <div class="col-12 center">
                <input
                    class="form-control"
                    type="search"
                    placeholder="Encuentra lo mejor para tu mascota"
                    aria-label="Search"
                />
            </div>
        </div>
        <!-- BtnSearchEnd -->
        <!-- Menu -->
        <div class="row pb-2 pt-2 bg-light m-0">
            <div class="d-none d-lg-flex col-lg-8 center">
                <div
                    class="dropdown mx-1 mx-xl-5"
                    v-for="animal in animales"
                    :key="animal.name"
                >
                    <button
                        class="border-0 rounded dropdown-toggle bg-light fw-bold"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        {{ animal.name }}
                    </button>
                    <ul
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton1"
                    >
                        <li v-for="element in elements" :key="element.name">
                            <a class="dropdown-item" href="#">{{
                                element.name
                            }}</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown mx-1 mx-xl-5">
                    <button
                        class="border-0 rounded dropdown-toggle bg-light fw-bold"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Servicios
                    </button>
                    <ul
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton1"
                    >
                        <li>
                            <a class="dropdown-item" href="#">Veterinaria</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <button
                        class="border-0 p-2 mx-1 mx-xl-5 rounded fw-bold text-color"
                        href="#"
                    >
                        Promociones
                    </button>
                </div>
                <div>
                    <button
                        class="border-0 p-2 mx-1 mx-xl-5 rounded fw-bold text-color"
                        href="#"
                    >
                        Blog
                    </button>
                </div>
            </div>
            <div
                class="col-12 col-lg-4 d-flex justify-content-lg-start align-items-center justify-content-center"
            >
                <button class="bg-primary mx-2 p-2 border-0 rounded text-light">
                    <i class="fa-solid fa-dog fa-xl mx-2"></i>LAIKA VetCare
                </button>
                <button
                    class="background mx-2 p-2 border-0 rounded text-light d-flex align-items-center"
                >
                    <i class="fa-solid fa-crown fa-xl mx-2 text-warning"></i>
                    <span class="mx-2">LAIKA Member</span>
                    <span class="bg-warning rounded text-dark p-lg-1"
                        >ADQUIERELO YA</span
                    >
                </button>
            </div>
        </div>
        <!-- MenuEnd -->
    </div>
</template>
<script>
export default {
    data() {
        return {
            optionsCountry: "",
            isOpen: false,
            animales: [{ name: "Perro" }, { name: "Gato" }],
            elements: [
                { name: "Alimentos" },
                { name: "Snacks" },
                { name: "Farmapet" },
                { name: "Cuidado" },
                { name: "Accesorios" },
                { name: "Juguetes" },
            ],
        };
    },
    methods: {
        toggle() {
            this.isOpen = !this.isOpen;
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
.background {
    background-color: #5f3e85;
}
.background-account {
    background-color: #3d2756;
}
.text-color {
    color: #5f3e85;
}
</style>
