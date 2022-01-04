<template :class="{ loaded: true }">
    <div>
        <transition name="fade">
            <ProductModalWindow ref="productModalWindow"/>
        </transition>
        <ProductCategory/>
        <div id="products" class="container mb-5">
            <div class="row justify-content-lg-start justify-content-md-center position-relative">
                <Loader v-if="!loaded"/>
<!--                <ProductItem/>-->
                <div class="col-md-5 col-lg-3 p-4 flex-column"
                     v-for="product in getAllProducts"
                     :key="product.id">
                    <div class="card p-lg-4 p-md-3 d-flex flex-column"
                         @click="openProductModalWindow(product)">
                        <picture class="bg-primary">
                            <source srcset="images/noimage.jpg" type="image/jpeg">
                            <source :srcset="product.image_path" type="image/webp">
                            <img class="img-fluid card-img-top" src="images/noimage.jpg">
                        </picture>
                        <div class="card-body">
                            <h4 class="card-title bg-secondary">{{product.name}}</h4>
                            <p class="card-text bg-danger">{{product.description}}</p>
                            <p class="card-price bg-secondary mt-auto">{{product.price}} ₸</p>
                            <p class="bg-secondary">Подробнее...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ProductModalWindow from "./ProductModalWindow"
import ProductCategory from "./ProductCategory"
import ProductItem from "./ProductItem"
import Loader from "./Loader"
import { mapGetters } from 'vuex'

export default {
    data(){
        return {
            // loaded: false,
            loaded: true,
        }
    },
    computed: mapGetters([
        'getAllProducts',
        'getSelectedCategory'
    ]),
    mounted() {
        this.$store.dispatch({
            type: 'getProductsDataSet',
            selectedCategory: this.$store.getters.getSelectedCategory
        })
    },
    watch:{
        getSelectedCategory: {
            handler: function (){
                this.$store.dispatch({
                    type: 'getProductsDataSet',
                    selectedCategory: this.$store.getters.getSelectedCategory
                })
                // this.loaded = false
            }
        }
    },
    methods: {
        openProductModalWindow(product){
            this.$refs.productModalWindow.open(product)
        }
    },
    components: {
        ProductModalWindow,
        ProductCategory,
        ProductItem,
        Loader
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
