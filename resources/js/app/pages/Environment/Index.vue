<template>
    <div>
        <h1>This is Environments Page</h1>
    </div>
</template>
<script type="text/babel">
import {mapGetters} from 'vuex'

export default {
    name: 'HomePage',
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
