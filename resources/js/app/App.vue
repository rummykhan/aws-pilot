<template>
    <main role="main" class="main" id="content" style="margin-top:5rem;">
        <Sidebar/>


        <transition>
            <router-view></router-view>
        </transition>

    </main>
</template>
<script type="text/babel">
import {mapGetters} from "vuex";
import Sidebar from "./components/Sidebar";

export default {
    props: {},
    data() {
        return {}
    },
    mounted() {

    },
    methods: {},
    computed: {
        ...mapGetters([])
    },
    components: {
        Sidebar,
    }
}
</script>
