<template>
    <div class="lds-ring d-flex justify-content-center align-items-center"><div></div><div></div><div></div><div></div></div>
</template>

<script>

</script>

<style>
.lds-ring {
    margin-bottom: 100px;
    position: absolute;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0,0,0,0.8);
    z-index: 99;
}
.lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 200px;
    height: 200px;
    margin: 8px;
    border: 16px solid #fff;
    border-radius: 50%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #fff transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
}
@keyframes lds-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
