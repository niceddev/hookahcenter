<template>
    <div class="wrapper" v-if="isOpen" @click="close()">
        <div class="container">
            <input type="text" placeholder="Search">
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            isOpen: false
        }
    },
    methods:{
        open(){
            this.isOpen = true
        },
        close(){
            this.isOpen = false
        },
    },
    mounted(){

    }
}
</script>

<style>

</style>
