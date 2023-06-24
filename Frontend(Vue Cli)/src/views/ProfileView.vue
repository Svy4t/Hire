<template>
  <div class="profile">
    <HeaderComp></HeaderComp>
    <section>
      <div class="wrapper">
        <div class="doha">
          <button class="exit" @click="exit()">Выйти из Аккаунта</button>
          <div class="stroka_1">
            <img v-if="token" :src="'http://127.0.0.1:8000/avatars/' + user.avatar" alt="" />
          </div>
          <div class="stroka_2">
            <h1 v-if="token">
              {{ user.surname }} {{ user.name }} {{ user.middle_name }}
            </h1>
            <h1 v-else>
              <span class="auth" @click="goLogin()">Авторизируйтесь</span>
            </h1>
            <li class="li">
              <img src="@/assets/email.svg" alt="" />
              <a v-if="token" href="">{{ user.email }}</a>
              <a v-else href="">-</a>
            </li>
            <li class="li">
              <img src="@/assets/Union.svg" alt="" />
              <a v-if="token" href="">{{ user.tel }}</a>
              <a v-else href="">-</a>
            </li>
            <li class="li_knopka">
              <button class="knopka_1 knopka_1-color" href="">
                <img src="@/assets/Pen3.svg" alt="" /> Добавление
              </button>
              <routerLink to="/update-user" class="knopka_2 knopka_2-color" href="">
                <img src="@/assets/Pen3.svg" alt="" />Изменение данных
              </routerLink>
            </li>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="wrapper">
        <div class="flex-box">
          <div class="item-title">
            <h1>Избранное</h1>
          </div>

          <h2 class="title-h2">Последние добавления</h2>
          <div class="flex">
            <div v-for="(electe, index) in electes" :key="index" class="flex-item flex-item-01">
              <div class="bg-white_1">
                <div class="thumb">
                  <img v-if="electe.photos.length > 0" :src="
                    'http://127.0.0.1:8000/photos/' +
                    electe.photos[0].file_name
                  " alt="" />
                  <img v-else src="@/assets/Rectangle134.png" alt="" />
                  <button @click="removeInElectes(electe.advt_id)" class="btn-checkbox btn-checkbox-true" type="button">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2 1H16C16.5523 1 17 1.44772 17 2V16.0296C17 16.8509 16.0647 17.322 15.4048 16.8331L10.7857 13.4116C9.72489 12.6258 8.27511 12.6258 7.21432 13.4116L2.59523 16.8331C1.93526 17.322 1 16.8509 1 16.0296V2C1 1.44772 1.44772 1 2 1Z"
                        stroke="#464A54" stroke-width="2" />
                    </svg>
                  </button>
                </div>
                <p class="flex-title" @click="goOneAdvt(electe.advt.id)">
                  {{ electe.advt.header }}
                </p>
                <p class="flex-price">{{ electe.advt.cost }}</p>
                <li class="location">
                  <img src="@/assets/line.svg" alt="" />
                  <p class="flex-location">{{ electe.advt.area }} м2</p>
                </li>
                <li class="size">
                  <img src="@/assets/ion_3.svg" alt="" />
                  <p class="flex-size">
                    {{ electe.advt.address }}
                  </p>
                </li>
              </div>
            </div>
          </div>

          <div class="knopka_center">
            <button type="submit" class="button-further" href="">
              Больше <img src="@/assets/Vector.svg" alt="" />
            </button>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="wrapper">
        <div class="flex-box">
          <div class="item-title">
            <h1>Моя недвижимость</h1>
          </div>
          <h2 class="title-h2">Последние добавления</h2>

          <div class="flex_1">
            <div v-for="(advt, index) in advts" :key="index" class="flex-item flex-item-05">
              <div class="bg-white">
                <div class="thumb">
                  <img v-if='advt.photos[0]' :src="'http://127.0.0.1:8000/photos/' + advt.photos[0].file_name" alt="" />
                  <img v-else src="@/assets/Rectangle134.png" alt="" />
                </div>
                <p class="flex-title" @click="goOneAdvt(advt.id)">
                  {{ advt.header }}
                </p>
                <p class="flex-price">{{ advt.cost }}</p>
                <li class="location">
                  <img src="@/assets/line.svg" alt="" />
                  <p class="flex-location">{{ advt.area }} м2</p>
                </li>
                <li class="size">
                  <img src="@/assets/ion_3.svg" alt="" />
                  <p class="flex-size">
                    {{ advt.address }}
                  </p>
                </li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <FooterComp></FooterComp>
  </div>
</template>

<script>
import FooterComp from "@/components/FooterComp.vue";
import HeaderComp from "@/components/HeaderComp.vue";
import axios from "axios";
export default {
  components: {
    HeaderComp,
    FooterComp
  },
  data() {
    return {
      user: [],
      advts: [],
      electes: [],
      token: localStorage.getItem("token"),
      id: localStorage.getItem("id"),
    };
  },
  methods: {
    logout() {
      localStorage.clear();
    },
    outputUser() {
      axios
        .post("http://127.0.0.1:8000/api/getUser", {
          token: this.token,
        })
        .then((response) => {
          if (response.data.length !== 0) {
            this.user = response.data[0];
            console.log(this.user);
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
    outputAdvtUser() {
      axios
        .post("http://127.0.0.1:8000/api/getAdvtUser", {
          id: this.id,
        })
        .then((response) => {
          this.advts = response.data;
          console.log(this.advts);
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
    getElectes() {
      axios
        .post("http://127.0.0.1:8000/api/indexElecte", {
          user_id: this.id,
        })
        .then((response) => {
          this.electes = response.data;
          console.log(this.electes);
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
    exit() {
      localStorage.clear();
      window.location.assign("http://localhost:8080/");
      // this.$router.push("/");
    },
    goLogin() {
      window.location.assign("http://localhost:8080/login");
    },
    removeInElectes(advt_id) {
      console.log(advt_id, this.id);
      if (this.id === null) {
        alert("Авторизуйтесь!!! Пожалуйста)");
        return;
      } else {
        axios
          .post("http://127.0.0.1:8000/api/deleteElecte", {
            advt_id: advt_id,
            user_id: this.id,
          })
          .then((response) => {
            console.log(response);
            this.getElectes();
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
    goOneAdvt(id) {
      this.$router.push({
        path: "/advt",
        query: {
          id: id,
        },
      });
    },
  },
  beforeMount() {
    this.outputUser();
    this.outputAdvtUser();
    this.getElectes();
  },
};
</script>

<style scoped>
.exit {
  position: absolute;
  right: 0;
  left: auto;
  top: 200px;
  width: auto;
  height: auto;
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  color: #000000;
}

.profile {
  /* padding-top: 50px; */
}

.auth {
  cursor: pointer;
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
  margin-bottom: 6vh;
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

.li_3 {
  display: flex;
  align-items: center;
  background-color: #02c894;
  border-radius: 5px;
  padding: 6px;
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

.button-search {
  background: transparent;
  border: none;
  height: 42px;
  width: 42px;
  position: absolute;
  top: 0;
  left: 0;
  cursor: pointer;
}

.doha {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  background-color: #fff;
  width: 100%;
  padding-top: 140px;
  /* height: 36vh; */
  /* border: 1px solid #CDD1CD; */
}

.stroka_1 {
  display: flex;
  /* background-color: #00D39C; */
  width: 25%;
  /* background-color: #cbc4c4; */
}

.stroka_1 img {
  width: 230px;
  height: 230px;
}

.filter_1 {
  /* background-color: blueviolet; */
  width: 35%;
}

.filter_2 {
  /* background-color: #D6C8B5; */
  width: 65%;
}

.stroka_2 {
  /* background-color: #337b68; */
  width: 75%;
  line-height: 30px;
  /* background-color: #9CD2BB; */
}

.stroka_2 h1 {
  /* background-color: #337b68; */
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
  /* background-color: #9CD2BB; */
}

.li a {
  text-decoration: none;
  margin-left: 1vh;
  font-family: "Inter";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  margin-bottom: 4px;
  color: #606060;
}

.li {
  display: flex;
  align-items: center;
  margin-bottom: 14px;
}

.menu {
  display: flex;
  align-items: center;
  list-style: none;
  background: #00d39c;
}

.menu li {
  position: relative;
  list-style: none;
  width: 50px;
  background: #00d39c;
}

.menu a {
  color: #fff;
  text-decoration: none;
  list-style: none;
  display: block;
  text-align: center;
  padding: 0 10px;
  height: 40px;
  line-height: 40px;
  transition: all 0.5s;
}

.menu a:hover {
  background: #00d39c;
}

.menu ul {
  position: absolute;
  left: 0;
  top: 100%;
  display: none;
  padding: 0;
}

.menu li:hover ul {
  display: block;
}

.li_knopka {
  display: flex;
  align-items: center;
  margin-bottom: 14px;
}

.knopka_1 {
  position: relative;
  height: auto;
  width: auto;
  display: flex;
  align-items: center;
  padding: 10px 15px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
  margin-right: 10px;
}

.knopka_1-color {
  color: #606060;
  background-color: transparent;
  border: 1px solid #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
}

.knopka_1 img {
  margin-right: 10px;
}

.knopka_2 {
  position: relative;
  height: auto;
  width: auto;
  display: flex;
  align-items: center;
  padding: 10px 15px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.knopka_2-color {
  color: #606060;
  background-color: transparent;
  border: 1px solid #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
}

.knopka_2 img {
  margin-right: 10px;
}

.flex-box {
  display: flex;
  flex-direction: column;
}

.item-title {
  text-align: center;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 28px;
  border-bottom: 2px solid #cdd1cd;
}

.bg-white {
  background-color: #fff;
  border: 1px solid #cdd1cd;
  width: 300px;
  height: 370px;
  line-height: 5px;
  border-radius: 5px;
  color: #737373;
}

.bg-white_1 {
  background-color: #fff;
  border: 1px solid #cdd1cd;
  width: 390px;
  height: 385px;
  border-radius: 5px;
  line-height: 10px;
  color: #737373;
}

.flex {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-flow: wrap;
  margin-bottom: 5vh;
  gap: 20px 25px;
}

.thumb {
  position: relative;
}

.thumb img {
  width: 100%;
  height: 190px;
}

.flex-item flex-item-05 {
  width: 100%;
}

.flex-size {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
}

.flex-title {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 600;
  font-size: 24px;
  padding-left: 2vh;
  color: #000;
  margin-bottom: 30px;
}

.flex-price {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  padding-left: 2vh;
  color: #00b584;
}

.title-h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 200;
  font-size: 28px;
  /* padding-left: 2vh; */
}

.flex-location {
  width: 30vh;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
}

.title-h3 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 600;
  font-size: 32px;
  line-height: 38px;
  letter-spacing: 0.02em;
  width: 30vh;
  padding-left: 7vh;
  padding-top: 2vh;
}

.knopka_center {
  display: flex;
  justify-content: center;
  height: 40px;
}

.button-further {
  display: none;
  position: relative;
  width: 170px;
  height: 45px;
  background-color: #def5ee;
  color: #00d39c;
  border: none;
  border-radius: 30px 30px;
  /* padding: 15px; */
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  cursor: pointer;
  outline: none;
}

.flex_1 {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-flow: wrap;
  margin-bottom: 5vh;
  gap: 25px 10px;
}

.btn-checkbox {
  position: absolute;
  z-index: 1;
  left: 320px;
  top: 17px;
  height: 40px;
  background-color: #fff;
  border-radius: 100%;
  border: none;
  padding: 11px;
}

.btn-checkbox:hover {
  cursor: pointer;
}

.btn-checkbox:hover svg {
  fill: #464a54;
}

.location {
  display: flex;
  align-items: center;
  padding-left: 2vh;
}

.location p {
  margin-left: 1vh;
  line-height: 4px;
  margin-bottom: 7px;
}

.size {
  display: flex;
  align-items: center;
  padding-left: 2vh;
}

.size p {
  margin-left: 1vh;
  line-height: 18px;
}

footer {
  background-color: #fff;
  height: 100%;
  border-top: 2px solid #cdd1cd;
}

.footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-flow: wrap;
}

.line {
  border-bottom: 2px solid #cdd1cd;
}

.nav-footer {
  display: flex;
  flex-direction: column;
  justify-content: center;
  list-style-type: none;
  padding: 0;
}

.nav-footer ul {
  /* margin-left: 2vh;
    margin-right: 2vh; */
}

.nav-footer li {
  /* margin-left: 2vh;
  margin-right: 2vh; */
  margin-bottom: 1.6vh;
  margin-top: 1.6vh;
}

.nav-footer li a {
  text-decoration: none;
  margin-left: 1vh;
  font-family: "Inter";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 24px;
  color: #606060;
}

.li_1 {
  display: flex;
  align-items: center;
}

.li_2 {
  display: flex;
  align-items: center;
}

.footer_podval {
  display: flex;
  justify-content: center;
  border-top: 2px solid #cdd1cd;
}

.footer_podval h1 {
  font-family: "Inter";
  font-style: normal;
  color: #606060;
  font-weight: 400;
  font-size: 20px;
}

.btn-checkbox-true {
  background-color: yellow;
}

@media (max-width: 375px) {
  .doha {
    flex-direction: column;
    align-items: center;
    margin-bottom: 100px;
    padding-top: 40px;
  }

  .knopka_1 {
    display: none;
  }

  .knopka_2 {
    text-decoration: none;
  }

  .stroka_1,
  .stroka_2 {
    width: fit-content;
  }

  .stroka_1 {
    margin-bottom: 28px;
  }

  .stroka_2 {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .stroka_1 img {
    border-radius: 100%;
  }

  .stroka_2 h1 {
    text-align: center;
    display: inline-block;
    margin: 0;
    margin-bottom: 20px;
    font-weight: 500;
    font-size: 32px;
    line-height: 38px;
  }

  .exit {
    right: calc(50% - 100px);
    top: 550px;
    font-weight: 600;
    font-size: 20px;
    line-height: 24px;
  }

  .item-title {
    font-weight: 500;
    font-size: 32px;
    line-height: 38px;
  }

  .title-h2 {
    text-align: center;
  }
}
</style>
