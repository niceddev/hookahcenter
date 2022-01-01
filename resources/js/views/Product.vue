<template>
    <div class="flex-column">
        <Header/>
        <ProductContent></ProductContent>
        <Footer/>
    </div>
</template>

<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
import ProductContent from "../components/ProductContent";

export default{
    components: {
        ProductContent,
        Header,
        Footer
    },
}
</script>
