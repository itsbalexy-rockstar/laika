<template>
    <div
        class="d-flex justify-content-center align-items-center text-light pt-2 bg"
    >
        <div class="d-flex mx-2">
            <i class="fa-solid fa-cat fa-2xl"></i>
        </div>
        <form class="d-flex w-50 p-2" role="search">
            <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
            />
        </form>
        <div class="d-flex align-items-center">
            <button class="mx-2 bg text-light rounded border-0 p-2">
                Agregar dirección
                <i class="fa-solid fa-caret-down mx-2"></i>
            </button>
            <button class="mx-2 p-2 bg darken-4 text-light rounded border-0">
                Crear cuenta <i class="fa-solid fa-caret-down mx-2"></i>
            </button>
            <i class="fa-solid fa-cart-arrow-down fa-lg mx-2"></i>
        </div>
    </div>
</template>
