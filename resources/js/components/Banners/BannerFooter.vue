<template>
    <div class="container-fluid bg-footer d-flex flex-column">
        <div
            class="d-flex flex-row justify-content-evenly align-items-center"
        >
            <div class="d-flex flex-column mx-5 p-2">
                <p class="text-md">
                    Pago 100% seguro<i class="fa-solid fa-lock fa-xl mx-2"></i
                    >SSL
                </p>
                <p class="text-sm certificate">
                    Este certificado garantiza la seguridad de todas tus
                    conexiones mediante cifrado.
                </p>
            </div>
            <div class="mx-5">
                <p class="text-md font-weight-bold">
                    Proteccion segura 24/7<i
                        class="fa-solid fa-shield fa-xl mx-2"
                    ></i>
                </p>
            </div>
            <div class="d-flex flex-row mx-5">
                <img :src="appstore" alt="appstore" class="img mx-2" />
                <img :src="google" alt="googleplay" class="img mx-2" />
                <img :src="gallery" alt="gallery" class="img mx-2" />
            </div>
        </div>
        <div
            class="d-flex flex-column justify-content-center align-items-center"
        >
            <p>
                https://www.sic.gov.co / Proyecto E S.A.S. / NIT: 901.110.407 -4
                / Dirección de notificación judicial: Cra 68G No. 74B - 56,
                Bogotá DC
            </p>
            <p>
                Teléfono: 300 9108496 / Correo electrónico para notificación
                judicial: contabilidad@laika.com.co
            </p>
            <p>Copyright © 2021 LAIKA - Derechos reservados</p>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            appstore: "/images/appstore.jpg",
            google: "/images/google.jpg",
            gallery: "/images/gallery.jpg",
        };
    },
};
</script>

<style>
.bg-footer {
    background-color: #f0f1f3;
}
.img {
    width: 130px;
    height: 40px;
}
.certificate {
    font-size: 10px;
}
</style>
