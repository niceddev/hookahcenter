<template>
    <div class="flex-column">
        <SectionHeader/>
        <SectionAbout/>
        <SectionAddress/>
        <SectionFooter/>
    </div>
</template>

<script>
import SectionHeader from '../components/SectionHeader.vue'
import SectionAbout from '../components/SectionAbout.vue'
import SectionAddress from '../components/SectionAddress.vue'
import SectionFooter from '../components/SectionFooter.vue'


export default{
    components: {
        SectionHeader,
        SectionAbout,
        SectionAddress,
        SectionFooter,
    },
}
</script>
