<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Stationeers World Stats</div>

                    <div class="card-body">
                        <div>
                            <div class="form-group">
                                <label>
                                    World XML File
                                    <input type="file" required name="world" ref="worldFile" class="form-control-file"  v-on:change="handleFileUpload()">
                                </label>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" v-on:click="submitFile()" :disabled="processing">Process</button>
                                <b-spinner style="width: 1.2rem; height: 1.2rem;" variant="primary" v-if="processing"></b-spinner>
                            </div>
                        </div>

                        <div v-if="error === null">
                            <div v-if="error === null">
                                <json-viewer
                                    v-if="response !== null"
                                    :value="response"
                                    :expand-depth=5
                                    copyable
                                ></json-viewer>
                            </div>
                        </div>
                        <div v-else class="alert alert-danger">
                            {{error}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                'error': null,
                'response': null,
                'processing': false,
            }
        },
        mounted: function () {
            self = this;
        },
        methods: {
            startProcessing() {
                this.processing = true;
                this.error = null;
                this.response = null;
            },
            endProcessing() {
                this.processing = false;
            },

            /*
             * Submits the file to the server
             */
            submitFile() {
                this.startProcessing();

                // Initialize the form data
                let formData = new FormData();

                if (this.file === undefined)
                {
                    this.error = "No file selected!";
                    this.endProcessing();
                    return;
                }

                // Add the form data we need to submit
                formData.append('file', this.file);

                // Make the request to the POST /single-file URL
                axios.post( '/ajax/stats',
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                ).then(function(serverResponse){
                    self.endProcessing();
                    self.response = serverResponse.data;
                })
                .catch(function(error){
                    self.endProcessing();
                    self.error = error;
                });
            },

            /*
             * Handles a change on the file upload
             */
            handleFileUpload(){
                this.file = this.$refs.worldFile.files[0];
            }
        }
    }
</script>
