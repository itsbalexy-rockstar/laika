<template>
    <div class="row">
        <div class="row">
            <div
                class="d-flex flex-lg-row flex-column justify-content-lg-evenly justify-content-center align-items-center"
            >
                <div class="center mx-5 p-2">
                    <p class="text-md">
                        Pago 100% seguro<i
                            class="fa-solid fa-lock fa-xl mx-2"
                        ></i
                        >SSL
                    </p>
                    <p class="text-sm text-center">
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
                <div class="d-flex flex-row">
                    <img :src="appstore" alt="appstore" class="img mx-1" />
                    <img :src="google" alt="googleplay" class="img mx-1" />
                    <img :src="gallery" alt="gallery" class="img mx-1" />
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="center d-none d-lg-flex">
                <p>
                    https://www.sic.gov.co / Proyecto E S.A.S. / NIT:
                    901.110.407 -4 / Dirección de notificación judicial: Cra 68G
                    No. 74B - 56, Bogotá DC
                </p>
                <p>
                    Teléfono: 300 9108496 / Correo electrónico para notificación
                    judicial: contabilidad@laika.com.co
                </p>
                <p>Copyright © 2021 LAIKA - Derechos reservados</p>
            </div>
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

<style scoped>
.bg-footer {
    background-color: #f0f1f3;
}
.img {
    width: 120px;
    height: 30px;
}
.center {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>
