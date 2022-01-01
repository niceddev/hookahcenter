<template>
    <div id="headersection" class="header-section">
        <Header/>
        <div class="d-flex container logo">
            <div class="row justify-content-start">
                <div class="col">
                    <div class="row">
                        <img src="/images/logo.svg" alt="">
                    </div>
                    <div class="row justify-content-center">
                        <router-link class="cataloglink text-center text-white" :to="{ name: 'products' }">
                            Перейти в каталог
                            <fa class="align-middle" :icon="['fas', 'long-arrow-alt-right']" size="md"/>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Header from './Header.vue'

export default {
    components: {
        Header
    }
}
</script>
