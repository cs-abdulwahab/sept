<template>
    <p>{{ greeting }} World! <br/>


        {{msg }}</p>
</template>

<script>

    module.exports = {
        data: function () {
            return {
                greeting: 'Hello',
                msg: 'sample message',
            }
        }
    }
</script>

<style scoped>
    p {
        font-size: 2em;
        text-align: center;
    }
</style>