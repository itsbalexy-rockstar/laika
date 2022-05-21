<template>
    <div class="container-fluid bg fixed m-0 p-0">
        <!-- primer navbar -->
            <NavbarInfo />
        <!-- segundo navbar -->
            <NavbarSearch />
        <!-- tercer navbar -->
            <NavbarOptions />
    </div>
</template>
<script>
import NavbarInfo from './NavbarInfo.vue'
import NavbarSearch from './NavbarSearch.vue'
import NavbarOptions from './NavbarOptions.vue'

export default {
    components: {
        NavbarInfo,
        NavbarSearch,
        NavbarOptions
    },
}
</script>

<style>
.bg {
    background-color: #5f3e85;
}
.bg.darken-4 {
    filter: brightness(0.6);
}
.bg-btn-vet {
    background-color: #496aff;
}
.text-color {
    color: #5f3e85;
}
.text-color:hover{
    color: #5f3e85;
}
</style>
