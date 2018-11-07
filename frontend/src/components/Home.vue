<template>
    <div class="container">
    <br/><br/>
         <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 style="text-align:center;font-size:38pt;color:black;" class="card-title"><b>Contact System</b></h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                   
                    <table class="table table-striped table-bordered dataex-res-configuration">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Mobile No</th>
                          <th>Addess</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                       
                       
                      
                        <tr v-for="contact in contacts">
                          <td>{{contact.name}}</td>
                          <td>{{contact.mobile}}</td>
                          <td>{{contact.address}}</td>
                         
                          <td>
                            <router-link class="btn btn-primary" :to="'/editContact/'+contact.id">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteContact($event)" v-bind:id="contact.id">Delete</button>
                            
                          </td>
                        </tr>
                        
                        
                       
                      
                       
                        
                        
                       
                      </tbody>
                    </table>
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
        contacts:[]
      }
    },
    created(){
      this.$http.get("http://localhost:8000/api/getContact")
        .then(function (response){
          this.contacts = response.body.contacts
        })
    },
    methods:{
      deleteContact(event){
        this.$http.delete("http://localhost:8000/api/deleteContact/"+event.target.id)
          .then(function (response){
            var position = this.contacts.findIndex(function (element){
              return element.id == event.target.id;
            });
            this.contacts.splice(position,1)
          })
      }
    }
  }
</script>