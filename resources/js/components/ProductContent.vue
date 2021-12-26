<template :class="{ loaded: true }">
    <div>
        <ProductModalWindow
            v-if="isModalWindowVisible"
            @hide-modal-window="hideModalWindow()"
        />
        <div id="products" class="products container-fluid">
            <div class="container d-flex flex-wrap">
                <div v-if="!loaded" class="lds-ring"><div></div><div></div><div></div><div></div></div>
                <div class="card shadow p-3 mb-5 bg-body rounded"
                     v-for="product in products"
                     :key="product.id"
                     @click="showModalWindow()">
                    <div class="card-body">
                        <img class="img-thumbnail" :src="product.image_path" alt="productimage">
                        <h5 class="card-title">{{product.name}}</h5>
                        <p class="card-text">{{product.description}}</p>
                        <p class="card-text">{{product.price}}</p>
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
            isModalWindowVisible: false
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
        showModalWindow(){
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
