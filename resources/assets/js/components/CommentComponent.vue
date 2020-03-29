<template>
    <div class="media">
        <h5>{{ comment.user }}</h5>
        <div class="media-left">
            <a href="#">
                <img v-bind:src="comment.photo" title="One movies" alt=" " width="50px" height="50px"/>
            </a>
        </div>
        <div class="media-body">
            <div v-if="editMode" class="col-md-8">
                <textarea placeholder="Message" required="" class="form-control"
                          v-model="comment.message"></textarea>
            </div>

            <p v-else >{{ comment.message }}</p>
            <span>Publicado el {{ comment.created_at }} - Modificado el {{ comment.updated_at }}</span><br>

            <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate"> Guardar </button>
            <button v-else class="btn btn-primary" v-on:click="onClickEdit"> Editar </button>

            <button class="btn btn-danger" v-on:click="onClickDelete"> Eliminar </button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['comment'],
        data() {
            return {
                editMode: false
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickDelete() {
                axios.delete('/comment/'+this.comment.id).then( () => {
                    this.$emit('delete');
                } )

            },
            onClickEdit() {
                this.editMode = true
            },
            onClickUpdate() {
                const params = {
                    'message': this.comment.message
                };
                axios.put('/comment/'+this.comment.id, params).then( (response) => {
                    this.editMode = false;
                    const comment = response.data;
                    this.$emit('update', comment);
                } )

            }
        }
    }
</script>
