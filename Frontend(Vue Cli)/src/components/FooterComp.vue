<template>
  <footer>
    <div class="wrapper">
      <div class="footer">
        <div class="box-1">
          <nav>
            <ul class="nav-footer">
              <li><a href="">О нас</a></li>
              <li><a href="">Конфиденциальность</a></li>
              <li><a href="">Условия использования</a></li>
              <li class="deleted-in-mobile">
                <a href="">Часто задаваемые вопросы</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="footer__rigth">
          <div class="box-2">
            <nav>
              <ul class="nav-footer">
                <li><a href="">Наши предложения</a></li>
                <li><a href="">Политика оплаты</a></li>
                <li class="deleted-in-mobile">
                  <a href="">Решения в сфере недвижимости</a>
                </li>
                <li class="deleted-in-mobile">
                  <a href="">Подрядчики и инженерные бюро</a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="box-3">
            <nav>
              <ul class="nav-footer">
                <li class="li_1 deleted-in-mobile">
                  <img src="@/assets/email.svg" alt="" />
                  <a href="">info@hire.com</a>
                </li>
                <li class="li_1 deleted-in-mobile">
                  <img src="@/assets/Union.svg" alt="" />
                  <a href="">+7(967)1234567</a>
                </li>
                <li class="li_1 deleted-in-mobile">
                  <img src="@/assets/ion_2.svg" alt="" />
                  <a href="">Адрес</a>
                </li>
                <li class="li_2">
                  <img src="@/assets/twitter.svg" alt="" style="margin-right: 2vh" />
                  <img src="@/assets/vk.svg" alt="" style="margin-right: 2vh" />
                  <img src="@/assets/instagram.svg" alt="" style="margin-right: 2vh" />
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="wrapper">
        <div class="footer_podval">
          <h1>Все права защищены на Hire 2022</h1>
        </div>
      </div>
    </section>
  </footer>
</template>
<script>
export default {};
</script>
<style scoped>
footer {
  background-color: #fff;
  height: 100%;
  border-top: 2px solid #cdd1cd;
}

.footer {
  display: flex;
  /* justify-content: space-between; */
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

.li_3 {
  display: flex;
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

.box-1 {
  margin-right: auto;
}

.footer__rigth {
  display: flex;
  column-gap: 230px;
}

@media (max-width: 375px) {
  .nav-footer {
    margin: 0;
  }

  .nav-footer li {
    margin: 0;
    margin-bottom: 7px;
  }

  .nav-footer li a {
    margin: 0;
    font-size: 12px;
    line-height: 15px;
  }

  .deleted-in-mobile {
    display: none;
  }

  .footer__rigth {
    display: flex;
    flex-direction: column;
  }

  .footer {
    align-items: start;
    padding: 15px 0;
  }

  .footer_podval h1 {
    font-weight: 400;
    font-size: 12px;
    line-height: 15px;
  }

  .li_2 img {
    width: 20px;
    height: 20px;
  }
}
</style>
