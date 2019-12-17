<template>
    <main class="main">
        <Header/>
        <Sidebar/>
        <Theme/>
        <section class="content">
            <router-view></router-view>
        </section>
    </main>
</template>

<script>
    import Header from './Components/Layout/Header';
    import Sidebar from './Components/Layout/Sidebar';
    import Theme from './Components/Layout/Theme';

    export default {

        components: {Header, Sidebar, Theme}
    }
</script>
