<template>
    <div>
        <transition name="fade">
            <ProductModalWindow ref="productModalWindow"/>
        </transition>
        <ProductCategory/>
        <div class="row">
            <form action="">

            </form>
            <p class="col">Сортировка: </p>
            <select class="col form-select" aria-label="Default select example">
                <option selected>Самые новые</option>
                <option value="1">Самые дешевые</option>
                <option value="3">Самые дорогие</option>
            </select>
        </div>
        <div id="products" class="container mb-5">
            <div class="row justify-content-lg-start justify-content-md-center position-relative">
                <Loader v-if="!isLoaded"/>
                <div class="col-lg-3 col-md-6 p-3 flex-column"
                     v-for="product in getAllProducts"
                     :key="product.id">
                    <div class="card p-lg-4 p-md-3 d-flex flex-column"
                         @click="openProductModalWindow(product)">
                        <picture>
                            <source srcset="images/noimage.jpg" type="image/jpeg">
                            <source :srcset="product.image_path" type="image/webp">
                            <img class="img-thumbnail" src="images/noimage.jpg">
                        </picture>
                        <div class="card-body">
                            <h4 class="card-title">{{product.name}}</h4>
                            <p class="card-text">{{product.description}}</p>
                        </div>
                        <div class="d-flex justify-content-around align-items-center">
                            <p>Подробнее...</p>
                            <p class="card-price mt-auto fs-2">{{product.price}} ₸</p>
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
import { mapGetters, mapActions } from 'vuex'

export default {
    data(){
        return {
            isLoaded: true,
        }
    },
    computed: mapGetters([
        'getAllProducts',
        'getSelectedCategory'
    ]),
    methods: {
        ...mapActions(['getProductsDataSet']),
        openProductModalWindow(product){
            this.$refs.productModalWindow.open(product)
        }
    },
    mounted() {
        this.getProductsDataSet({
            type: 'getProductsDataSet',
            selectedCategory: this.getSelectedCategory,
        })
    },
    watch:{
        getSelectedCategory: {
            handler: function (){
                this.getProductsDataSet({
                    type: 'getProductsDataSet',
                    selectedCategory: this.getSelectedCategory
                })
            }
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
