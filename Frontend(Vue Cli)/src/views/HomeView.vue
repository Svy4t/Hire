<template>
  <div class="home">
    <HeaderCompVue />

    <FilterCompVue />

    <section>
      <div class="wrapper">
        <div class="flex-item flex-item-title">
          <h2 class="title-h2">Рекомендуемые</h2>
        </div>

        <div class="flex">
          <div v-for="(advt, index) in advtsForRec" :key="index" class="flex-item flex-item-01">
            <div class="bg-white">
              <div class="thumb">
                <img v-if="advt.photos[0]" :src="'http://127.0.0.1:8000/photos/' + advt.photos[0].file_name" alt="" />
                <img v-else :src="'http://127.0.0.1:8000/photos/' + advt.photos[0]" alt="" />
                <button v-if="advt.electes === true" @click="removeInElectes(advtsForRec, advt.id)"
                  class="btn-checkbox btn-checkbox-true" type="button">
                  <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2 1H16C16.5523 1 17 1.44772 17 2V16.0296C17 16.8509 16.0647 17.322 15.4048 16.8331L10.7857 13.4116C9.72489 12.6258 8.27511 12.6258 7.21432 13.4116L2.59523 16.8331C1.93526 17.322 1 16.8509 1 16.0296V2C1 1.44772 1.44772 1 2 1Z"
                      stroke="#464A54" stroke-width="2" />
                  </svg>
                </button>
                <button v-else @click="addInElectes(advtsForRec, advt.id)" class="btn-checkbox" type="button">
                  <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2 1H16C16.5523 1 17 1.44772 17 2V16.0296C17 16.8509 16.0647 17.322 15.4048 16.8331L10.7857 13.4116C9.72489 12.6258 8.27511 12.6258 7.21432 13.4116L2.59523 16.8331C1.93526 17.322 1 16.8509 1 16.0296V2C1 1.44772 1.44772 1 2 1Z"
                      stroke="#464A54" stroke-width="2" />
                  </svg>
                </button>
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

          <div class="b-green_1">
            <div class="bg-green-item">
              <h3 class="title-h3">Квартира в центре вашего города</h3>
              <a href="" class="knopka_1">Посмотреть</a>
            </div>
          </div>

          <div class="b-green_2">
            <div class="b-green-item">
              <h3 class="title-h3">Квартира в центре вашего города</h3>
              <a href="" class="knopka_2">Посмотреть</a>
            </div>
          </div>

          <div class="mobile-swiper-first">
            <swiper :slides-per-view="1" :space-between="20">
              <swiper-slide>
                <img src="@/assets/modile-slider-first.png" alt="">
              </swiper-slide>
              <swiper-slide>
                <img src="@/assets/mobile-slider-second.png" alt="">
              </swiper-slide>
            </swiper>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="wrapper">
        <div class="flex-item flex-item-title">
          <h2 class="title-h2">Недвижимость</h2>
        </div>

        <div class="flex_1">
          <div v-for="(advt, index) in advts" :key="index" class="flex-item flex-item-05">
            <div class="bg-white">
              <div class="thumb">
                <img v-if="advt.photos[0]" :src="'http://127.0.0.1:8000/photos/' + advt.photos[0].file_name" alt="" />
                <img v-else :src="'http://127.0.0.1:8000/photos/' + advt.photos[0]" alt="" />
                <button v-if="advt.electes === true" @click="removeInElectes(advts, advt.id)"
                  class="btn-checkbox btn-checkbox-true" type="button">
                  <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2 1H16C16.5523 1 17 1.44772 17 2V16.0296C17 16.8509 16.0647 17.322 15.4048 16.8331L10.7857 13.4116C9.72489 12.6258 8.27511 12.6258 7.21432 13.4116L2.59523 16.8331C1.93526 17.322 1 16.8509 1 16.0296V2C1 1.44772 1.44772 1 2 1Z"
                      stroke="#464A54" stroke-width="2" />
                  </svg>
                </button>
                <button v-else @click="addInElectes(advts, advt.id)" class="btn-checkbox" type="button">
                  <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2 1H16C16.5523 1 17 1.44772 17 2V16.0296C17 16.8509 16.0647 17.322 15.4048 16.8331L10.7857 13.4116C9.72489 12.6258 8.27511 12.6258 7.21432 13.4116L2.59523 16.8331C1.93526 17.322 1 16.8509 1 16.0296V2C1 1.44772 1.44772 1 2 1Z"
                      stroke="#464A54" stroke-width="2" />
                  </svg>
                </button>
              </div>
              <p class="flex-title" @click="goOneAdvt(advt.id)">
                {{ advt.header }}
              </p>
              <p class="flex-price">{{ advt.cost }}₽</p>
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
    </section>

    <section>
      <div class="wrapper">
        <div class="afisha">
          <div class="afisha_box">
            <h3 class="afisha_h3">
              Квартира в<br />
              центре вашего города
            </h3>
            <h4 class="afisha_h4">
              Общайтесь на прямую<br />
              с неограниченным <br />количеством владельцев
            </h4>
            <a href="" class="knopka_3">Посмотреть</a>
          </div>
        </div>
        <img class="mobile-bord" src="@/assets/mobile-bord.png" alt="">
      </div>
    </section>

    <section>
      <div class="wrapper">
        <div class="flex-item flex-item-title">
          <h2 class="title-h4">Наши партнеры</h2>
        </div>
        <div class="my-flex-cont">
          <div class="my-flex-box">
            <img src="@/assets/box1.png" alt="" />
          </div>
          <div class="my-flex-box">
            <img src="@/assets/image13.png" alt="" />
          </div>
          <div class="my-flex-box">
            <img src="@/assets/Group61.png" alt="" />
          </div>
          <div class="my-flex-box">
            <img src="@/assets/Group63.png" alt="" />
          </div>
          <div class="my-flex-box">
            <img src="@/assets/Group62.png" alt="" />
          </div>
          <div class="my-flex-box">
            <img src="@/assets/Group64.png" alt="" />
          </div>
        </div>
        <div class="mobile-swiper-second">
          <swiper :slides-per-view="3" :space-between="10">
            <swiper-slide>
              <div class="my-flex-box">
                <img src="@/assets/box1.png" alt="" />
              </div>
            </swiper-slide>
            <swiper-slide>
              <div class="my-flex-box">
                <img src="@/assets/image13.png" alt="" />
              </div>
            </swiper-slide>
            <swiper-slide>
              <div class="my-flex-box">
                <img src="@/assets/Group61.png" alt="" />
              </div>
            </swiper-slide>
            <swiper-slide>
              <div class="my-flex-box">
                <img src="@/assets/Group63.png" alt="" />
              </div>
            </swiper-slide>
            <swiper-slide>
              <div class="my-flex-box">
                <img src="@/assets/Group62.png" alt="" />
              </div>
            </swiper-slide>
            <swiper-slide>
              <div class="my-flex-box">
                <img src="@/assets/Group64.png" alt="" />
              </div>
            </swiper-slide>
          </swiper>
        </div>
      </div>
    </section>

    <FooterCompVue />
  </div>
</template>

<script>
// import Swiper core and required modules
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
import axios from "axios";
import HeaderCompVue from "@/components/HeaderComp.vue";
import FooterCompVue from "@/components/FooterComp.vue";
import FilterCompVue from "@/components/FilterComp.vue";

export default {
  components: {
    HeaderCompVue,
    FooterCompVue,
    FilterCompVue,
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      advts: [],
      advtsForRec: [],
      id: localStorage.getItem("id"),
    };
  },
  setup() {

  },
  mounted() {
    this.index();
  },

  methods: {
    index() {
      axios
        .post("http://127.0.0.1:8000/api/indexAdvt")
        .then((response) => {
          for (let i = response.data.length - 1; i > response.data.length - 9; i--) {
            if (this.id !== null) {
              response.data[i].electes.forEach((el) => {
                if (el.user_id == this.id) {
                  response.data[i].electes = true;
                  return;
                }
              });
            }
            this.advts.push(response.data[i]);
          }
          for (let i = 0; i < 4; i++) {
            this.advtsForRec.push(response.data[i]);
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
    goOneAdvt(id) {
      this.$router.push({
        path: "/advt",
        query: {
          id: id,
        },
      });
    },
    addElecte(advtId) {
      axios
        .post("http://127.0.0.1:8000/api/addElecte", {
          advt_id: advtId,
          user_id: this.id,
        })
        .then((response) => {
          console.log(response.data);
          this.advts = response.data;
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
    addInElectes(array, advt_id) {
      if (this.id === null) {
        alert("Авторизуйтесь!!! Пожалуйста)");
        return;
      } else {
        if (array.length === 4) {
          // console.log(this.advtsForRec.filter((el) => el.id === advt_id));
          axios
            .post("http://127.0.0.1:8000/api/addElecte", {
              advt_id: advt_id,
              user_id: this.id,
            })
            .then((response) => {
              console.log(response);
              this.advtsForRec.forEach((el) => {
                if (el.id === advt_id) el.electes = true;
              });
            })
            .catch((error) => {
              console.log(error);
            });
        }
        if (array.length === 8) {
          // console.log(this.advts);
          axios
            .post("http://127.0.0.1:8000/api/addElecte", {
              advt_id: advt_id,
              user_id: this.id,
            })
            .then((response) => {
              console.log(response);
              this.advts.forEach((el) => {
                if (el.id === advt_id) el.electes = true;
              });
            })
            .catch((error) => {
              console.log(error);
            });
        }
      }
    },
    removeInElectes(array, advt_id) {
      if (this.id === null) {
        alert("Авторизуйтесь!!! Пожалуйста)");
        return;
      } else {
        if (array.length === 4) {
          // console.log(this.advtsForRec);
          axios
            .post("http://127.0.0.1:8000/api/deleteElecte", {
              advt_id: advt_id,
              user_id: this.id,
            })
            .then((response) => {
              console.log(response);
              this.advtsForRec.forEach((el) => {
                if (el.id === advt_id) el.electes = false;
              });
            })
            .catch((error) => {
              console.log(error);
            });
        }
        if (array.length === 8) {
          // console.log(this.advts);
          axios
            .post("http://127.0.0.1:8000/api/deleteElecte", {
              advt_id: advt_id,
              user_id: this.id,
            })
            .then((response) => {
              console.log(response);
              this.advtsForRec.forEach((el) => {
                if (el.id === advt_id) el.electes = false;
              });
            })
            .catch((error) => {
              console.log(error);
            });
        }
      }
    },
  },
};
</script>

<style scoped>
* {
  font-family: "Roboto";
  /* box-sizing: border-box; */
}

.mobile-swiper-first {
  display: none;
}

.home {
  /* padding-top: 50px; */
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

.bg-white {
  background-color: #fff;
  border: 1px solid #cdd1cd;
  width: 300px;
  height: 370px;
}

.flex-item .flex-item-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.flex {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-flow: wrap;
  margin-bottom: 5vh;
  gap: 20px 10px;
}

.thumb {
  position: relative;
}

/* .bg-white img{
    width: 70px;
    height: 150px;
} */

.thumb img {
  width: 100%;
  height: 190px;
}

.flex-item flex-item-05 {
  width: 100%;
}

.bg-white {
  line-height: 5px;
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
  font-weight: 700;
  font-size: 36px;
  padding-left: 2vh;
}

.flex-location {
  width: 30vh;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
}

.b-green-flex {
  display: flex;
  justify-content: space-between;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 20px 0px;
}

.b-green_1 {
  /* background-color: cadetblue; */
  display: flex;
  flex-direction: column;
  background-image: url("@/assets/Cont1.png");
  background-size: cover;
  border-radius: 5px;
  width: 630px;
  height: 300px;
}

.b-green_2 {
  display: flex;
  flex-direction: column;
  background-image: url("@/assets/Rectangle63.png");
  background-size: cover;
  /* background-color: rgb(186, 205, 205); */
  border-radius: 5px;
  width: 630px;
  height: 300px;
}

a.knopka_1 {
  color: #fff;
  /* цвет текста */
  text-decoration: none;
  /* убирать подчёркивание у ссылок */
  user-select: none;
  /* убирать выделение текста */
  background: #9cd2bb;
  padding: 0.7vw 4vh;
  /* отступ от текста */
  outline: none;
  /* убирать контур в Mozilla */
  border-radius: 6px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  margin-left: 63px;
}

/* a.knopka:hover { background: #DC3744;  */

a.knopka_2 {
  color: #fff;
  /* цвет текста */
  text-decoration: none;
  /* убирать подчёркивание у ссылок */
  user-select: none;
  /* убирать выделение текста */
  background: #d6c8b5;
  padding: 0.7vw 4vh;
  /* отступ от текста */
  outline: none;
  /* убирать контур в Mozilla */
  border-radius: 6px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  margin-left: 63px;
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

.flex_1 {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-flow: wrap;
  margin-bottom: 5vh;
  gap: 25px 10px;
}

.bg-white {
  border-radius: 5px;
  color: #737373;
}

.btn-checkbox {
  position: absolute;
  z-index: 1;
  left: 240px;
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

.btn-checkbox-true {
  background-color: yellow;
}

.btn-checkbox-true:hover {
  cursor: pointer;
}

.btn-checkbox-true:hover svg {
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

.afisha {
  /* background-color: rgb(170, 170, 170); */
  background-image: url("@/assets/макет31.png");
  display: flex;
  justify-content: right;
  background-size: cover;
  width: 1280px;
  height: 330px;
  margin-bottom: 5vh;
}

.afisha_box {
  width: 40%;
}

.afisha_h3 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: bold;
  font-size: 32px;
  /* width: 40vh; */
  letter-spacing: 0.02em;
}

.afisha_h4 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  margin-left: 152px;
  /* width: 30vh; */
  font-size: 20px;
  margin-top: -12px;
}

a.knopka_3 {
  color: #000;
  /* цвет текста */
  text-decoration: none;
  /* убирать подчёркивание у ссылок */
  user-select: none;
  /* убирать выделение текста */
  background: #d6c8b5;
  padding: 8px 15px;
  /* отступ от текста */
  outline: none;
  /* убирать контур в Mozilla */
  border-radius: 6px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  margin-left: 152px;
}

.my-flex-cont {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 5vh;
  flex-wrap: wrap;
  gap: 25px 0px;
}

.my-flex-box {
  border: 1px solid #cdd1cd;
  border-radius: 5px;
}

.title-h4 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 36px;
  /* margin-left: 480px; */
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

.swiper {
  width: 332px;
  height: 183px;
}

.mobile-swiper-second {
  display: none;
}

.mobile-bord {
  display: none;
}

@media (max-width: 375px) {
  .mobile-bord {
    display: block;
  }

  .title-h2 {
    margin: 0;
    margin-bottom: 10px;
    padding-left: 0;
    padding-top: 20px;
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
  }

  .bg-white {
    width: 100%;
  }

  .btn-checkbox {
    left: 268px;
  }

  .size p {
    width: 278px;
  }

  .thumb img {
    width: 335px;
  }

  .b-green_1,
  .b-green_2 {
    display: none;
  }

  .afisha {
    display: none;
  }

  .title-h4 {
    font-weight: 700;
    font-size: 20px;
    line-height: 24px;
    text-align: center;
  }

  .my-flex-cont {
    display: none;
  }

  .my-flex-box img {
    width: 100px;
    height: 100px;
  }

  .mobile-swiper-first {
    display: block;
  }

  .mobile-swiper-second {
    display: block;
  }
}
</style>
<style>
.home-filter .ui-widget-header {
  background-color: #def5ee;
}

.home-filter .ui-widget.ui-widget-content {
  border: 1px solid #cdd1cd;
}

.home-filter .ui-state-default {
  border: none;
  background-color: #00d39c;
}

.home-filter .ui-slider-horizontal .ui-slider-handle {
  top: -0.2em;
}
</style>
