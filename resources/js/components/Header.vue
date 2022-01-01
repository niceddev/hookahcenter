<template>
    <div class="header-links d-flex justify-content-around container">
        <div class="col text-start">
            <a href="#"><fa class="svglink" :icon="['fab', 'vk']" size="2x"/></a>
            <a href="#"><fa class="svglink" :icon="['fab', 'instagram']" size="2x"/></a>
        </div>
        <div class="col text-center">
            <router-link :to="{ name: 'home' }" class="text-white text-decoration-none">
                HOOKAH<span class="fw-bold text-danger">.</span>CENTER
            </router-link>
        </div>
        <div class="col text-end">
            <a href="#"><fa class="svglink" :icon="['fas', 'search']" size="2x"/></a>
            <a href="#"><fa class="svglink" :icon="['fas', 'map-marker-alt']" size="2x"/></a>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
