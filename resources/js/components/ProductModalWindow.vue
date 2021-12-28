<template>
    <div class="wrapper"
         @click="hideModalWindow()">
        <div class="modalWindow" @click.stop="">
            <div class="header">
                <fa
                    :icon="['fas', 'window-close']"
                    size="3x"
                    color="white"
                    @click="hideModalWindow()"
                />
            </div>
            <div class="row p-5">
                <picture class="col-6">
                    <source :srcset="dataSet.image_path" type="image/jpeg">
                    <source :srcset="dataSet.image_path" type="image/webp">
                    <img class="img-thumbnail" :src="dataSet.image_path">
                </picture>
                <div class="col-6 d-flex flex-column">
                    <h1 class="fw-bold">{{dataSet.name}}</h1>
                    <p class="text-black-50 fs-3 mt-2">{{dataSet.description}}</p>
                    <p class="fw-bold text-end fs-1 mt-auto">{{dataSet.price}} ₸</p>
                    <a href="#">
                        <fa class="svglink"
                            :icon="['fab', 'whatsapp']"
                            size="2x"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        dataSet: {
            type: Object
        }
    },
    methods:{
        hideModalWindow(){
            this.$emit('hide-modal-window')
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
.modalWindow svg{
    float: right;
    margin-right: -60px;
}
.modalWindow .row>div{
    min-height: 300px;
}
.modalWindow .row>div>a svg{
    color: #000;
    /*width:60px;*/
    /*height:60px;*/
    /*bottom:40px;*/
    /*background-color:#25d366;*/
    /*border-radius:50px;*/
    /*text-align:center;*/
    /*font-size:30px;*/
    /*box-shadow: 2px 2px 3px #999;*/
}
</style>
