<template>
  <div>
    <HeaderCompVue></HeaderCompVue>
    <section>
      <div class="wrapper">
        <h1 class="wrapper_h1">Недвижимость</h1>
        <div class="big_flex">
          <FilterCompVue></FilterCompVue>
          <div class="modile-total">
            <span class="modile-total__span">Результат ({{ advts.length }}):</span>
            <img src="@/assets/mobile-btns-all-advts.png" alt="">
          </div>
          <div class="flex">
            <div v-for="(advt, index) in advts" :key="index" class="flex-item flex-item-01">
              <div class="bg-white">
                <div class="thumb">
                  <img v-if="advt.photos[0]" :src="
                    'http://127.0.0.1:8000/photos/' + advt.photos[0].file_name
                  " alt="" />
                  <img v-else :src="'http://127.0.0.1:8000/photos/' + advt.photos[0]" alt="" />
                  <button v-if="advt.electes === true" @click="removeInElectes(advt.id)"
                    class="btn-checkbox btn-checkbox-true" type="button">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2 1H16C16.5523 1 17 1.44772 17 2V16.0296C17 16.8509 16.0647 17.322 15.4048 16.8331L10.7857 13.4116C9.72489 12.6258 8.27511 12.6258 7.21432 13.4116L2.59523 16.8331C1.93526 17.322 1 16.8509 1 16.0296V2C1 1.44772 1.44772 1 2 1Z"
                        stroke="#464A54" stroke-width="2" />
                    </svg>
                  </button>
                  <button v-else @click="addInElectes(advt.id)" class="btn-checkbox" type="button">
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
      </div>
    </section>
    <FooterCompVue></FooterCompVue>
  </div>
</template>

<script>
import $ from "jquery";
import "jquery-ui";
import "jquery-ui/ui/widgets/slider";
import "jquery/dist/jquery.min.js";
import axios from "axios";
import HeaderCompVue from "@/components/HeaderComp.vue";
import FooterCompVue from "@/components/FooterComp.vue";
import FilterCompVue from "@/components/FilterComp.vue";

export default {
  components: {
    HeaderCompVue,
    FooterCompVue,
    FilterCompVue,
  },
  data() {
    return {
      count_room: "",
      bathroom: "",
      search: "",
      cost: "",
      area: "",
      type: "",
      type_of_property: "",
      advts: [],
      text: null,
      id: localStorage.getItem("id"),
    };
  },
  mounted() {
    // this.text = new URLSearchParams(window.location.search.slice(1)).get(
    //   "search"
    // );
    this.outputAdvts();
  },
  beforeMount() {
    $(function () {
      $("#slider-range-area").slider({
        range: true,
        min: 0,
        max: 500,
        values: [0, 500],
        slide: function (event, ui) {
          $("#area-input").val(ui.values[0] + " - " + ui.values[1] + " м2");
        },
      });
      $("#area-input").val(
        "" +
        $("#slider-range-area").slider("values", 0) +
        " - " +
        $("#slider-range-area").slider("values", 1) +
        " м2"
      );
    });
    $(function () {
      $("#slider-range-cost").slider({
        range: true,
        min: 0,
        max: 200000,
        values: [0, 200000],
        slide: function (event, ui) {
          $("#cost").val(ui.values[0] + " - " + ui.values[1] + " руб");
        },
      });
      $("#cost").val(
        "" +
        $("#slider-range-cost").slider("values", 0) +
        " - " +
        $("#slider-range-cost").slider("values", 1) +
        " руб"
      );
    });
  },
  methods: {
    outputAdvts(text = null) {
      axios
        .post("http://127.0.0.1:8000/api/indexAdvt")
        .then((response) => {
          this.advts = response.data;
          this.advts.forEach((element) => {
            if (this.id !== null) {
              // console.log(element);
              element.electes.forEach((el) => {
                if (el.user_id == this.id) {
                  element.electes = true;
                  return;
                }
              });
            }
          });
          if (this.text !== null) {
            this.advts = this.advts.filter((el) => el.header.includes(text));
          }
          // console.log(this.advts);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    addInElectes(advt_id) {
      if (this.id === null) {
        alert("Авторизуйтесь!!! Пожалуйста)");
        return;
      } else {
        // console.log(this.advtsForRec.filter((el) => el.id === advt_id));
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
    },
    removeInElectes(advt_id) {
      if (this.id === null) {
        alert("Авторизуйтесь!!! Пожалуйста)");
        return;
      } else {
        // console.log(this.advtsForRec);
        axios
          .post("http://127.0.0.1:8000/api/deleteElecte", {
            advt_id: advt_id,
            user_id: this.id,
          })
          .then((response) => {
            console.log(response);
            this.advts.forEach((el) => {
              if (el.id === advt_id) el.electes = false;
            });
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
};
</script>

<style scoped>
* {
  font-family: "Roboto";
  /* box-sizing: border-box; */
}

.wrapper {
  padding: 0 20px;
}

.section-filter {
  padding-top: 0;
  max-width: none;
  margin: 0;
}

.transitions_button_1 {
  padding: 5px 10px;
  position: relative;
}

.big_flex {
  display: flex;
  flex-direction: column;
  gap: 20px 50px;
  /* padding-top: 227px; */
  justify-content: center;
}

.bg-white {
  background-color: #fff;
  border: 1px solid #cdd1cd;
  width: 350px;
  height: 385px;
}

.flex_big_1 {
  display: flex;
  border: 2px solid #cdd1cd;
  border-radius: 5px;
  flex-direction: column;
  height: 100%;
  align-items: center;
  width: 40%;
}

.filler {
  display: flex;
  flex-direction: column;
  gap: 15px 20px;
}

.filler h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  padding-top: 20px;
  color: #000000;
}

.form_sliders {
  position: relative;
  width: 100%;
  height: 100%;
}

.three_buttons {
  display: flex;
  padding-top: 30px;
  gap: 10px 20px;
  border-top: 2px solid #cdd1cd;
}

.form_radio_btn input[type="radio"] {
  display: none;
}

.form_radio_btn label {
  display: inline-block;
  cursor: pointer;
  padding: 10px 20px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  /* border: 1px solid #999; */
  border-radius: 6px;
  user-select: none;
}

/* Checked */
.form_radio_btn input[type="radio"]:checked+label {
  background: #def5ee;
  color: #00d39c;
}

/* Hover */
.form_radio_btn label:hover {
  color: #00d39c;
}

/* Disabled */
.form_radio_btn input[type="radio"]:disabled+label {
  background: #def5ee;
  color: #00d39c;
}

.lect_2 {
  margin-top: 30px;
  width: 360px;
  height: 40px;
  border: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  margin-bottom: 10px;
}

.transitions_button_1 .transitions_button_1-color {
  position: relative;
  height: auto;
  width: auto;
}

.lect_2 option {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.property_type {
  width: 100%;
  border-bottom: 2px solid #cdd1cd;
  margin-top: 20px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  padding-bottom: 15px;
}

.form_city {
  height: 160px;
  width: 100%;
  border-bottom: 2px solid #cdd1cd;
}

.city {
  left: auto;
  position: relative;
  padding: 10px 40px;
  margin-top: 10px;
  border: 2px solid #cdd1cd;
  border-radius: 5px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
  color: #999999;
  height: auto;
}

input,
output {
  display: inline-block;
  vertical-align: middle;
  font-size: 1em;
  font-family: Arial, sans-serif;
}

output {
  background: #00d39c;
  padding: 5px 16px;
  border-radius: 3px;
  color: #fff;
  width: 50px;
}

.sliders {
  margin-top: 15px;
}

.wrapper_h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
  padding-top: 87px;
}

.big_flex {
  display: flex;
  align-items: center;
  gap: 20px 50px;
}

input {
  height: auto;
  padding: 0;
  border: none;
  background: transparent;
  position: relative;
  left: auto;
  top: auto;
  z-index: auto;
  font-weight: 400;
}

.bg-white {
  background-color: #fff;
  border: 1px solid #cdd1cd;
  width: 350px;
  height: 385px;
}

.flex_big_1 {
  display: flex;
  border: 2px solid #cdd1cd;
  border-radius: 5px;
  flex-direction: column;
  height: 1008px;
  align-items: center;
  width: 500px;
}

.flex {
  display: flex;
  justify-content: center;
  flex-flow: wrap;
  margin-bottom: 5vh;
  gap: 20px 30px;
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
  height: 200px;
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

.bg-white {
  border-radius: 5px;
  color: #737373;
}

.btn-checkbox {
  position: absolute;
  z-index: 1;
  left: 290px;
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

.btn-checkbox-true {
  background-color: yellow;
}

.modile-total {
  display: none;
}

@media (max-width: 375px) {
  .wrapper_h1 {
    display: none;
  }

  .big_flex {
    padding-top: 16px;
  }

  .modile-total {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .modile-total__span {
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
  }
}
</style>
