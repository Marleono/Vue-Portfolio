<template>
  <the-header></the-header>
  <about-me></about-me>
  <my-projects id="prj"></my-projects>
  <my-skills id="skills"></my-skills>
  <my-education id="edc"></my-education>
  <my-experience id="exp"></my-experience>
  <my-contacts id="cont"></my-contacts>
  <router-view id="hobby"></router-view>
  <the-footer></the-footer>
</template>

<script>
import TheHeader from './components/TheHeader.vue';
import AboutMe from './components/AboutMe.vue';
import MyEducation from './components/MyEducation.vue';
import MyExperience from './components/MyExperience.vue';
import TheFooter from './components/TheFooter.vue';
import MySkills from './components/MySkills.vue';
import MyContacts from './components/MyContacts.vue';
import MyProjects from './components/MyProjects.vue';

export default {
  name: 'App',
  components: {
    TheHeader,
    AboutMe,
    MyEducation,
    MyExperience,
    MySkills,
    MyContacts,
    MyProjects,
    TheFooter
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin: 40px auto 0;
}
body {
  background-color: rgb(234, 244, 211);
  height: 100%;
  margin: 0 auto;
}
.section {
  padding: 1rem 2rem;
  max-width: 100vw;
}
h1 {
  color: rgb(4, 139, 168);
}
@media (max-width: 415px) {
  h1 {
    font-size: 1.5rem;
  }

}

</style>
