<template>
    <div class="all-comments col-md-8">

        <form-component v-bind:film_id="film_id"
            v-on:new="addComment">

        </form-component>


        <comment-component
            v-for="(comment, index) in comments"
            v-bind:key="comments.id"
            v-bind:comment="comment"
            v-on:delete="deleteComment(index)"
            v-on:update="updateComment(index, ...arguments)">

        </comment-component>

    </div>
</template>

<script>
    export default {
        props: ['film_id'],
        data() {
            return {
                comments: []
            }
        },
        mounted() {
            axios.get('/comments/'+this.film_id).then( (response) => {
                this.comments = response.data;
            } )
        },
        methods: {
            addComment(comment) {
                this.comments.push(comment);
            },
            deleteComment(index) {
                this.comments.splice(index, 1);
            },
            updateComment(index, comment) {
                this.comments[index] = comment;
            }
        }

    }
</script>
