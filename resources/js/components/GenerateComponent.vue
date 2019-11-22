<template>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Your referral Code
                </div>
                <div class="panel-body">
                    <form method="POST" @submit:preventDefault="post">
                        <input type="text" class="form-control input-md" v-bind:value="details.url+'/'+details.referral"/>
                        <button class="bnt btn-success" type="submit">Use this</button>
                    </form>
                </div>
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
                console.log(response.data);
            }).catch(error =>{
                console.log("Error", error)
            });
        },
        methods:{
            post(){
                alert('form submitted');
            }
        }
    }
</script>