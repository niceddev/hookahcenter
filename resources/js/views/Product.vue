<template>
    <div class="flex-column">
        <Header/>
        <ProductContent></ProductContent>
        <SectionFooter/>
    </div>
</template>

<script>
import Header from '../components/Header.vue'
import SectionFooter from '../components/SectionFooter.vue'
import ProductContent from "../components/ProductContent";

export default{
    components: {
        ProductContent,
        Header,
        SectionFooter
    },
}
</script>
