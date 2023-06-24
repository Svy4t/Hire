<template>
  <section class="section-filter home-filter filter">
    <div class="modile-footer__wrapper">
      <input type="text" placeholder="Поиск" v-model="search" class="modile-footer__search" />
      <button class="modile-footer__btn">
        <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M15.3334 1H3.66675C2.48824 1 1.89898 1 1.53286 1.3435C1.16675 1.687 1.16675 2.23985 1.16675 3.34555V3.9204C1.16675 4.78527 1.16675 5.2177 1.38308 5.57618C1.59942 5.93466 1.99464 6.15715 2.7851 6.60212L5.21262 7.96865C5.74297 8.2672 6.00814 8.41648 6.19801 8.58131C6.5934 8.92458 6.83681 9.32793 6.94711 9.82264C7.00008 10.0602 7.00008 10.3382 7.00008 10.8941L7.00008 13.1187C7.00008 13.8766 7.00008 14.2556 7.21002 14.5511C7.41996 14.8465 7.79282 14.9923 8.53854 15.2838C10.1041 15.8958 10.8868 16.2018 11.4435 15.8537C12.0001 15.5055 12.0001 14.7099 12.0001 13.1187V10.8941C12.0001 10.3382 12.0001 10.0602 12.053 9.82264C12.1633 9.32793 12.4068 8.92458 12.8022 8.58131C12.992 8.41648 13.2572 8.2672 13.7875 7.96865L16.2151 6.60212C17.0055 6.15715 17.4007 5.93466 17.6171 5.57618C17.8334 5.2177 17.8334 4.78527 17.8334 3.9204V3.34555C17.8334 2.23985 17.8334 1.687 17.4673 1.3435C17.1012 1 16.5119 1 15.3334 1Z"
            stroke="#1C274C" stroke-width="2" />
        </svg>
      </button>
    </div>
    <form @submit.prevent="filter(type, type_of_property, count_room, bathroom, search)" class="filter__form">
      <div class="filter__top">
        <span class="filter__close">
          <svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 13L13 2" stroke="black" stroke-width="2.5" stroke-linecap="round" />
            <path d="M2 2L13 13" stroke="black" stroke-width="2.5" stroke-linecap="round" />
          </svg>
        </span>
        <h2 class="modile-filter__header">Фильтр</h2>
        <div class="filter__radio-wrapper">
          <input class="filter__input-radio" type="radio" v-model="type" id="any" value="null" />
          <label for="any" class="filter__label-radio">Все</label>
          <input class="filter__input-radio" type="radio" v-model="type" id="send" value="продажа" />
          <label for="send" class="filter__label-radio">Продажа</label>
          <input class="filter__input-radio" type="radio" v-model="type" id="rent" value="аренда" />
          <label for="rent" class="filter__label-radio">Аренда</label>
        </div>
        <div class="filter__type-of-property-wrapper">
          <svg class="filter__type-of-property-svg" width="30" height="30" viewBox="0 0 30 30" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M3 28.3333V15C3 12.4858 3 11.2288 3.78105 10.4477C4.5621 9.66666 5.81918 9.66666 8.33333 9.66666C10.8475 9.66666 12.1046 9.66666 12.8856 10.4477C13.6667 11.2288 13.6667 12.4858 13.6667 15"
              stroke="#999999" stroke-width="2.5" />
            <path
              d="M21.6666 28.3333V20.3333C21.6666 17.8192 21.6666 16.5621 20.8855 15.781C20.1045 15 18.8474 15 16.3333 15H13.6666C11.1524 15 9.89535 15 9.1143 15.781C8.33325 16.5621 8.33325 17.8192 8.33325 20.3333V28.3333"
              stroke="#999999" stroke-width="2.5" />
            <path
              d="M26.9999 28.3333V9.36267C26.9999 7.57488 26.9999 6.68098 26.5251 5.99575C26.0502 5.31052 25.2132 4.99665 23.5392 4.36891C20.2656 3.14129 18.6287 2.52748 17.481 3.32287C16.3333 4.11826 16.3333 5.86639 16.3333 9.36267V15"
              stroke="#999999" stroke-width="2.5" />
            <path
              d="M4.33325 9.66667V7.66667C4.33325 6.40959 4.33325 5.78105 4.72378 5.39052C5.1143 5 5.74284 5 6.99992 5H9.66659C10.9237 5 11.5522 5 11.9427 5.39052C12.3333 5.78105 12.3333 6.40959 12.3333 7.66667V9.66667"
              stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            <path d="M8.33325 4.33332V1.66666" stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            <path d="M28.3334 28.3333L1.66675 28.3333" stroke="#999999" stroke-width="1.5" stroke-linecap="round" />
            <path d="M12.3333 19H17.6666" stroke="#999999" stroke-width="1.5" stroke-linecap="round" />
            <path d="M12.3333 23H17.6666" stroke="#999999" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <select class="filter__type-of-property" v-model="type_of_property">
            <option disabled value="">Тип недвиж.</option>
            <option value="Квартира">Квартира</option>
            <option value="Дом">Дом</option>
          </select>
        </div>
        <div class="filter__count-room-wrapper">
          <svg class="filter__type-of-property-svg" width="30" height="30" viewBox="0 0 30 30" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M3 28.3333V15C3 12.4858 3 11.2288 3.78105 10.4477C4.5621 9.66666 5.81918 9.66666 8.33333 9.66666C10.8475 9.66666 12.1046 9.66666 12.8856 10.4477C13.6667 11.2288 13.6667 12.4858 13.6667 15"
              stroke="#999999" stroke-width="2.5" />
            <path
              d="M21.6666 28.3333V20.3333C21.6666 17.8192 21.6666 16.5621 20.8855 15.781C20.1045 15 18.8474 15 16.3333 15H13.6666C11.1524 15 9.89535 15 9.1143 15.781C8.33325 16.5621 8.33325 17.8192 8.33325 20.3333V28.3333"
              stroke="#999999" stroke-width="2.5" />
            <path
              d="M26.9999 28.3333V9.36267C26.9999 7.57488 26.9999 6.68098 26.5251 5.99575C26.0502 5.31052 25.2132 4.99665 23.5392 4.36891C20.2656 3.14129 18.6287 2.52748 17.481 3.32287C16.3333 4.11826 16.3333 5.86639 16.3333 9.36267V15"
              stroke="#999999" stroke-width="2.5" />
            <path
              d="M4.33325 9.66667V7.66667C4.33325 6.40959 4.33325 5.78105 4.72378 5.39052C5.1143 5 5.74284 5 6.99992 5H9.66659C10.9237 5 11.5522 5 11.9427 5.39052C12.3333 5.78105 12.3333 6.40959 12.3333 7.66667V9.66667"
              stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            <path d="M8.33325 4.33332V1.66666" stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            <path d="M28.3334 28.3333L1.66675 28.3333" stroke="#999999" stroke-width="1.5" stroke-linecap="round" />
            <path d="M12.3333 19H17.6666" stroke="#999999" stroke-width="1.5" stroke-linecap="round" />
            <path d="M12.3333 23H17.6666" stroke="#999999" stroke-width="1.5" stroke-linecap="round" />
          </svg>
          <select class="filter__count-room" v-model="count_room">
            <option disabled value="">Кол-во комнат</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="filter__bathroom-wrapper">
          <svg class="filter__bathroom-svg" width="30" height="30" viewBox="0 0 36 36" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M3 19.8045C3 19.6765 3 19.6125 3.00351 19.5585C3.05783 18.7232 3.72324 18.0578 4.55852 18.0035C4.61254 18 4.67651 18 4.80446 18H31.1955C31.3235 18 31.3875 18 31.4415 18.0035C32.2768 18.0578 32.9422 18.7232 32.9965 19.5585C33 19.6125 33 19.6765 33 19.8045C33 20.4639 33 20.7936 32.9766 21.1628C32.6288 26.6424 27.9716 31.4778 22.5089 32.0311C22.1409 32.0683 21.9263 32.0764 21.4969 32.0925C20.2734 32.1385 19.0822 32.1667 18 32.1667C16.9178 32.1667 15.7266 32.1385 14.5031 32.0925C14.0737 32.0764 13.8591 32.0683 13.4911 32.0311C8.02841 31.4778 3.3712 26.6424 3.02343 21.1628C3 20.7936 3 20.4639 3 19.8045Z"
              stroke="#999999" stroke-width="2.5" />
            <path d="M7.99992 31.3335L6.33325 34.6668" stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            <path d="M28.0001 31.3335L29.6667 34.6668" stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            <path d="M1.33325 18H34.6666" stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            <path
              d="M1.75 19.6668C1.75 20.3572 2.30964 20.9168 3 20.9168C3.69036 20.9168 4.25 20.3572 4.25 19.6668H1.75ZM10.6662 3.83239L11.8268 3.36815V3.36815L10.6662 3.83239ZM11.2981 5.41205L11.8452 6.53595L11.2981 5.41205ZM8.60353 8.3207L9.76168 8.79102L8.60353 8.3207ZM15.6283 5.29655L15.1373 6.44604L15.6283 5.29655ZM8.57598 12.5694L7.41301 13.0277C7.53702 13.3424 7.78329 13.5934 8.09559 13.7234C8.40788 13.8534 8.75954 13.8513 9.07025 13.7176L8.57598 12.5694ZM18.5106 8.29263L19.0048 9.44076C19.625 9.17378 19.9211 8.46257 19.6735 7.83438L18.5106 8.29263ZM4.25 19.6668V5.30877H1.75V19.6668H4.25ZM6.97527 2.5835C8.08965 2.5835 9.09176 3.26196 9.50563 4.29663L11.8268 3.36815C11.0333 1.38433 9.11191 0.0834961 6.97527 0.0834961V2.5835ZM4.25 5.30877C4.25 3.80364 5.47015 2.5835 6.97527 2.5835V0.0834961C4.08944 0.0834961 1.75 2.42293 1.75 5.30877H4.25ZM9.50563 4.29663L10.1375 5.87629L12.4587 4.94782L11.8268 3.36815L9.50563 4.29663ZM9.73896 12.1112C9.33612 11.0889 9.31064 9.9017 9.76168 8.79102L7.44538 7.85039C6.74487 9.57541 6.78265 11.4279 7.41301 13.0277L9.73896 12.1112ZM18.0163 7.1445L8.08172 11.4213L9.07025 13.7176L19.0048 9.44076L18.0163 7.1445ZM15.1373 6.44604C16.1732 6.88862 16.945 7.72918 17.3476 8.75088L19.6735 7.83438C19.0429 6.23398 17.8116 4.86998 16.1194 4.14705L15.1373 6.44604ZM9.76168 8.79102C10.1853 7.74783 10.9471 6.97316 11.8452 6.53595L10.751 4.28815C9.30562 4.99176 8.10421 6.22801 7.44538 7.85039L9.76168 8.79102ZM11.8452 6.53595C12.8575 6.04315 14.0418 5.97803 15.1373 6.44604L16.1194 4.14705C14.3231 3.37964 12.3812 3.49452 10.751 4.28815L11.8452 6.53595Z"
              fill="#999999" />
          </svg>

          <select class="filter__bathrooms" v-model="bathroom">
            <option disabled value="">Кол-во ванн</option>
            <option value="1" selected="selected">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
      <div class="filter__bottom">
        <div class="filter__area-wrapper">
          <p class="filter__area-label">
            <svg class="filter__area-svg" width="30" height="30" viewBox="0 0 30 30" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M6.99996 28.3333H23.6666C25.5392 28.3333 26.4755 28.3333 27.1481 27.8839C27.4393 27.6894 27.6893 27.4394 27.8839 27.1482C28.3333 26.4756 28.3333 25.5393 28.3333 23.6667C28.3333 21.7941 28.3333 20.8578 27.8839 20.1852C27.6893 19.894 27.4393 19.644 27.1481 19.4494C26.4755 19 25.5392 19 23.6666 19H13.6666C12.4095 19 11.781 19 11.3905 18.6095C11 18.219 11 17.5904 11 16.3333L11 6.33334C11 4.46073 11 3.52442 10.5505 2.85182C10.356 2.56065 10.106 2.31065 9.81481 2.11609C9.14222 1.66668 8.20591 1.66668 6.33329 1.66668C4.46068 1.66668 3.52437 1.66668 2.85177 2.11609C2.5606 2.31065 2.3106 2.56065 2.11604 2.85182C1.66663 3.52442 1.66663 4.46073 1.66663 6.33334L1.66663 23C1.66663 25.5142 1.66663 26.7712 2.44767 27.5523C3.22872 28.3333 4.4858 28.3333 6.99996 28.3333Z"
                stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
              <path d="M1.66663 15L4.33329 15M1.66663 7L4.33329 7M1.66663 19L5.66663 19M1.66663 11L5.66663 11"
                stroke="#999999" stroke-width="2" stroke-linecap="round" />
              <path d="M15 28.3333V25.6667M23 28.3333V25.6667M19 28.3333L19 24.3333M11 28.3333L11 24.3333"
                stroke="#999999" stroke-width="2" stroke-linecap="round" />
            </svg>
            <label class="filter__area" for="area">Площадь</label>
            <input type="text" id="area-input" readonly style="border: 0; color: #00d39c; font-weight: 500" />
          </p>
          <div id="slider-range-area"></div>
        </div>
        <div class="filter__cost-wrapper">
          <p class="filter__area-label">
            <svg class="filter__area-svg" width="30" height="30" viewBox="0 0 30 30" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="15.0001" cy="15" r="13.3333" stroke="#999999" stroke-width="2.5" />
              <path d="M11 17.6667H15" stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
              <path
                d="M12.3333 15V9.93334C12.3333 9.68561 12.3333 9.56174 12.3497 9.4581C12.4401 8.88757 12.8876 8.44012 13.4581 8.34976C13.5617 8.33334 13.6856 8.33334 13.9333 8.33334H17C18.8409 8.33334 20.3333 9.82573 20.3333 11.6667C20.3333 13.5076 18.8409 15 17 15H12.3333ZM12.3333 15V21.6667M12.3333 15H11"
                stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
            </svg>
            <label class="filter__area" for="amount">Цена</label>
            <input type="text" id="cost" readonly style="border: 0; color: #00d39c; font-weight: 500" />
          </p>
          <div id="slider-range-cost"></div>
        </div>
        <div class="filter__search-wrapper">
          <svg class="filter__search-svg" width="30" height="30" viewBox="0 0 30 30" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="14.3334" cy="14.3333" r="12.6667" stroke="#999999" stroke-width="2.5" />
            <path d="M23.6667 23.6667L28.3334 28.3333" stroke="#999999" stroke-width="2.5" stroke-linecap="round" />
          </svg>
          <input v-model="search" placeholder="Поиск..." type="text" class="filter__search" />
        </div>
        <button class="filter__look-for">Поиск</button>
      </div>
    </form>
  </section>
</template>

<script>
import $ from "jquery";
import "jquery-ui";
import "jquery-ui/ui/widgets/slider";
import "jquery/dist/jquery.min.js";
export default {
  data() {
    return {
      url: new URLSearchParams(window.location.search),
      count_room: "",
      bathroom: "",
      search: "",
      cost: "",
      area: "",
      type: "",
      type_of_property: "",
      minCost: Number,
      maxCost: Number,
      minArea: Number,
      maxArea: Number,
    };
  },
  mounted() {
    if (this.url.size !== 0) {
      this.count_room = this.url.get("count_room");
      this.bathroom = this.url.get("bathroom");
      this.search = this.url.get("search");
      this.type_of_property = this.url.get("type_of_property");
      this.maxCost = Number(this.url.get("maxCost"));
      this.minCost = Number(this.url.get("minCost"));
      this.minArea = Number(this.url.get("minArea"));
      this.maxArea = Number(this.url.get("maxArea"));
      if (this.url.get("type") === "") this.type = null;
    } else {
      this.maxCost = 200000;
      this.minCost = 0;
      this.minArea = 0;
      this.maxArea = 500;
    }
    this.setFiltesValues();
    document.querySelector(".modile-footer__btn").addEventListener("click", () => {
      document.querySelector(".filter__form").classList.add("open-form");
    });
    document.querySelector(".filter__close").addEventListener("click", () => {
      document.querySelector(".filter__form").classList.remove("open-form");
    });
  },
  beforeMount() { },
  methods: {
    filter(type, type_of_property, count_room, bathroom, search) {
      this.$router.push({
        path: "/advts",
        query: {
          type: type,
          type_of_property: type_of_property,
          count_room: count_room,
          bathroom: bathroom,
          search: search,
          minCost: $("#slider-range-cost").slider("values", 0),
          maxCost: $("#slider-range-cost").slider("values", 1),
          minArea: $("#slider-range-area").slider("values", 0),
          maxArea: $("#slider-range-area").slider("values", 1),
        },
      });
      // console.log(type,type_of_property,count_room,bathroom,search);
    },
    setFiltesValues() {
      //input range COST!!!
      $("#slider-range-cost").slider({
        range: true,
        min: 0,
        max: 200000,
        values: [this.minCost, this.maxCost],
        slide: function (event, ui) {
          $("#cost").val(ui.values[0] + " - " + ui.values[1] + " руб");
        },
      });
      $("#cost").val("" + $("#slider-range-cost").slider("values", 0) + " - " + $("#slider-range-cost").slider("values", 1) + " руб");

      //input range AREA!!!
      $("#slider-range-area").slider({
        range: true,
        min: 0,
        max: 500,
        values: [this.minArea, this.maxArea],
        slide: function (event, ui) {
          $("#area-input").val(ui.values[0] + " - " + ui.values[1] + " м2");
        },
      });
      $("#area-input").val($("#slider-range-area").slider("values", 0) + " - " + $("#slider-range-area").slider("values", 1) + " м2");
    },
  },
};
</script>

<style scoped>
.filter__close {
  position: absolute;
  top: 0;
  right: 0;
  display: none;
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

.modile-footer__wrapper {
  display: none;
}

.section-filter {
  box-sizing: border-box;
  max-width: 1280px;
  margin: 0 auto;
  padding-top: 80px;
}

.filter__form {
  position: relative;
  width: auto;
  height: auto;
  margin: 0;
  border: 1px solid #cdd1cd;
  border-radius: 5px;
  padding: 19px 24px;
  color: black;
}

.filter__top {
  display: flex;
  padding-bottom: 15px;
  border-bottom: 1px solid #cdd1cd;
}

.filter__radio-wrapper {
  margin-right: 80px;
}

.filter__input-radio {
  position: absolute;
  visibility: hidden;
  border-radius: 5px;
}

.filter__label-radio {
  display: inline-block;
  padding: 10px 16px;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  cursor: pointer;
}

.filter__label-radio:not(:last-child) {
  margin-right: 25px;
}

.filter__input-radio:checked+.filter__label-radio {
  background-color: #def5ee;
  color: #00d39c;
}

.filter__type-of-property-wrapper,
.filter__count-room-wrapper,
.filter__bathroom-wrapper {
  display: flex;
  align-items: center;
}

.filter__type-of-property-svg,
.filter__bathroom-svg {
  margin-right: 23px;
}

.filter__type-of-property,
.filter__count-room,
.filter__bathrooms {
  background-color: transparent;
  border: none;
  cursor: pointer;
  padding: 0 25px 0 0;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.filter__type-of-property-wrapper,
.filter__count-room-wrapper {
  margin-right: 50px;
}

.filter__bottom {
  display: flex;
  align-items: center;
  padding-top: 15px;
}

.filter__area-wrapper {
  margin-right: 50px;
}

.filter__cost-wrapper {
  margin-right: auto;
}

.filter__area-wrapper,
.filter__cost-wrapper {
  display: flex;
  flex-direction: column;
  max-width: 300px;
}

.filter__area-svg {
  width: 20px;
  height: 20px;
  margin-right: 10px;
}

.filter__area {
  margin-right: 15px;
}

.filter__area-label {
  width: fit-content;
  display: flex;
  align-items: center;
  margin: 0;
  margin-bottom: 15px;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.filter__area-label input {
  max-width: 190px;
}

.filter__search-wrapper {
  display: flex;
  align-items: center;
}

.filter__search-svg {
  margin-right: 15px;
}

.filter__search {
  margin-right: 30px;
  padding: 0 0 5px 0;
  color: #000;
  border-bottom: 1px solid #cdd1cd;
}

.filter__look-for {
  position: relative;
  top: auto;
  left: auto;
  height: auto;
  width: auto;
  border-radius: 5px;
  padding: 6px 30px;
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  color: #ffffff;
  background: #00d39c;
}

.modile-filter__header {
  display: none;
}

@media (max-width: 375px) {
  * {
    box-sizing: border-box;
  }

  .section-filter {
    padding-top: 20px;
  }

  .modile-footer__wrapper {
    width: fit-content;
    display: flex;
    margin: 0 auto;
  }

  button {
    width: auto;
    height: auto;
    position: relative;
  }

  .filter__form {
    width: 100%;
    display: none;
    position: absolute;
    height: 100vh;
    top: 0;
    background-color: #fff;
    z-index: 100;
    padding: 100px 22px 0 22px;
  }

  .modile-footer__search {
    width: 289px;
    margin-right: 8px;
    background: #ffffff;
    color: #000;
    border: 1px solid #cdd1cd;
    border-radius: 5px;
    padding: 7px 15px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
  }

  .modile-footer__btn {
    padding: 10px 9px 5px 9px;
    /* height: 35px; */
    background: #ffffff;
    border: 1px solid #cdd1cd;
    border-radius: 5px;
  }

  .open-form {
    display: block;
  }

  .filter__top {
    flex-direction: column;
  }

  .filter__bottom {
    flex-direction: column;
  }

  .filter__close {
    display: block;
    right: 20px;
    top: 20px;
    cursor: pointer;
  }

  .modile-filter__header {
    display: block;
    margin: 0;
    margin-bottom: 20px;
    color: black;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
  }

  .filter__radio-wrapper {
    display: flex;
    justify-content: space-between;
    margin-right: 0;
  }

  .filter__label-radio:not(:last-child) {
    margin-right: 0px;
  }

  .filter__radio-wrapper,
  .filter__type-of-property-wrapper,
  .filter__count-room-wrapper,
  .filter__bathroom-wrapper {
    margin-right: 0;
    margin-bottom: 20px;
  }

  .filter__type-of-property-wrapper,
  .filter__count-room-wrapper,
  .filter__bathroom-wrapper {
    align-self: center;
  }

  .filter__search-wrapper {
    display: none;
  }

  .filter__area-wrapper,
  .filter__cost-wrapper {
    width: 100%;
    margin-right: 0;
    margin-bottom: 20px;
  }
}</style>
