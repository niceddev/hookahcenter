<template>
    <div id="footer" class="footer text-dark container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 text-start">
                    <p class="fs-1">HOOKAH<span class="fw-bold text-danger">.</span>CENTER</p>
                    <p class="text-muted">Профессиональный кальянный магазин</p>
                </div>
                <div class="col-6 text-center">
                    <ul class="nav justify-content-center">
                        <li class="nav-item" v-for="link in links">
                            <a class="nav-link" :href="'/#'+link.section" :key="link.section">{{link.text}}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 text-end">
                    <a href="#"><fa :icon="['fab', 'vk']" size="2x"/></a>
                    <a href="#"><fa :icon="['fab', 'instagram']" size="2x"/></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            links: [
                {section: 'headersection', text: 'ГЛАВНАЯ'},
                {section: 'aboutsection', text: 'О НАС'},
                {section: 'addresssection', text: 'АДРЕС'},
                {section: 'addresssection', text: 'КОНТАКТЫ'},
            ]
        }
    }
}
</script>
