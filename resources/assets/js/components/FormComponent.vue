<template>
    <div class="all-comments-info">
        <h3 href="#">Comentarios</h3>
        <div class="agile-info-wthree-box">
            <form v-on:submit.prevent="newComment">
                <textarea placeholder="Message" required=""
                    v-model="message"></textarea>

                <input type="submit" value="ENVIAR">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['film_id'],
        data() {
            return {
                message: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newComment() {
                const params = {
                    'message': this.message,
                    'film_id': this.film_id,
                    'photo': 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/PICA.jpg/600px-PICA.jpg'
                };
                this.message = '';

                axios.post('/comments', params).then( (response) => {
                    const comment = response.data;
                    this.$emit('new', comment);
                } )
            }
        }

    }
</script>
