<template>

    <div>
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading font-bold">                  
                      Inline form
                    </div>
                    <div class="panel-body">
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">keyword</label>
                          <input type="text" class="form-control"  placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="text" class="form-control"  placeholder="Password">
                        </div>
                        <div class="form-group m-l m-r-xs">
                          <label class="i-switch i-switch-md bg-info m-t-xs m-r">
                              <input type="checkbox" checked="">
                              <i></i>
                          </label>
                        </div>
                        <button type="submit" class="btn btn-default">Sign in</button>
                        <span ng-controller="ModalDemoCtrl">
                          <script type="text/ng-template" id="myModalContent.html">
                            <div ng-include="'tpl/modal.form.html'"></div>
                          </script>
                          <button class="btn btn-success" >Form in a modal</button>
                        </span>
                      </form>
                    </div>
                  </div>

            </div><!-- row end-->

    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('ebay Component ready.')
        }
    }
</script>