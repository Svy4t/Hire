<template>
  <div class="main">
    <header>
      <div class="wrapper_1">
        <div class="header-top">
          <li @click="goHome()" class="logo">
            <a><img src="@/assets/loggo.svg" alt="" />Hire</a>
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
              <h1>Нет учетной записи?</h1>

              <div class="connection_ads">
                <button
                  @click="goReg()"
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
                  Создать аккаунт
                </button>
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
            <form class="forms" v-on:submit.prevent="loginUser()">
              <h1>Вход</h1>
              <span class="welcome-modile">Мы рады видеть вас снова</span>
              <p>Номер телефона</p>
              <input
                class="input_1"
                v-model="tel"
                type="text"
                placeholder="Номер телефона"
              />
              <p>Пароль</p>
              <input
                class="input_3"
                v-model="password"
                type="password"
                placeholder="Пароль"
              />
              <div class="form_buttom">
                <button
                  type="submit"
                  class="form_but_2 form_but_2-color"
                  href=""
                >
                  Войти
                </button>
              </div>
              <div class="header-info header-info-mobile">
                <ul class="nav">
                  <h1>Нет учетной записи?</h1>

                  <div class="connection_ads">
                    <button
                      @click="goReg()"
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
                      Создать
                    </button>
                  </div>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    {
      return {
        user: {},
        tel: "",
        password: "",
      };
    }
  },
  // mounted() {
  //   console.log(this.loc);
  // },
  methods: {
    loginUser() {
      axios
        .post(
          "http://127.0.0.1:8000/api/login",
          {
            tel: this.tel,
            password: this.password,
          },
          {
            // 'Access-Control-Allow-Origin': 'http://localhost:8080'
          }
        )
        .then((response) => {
          let res = response.data;
          localStorage.setItem("token", res.token);
          localStorage.setItem("id", res.id);
          window.location.assign("http://localhost:8080/profile");
        })
        .catch((error) => {
          console.log(error.response);
          // let textAlert = "";
          // let errors = Object.keys(error.response.data.errors).map(
          //   (key) => error.response.data.errors[key]
          // );
          // errors.forEach((element) => {
          //   textAlert += element[0] + "\n";
          // });
          // alert(textAlert);
        });
    },
    goHome() {
      this.$router.push("/");
    },
    goReg() {
      this.$router.push("/reg");
    },
  },
};
</script>

<style scoped>
.logo-mobile__wrapper {
  display: none;
}

.header-info-mobile {
  display: none;
}

.welcome-modile {
  display: none;
}

button {
  position: relative;
  width: auto;
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

.logo-modile {
  display: none;
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
  color: #00d39c;
  margin-top: 6px;
  cursor: pointer;
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
  margin-top: 80px;
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
  margin-right: 300px;
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
  width: 100%;
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
// адаптив
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

  .Info {
    margin-top: 0;
  }

  .info_ads {
    display: none;
  }

  .wrapper {
    max-width: none;
    padding-left: 0;
    padding-right: 0;
    margin: 0;
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

  .welcome-modile {
    display: block;
    margin-bottom: 39px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #737373;
  }

  .forms h1 {
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #000000;
  }

  .forms p {
    margin: 0;
    margin-bottom: 5px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .input_1,
  .input_3 {
    height: 40px;
    padding: 10px 15px 10px 38px;
    border: 2px solid #cdd1cd;
    color: black;
    box-shadow: none;
    background-color: #fff;
  }

  .input_1::placeholder,
  .input_3::placeholder {
    font-size: 16px;
    line-height: 19px;
    opacity: 1;
  }

  .input_1::placeholder {
    background-position: 12px 7px;
    background-size: 15px 23px;
  }

  .input_3::placeholder {
    background-position: 10px 8px;
    background-size: 20px 20px;
  }

  .form_buttom {
    margin-bottom: 26px;
  }

  .form_but_2-color {
    display: block;
    width: 100%;
    height: auto;
    margin-top: 0;
    padding: 10px 0;
    font-size: 16px;
    line-height: 19px;
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
