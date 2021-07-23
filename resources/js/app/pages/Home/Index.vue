<template>
    <div>
        <h1>Home Page</h1>
    </div>
</template>
<script type="text/babel">
import {mapGetters} from 'vuex'

export default {
    props: {
        rSlug: String,
    },
    data() {
        return {

        }
    },
    computed: {
        ...mapGetters([
            'env'
        ])
    },

    components: {
    },

    mounted() {

    },
    methods: {
    }
}
</script>
