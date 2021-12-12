<template>
    <div class="container-fluid p-0">
        <HeadSection></HeadSection>
        <AboutSection></AboutSection>
        <AddressSection></AddressSection>
        <Footer></Footer>
    </div>
</template>

<script>
import HeadSection from '../components/HeadSection.vue'
import AboutSection from '../components/AboutSection.vue'
import AddressSection from '../components/AddressSection.vue'
import Footer from '../components/Footer.vue'

export default{
    components: {
        HeadSection,
        AboutSection,
        AddressSection,
        Footer
    },
}
</script>
