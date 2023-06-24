<template>
  <div class="about">
    <HeaderComp />
    <YandexMap class="map" :settings="settings" :coordinates="[46.34293, 48.026307]" :zoom="12">
      <YandexMarker v-for="(el, index) in advts" :key="index" :coordinates="[arrayCoo[index][0], arrayCoo[index][1]]"
        :marker-id="index" :properties="{}" :options="{
          iconLayout: 'default#image',
          iconImageHref: 'http://127.0.0.1:8000/avatars/marker.png',
          iconImageSize: [30, 30],
          iconOffset: [-5, 25],
          // preset: 'islands#redIcon',
          clusterize: true,
        }">
        <template #component>
          <div class="balloon">
            <img class="balloon__img" v-if="el.photos[0]" :src="'http://127.0.0.1:8000/photos/' + el.photos[0].file_name"
              alt="" />
            <img class="balloon__img" v-else :src="'http://127.0.0.1:8000/photos/' + el.photos[0]" alt="" />
            <div class="balloon__content">
              <span class="balloon__header" @click="goOneAdvt(el.id)">{{
                el.header
              }}</span>
              <div class="balloon__place">
                <img class="balloon__place-img" src="@/assets/ion_3.svg" alt="" />
                <span class="balloon__place-text">{{ arrayCoo[index][2] }} {{ arrayCoo[index][3] }}
                  {{ arrayCoo[index][4] }}</span>
              </div>
              <div class="balloon__area">
                <img class="balloon__area-img" src="@/assets/line.svg" alt="" />
                <span class="balloon__area-text">{{ el.area }} м2</span>
              </div>
              <span class="balloon__cost">{{ el.cost }}₽</span>
            </div>
          </div>
        </template>
      </YandexMarker>
    </YandexMap>
    <FooterComp />
  </div>
</template>
<script>
import { YandexMap, YandexMarker } from "vue-yandex-maps";
import axios from "axios";
import HeaderComp from "@/components/HeaderComp.vue";
import FooterComp from "@/components/FooterComp.vue";
export default {
  components: { YandexMap, YandexMarker, HeaderComp, FooterComp },
  data() {
    return {
      settings: {
        apiKey: "a97a62ce-6c57-43c1-aafc-602754e677c5", // Индивидуальный ключ API
        lang: "ru_RU", // Используемый язык
        coordorder: "latlong", // Порядок задания географических координат
        debug: false, // Режим отладки
        version: "2.1", // Версия Я.Карт
      },
      advts: [],
      arrayCoo: [
        // ["46.341923", "48.041523",1,1,1],
        // ["46.340103", "48.021706",1,1,1],
        // ["46.333275", "48.02963",1,1,1],
        // ["46.349377", "48.021248",1,1,1],
        // ["46.363792", "48.04172",1,1,1],
        // ["46.382053", "48.090904",1,1,1],
        // ["46.273636", "47.966847",1,1,1],
        // ["46.343838", "48.10932",1,1,1],
      ],
    };
  },
  mounted() {
    this.allAdvt();
  },
  methods: {
    getCoo(query, index) {
      let token = "bc52c3a5dbf7d3a37b48c915c3492a88ca099a1b";
      axios
        .post(
          "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address",
          {
            query: query,
            count: 1,
          },
          {
            headers: {
              "Content-Type": "application/json",
              Accept: "application/json",
              Authorization: "Token " + token,
            },
          }
        )
        .then((response) => {
          console.log(response.data);
          setTimeout(() => {
            this.arrayCoo.push([
              response.data.suggestions[0].data.geo_lat,
              response.data.suggestions[0].data.geo_lon,
              response.data.suggestions[0].data.city_with_type,
              response.data.suggestions[0].data.street_with_type,
              response.data.suggestions[0].data.house,
            ]);
          }, index * 100);

          // console.log(this.arrayCoo);
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
    allAdvt() {
      axios
        .post("http://127.0.0.1:8000/api/indexAdvt")
        .then((response) => {
          this.advts = response.data;
          // console.log(this.advts[0].id, this.arrayCoo);
          this.advts.forEach((element, index) => {
            this.getCoo(element.address, index);
          });
          // console.log(this.arrayCoo);
          // console.log(this.advts, this.arrayCoo);
        })
        .catch((error) => {
          console.log(error.data);
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
  },
};
</script>
<style scoped>
.map {
  margin: 0 auto;
  padding: 50px 0;
  width: 1280px;
  height: 750px;
}

.about {
  /* overflow: scroll; */
}

@media (max-width: 375px) {
  .map {
    width: 375px;
    height: 500px;
  }
}
</style>
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Inter&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");

input {
  color: inherit;
  left: auto;
}

.ymaps-2-1-79-balloon__content ymaps {
  overflow: auto !important;
  height: auto !important;
  width: 410px !important;
}

.balloon {
  display: flex;
}

.balloon__content {
  display: flex;
  flex-direction: column;
}

.balloon__header {
  margin-bottom: 12px;
  font-family: "Roboto";
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.balloon__img {
  width: 131px !important;
  height: 131px !important;
  border-radius: 5px;
  margin-right: 17px;
}

.balloon__place,
.balloon__area {
  display: flex;
}

.balloon__place {
  margin-bottom: 3px;
}

.balloon__area {
  margin-bottom: 3px;
}

.balloon__place-img,
.balloon__area-img {
  width: 20px !important;
  height: 20px !important;
}

.balloon__place-img {
  margin-right: 13px;
  padding-top: 3px;
}

.balloon__area-img {
  margin-right: 11px;
}

.balloon__place-text {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  font-size: 16px;
  line-height: 25px;
  color: #999999;
}

.balloon__area-text {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  font-size: 16px;
  line-height: 19px;
  color: #999999;
}

.balloon__cost {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 18px;
  line-height: 20px;
  color: #00b584;
}

.ymaps-2-1-79-balloon.ymaps-2-1-79-balloon_layout_normal.ymaps-2-1-79-balloon_to_top.ymaps-2-1-79-i-custom-scroll {
  top: -188px !important;
}
</style>
