<template>
    <div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">
                        hi....
                    </div>
                    <div class="panel-body">
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Phone</label>
                          <input type="text" class="form-control" v-model="formData.phone_number" placeholder="Phone">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">name</label>
                          <input type="text" class="form-control" v-model="formData.username"  placeholder="username">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">email</label>
                          <input type="email" class="form-control" v-model="formData.email"  placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="text" class="form-control" v-model="formData.password" placeholder="Password">
                        </div>
                        <div class="form-group m-l m-r-xs">
                          <label class="i-switch i-switch-md bg-info m-t-xs m-r">
                              <input type="checkbox"  v-model="formData.status" >
                              <i></i>
                          </label>
                        </div>
                        <span>
                          <button class="btn btn-success" @click.prevent="creat">add</button>
                        </span>
                        {{formData}}
                      </form>
                    </div>
                  </div>

            </div><!-- row end-->

    </div>

</template>

<script>


    export default {
        data(){
          return {
            formData:{
              status:true
            },
            data:null
          }
        },
        mounted() {
            console.log('ebay Component ready...')
        },
        methods:{
          creat: function(){
                axios.post('/api/textnow', {
                  'formData':this.formData
                })
                  .then((response => {
                      console.log(response);
                      this.$toaster.success('hi,something things success message.');
                  }).bind(this))

                  .catch((error => {
                       console.log(error.response.data);
                       var errors = error.response.data.errors;
                       errors.forEach((item => {
                          this.$toaster.error(item);
                      }).bind(this));
                  }).bind(this));
          },
          alert: function(){
            this.$toaster.success('hi,something things success message.');
          }

        },
        http: {
            root: '/api',
            headers: {
                Accept: 'application/x.someline.v1+json'
            }
        },

    }
</script>
