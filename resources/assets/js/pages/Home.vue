<template>
    <div>
        <h1 class="md-headline">Put on your gaming socks {{this.authOrNoob}}!</h1>
        <p class="md-subheading">or if your socks are noob, check the prize shop...</p>
    </div>
</template>

<script>
    export default {
        name: 'Home',
        props: {
            authUser: {}
        },
        computed: {
            authOrNoob: function() {
                if (this.authUser) {
                    return this.authUser.name
                } else {
                    return 'noob'
                }
            }
        },
        created: function () {
            //
        }
    }
</script>

<style lang="scss" scoped>
    .md-headline {
        font-weight: bold;
    }
</style>
