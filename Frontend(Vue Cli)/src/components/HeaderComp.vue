<template>
  <header>
    <div class="wrapper_1">
      <div class="header-top">
        <li class="logo">
          <img src="@/assets/logo.svg" alt="" />
          <router-link @click="goHome()" to="/" href="">Hire</router-link>
        </li>
        <nav>
          <ul class="nav">
            <li class="li_0">
              <img src="@/assets/Buildings.svg" alt="" />
              <router-link to="/advts" href="">Недвижимость</router-link>
            </li>
            <li class="li_0">
              <img src="@/assets/Map.svg" alt="" />
              <router-link @click="goMap()" to="/about" href="">Карта</router-link>
            </li>
            <li class="li_0">
              <form v-on:submit.prevent="search(textSearch)">
                <input class="input__search" type="text" placeholder="Поиск..." v-model="textSearch" />
                <button class="btn-search" type="submit">
                  <img src="@/assets/Magnifer.svg" alt="" />
                </button>
              </form>
            </li>
          </ul>
        </nav>
        <div class="header-info">
          <ul class="nav">
            <li class="li_3">
              <a @click="goAddAdvt()"><img src="@/assets/AddSquare.svg" alt="" />Добавить объявление</a>
            </li>
            <li class="li_1">
              <router-link v-if="!token" to="/login"><img src="@/assets/people.svg" alt="" /></router-link>
              <router-link v-else to="/profile"><img class="avatar" :src="'http://127.0.0.1:8000/avatars/' + user.avatar"
                  alt="" /></router-link>
              <router-link v-if="!token" to="/login">Войти</router-link>
              <router-link v-else to="/profile">{{ user.name }}</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header__modile header-m">
      <div class="header-m__burger-menu">
        <button @click="open()" class="header-m__menu-btn">
          <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1665 1.33325L1.83317 1.33325" stroke="white" stroke-width="2.5" stroke-linecap="round" />
            <path d="M15.1665 5.5L1.83317 5.5" stroke="white" stroke-width="2.5" stroke-linecap="round" />
            <path d="M15.1665 9.66675L1.83317 9.66675" stroke="white" stroke-width="2.5" stroke-linecap="round" />
          </svg>
        </button>
        <div class="header-m__menu">
          <button @click="close()" class="header-m__exit">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 13L13 2" stroke="white" stroke-width="2.5" stroke-linecap="round" />
              <path d="M2 2L13 13" stroke="white" stroke-width="2.5" stroke-linecap="round" />
            </svg>
          </button>
          <ul class="header-m__list">
            <li class="header-m__item" @click="close()">
              <svg class="header-m__list-logo" width="41" height="49" viewBox="0 0 41 49" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.9382 2C15.9382 2 17 1 18.092 1C18.752 1 19.9326 1.67198 19.9326 1.67198C19.9326 1.67198 39.4387 14.5 39.9387 16C40.4387 17 40.4387 18 40.4387 18C40.4387 18 40.4502 36.0872 40.4387 36.5C40.4223 37.0918 39.9387 38.5 38.9387 38.5C37.9387 38.5 36.4387 37.5 36.4387 37.5C36.4387 37.5 22.5206 27.7213 21.4387 27C20.7938 26.57 20 25.5 18.6178 26.5C18.0295 26.9257 17.9387 28.5 17.9387 28.5C17.9387 29.2746 17.956 45.992 17.9387 46.7532C17.9267 47.2798 17.9007 47.6467 17.4387 48C16.8164 48.4759 16.1049 48.2398 15.4387 48C14.5002 47.6621 14.0002 47 13.4387 46.5C13.1738 46.1331 1 33.5 1 31C1.00089 27.7198 1 27.9918 1 27.5C1 25.7178 1.09884 22.7992 1.09884 21.017C2 17 13 5 15.9382 2Z"
                  fill="#FFF" stroke="#FFF" stroke-linecap="round" />
              </svg>
              <router-link class="header-m__item-logo" @click="goHome()" to="/" href="">Hire</router-link>
            </li>
            <li class="header-m__item" @click="close()">
              <router-link class="header-m__item-link" to="/advts">
                <img src="@/assets/Buildings.svg" alt="" />
                Недвижимость
              </router-link>
            </li>
            <li class="header-m__item" @click="close()">
              <router-link class="header-m__item-link" to="/about">
                <img src="@/assets/Map.svg" alt="" />
                Карта
              </router-link>
            </li>
          </ul>
        </div>
      </div>
      <svg class="header-m__logo" width="41" height="49" viewBox="0 0 41 49" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M15.9382 2C15.9382 2 17 1 18.092 1C18.752 1 19.9326 1.67198 19.9326 1.67198C19.9326 1.67198 39.4387 14.5 39.9387 16C40.4387 17 40.4387 18 40.4387 18C40.4387 18 40.4502 36.0872 40.4387 36.5C40.4223 37.0918 39.9387 38.5 38.9387 38.5C37.9387 38.5 36.4387 37.5 36.4387 37.5C36.4387 37.5 22.5206 27.7213 21.4387 27C20.7938 26.57 20 25.5 18.6178 26.5C18.0295 26.9257 17.9387 28.5 17.9387 28.5C17.9387 29.2746 17.956 45.992 17.9387 46.7532C17.9267 47.2798 17.9007 47.6467 17.4387 48C16.8164 48.4759 16.1049 48.2398 15.4387 48C14.5002 47.6621 14.0002 47 13.4387 46.5C13.1738 46.1331 1 33.5 1 31C1.00089 27.7198 1 27.9918 1 27.5C1 25.7178 1.09884 22.7992 1.09884 21.017C2 17 13 5 15.9382 2Z"
          fill="#FFF" stroke="#FFF" stroke-linecap="round" />
      </svg>
      <svg class="header-m__add" @click="goAddAdvt()" width="30" height="30" viewBox="0 0 30 30" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="30" height="30" rx="5" fill="#02C894" />
        <path
          d="M6.16699 15.5001C6.16699 11.5717 6.16699 9.60752 7.38738 8.38714C8.60777 7.16675 10.572 7.16675 14.5003 7.16675C18.4287 7.16675 20.3929 7.16675 21.6133 8.38714C22.8337 9.60752 22.8337 11.5717 22.8337 15.5001C22.8337 19.4285 22.8337 21.3926 21.6133 22.613C20.3929 23.8334 18.4287 23.8334 14.5003 23.8334C10.572 23.8334 8.60777 23.8334 7.38738 22.613C6.16699 21.3926 6.16699 19.4285 6.16699 15.5001Z"
          stroke="white" stroke-width="2.5" />
        <path d="M17 15.5L14.5 15.5M14.5 15.5L12 15.5M14.5 15.5L14.5 13M14.5 15.5L14.5 18" stroke="white"
          stroke-width="2.5" stroke-linecap="round" />
      </svg>
      <router-link v-if="!token" to="/login"><img src="@/assets/people.svg" alt="" /></router-link>
      <router-link v-else to="/profile"><img class="avatar" :src="'http://127.0.0.1:8000/avatars/' + user.avatar"
          alt="" /></router-link>
    </div>
  </header>
</template>

<script>
import Axios from "axios";
export default {
  data() {
    return {
      user: [],
      textSearch: "",
      token: localStorage.getItem("token"),
    };
  },
  mounted() {
    this.outputUser();
  },
  methods: {
    goAddAdvt() {
      if (this.token === null) {
        alert("Авторизуйтесь)");
        return;
      }
      this.$router.push("/addAdvt");
    },
    outputUser() {
      Axios.post("http://127.0.0.1:8000/api/getUser", {
        token: this.token,
      })
        .then((response) => {
          if (response.data.length !== 0) {
            this.user = response.data[0];
            // console.log(this.user);
            this.date = new Date(Date.parse(this.user.created_at));
            this.dateTime = this.date.toLocaleTimeString().slice(0, -3);
            this.dateDay = this.date.toLocaleDateString();
            this.user.created_at = this.dateTime + " " + this.dateDay;
          }
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
    search(text) {
      this.$router.push({
        path: "/advts",
        query: {
          search: text,
        },
      });
    },
    open() {
      document.querySelector(".header-m__menu").classList.add("menu-open");
    },
    close() {
      document.querySelector(".header-m__menu").classList.remove("menu-open");
    },
  },
};
</script>

<style scoped>
button {
  width: auto;
  height: auto;
  position: relative;
}

.header__modile {
  display: none;
}

.header-m__menu {
  display: none;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 100;
  width: 100%;
  height: 100%;
  background-color: #00d39c;
}

.menu-close {
  display: none;
}

.menu-open {
  display: block;
}

.header-m__menu-btn {
  margin-right: 20px;
}

.header-m__logo {
  margin-right: auto;
}

.header-m__add {
  margin-right: 20px;
}

.header-m__exit {
  position: absolute;
  top: 10px;
  right: 10px;
  left: auto;
}

.header-m__exit svg {
  width: 25px;
  height: 25px;
}

.header-m__list {
  list-style: none;
  display: flex;
  flex-direction: column;
  padding: 15px 25px;
  margin: 0;
}

.header-m__item {
  display: flex;
  align-items: center;
}

.header-m__item {
  margin-bottom: 15px;
}

.header-m__item:first-child {
  margin-bottom: 50px;
}

.header-m__item:hover:not(:first-child) {
  background-color: #02c894;
  border-radius: 5px;
}

.header-m__list-logo {
  margin-right: 3px;
}

.header-m__item-link {
  display: flex;
  align-items: center;
}

.header-m__item-logo {
  font-weight: 700;
  font-size: 32px;
  line-height: 38px;
  text-decoration: none;
  color: #ffffff;
}

.header-m__item-link {
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  color: #ffffff;
  text-decoration: none;
}

.header-m__item-link img {
  margin-right: 10px;
}

.logo img {
  height: 70px;
}

.logo {
  margin-right: 74px;
}

.wrapper_1 {
  /* width: 100%; */
  max-width: none;
  padding: 0 48px;
  margin: 0;
}

.header-top nav {
  margin-right: auto;
}

.nav {
  margin: 0;
  padding: 0;
}

.li_0 {
  margin: 0;
}

.li_0:not(:last-child) {
  margin-right: 125px;
}

.nav li a {
  margin-left: 0;
}

.li_3 {
  margin-right: 147px;
}

.li_1 {
  display: flex;
  align-items: center;
  margin: 0;
}

@media (max-width: 375px) {
  .header__modile {
    display: flex;
    align-items: center;
    padding: 12px 17px;
  }

  .wrapper_1 {
    display: none;
  }
}
</style>
