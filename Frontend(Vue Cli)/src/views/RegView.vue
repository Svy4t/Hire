<template>
  <div class="main">
    <header>
      <div class="wrapper_1">
        <div class="header-top">
          <li class="logo">
            <a @click="goHome()"
              ><img src="@/assets/loggo.svg" alt="" /> Hire</a
            >
            <div class="logo-mobile__wrapper">
              <svg
                class="logo-mobile"
                width="41"
                height="49"
                viewBox="0 0 41 49"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.9382 2C15.9382 2 17 1 18.092 1C18.752 1 19.9326 1.67198 19.9326 1.67198C19.9326 1.67198 39.4387 14.5 39.9387 16C40.4387 17 40.4387 18 40.4387 18C40.4387 18 40.4502 36.0872 40.4387 36.5C40.4223 37.0918 39.9387 38.5 38.9387 38.5C37.9387 38.5 36.4387 37.5 36.4387 37.5C36.4387 37.5 22.5206 27.7213 21.4387 27C20.7938 26.57 20 25.5 18.6178 26.5C18.0295 26.9257 17.9387 28.5 17.9387 28.5C17.9387 29.2746 17.956 45.992 17.9387 46.7532C17.9267 47.2798 17.9007 47.6467 17.4387 48C16.8164 48.4759 16.1049 48.2398 15.4387 48C14.5002 47.6621 14.0002 47 13.4387 46.5C13.1738 46.1331 1 33.5 1 31C1.00089 27.7198 1 27.9918 1 27.5C1 25.7178 1.09884 22.7992 1.09884 21.017C2 17 13 5 15.9382 2Z"
                  fill="#00D39C"
                  stroke="#00D39C"
                  stroke-linecap="round"
                />
              </svg>
              <span class="logo-mobile__span">Hire</span>
            </div>
          </li>
          <div class="header-info">
            <ul class="nav">
              <h1>Есть учетная запись?</h1>
              <div class="connection_ads">
                <router-link
                  to="/login"
                  type="submit"
                  class="connection_button connection_button-color"
                  href=""
                  ><svg
                    width="20"
                    height="26"
                    viewBox="0 0 20 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M6.25 6.64593C6.25 4.59949 7.92893 2.94053 10 2.94053C12.0711 2.94053 13.75 4.59949 13.75 6.64593C13.75 8.69236 12.0711 10.3513 10 10.3513C7.92893 10.3513 6.25 8.69236 6.25 6.64593ZM10 0.470264C6.54822 0.470264 3.75 3.2352 3.75 6.64593C3.75 10.0567 6.54822 12.8216 10 12.8216C13.4518 12.8216 16.25 10.0567 16.25 6.64593C16.25 3.2352 13.4518 0.470264 10 0.470264ZM2.5 23.9378C2.5 19.8449 5.85786 16.527 10 16.527C14.1421 16.527 17.5 19.8449 17.5 23.9378C17.5 24.6199 18.053 25.1729 18.7351 25.1729H18.7649C19.447 25.1729 20 24.6199 20 23.9378C20 18.4806 15.5228 14.0567 10 14.0567C4.47715 14.0567 0 18.4806 0 23.9378C0 24.6199 0.552988 25.1729 1.23513 25.1729H1.26487C1.94701 25.1729 2.5 24.6199 2.5 23.9378Z"
                      fill="#000"
                    />
                  </svg>
                  Войти</router-link
                >
              </div>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <section>
      <div class="wrapper">
        <div class="Info">
          <div class="info_ads">
            <img src="@/assets/elest.png" alt="" />
            <h1>Мы рады видеть вас</h1>
          </div>
          <div class="formaa">
            <form
              class="forms"
              v-on:submit.prevent="
                registerUser(fio, tel, email, password, password_confirmation)
              "
            >
              <h1>Создать учетную запись?</h1>
              <h2>Войти в Hire</h2>
              <p>Аватар</p>
              <label for="avatar" class="label__avatar">
                <svg
                  width="40"
                  height="40"
                  viewBox="0 0 40 40"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.9997 25.3333V33.3333M19.9997 25.3333L22.6663 27.9999M19.9997 25.3333L17.333 27.9999"
                    stroke="#00D39C"
                    stroke-width="2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M33.3337 21.8039C33.3337 24.9278 31.4087 27.6073 28.667 28.7472M23.1749 14.7029C23.9693 14.4255 24.8241 14.2745 25.7146 14.2745C26.5875 14.2745 27.4261 14.4196 28.2071 14.6866M13.4885 18.1452C13.1303 18.0756 12.7601 18.0392 12.3813 18.0392C9.22536 18.0392 6.66699 20.5675 6.66699 23.6863C6.66699 26.2148 8.34865 28.3552 10.667 29.0748M13.4885 18.1452C13.1831 17.3304 13.0162 16.4492 13.0162 15.5294C13.0162 11.371 16.4274 8 20.6352 8C24.5548 8 27.7831 10.9249 28.2071 14.6866M13.4885 18.1452C14.2411 18.2912 14.9407 18.5832 15.5559 18.9901M28.2071 14.6866C29.3931 15.0922 30.4463 15.7791 31.2848 16.6667"
                    stroke="#00D39C"
                    stroke-width="2.5"
                    stroke-linecap="round"
                  />
                </svg>
                <!-- <span class="label__avatar-span">Аватар</span> -->
                <input
                  id="avatar"
                  type="file"
                  ref="avatar"
                  v-on:change="handlefileUpload()"
                />
              </label>

              <p>Полное имя</p>
              <input
                class="input_1 form__input"
                type="text"
                placeholder="ФИО"
                v-model="fio"
              />
              <p>Почта</p>
              <input
                class="input_1 form__input"
                type="text"
                placeholder="Почта"
                v-model="email"
              />
              <p>Номер телефона</p>
              <input
                class="input_2 form__input"
                type="text"
                placeholder="Номер телефона"
                v-model="tel"
              />
              <p>Пароль</p>
              <input
                class="input_3 form__input"
                type="password"
                placeholder="Пароль"
                v-model="password"
              />
              <input
                class="input_3 form__input"
                type="password"
                placeholder="Подтвердите пароль"
                v-model="password_confirmation"
              />
              <label for="input__checkbox" class="label__checkbox">
                <input
                  class="input__checkbox"
                  id="input__checkbox"
                  type="checkbox"
                  required
                />
                <span></span>
                Соглашаюсь с правилами и условиями
              </label>
              <button type="submit" class="form_but_2 form_but_2-color" href="">
                Создать учетную запись
              </button>
            </form>
            <div class="header-info header-info-mobile">
              <ul class="nav">
                <h1>Нет учетной записи?</h1>

                <div class="connection_ads">
                  <button
                    @click="goLogin()"
                    type="submit"
                    class="connection_button connection_button-color"
                    href=""
                  >
                    <svg
                      width="24"
                      height="30"
                      viewBox="0 0 24 30"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12.5 6.25C12.5 8.32107 10.8211 10 8.75 10C6.67893 10 5 8.32107 5 6.25C5 4.17893 6.67893 2.5 8.75 2.5C10.8211 2.5 12.5 4.17893 12.5 6.25ZM15 6.25C15 9.70178 12.2018 12.5 8.75 12.5C5.29822 12.5 2.5 9.70178 2.5 6.25C2.5 2.79822 5.29822 0 8.75 0C12.2018 0 15 2.79822 15 6.25ZM12.7902 17.7313L14.787 16.1662C13.2168 14.6691 11.0907 13.75 8.75 13.75C3.91751 13.75 0 17.6675 0 22.5H2.5C2.5 19.0482 5.29822 16.25 8.75 16.25C10.2904 16.25 11.7007 16.8073 12.7902 17.7313Z"
                        fill="#262626"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M11.25 22.5L23.75 22.5L23.75 25L11.25 25L11.25 22.5Z"
                        fill="#262626"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M16.25 30V17.5H18.75V30H16.25Z"
                        fill="#262626"
                      />
                    </svg>
                    Войти
                  </button>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <form v-on:submit.prevent="registerUser()" class="form">
        <div class="form__name">
            <label for="">Имя</label>
            <input class="input" type="text" placeholder="Your name..." v-model="name" />
        </div>
        <div class="form__surname">
            <label for="">Фамилия</label>
            <input class="input" type="text" placeholder="Your surname..." v-model="surname" />
        </div>
        <div class="form__middle-name">
            <label for="">Отчество</label>
            <input class="input" type="text" placeholder="Your surname..." v-model="middleName" />
        </div>
        <div class="form__email">
            <label for="">Почта</label>
            <input class="input" type="text" placeholder="Your login..." v-model="email" />
        </div>
        <div class="form__tel">
            <label for="">Телефон</label>
            <input class="input-date" type="text" placeholder="Your telephone..." v-model="tel" />
        </div>
        <div class="form__password">
            <label for="">Пароль</label>
            <input class="input" type="password" placeholder="Your password..." v-model="password" />
        </div>
        <div class="form__con-password">
            <label for="">Подтвердите пароль</label>
            <input class="input" type="password" placeholder="Your confirmed password..." v-model="password_confirmation" />
        </div>
        <div class="form__avatar">
            <input type="file" ref="avatar" v-on:change="handlefileUpload()" />
        </div>

        <div class="reg">
            <span class="reg__span">У вас есть аккаунт? - </span>
            <router-link to="/login" class="reg__link">Авторизуйтесь</router-link>
        </div>
        <button class="btn-reset form-btn">Зарегистрироваться</button>
    </form> -->
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      name: "",
      surname: "",
      middleName: "",
      fio: "",
      email: "",
      tel: "",
      password: "",
      password_confirmation: "",
      avatar: "",
    };
  },
  mounted() {},
  methods: {
    registerUser(fio, tel, email, password, password_confirmation) {
      fio = fio.split(" ");
      console.log(fio);
      let formData = new FormData();
      formData.append("name", fio[0]);
      formData.append("surname", fio[1]);
      formData.append("middle_name", fio[2]);
      formData.append("tel", tel);
      formData.append("email", email);
      formData.append("password", password);
      formData.append("password_confirmation", password_confirmation);
      formData.append("avatar", this.avatar);
      console.log(formData);
      axios
        .post("http://127.0.0.1:8000/api/register", formData, {
          "Content-type": "multipart/form-data",
        })
        .then((response) => {
          console.log(response.data);
          this.$router.push("/login");
        })
        .catch((error) => {
          console.log(error.response);
        });
    },
    handlefileUpload() {
      console.log(this.$refs.avatar.files[0]);
      this.avatar = this.$refs.avatar.files[0];
    },
    goHome() {
      window.location.assign("http://localhost:8080/");
    },
    goLogin() {
      this.$router.push("/login");
    },
  },
};
</script>

<style scoped>
.logo-mobile__wrapper {
  display: none;
}

.label__avatar input {
  width: 100px;
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
}

.label__checkbox {
  display: flex;
  margin-bottom: 24px;
  align-items: center;
  font-weight: 300;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.input__checkbox {
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
}

.input__checkbox + span {
  position: relative;
  display: inline-block;
  margin-right: 15px;
  width: 25px;
  height: 25px;
  background-color: #ffffff;
  border: 1px solid #cdd1cd;
  border-radius: 5px;
}

.input__checkbox:checked + span::after {
  content: url("@/assets/check.svg");
  position: absolute;
  left: 5px;
  top: -1px;
}

.header-info-mobile {
  display: none;
}

form {
  position: relative;
  width: auto;
  height: auto;
}

input {
  position: relative;
  left: auto;
  height: auto;
}

button {
  position: relative;
  width: auto;
  height: auto;
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

.nav h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
  margin-right: 15px;
  margin-top: 35px;
}

.nav li {
  /* margin-left: 5vh; */
  margin-right: 5vh;
}

.nav li a {
  text-decoration: none;
  color: #000000;
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
  background-color: #fff;
}

.header-top {
  display: flex;
  /* justify-content: space-between; */
  align-items: center;
  margin-bottom: 6vh;
  flex-wrap: wrap;
  justify-content: space-between;
  /* padding: 3vh 0; */
}

.logo {
  display: flex;
  align-items: center;
}

.logo img {
  width: 80px;
  height: 72px;
}

.logo a {
  display: flex;
  align-items: center;
  list-style-type: none;
  text-decoration: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  margin-top: 6px;
  color: #00d39c;
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

.connection_ads {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  margin-right: 30px;
}

.connection_button {
  display: flex;
  align-items: center;
  padding: 13px 20px;
  border: 1px solid #def5ee;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.connection_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
  color: #000000;
}

.connection_button svg {
  margin-right: 10px;
}

.Info {
  display: flex;
  flex-direction: row;
  margin-top: 0px;
}

.info_ads {
  display: flex;
  flex-direction: row;
  justify-content: center;
  padding-top: 80px;
  width: 45%;
  /* background-color: aqua; */
  height: 350px;
  flex-wrap: wrap;
  gap: 20px 80px;
}

.Info img {
  padding-top: 0px;
  padding-right: 40px;
  width: 400px;
  height: 250px;
}

.Info h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  color: #000000;
  margin-top: 0;
}

.formaa {
  display: flex;
  flex-direction: column;
  margin-right: 140px;
  width: 55%;
}

.forms {
  max-width: 600px;
  padding: 15px;
  margin: 20px auto;
  color: white;
  font-family: "Raleway", sans-serif;
}

.forms h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  color: #000000;
  margin-bottom: 5px;
}

.forms h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 24px;
  color: #737373;
  margin-top: 0px;
  margin-bottom: 40px;
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
  width: 400px;
  padding: 12px 60px;
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
  background-position: 15px 8px;
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
  width: 400px;
  padding: 12px 60px;
  margin-bottom: 25px;
  font-family: inherit;
  font-size: 18px;
  color: #cdd1cd;
}

.input_2::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  color: #cdd1cd;
  background-image: url("@/assets/telef.svg");
  background-position: 15px 8px;
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
  width: 400px;
  padding: 12px 60px;
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
  background-image: url("@/assets/zamok.svg");
  background-position: 15px 10px;
  background-repeat: no-repeat;
}

.form_buttom {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.form_but_2 {
  height: 50px;
  width: 525px;
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

.checkboxs {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.checkboxs p {
  display: flex;
  align-items: center;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  color: #000000;
  gap: 0 5px;
}

.checkboxs input {
  width: 20px;
  height: 20px;
  border: 1px solid #cdd1cd;
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
</style>
<style scoped>
@media (max-width: 375px) {
  * {
    box-sizing: border-box;
    font-family: "Roboto";
  }

  .main {
    min-height: 100vh;
    background-color: #e5f9f4;
    padding: 28px;
  }

  .logo a {
    display: none;
  }

  .logo-mobile__wrapper {
    display: flex;
    align-items: center;
    font-weight: 700;
    font-size: 32px;
    line-height: 38px;
    color: #00d39c;
  }

  .logo-mobile {
    margin-right: 2px;
  }

  .logo-mobile__span {
    transform: translateY(3px);
  }

  header {
    background-color: transparent;
    margin-bottom: 68px;
  }

  .wrapper_1 {
    padding-left: 0;
    padding-right: 0;
  }

  .header-top {
    margin-bottom: 0;
  }

  .header-info {
    display: none;
  }

  .info_ads {
    display: none;
  }

  .wrapper {
    padding-left: 0;
    padding-right: 0;
  }

  .formaa {
    margin: 0;
    width: 100%;
  }

  .forms {
    max-width: none;
    height: auto;
    width: auto;
    margin: 0;
    padding: 0;
  }

  .forms h1 {
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #000000;
  }

  .forms h2 {
    font-size: 16px;
    line-height: 19px;
    color: #737373;
  }

  .forms p {
    margin: 0;
    margin-bottom: 5px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .label__avatar {
    cursor: pointer;
  }

  .form__input {
    width: 100%;
    height: 40px;
    padding: 10px 15px 10px 38px;
    border: 2px solid #cdd1cd;
    color: black;
    box-shadow: none;
    background-color: #fff;
  }

  .form__input::placeholder {
    font-size: 16px;
    line-height: 19px;
    opacity: 1;
  }

  .input_1::placeholder,
  .input_2::placeholder {
    background-position: 12px 7px;
    background-size: 15px 23px;
  }

  .input_3::placeholder {
    background-position: 10px 8px;
    background-size: 20px 20px;
  }

  .label__checkbox {
    display: flex;
    margin-bottom: 24px;
    align-items: center;
    font-weight: 300;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .input__checkbox {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
  }

  .input__checkbox + span {
    position: relative;
    display: inline-block;
    margin-right: 2px;
    width: 25px;
    height: 25px;
    background-color: #ffffff;
    border: 1px solid #cdd1cd;
    border-radius: 5px;
  }

  .input__checkbox:checked + span::after {
    content: url("@/assets/check.svg");
    position: absolute;
    left: 5px;
    top: 4px;
  }

  .form_but_2-color {
    width: 100%;
    margin-bottom: 20px;
    margin-top: 0;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #ffffff;
  }

  .header-info-mobile {
    display: block;
  }

  .nav {
    margin: 0;
    padding: 0;
    justify-content: space-between;
    align-items: center;
  }

  .nav h1 {
    margin: 0;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .connection_ads {
    margin: 0;
  }

  .connection_button-color {
    align-items: center;
    height: auto;
    padding: 8px 16px;
    border: 1px solid #cdd1cd;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .connection_button svg {
    width: 19px;
    height: 25px;
    margin-right: 5px;
  }
}
</style>
