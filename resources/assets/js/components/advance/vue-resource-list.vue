<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Article List By Resource</div>
                    <div class="panel-body">
                        <div class="">
                            <button @click="fetchArticles" class="btn btn-primary">Fetch All Articles</button>
                            <hr>
                        </div>
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
        methods: {
            fetchArticles : function(){
                this.$http.get('/vue/article/api/all').then((response) => {
                    this.articles = response.data;
                }, (response) => {
                    console.log(response);
                });
            },
        },
        ready() {
            console.log('Article List Component Ready')
        }
    }
</script>
