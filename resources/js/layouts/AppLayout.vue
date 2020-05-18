<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <router-link class="navbar-brand" to="/">Navbar</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <router-link class="nav-item nav-link" to="/blog">Blog Posts</router-link>
                <a class="nav-item nav-link" href="#">Post a Blog</a>
                <a class="nav-item nav-link" href="#">Update Posted Blog</a>
                </div>
            </div>
        </nav>

        <router-view></router-view>

        <footer>
            <div class="d-flex">
                Footer
                
            </div>
        </footer>

    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>

</style>