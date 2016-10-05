<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Article List</div>
                    <div class="panel-body">
                        <ul v-for="article in articles">
                            <li>
                                Article Title = {{article.title}}
                            </li>
                            <li>
                                Article Content = {{article.content}}
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
</style>
<script>
    export default {
        props : [
            'articles',
        ],
        mounted() {
            console.log('Article List Component Ready')
            console.log(this.articles[0])
        }
    }
</script>
