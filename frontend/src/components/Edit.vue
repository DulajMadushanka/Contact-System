<template>

<div class="container">
    <br/><br/>
         <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 style="text-align:center;font-size:38pt;color:black;" class="card-title"><b>Edit Contact</b></h4> 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                        <form @submit.prevent = "updateContact">
                            <div class="form-group">
                                <label for="name"><b>Name :</b></label>
                                <input type="text" v-validate="'required|alpha_num'" autofocus v-model="product.name"  class="form-control"  name="name" placeholder="Enter Name">
                                <div v-show="errors.has('name')" class="help-block alert alert-danger">
                                    {{errors.first('name')}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><b>Mobile :</b></label>
                                <input v-validate="'required|length:10|numeric'" type="text" class="form-control" v-model="product.mobile"  name="mobile" placeholder="Enter Mobile No">
                                <div v-show="errors.has('mobile')" class="help-block alert alert-danger">
                                    {{errors.first('mobile')}}
                                </div>
                            </div>
                                <label for="address"><b>Address :</b></label>
                                <input v-validate="'required'" type="text" class="form-control" v-model="product.address"  name="address" placeholder="Enter Addressme"><br/>
                                <div v-show="errors.has('address')" class="help-block alert alert-danger">
                                    {{errors.first('address')}}
                                </div>
                            <button type="submit"  class="btn btn-primary">Submit</button>
                        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>

</template>

<script>
    export default{
        created(){
            this.getData();
        },
        data(){
            return {
                product:{
                }
            }
        },
        methods:{
            getData(){
                this.$http.get('http://localhost:8000/api/getContacts/'+this.$route.params.id)
                    .then(function (response){
                        this.product = response.body.contacts;
                    })
            },
            updateContact(){
                this.$http.put('http://localhost:8000/api/editContact/'+this.$route.params.id,this.product)
                    .then(function (response){
                        
                        this.$router.push('/')
                    })
            }
        }
    }
</script>