<template :class="{ loaded: true }">
    <div id="products" class="products container-fluid">
        <div class="container d-flex flex-wrap justify-content-center">
            <div v-if="!loaded" class="lds-ring"><div></div><div></div><div></div><div></div></div>
            <div class="card shadow p-3 mb-5 bg-body rounded" v-for="product in products" :key="product.id">
                <div class="card-body">
                    <img src="" alt="productimage">
                    <h5 class="card-title">{{product.name}}</h5>
                    <p class="card-text">{{product.description}}</p>
                    <p class="card-text">{{product.price}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            products: [],
            loaded: false
        }
    },
    mounted() {
        this.loadProducts()
    },
    methods:{
        loadProducts: function (){
            axios.get('/api/products')
                .then(response => {
                    this.products = response.data.data
                    this.loaded = true
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>
