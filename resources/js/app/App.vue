<template>
    <div>

        <transition>
            <router-view></router-view>
        </transition>

    </div>
</template>
<script type="text/babel">
import {mapGetters} from "vuex";

export default {
    props: {

    },
    data() {
        return {}
    },
    mounted() {

    },
    methods: {

    },
    computed: {
        ...mapGetters([

        ])
    },
    components: {

    }
}
</script>
