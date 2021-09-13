
<template>
  
  <div>

 <div class="row">
  <router-link to="/store-category" class="btn btn-primary">Add Category </router-link>
   
 </div>
<br>
   <input v-if="categories.length>0" type="text" v-model="searchTerm" class="form-control" style="width: 300px;" placeholder="Search Here">

<h3 class="text-center" v-if="categories.length == 0">no categories added </h3>
<br>

   <div class="row"  v-if="categories.length>0">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Category Name</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="category in filtersearch" :key="category.id">
                        <td> {{ category.category_name }} </td>
                       
            <td>
   <router-link :to="{name: 'edit-category', params:{id:category.id}}" class="btn btn-sm btn-primary">Edit</router-link>

 <a @click="deleteCategory(category.id)" class="btn btn-sm btn-danger"><font color="#ffffff">Delete</font></a>
            </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->


   
  </div>


</template>



<script type="text/javascript">
  
  export default {
    created(){
      if (!User.loggedIn()) {
        this.$router.push({name: '/'})
      }
    },
    data(){
      return{
        categories:[],
        searchTerm:''
      }
    },
    computed:{
      filtersearch(){
      return this.categories.filter(category => {
         return category.name.match(this.searchTerm)
      }) 
      }
    },
 
  methods:{
    allCategory(){
      axios.get('en/api/category')
      .then(({data}) => (this.categories = data,console.log(data)))
      .catch()
    },
  deleteCategory(id){
                axios.delete('/api/category/'+id)
               .then(() => {
                this.categories = this.categories.filter(category => {
                  return category.id != id
                })
               })
               .catch(() => {
                this.$router.push({name: 'category'})
               })
           
              }
         

  },
  created(){
    this.allCategory();
  } 
  
  } 
</script>


<style type="text/css">
  #em_photo{
    height: 40px;
    width: 40px;
  }
</style>