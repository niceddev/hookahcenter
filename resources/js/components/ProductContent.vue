<template :class="{ loaded: true }">
    <div>
        <transition name="fade">
            <ProductModalWindow
                v-if="isModalWindowVisible"
                @hide-modal-window="hideModalWindow()"
                :dataSet="modalProductData"
            />
        </transition>
        <div id="products" class="container mb-5">
            <div v-if="!loaded" class="lds-ring"><div></div><div></div><div></div><div></div></div>
            <div class="row justify-content-lg-start justify-content-md-center">
                <div class="col-md-5 col-lg-3 p-4 shadow rounded flex-column"
                     v-for="product in products"
                     :key="product.id"
                     @click="showModalWindow(product)">
                    <div class="card p-lg-4 p-md-3">
                        <picture>
                            <source :srcset="product.image_path" type="image/jpeg">
                            <source :srcset="product.image_path" type="image/webp">
                            <img class="img-fluid" :src="product.image_path">
                        </picture>
                        <h4 class="card-title">{{product.name}}</h4>
                        <p class="card-text">{{product.description}}</p>
                        <p class="card-price">{{product.price}} ₸</p>
                        <p>Подробнее...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ProductModalWindow from "./ProductModalWindow";

export default {
    data(){
        return {
            products: [],
            loaded: false,
            isModalWindowVisible: false,
            modalProductData: [],
        }
    },
    mounted() {
        this.loadProducts()
    },
    methods: {
        loadProducts: function () {
            axios.get('/api/products')
                .then(response => {
                    this.products = response.data.data
                    this.loaded = true
                })
                .catch(error => {
                    console.log(error)
                })
        },
        showModalWindow(data){
            this.modalProductData = data;
            this.isModalWindowVisible = true
        },
        hideModalWindow(){
            this.isModalWindowVisible = false
        }
    },
    components: {
        ProductModalWindow
    }
}
</script>
<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
</style>
