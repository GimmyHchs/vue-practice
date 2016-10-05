<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Article List By Resource</div>
                    <div class="panel-body">
                        <div class="">
                            <div class="form-group">
                                <button @click="fetchArticles" class="btn btn-primary">Fetch All Articles</button>
                                <hr>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" v-model="article_id"></input>
                                <button @click="fetchArticle" class="btn btn-primary" style="margin-top:5px;">Fetch Article By ID</button>
                                <hr>
                            </div>
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
        data() {
            return {
                articles: [],
                resource: this.$resource('/vue/article{/id}'),
                article_id: 1,
            };
        },
        methods: {
            fetchArticles : function(){
                this.resource.get().then((response) => {
                    this.articles = response.data;
                    // console.log(response);
                }, (response) => {
                    console.log(response);
                });
            },
            fetchArticle : function(){
                this.resource.get({id:this.article_id}).then((response) => {
                    this.articles = response.data;
                    // console.log(response.data);
                }, (response) => {
                    console.log(response);
                });
            },
        },
        mounted() {
            console.log('Article List Component Ready')
        }
    }
</script>
