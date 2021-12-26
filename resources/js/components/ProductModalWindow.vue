<template>
    <div class="wrapper"
         @click="hideModalWindow()">
        <div class="modalWindow" @click.stop="">
            <div class="header">
                <fa
                    :icon="['fas', 'window-close']"
                    size="3x"
                    color="white"
                    @click="hideModalWindow()"
                />
            </div>
            <div class="content">Content
                <slot>
                </slot>
            </div>
            <div class="footer">Footer</div>
        </div>
    </div>
</template>

<script>
export default {
    methods:{
        hideModalWindow(){
            this.$emit('hide-modal-window')
        }
    }
}
</script>

<style>
.wrapper{
    background: rgba(0,0,0, 0.9);
    position: fixed;
    height: 100%;
    z-index: 98;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.modalWindow{
    color: #000;
    position: fixed;
    top: 150px;
    left: 50%;
    width: 800px;
    margin-left: -400px;
    background: #ffffff;
    box-shadow: 0 0 10px 0 #e7e7e7;
    z-index: 98;
}
.modalWindow svg{
    float: right;
    margin-right: -60px;
}
</style>
