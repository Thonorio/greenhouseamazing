<template>
    <div class="loader-container">
        <v-container class="grey lighten-5">
            <v-row no-gutters>
                <div class="loader-container-individual">
                    <v-progress-circular
                        :size="200"
                        :width="15"
                        :value="10"
                        color="green"
                    >
                        10
                    </v-progress-circular>
                </div>
                <div class="loader-container-individual">
                    <v-progress-circular
                        :size="200"
                        :width="15"
                        :value="50"
                        color="pink"
                    >
                        50
                    </v-progress-circular>
                </div>
                <div class="loader-container-individual">
                    <v-progress-circular
                        :size="200"
                        :width="15"
                        :value="70"
                        color="orange"
                    >
                        70
                    </v-progress-circular>
                </div>
            </v-row>
        </v-container>
    </div>
</template>

<script>
    export default {
        data () {
            return {
               
            }
        }
    }
</script>


<style>
    .loader-container {
        height: 400px;
        width: 100%;
        margin: auto;
    };
    .loader-container-individual {
        margin: 5%;
        margin-top: 10%;
    }
</style>