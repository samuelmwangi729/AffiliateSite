<template>
    <div class="container">
        <div class="row">
            <form id="withdraw">
                <fieldset>
                    <legend>
                        Withdraw Cash
                    </legend>
                    <div class="col-md-4">
                        <label for="Amount" class="control-label">
                            Enter the Amount You Wish to Withdraw
                        </label>
                        <input type="hidden" name="_token" :value="csrf">
                        <input type="number" class="form-control input-sm" placeholder="Eg.500" required/>
                    </div>
                    <div class="col-md-4">
                        <label for="Amount" class="control-label">
                            Prefered Withdrawal Method
                        </label>
                        <select class="form-control">
                            <option>Bank</option>
                            <option>M-Pesa</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="col-md-3" style="padding-top:25px">
                       <button type="submit" class="btn btn-primary" id="submit" onsubmit='reload()'>Send</button>
                    </div>
                </fieldset>
            </form>
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
        }
    }
</script>
