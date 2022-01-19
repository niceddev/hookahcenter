let apiUrl = 'api/products/'

export default  {
    state:{
        products: [],
    },
    actions: {
        getProductsDataSet(context, { getSelectedCategory, sortProductsBy }) {
            axios.get(apiUrl + '?category=' + getSelectedCategory + '&sortBy=' + sortProductsBy)
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
