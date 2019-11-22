<template>
    <div class="row" style="padding-top:20px;padding-left:20px">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                   Here is  Your Refferal Code
                </div>
                <div class="panel-body">
                    <form class="form-horizontal"  method="GET" action="/postLink">
                         <input type="hidden" :value='csrf'>
                        <input type="text" class="form-control text-center"  v-bind:value="details.url+'/'+details.referral"/>
                        <br><button class="btn btn-primary btn-block" type="submit">Use this As your Affiliate Link</button>
                    </form>
                </div>
                <a href="#">
                    <div class="panel-footer text-center" style="background-color:#f69a0b;color:white">
                        <span>
                            Refresh the page to get a new Link
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return{
                 csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                details:[],


            }
        },
        mounted() {
            var self=this;

            axios.get('/getCurrentUser')
            .then(response =>{
                this.details=response.data;
            }).catch(error =>{
                console.log("Error", error)
            });
        }
    }
</script>
