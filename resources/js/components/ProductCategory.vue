<template>
    <div id="categories" class="categories container-fluid">
        <div class="container">
            <h1 class="text-center">КАТАЛОГ</h1>
            <ul class="nav nav-pills d-flex flex-wrap justify-content-between">
                <li class="nav-item" v-for="category in categories" :key="category.id">
                    <a class="categorylink" href="#">{{ category.name }}</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            categories: [],
        }
    },
    mounted(){
        this.loadCategories()
    },
    methods: {
        loadCategories: function (){
            axios.get('/api/categories')
                .then(response => {
                    this.categories = response.data
                })
                .catch(error => {
                    console.log(error);
                })
        },
    }
}
</script>
