<template>
   
 <div class="container">
    <br/><br/>
         <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 style="text-align:center;font-size:38pt;color:black;" class="card-title"><b>Add Contact</b></h4> 
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                        <form @submit.prevent="submitForm">
                            <div class="form-group">
                                <label for="name"><b>Name :</b></label>
                                <input type="text" v-validate="'required|alpha_num'" autofocus v-model="contact.name" class="form-control"  name="name" placeholder="Enter Name">
                                <div v-show="errors.has('name')" class="help-block alert alert-danger">
                                    {{errors.first('name')}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><b>Mobile :</b></label>
                                <input v-validate="'required|length:10|numeric'" type="text" class="form-control" v-model="contact.mobile"  name="mobile" placeholder="Enter Mobile No">
                                <div v-show="errors.has('mobile')" class="help-block alert alert-danger">
                                    {{errors.first('mobile')}}
                                </div>
                            </div>
                            <label for="address"><b>Address :</b></label>
                                <input v-validate="'required'" type="text" class="form-control" v-model="contact.address"  name="address" placeholder="Enter address"><br/>
                                <div v-show="errors.has('address')" class="help-block alert alert-danger">
                                    {{errors.first('address')}}
                                </div>
                            <button type="submit" v-show="contact.name && contact.mobile && contact.address" class="btn btn-primary">Submit</button>
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
        data(){
            return{
                contact:{
                    name:'',
                    mobile:'',
                    address:''
                }
            }
        },
        methods:{
            submitForm(){
                this.$http.post("http://localhost:8000/api/addContact",this.contact)
                .then(function (response){
                       this.$router.push('/')
                })
            }
        }
    }
</script>