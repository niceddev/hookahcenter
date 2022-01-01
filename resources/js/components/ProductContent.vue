<template :class="{ loaded: true }">
    <div>
        <transition name="fade">
            <ProductModalWindow
                v-if="isModalWindowVisible"
                @hide-modal-window="hideModalWindow()"
                :dataSet="modalProductData"
            />
        </transition>
        <ProductCategory
            @selectedCategory="changeCategory"/>
        <div id="products" class="container mb-5">
            <div class="row justify-content-lg-start justify-content-md-center position-relative">
                <Loader v-if="!loaded"/>
<!--                <ProductItem/>-->
                <div class="col-md-5 col-lg-3 p-4 flex-column"
                     v-for="product in products"
                     :key="product.id">
                    <div class="card p-lg-4 p-md-3 d-flex flex-column"
                         @click="showModalWindow(product)">
                        <picture class="bg-primary">
                            <source :srcset="product.image_path" type="image/jpeg">
                            <source :srcset="product.image_path" type="image/webp">
                            <img class="img-fluid card-img-top" :src="product.image_path">
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
import ProductModalWindow from "./ProductModalWindow";
import ProductCategory from "./ProductCategory";
import ProductItem from "./ProductItem";
import Loader from "./Loader";

export default {
    data(){
        return {
            products: [],
            loaded: false,
            isModalWindowVisible: false,
            modalProductData: [],
            selectedCategory: ''
        }
    },
    mounted() {
        this.loadProducts()
    },
    watch:{
        selectedCategory: {
            handler: function (){
                this.loadProducts()
                this.loaded = false
            }
        }
    },
    methods: {
        changeCategory(category){
            this.selectedCategory = category
            this.loaded = true;
        },
        loadProducts: function () {
            axios.get('api/products/?category='+this.selectedCategory)
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
