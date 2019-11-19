<template>
    <div class="container">
        <div class="row" style="padding-top:20px">
            <form>
                <fieldset>
                    <legend>
                        Enter the Referral details Here 
                    </legend>
                    <div class="col-lg-3">
                        <label for="name" class="label-control">
                            Names
                        </label>
                        <input type="text" class="form-control input-md" placeholder="Enter the names Here" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="name" class="label-control">
                            Email Address
                        </label>
                        <input type="email" class="form-control input-md" placeholder="Enter the email Here" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="name" class="label-control">
                            Refferred By:
                        </label>
                        <input type="number" class="form-control input-md" placeholder="Enter the refererId Here" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top:25px">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
