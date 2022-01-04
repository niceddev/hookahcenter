let apiUrl = 'api/products/?category='

export default  {
    state:{
        products: []
    },
    actions: {
        getProductsDataSet(context, selectedCategory){
            console.log(selectedCategory)
            axios.get(apiUrl + selectedCategory.selectedCategory)
                .then(response => {
                    context.commit('updateProductsDataSet', response.data.data)
                })
                .catch(error => {
                    console.log(error)
                })
        }
    },
    mutations: {
        updateProductsDataSet(state, products){
            state.products = products
        }
    },
    getters:{
        getAllProducts(state){
            return state.products
        }
    }
}
