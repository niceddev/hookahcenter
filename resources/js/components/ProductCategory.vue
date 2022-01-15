<template>
    <div id="categories" class="categories container-fluid">
        <div class="container">
            <ul class="nav btn-group justify-content-evenly">
                <li class="nav-item mt-2">
                    <input id="all" class="btn-check"
                           type="radio"
                           name="category"
                           value=""
                           checked
                           v-model="selectedCategory">
                    <label for="all" class="fs-5 btn btn-outline-light border-2">Все</label>
                </li>
                <li class="nav-item mt-2" v-for="category in getAllCategories" :key="category.id">
                    <input :id="category.id" class="btn-check"
                           type="radio"
                           name="category"
                           :value="category.id"
                           v-model="selectedCategory">
                    <label :for="category.id" class="fs-5 btn btn-outline-light border-2">{{ category.name }}</label>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
    data(){
        return {
            selectedCategory: '',
        }
    },
    computed: mapGetters(['getAllCategories']),
    methods: mapActions(['getCategoriesDataSet']),
    mounted() {
        this.getCategoriesDataSet()
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
