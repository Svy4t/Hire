<template>
  <router-view />
</template>

<script>
// import watch from "vue";
export default {
};
</script>

<style>
.input__search {
  left: 60px;
  color: white;
}

.avatar {
  width: 45px;
  height: 45px;
  border-radius: 100%;
  margin-right: 15px;
}

/* #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
} */

@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Inter&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");

body {
  background-color: #ffffff;
  margin: 0;
}

.nav {
  display: flex;
  justify-content: center;
  list-style-type: none;
  flex-wrap: wrap;
}

.nav li {
  /* margin-left: 5vh; */
  margin-right: 5vh;
}

.nav li a {
  text-decoration: none;
  color: #fff;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  margin-left: 15px;
}

.wrapper_1 {
  max-width: 1980px;
  padding-left: 13vh;
  padding-right: 1vh;
  margin: 0 auto;
}

.wrapper {
  max-width: 1280px;
  padding-left: 3vh;
  padding-right: 3vh;
  margin: 0 auto;
}

header {
  background-color: #00d39c;
}

.header-top {
  display: flex;
  /* justify-content: space-between; */
  align-items: center;
  /* margin-bottom: 6vh; */
  flex-wrap: wrap;
  /* padding: 3vh 0; */
}

.logo {
  display: flex;
  align-items: center;
}

.logo a {
  list-style-type: none;
  text-decoration: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  color: #ffffff;
}

.li_0 {
  display: flex;
  align-items: center;
}

.li_3 a {
  display: flex;
  align-items: center;
  background-color: #02c894;
  border-radius: 5px;
  padding: 6px;
  cursor: pointer;
}

form {
  position: relative;
  width: 300px;
  margin: 0 auto;
  height: 42px;
}

input {
  height: 42px;
  /* width: 0; */
  padding: 0 42px 0 15px;
  border: none;
  border-bottom: 2px solid transparent;
  outline: none;
  background: transparent;
  transition: 0.4s cubic-bezier(0, 0.8, 0, 1);
  position: absolute;
  top: 0;
  left: 60px;
  z-index: 2;
  color: #fff;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
}

input:focus {
  width: 200px;
  z-index: 1;
  border-bottom: 2px solid #fff;
}

button {
  background: transparent;
  border: none;
  height: 42px;
  width: 42px;
  position: absolute;
  top: 0;
  left: 0;
  cursor: pointer;
}


</style>
