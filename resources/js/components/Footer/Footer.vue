<template>
    <div class="row m-5">
        <div class="col-2 mt-5 mb-5">
            <img :src="laikaContacto" alt="" />
        </div>
        <div class="col-12 col-lg-2 mt-5 mb-5">
            <div class="d-flex flex-column text-color">
                <h4>ACERCA DE LAIKA</h4>
                <a href="#" class="text-sm">Sobre Laika</a>
                <a href="#" class="text-sm">Servicios</a>
                <a href="#" class="text-sm">Trabaja con nosotros</a>
                <a href="#" class="text-sm">Blog</a>
                <a href="#" class="text-sm">Términos y condiciones</a>
            </div>
        </div>
        <div class="col-12 col-lg-2 mt-5 mb-5">
            <div class="d-flex flex-column text-color">
                <h4>LINKS DE INTERÉS</h4>
                <a href="#" class="text-sm">Preguntas frecuentes</a>
                <a href="#" class="text-sm">¿Cómo comprar en laika?</a>
                <a href="#" class="text-sm">Política de Privacidad</a>
                <a href="#" class="text-sm">Contáctanos</a>
                <a href="#" class="text-sm">Políticas de Entrega</a>
            </div>
        </div>
        <div class="col-12 col-lg-2 mt-5 mb-5">
            <div class="d-flex flex-column text-color">
                <h4>INFORMACIÓN</h4>
                <p class="text-sm">Teléfono: +57 3000000000</p>
                <p class="text-sm">serviciocliente@laika.com.co</p>
                <p class="text-sm">Bogotá D.C., Colombia</p>
            </div>
        </div>
        <div class="col-12 col-lg-4 mt-5 mb-5">
            <div class="d-flex flex-column text-color">
                <h4>SUSCRÍBETE</h4>
                <p class="text-sm">Recibe noticias y promociones al instante</p>
                <input
                    type="text"
                    placeholder="Correo electrónico"
                    class="rounded border-0 p-2"
                />
                <button class="btn btn-primary bg-warning mt-2">Suscribirse</button>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            laikaContacto: "/images/laikacontacto.jpg",
        };
    },
};
</script>
<style scoped>
a {
    text-decoration: none;
    color: #5f3e85;
}
img{
    width: 150px;
    height: 150px;
}
</style>
