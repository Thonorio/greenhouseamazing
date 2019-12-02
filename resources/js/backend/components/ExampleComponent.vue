<template>
    <div class="card">
        <div class="card-header">
            <v-progress-circular
                    :size="50"
                    color="red"
                    indeterminate
            ></v-progress-circular><v-btn flat color="orange">Add to Cart</v-btn>
        </div>
        <div class="card-body">
            Some Importante data
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
