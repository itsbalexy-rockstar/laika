<template>
    <div class="screen">
        <!-- primer navbar -->
        <NavbarInfo />
        <!-- segundo navbar -->
        <NavbarSearch />
    </div>
</template>
<script>
import NavbarInfo from "./NavbarInfo.vue";
import NavbarSearch from "./NavbarSearch.vue";

export default {
    components: {
        NavbarInfo,
        NavbarSearch,
    },
};
</script>

<style scoped>
.screen {
    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
}
</style>
