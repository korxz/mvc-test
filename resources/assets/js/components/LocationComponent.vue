<template>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <label for="">Country: </label>
            <select class="form-control" name="country" id="country">
                <option v-bind:key="data.iso_code" v-for="data in result" value="data.country">{{ data.country }}</option>
            </select>
        </div>

        <div class="col-sm-6">
            <label for="">Currency</label>
            <select class="form-control" name="currency" id="currency">
                <option v-bind:key="data.iso_code" v-for="data in result" value="data.currency">{{ data.currency }}</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log("Component Location is mounted");
            axios.get('/api/locations')  
            .then(response => {
                this.result = response.data;
            }).catch(error => {
                this.errors.push(error)
                console.log(error);
            });
        },

        data() {
            return {
                result: [],
                errors: [],
                message: "New message"
            }
        }
    }
</script>
