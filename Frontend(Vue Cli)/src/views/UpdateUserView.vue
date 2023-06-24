<template>
  <div class="update">
    <HeaderCompVue />
    <section>
      <div class="wrapper">
        <div class="Info">
          <div class="Personal">
            <button type="submit" class="Personal_button Personal_button-color" href="">
              <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.25C6.37665 1.25 4.25 3.37665 4.25 6C4.25 8.62335 6.37665 10.75 9 10.75C11.6234 10.75 13.75 8.62335 13.75 6C13.75 3.37665 11.6234 1.25 9 1.25ZM5.75 6C5.75 4.20507 7.20507 2.75 9 2.75C10.7949 2.75 12.25 4.20507 12.25 6C12.25 7.79493 10.7949 9.25 9 9.25C7.20507 9.25 5.75 7.79493 5.75 6Z" fill="#00D39C" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 12.25C6.96067 12.25 5.07752 12.7208 3.67815 13.5204C2.3 14.3079 1.25 15.5101 1.25 17C1.25 18.4899 2.3 19.6921 3.67815 20.4796C5.07752 21.2792 6.96067 21.75 9 21.75C11.0393 21.75 12.9225 21.2792 14.3219 20.4796C15.7 19.6921 16.75 18.4899 16.75 17C16.75 15.5101 15.7 14.3079 14.3219 13.5204C12.9225 12.7208 11.0393 12.25 9 12.25ZM2.75 17C2.75 16.2807 3.26701 15.483 4.42236 14.8228C5.55649 14.1747 7.17334 13.75 9 13.75C10.8267 13.75 12.4435 14.1747 13.5776 14.8228C14.733 15.483 15.25 16.2807 15.25 17C15.25 17.7193 14.733 18.517 13.5776 19.1772C12.4435 19.8253 10.8267 20.25 9 20.25C7.17334 20.25 5.55649 19.8253 4.42236 19.1772C3.26701 18.517 2.75 17.7193 2.75 17Z" fill="#00D39C" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.25C6.37665 1.25 4.25 3.37665 4.25 6C4.25 8.62335 6.37665 10.75 9 10.75C11.6234 10.75 13.75 8.62335 13.75 6C13.75 3.37665 11.6234 1.25 9 1.25ZM5.75 6C5.75 4.20507 7.20507 2.75 9 2.75C10.7949 2.75 12.25 4.20507 12.25 6C12.25 7.79493 10.7949 9.25 9 9.25C7.20507 9.25 5.75 7.79493 5.75 6Z" stroke="#00D39C" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 12.25C6.96067 12.25 5.07752 12.7208 3.67815 13.5204C2.3 14.3079 1.25 15.5101 1.25 17C1.25 18.4899 2.3 19.6921 3.67815 20.4796C5.07752 21.2792 6.96067 21.75 9 21.75C11.0393 21.75 12.9225 21.2792 14.3219 20.4796C15.7 19.6921 16.75 18.4899 16.75 17C16.75 15.5101 15.7 14.3079 14.3219 13.5204C12.9225 12.7208 11.0393 12.25 9 12.25ZM2.75 17C2.75 16.2807 3.26701 15.483 4.42236 14.8228C5.55649 14.1747 7.17334 13.75 9 13.75C10.8267 13.75 12.4435 14.1747 13.5776 14.8228C14.733 15.483 15.25 16.2807 15.25 17C15.25 17.7193 14.733 18.517 13.5776 19.1772C12.4435 19.8253 10.8267 20.25 9 20.25C7.17334 20.25 5.55649 19.8253 4.42236 19.1772C3.26701 18.517 2.75 17.7193 2.75 17Z" stroke="#00D39C" />
              </svg>
              Персональные данные
            </button>
          </div>
          <div class="info_ads">
            <div class="foto_ads">
              <img class="avatar" :src="'http://127.0.0.1:8000/avatars/' + user.avatar" alt="" />
            </div>
            <div class="title_ads">
              <div class="data_change">
                <button type="submit" class="data_change_button data_change_button-color" href="">
                  <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5415 20.8333C18.5415 20.4053 18.1945 20.0583 17.7665 20.0583H1.23317C0.805149 20.0583 0.458169 20.4053 0.458169 20.8333C0.458169 21.2614 0.805149 21.6083 1.23317 21.6083H17.7665C18.1945 21.6083 18.5415 21.2614 18.5415 20.8333Z" fill="#606060" />
                    <path d="M10.9746 14.4474C10.7115 14.2423 10.473 14.0037 9.99585 13.5266L3.88194 7.41267C4.71405 7.06634 5.6996 6.49745 6.63169 5.56537C7.56392 4.63314 8.13284 3.64742 8.47915 2.81523L14.5932 8.92925L14.5932 8.92928C15.0703 9.40638 15.3089 9.64494 15.514 9.90798C15.756 10.2183 15.9635 10.554 16.1328 10.9092C16.2763 11.2104 16.383 11.5304 16.5964 12.1706L17.7216 15.5461C17.8266 15.8611 17.7446 16.2084 17.5098 16.4432C17.275 16.678 16.9277 16.76 16.6127 16.655L13.2371 15.5298C12.597 15.3164 12.277 15.2097 11.9758 15.0662C11.6206 14.8969 11.2849 14.6894 10.9746 14.4474Z" fill="#606060" />
                    <path d="M2.1854 5.71613C0.91589 4.44662 0.91589 2.38832 2.1854 1.11881C3.45492 -0.150707 5.51321 -0.150707 6.78273 1.11881L7.51601 1.85209C7.50597 1.88242 7.49556 1.91316 7.48475 1.9443C7.21598 2.719 6.70886 3.73457 5.75487 4.68856C4.80089 5.64254 3.78532 6.14966 3.01062 6.41844C2.97962 6.42919 2.94902 6.43956 2.91883 6.44956L2.1854 5.71613Z" fill="#606060" />
                  </svg>
                  Изменение данных
                </button>
              </div>
            </div>
          </div>
          <div class="formaa">
            <form class="forms" v-on:submit.prevent="updateUser(avatar, fio, email, tel)">
              <input type="file" ref="avatar" v-on:change="handlefileUpload()" />
              <p>Полное имя</p>
              <input class="input_1" type="text" placeholder="ФИО через пробел" v-model="fio" />
              <p>Email</p>
              <input class="input_2" type="email" placeholder="Email" v-model="email" />
              <p>Номер телефона</p>
              <input class="input_3" type="text" placeholder="Номер телефона" v-model="tel" />
              <div class="form_buttom">
                <button type="submit" class="form_but_1 form_but_1-color" href="">Отмена</button>
                <button type="submit" class="form_but_2 form_but_2-color" href="">Сохранить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <FooterCompVue />
    <!-- <form v-on:submit.prevent="updateUser(avatar, fio, email, tel)">
      <input type="file" ref="avatar" v-on:change="handlefileUpload()" />
      <input class="update__fio" v-model="fio" type="text" />
      <input class="update__email" v-model="email" type="text" />
      <input class="update__tel" v-model="tel" type="text" />
      <div class="update__btns">
        <router-link to="/profile">Отмена</router-link>
        <button class="update__add">Сохранить</button>
      </div>
    </form> -->
  </div>
</template>
<script>
import axios from "axios";
import HeaderCompVue from "@/components/HeaderComp.vue";
import FooterCompVue from "@/components/FooterComp.vue";
export default {
  components: {
    HeaderCompVue,
    FooterCompVue,
  },
  data() {
    return {
      user: [],
      id: localStorage.getItem("id"),
      token: localStorage.getItem("token"),
      fio: "",
      email: "",
      tel: "",
      avatar: "",
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
          this.user = response.data[0];
          console.log(this.user);
          // document.querySelector(".update__email").value = `${this.user.email}`;
          // document.querySelector(
          //   ".update__fio"
          // ).value = `${this.user.name} ${this.user.surname} ${this.user.middle_name}`;
          // document.querySelector(".update__tel").value = `${this.user.tel}`;
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
    updateUser(avatar, fio, email, tel) {
      fio = fio.split(" ");
      let surname = fio[0];
      let name = fio[1];
      let middle_name = fio[2];
      let formData = new FormData();
      formData.append("id", this.id);
      formData.append("name", name);
      formData.append("surname", surname);
      formData.append("middle_name", middle_name);
      formData.append("email", email);
      formData.append("tel", tel);
      formData.append("avatar", avatar);
      console.log(formData);
      axios
        .post("http://127.0.0.1:8000/api/updateUser", formData, {
          "Content-type": "multipart/form-data",
        })
        .then((response) => {
          console.log(response);
          this.$router.push("/profile");
        })
        .catch((error) => {
          console.log(error);
        });
    },
    handlefileUpload() {
      this.avatar = this.$refs.avatar.files[0];
    },
  },
  beforeMount() {
    this.outputUser();
  },
};
</script>
<style scoped>
.update {
  /* padding-top: 50px; */
}
.avatar {
  width: 230px;
  height: 230px;
  border-radius: 100%;
}

button {
  width: auto;
  height: auto;
  position: relative;
}

input {
  position: relative;
  height: auto;
  left: auto;
}

body {
  background-color: #fff;
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
  padding-top: 50px;
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
  height: auto;
}

.inp {
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

.inp:focus {
  width: 200px;
  z-index: 1;
  border-bottom: 2px solid #fff;
}

.button_0 {
  background: transparent;
  border: none;
  height: 42px;
  width: 42px;
  position: absolute;
  top: 0;
  left: 0;
  cursor: pointer;
}

.Info {
  display: flex;
  flex-direction: column;
}

.info_ads {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px 80px;
}

.Personal {
  display: flex;
  justify-content: center;
  padding-bottom: 40px;
}

.Personal_button {
  display: flex;
  align-items: center;
  padding: 10px 15px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
  margin-right: 208px;
}

.Personal_button-color {
  color: #000000;
  background-color: transparent;
  border: 1px solid rgba(0, 211, 156, 0.5);
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #00d39c;
}

.Personal_button svg {
  margin-right: 10px;
}

.data_change {
  display: flex;
  align-items: center;
  padding-bottom: 40px;
}

.data_change_button {
  display: flex;
  align-items: center;
  padding: 10px 15px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.data_change_button-color {
  color: #000000;
  background-color: transparent;
  border: 2px solid rgba(205, 209, 205, 0.1);
  box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.data_change_button svg {
  margin-right: 10px;
}

.formaa {
  display: flex;
  margin-right: 140px;
  margin-bottom: 140px;
}

.forms {
  max-width: 600px;
  padding: 15px;
  margin: 20px auto;
  color: white;
  font-family: "Raleway", sans-serif;
}

.forms p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.input_1 {
  outline: none;
  border: none;
  border: 2px solid rgba(205, 209, 205, 0.1);
  box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  background-color: transparent;
  display: block;
  width: 100%;
  padding: 12px 80px;
  margin-bottom: 25px;
  font-family: inherit;
  font-size: 18px;
  color: #cdd1cd;
}

.input_1::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  color: #cdd1cd;
  background-image: url("@/assets/hape.svg");
  background-position: 15px 10px;
  background-repeat: no-repeat;
}

.input_2 {
  outline: none;
  border: none;
  border: 2px solid rgba(205, 209, 205, 0.1);
  box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  background-color: transparent;
  display: block;
  width: 100%;
  padding: 12px 80px;
  margin-bottom: 25px;
  font-family: inherit;
  font-size: 18px;
  color: #cdd1cd;
}

.input_2::placeholder {
  color: #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  background-image: url("@/assets/on.svg");
  background-position: 15px 12px;
  background-repeat: no-repeat;
}

.input_3 {
  outline: none;
  border: none;
  border: 2px solid rgba(205, 209, 205, 0.1);
  box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  background-color: transparent;
  display: block;
  width: 100%;
  padding: 12px 80px;
  margin-bottom: 25px;
  font-family: inherit;
  font-size: 18px;
  color: #cdd1cd;
}

.input_3::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  color: #cdd1cd;
  background-image: url("@/assets/telef.svg");
  background-position: 15px 8px;
  background-repeat: no-repeat;
}

.form_buttom {
  display: flex;
  align-items: center;
}

.form_but_1 {
  display: flex;
  align-items: center;
  padding: 7px 33px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
  margin-right: 15px;
  margin-top: 10px;
}

.form_but_1-color {
  color: #000000;
  background-color: #d6c8b5;
  border: none;
  border-radius: 5px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  text-align: center;
  color: #ffffff;
}

.form_but_1 svg {
  margin-right: 10px;
}

.form_but_2 {
  display: flex;
  align-items: center;
  padding: 7px 20px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
  margin-top: 10px;
}

.form_but_2-color {
  color: #000000;
  background-color: #00d39c;
  border: none;
  border-radius: 5px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  text-align: center;
  color: #ffffff;
}

.form_but_2 svg {
  margin-right: 10px;
}

@media (max-width: 375px) {
  .Personal {
    display: none;
  }

  .avatar {
    width: 120px;
    height: 120px;
  }

  .info_ads {
    margin-bottom: 40px;
    flex-direction: row;
    flex-wrap: nowrap;
    gap: 0 0;
  }

  .data_change_button-color {
    margin-bottom: 0;
    outline: 2px solid #cdd1cd;
    padding: 10px 7px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
    box-shadow: none;
  }

  .data_change_button svg {
    margin: 0;
    margin-right: 6px;
  }

  .data_change {
    padding: 0;
  }

  .forms {
    width: auto;
    padding: 0;
    margin: 0;
  }

  .forms p {
    margin: 0;
    margin-bottom: 7px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .forms input[type="file"] {
    width: 50px;
    margin-bottom: 15px;
  }

  .input_1,
  .input_2,
  .input_3 {
    box-sizing: border-box;
    width: 323px;
    padding-left: 45px;
  }

  .input_1::placeholder,
  .input_2::placeholder,
  .input_3::placeholder {
    font-weight: 300;
    font-size: 16px;
    line-height: 19px;
    color: #cdd1cd;
  }

  .form_buttom {
    width: 100%;
    justify-content: space-between;
  }
}
</style>
