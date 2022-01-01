<template>
    <div class="flex-column">
        <HeadSection/>
        <AboutSection/>
        <AddressSection/>
        <Footer/>
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
        Footer,
    },
}
</script>
