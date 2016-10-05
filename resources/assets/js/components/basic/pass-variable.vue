<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pass Variable Component</div>
                    <div class="panel-body">
                        <div>
                            <h3>Props</h3>
                            title : {{title}}
                            <hr>
                        </div>
                        <div>
                            <h3>Props</h3>
                            body : {{body}}
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'title',
            'body',
        ],
        mounted() {
            console.log('Pass Variable Vue Component ready.')
        }
    }
</script>
