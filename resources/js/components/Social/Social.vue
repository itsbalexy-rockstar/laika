<template>
    <div class="col">
        <div class="row position-sug">
            <button class="border-0 bg-danger rounded">
                <span class="text-light">S<br />U <br />G <br />E <br />R <br />E<br />N<br />C<br />I<br />A<br />S</span>
            </button>
        </div>
        <div class="row position">
            <button class="border-0 bg-success rounded-circle p-1">
                <i
                    class="fa-brands fa-whatsapp rounded-circle text-light fa-3x"
                ></i>
            </button>
            <button class="border-0 background rounded-circle p-1">
                <i
                    class="fa-solid rounded-circle fa-message fa-3x text-light"
                ></i>
            </button>
        </div>
    </div>
</template>
<style scoped>
.position {
    position: fixed;
    bottom: 15px;
    right: 25px;
    z-index: 1;
}
.background {
    background-color: #5f3e85;
}
.position-sug {
    position: fixed;
    bottom: 150px;
    right: 30px;
    z-index: 1;
}
</style>
