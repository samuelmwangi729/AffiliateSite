<template>
    <div class="container">
        <div class="row" style="padding-top:20px">
            <form>
                <fieldset>
                    <legend>
                        Upgrade The Account
                    </legend>
                    <div class="col-lg-3">
                        <label for="name" class="label-control">
                            Select The Level
                        </label>
                        <select class="form-control">
                            <option>
                                Gold
                            </option>
                            <option>
                                Platinum
                            </option>
                            <option>
                                Premium
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top:25px">Upgrade Account</button>
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
