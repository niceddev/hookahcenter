<template>
    <div class="container-fluid p-0">
        <Header/>
        <ProductCategory></ProductCategory>
        <ProductContent></ProductContent>
        <Footer/>
    </div>
</template>

<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
import ProductContent from "../components/ProductContent";
import ProductCategory from "../components/ProductCategory";

export default{
    components: {
        ProductCategory,
        ProductContent,
        Header,
        Footer
    },
}
</script>
