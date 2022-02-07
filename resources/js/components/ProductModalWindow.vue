<template>
    <div class="wrapper"
         v-if="isOpen"
         @click="close()">
        <div class="modalWindow" @click.stop="">
            <div class="row p-5">
                <div class="row">
                    <picture class="col-6">
                        <source srcset="images/noimage.jpg" type="image/jpeg">
                        <source :srcset="dataSet.image_path" type="image/webp">
                        <img class="card-img-top" :src="dataSet.image_path">
                    </picture>
                    <h1 class="col-5 m-4 fw-bold fs-1">{{ dataSet.title }}</h1>
                </div>
                <div class="row p-4">
                    <p class="col-12 text-secondary fs-3 mt-2">{{ dataSet.description }}</p>
                </div>
                <div class="row fw-bold">
                    <div class="row col-6 align-items-center">
                        <p class="col-4 fs-4 text-secondary">Цена: </p>
                        <p class="col-8 fs-1">{{ dataSet.price }} ₸</p>
                    </div>
                    <div class="row col-6 align-items-center">
                        <p class="col-8 fs-4 text-secondary">Заказать через</p>
                        <a class="col-2 text-decoration-none align-items-center" :href="'https://api.whatsapp.com/send?phone=' + phoneNumber" target="_blank">
                            <fa class="svglink mx-3"
                                :icon="['fab', 'whatsapp']"
                                size="2x"/>
                        </a>
<!--                        <a class="col-2 text-decoration-none align-items-center">-->
<!--                            <fa class="svglink mx-3"-->
<!--                                :icon="['fab', 'call']"-->
<!--                                size="2x"/>-->
<!--                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            isOpen: false,
            phoneNumber: '87058362143',
            dataSet: {}
        }
    },
    methods:{
        open(product){
            this.dataSet = product
            this.isOpen = true
        },
        close(){
            this.isOpen = false
        }
    }
}
</script>

<style>
.wrapper{
    background: rgba(0,0,0, 0.9);
    position: fixed;
    height: 100%;
    z-index: 98;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.modalWindow{
    color: #000;
    position: fixed;
    top: 150px;
    left: 50%;
    min-width: 800px;
    max-width: 900px;
    margin-left: -400px;
    background: #ffffff;
    box-shadow: 0 0 10px 0 #e7e7e7;
    z-index: 98;
}
.svglink path{
    color: #000;
}
</style>
