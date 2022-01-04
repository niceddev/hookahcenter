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
                <li class="nav-item" v-for="category in getAllCategories" :key="category.id">
                    <input :id="category.id"
                           type="radio"
                           name="category"
                           :value="category.id"
                           v-model="selectedCategory">
                    <label :for="category.id">{{ category.name }}</label>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    data(){
        return {
            selectedCategory: '',
        }
    },
    computed: mapGetters(['getAllCategories']),
    mounted() {
        this.$store.dispatch('getCategoriesDataSet')
    },
    watch:{
      selectedCategory: {
          handler(){
              this.$store.commit('setSelectedCategory', this.selectedCategory)
          }
      }
    },
}
</script>
