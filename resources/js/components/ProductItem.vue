<!--<template>-->
<!--    <div class="col-md-5 col-lg-3 p-4 flex-column"-->
<!--         v-for="product in products.js"-->
<!--         :key="product.id">-->
<!--        <div class="card p-lg-4 p-md-3 d-flex flex-column"-->
<!--             @click="showModalWindow(product)">-->
<!--            <picture class="bg-primary">-->
<!--                <source :srcset="product.image_path" type="image/jpeg">-->
<!--                <source :srcset="product.image_path" type="image/webp">-->
<!--                <img class="img-fluid card-img-top" :src="product.image_path">-->
<!--            </picture>-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title bg-secondary">{{product.name}}</h4>-->
<!--                <p class="card-text bg-danger">{{product.description}}</p>-->
<!--                <p class="card-price bg-secondary mt-auto">{{product.price}} ₸</p>-->
<!--                <p class="bg-secondary">Подробнее...</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    data(){-->
<!--        return {-->

<!--        }-->
<!--    },-->
<!--    mounted:{-->

<!--    },-->
<!--    methods:{-->
<!--        loadProductItems(){-->
<!--            axios.get('api/products.js/?category=' + this.selectedItem).then().catch()-->
<!--        }-->
<!--    },-->

<!--}-->
<!--</script>-->
