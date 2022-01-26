let apiUrl = '/api/categories/'

export default {
    state:{
        categories: [],
        selectedCategory: ''
    },
    actions:{
        getCategoriesDataSet(context){
            axios.get(apiUrl)
                .then(response => {
                    context.commit('updateCategoriesDataSet', response.data)
                })
                .catch(error => {
                    console.log(error)
                })
        }
    },
    mutations:{
        updateCategoriesDataSet(state, categories){
            state.categories = categories
        },
        setSelectedCategory(state, category){
            state.selectedCategory = category
        }
    },
    getters:{
        getAllCategories(state){
            return state.categories
        },
        getSelectedCategory(state){
            return state.selectedCategory
        }
    }
}
