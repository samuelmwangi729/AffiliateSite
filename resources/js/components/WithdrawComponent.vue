<template>
    <div class="container ml-5" style="padding-top:30px">
        <div class="row">
            <div class="col-lg-6 offset-md-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        Withdraw Amount
                    </div>
                    <div class="panel-body">
                        <form @submit="post" id="post">
                        <label for="Amount" class="label-control">
                            Amount
                        </label>
                        <input type="number" placeholder="Enter the amount" name="amount" class="form-control">
                        <input type="submit" value="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            post(){
                $('#post').on('submit',function(e){
                    alert('hello');
                });
            }
        }
    }
</script>
