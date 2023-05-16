<?php include __DIR__ . '/partials/head.php'; ?>

<div id="app">
    {{message}}
</div>

<script>
    const {
        createApp
    } = Vue;

    createApp({
        data() {
            return {
                message: 'Hello Vue!'
            }
        }
    }).mount('#app')
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>