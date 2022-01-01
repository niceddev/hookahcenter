<template>
    <div id="categories" class="categories container-fluid">
        <div class="container">
            <ul class="nav d-flex flex-wrap justify-content-between">
                <li class="nav-item">
                    <input id="all"
                           type="radio"
                           name="category"
                           value=""
                           checked
                           v-model="selectedCategory">
                    <label for="all">Все</label>
                </li>
                <li class="nav-item" v-for="category in categories" :key="category.id">
                    <input :id="category.name"
                           type="radio"
                           name="category"
                           :value="category.id"
                           v-model="selectedCategory">
                    <label :for="category.name">{{ category.name }}</label>
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
            selectedCategory: '',
        }
    },
    mounted(){
        this.loadCategories()
    },
    watch:{
      selectedCategory: {
          handler: function (){
              this.$emit('selectedCategory', this.selectedCategory)
          }
      }
    },
    methods: {
        loadCategories: function (){
            axios.get('/api/categories')
                .then(response => {
                    this.categories = response.data
                })
                .catch(error => {
                    console.log(error)
                })
        },

    }
}
</script>
