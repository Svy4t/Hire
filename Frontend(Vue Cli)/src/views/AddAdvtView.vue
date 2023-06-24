<template>
  <div>
    <HeaderComp />

    <form v-on:submit.prevent="
      addAdvt(
        type_of_user,
        type_of_property,
        area,
        place_for_cars,
        year_of_construction,
        possession,
        header,
        floor,
        city,
        street,
        house,
        number_of_storeys,
        status,
        cost,
        bathroom,
        living_room,
        bedroom,
        kitchen,
        benefits,
        description,
        tel
      )
    ">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- 1 -->
          <div class="swiper-slide">
            <div class="addition">
              <div class="panel_with_buttons">
                <div class="foto_owner">
                  <img src="@/assets/Component36.png" alt="" />
                </div>
                <h1>Выберите свой тип</h1>
                <h2>
                  Детали надвижимости, которые появятся у пользователя, что
                  облегчит его поиск
                </h2>
                <div class="type_of">
                  <button type="submit" class="type_of_button type_of_button-color" href="">
                    <div class="circle_1">
                      <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.39844 0.902344V18H5.02344V4.79297L0.96875 6.08203V3.42188L8.03516 0.902344H8.39844Z"
                          fill="white" />
                      </svg>
                    </div>
                    Выбери свой тип
                  </button>
                </div>

                <div class="data_add">
                  <button type="submit" class="data_add_button data_add_button-color" href="">
                    <div class="circle">
                      <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12.8438 15.3633V18H1.17188V15.75L6.69141 9.83203C7.24609 9.21484 7.68359 8.67188 8.00391 8.20312C8.32422 7.72656 8.55469 7.30078 8.69531 6.92578C8.84375 6.54297 8.91797 6.17969 8.91797 5.83594C8.91797 5.32031 8.83203 4.87891 8.66016 4.51172C8.48828 4.13672 8.23438 3.84766 7.89844 3.64453C7.57031 3.44141 7.16406 3.33984 6.67969 3.33984C6.16406 3.33984 5.71875 3.46484 5.34375 3.71484C4.97656 3.96484 4.69531 4.3125 4.5 4.75781C4.3125 5.20312 4.21875 5.70703 4.21875 6.26953H0.832031C0.832031 5.25391 1.07422 4.32422 1.55859 3.48047C2.04297 2.62891 2.72656 1.95313 3.60938 1.45312C4.49219 0.945313 5.53906 0.691406 6.75 0.691406C7.94531 0.691406 8.95312 0.886719 9.77344 1.27734C10.6016 1.66016 11.2266 2.21484 11.6484 2.94141C12.0781 3.66016 12.293 4.51953 12.293 5.51953C12.293 6.08203 12.2031 6.63281 12.0234 7.17188C11.8438 7.70312 11.5859 8.23438 11.25 8.76562C10.9219 9.28906 10.5234 9.82031 10.0547 10.3594C9.58594 10.8984 9.06641 11.457 8.49609 12.0352L5.53125 15.3633H12.8438Z"
                          fill="black" />
                      </svg>
                    </div>
                    Данные о недвижимости
                  </button>
                </div>

                <div class="image">
                  <button type="submit" class="image_button image_button-color" href="">
                    <div class="circle">
                      <svg width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M4.62891 8.00391H6.43359C7.01172 8.00391 7.48828 7.90625 7.86328 7.71094C8.23828 7.50781 8.51562 7.22656 8.69531 6.86719C8.88281 6.5 8.97656 6.07422 8.97656 5.58984C8.97656 5.15234 8.89062 4.76562 8.71875 4.42969C8.55469 4.08594 8.30078 3.82031 7.95703 3.63281C7.61328 3.4375 7.17969 3.33984 6.65625 3.33984C6.24219 3.33984 5.85938 3.42188 5.50781 3.58594C5.15625 3.75 4.875 3.98047 4.66406 4.27734C4.45312 4.57422 4.34766 4.93359 4.34766 5.35547H0.960938C0.960938 4.41797 1.21094 3.60156 1.71094 2.90625C2.21875 2.21094 2.89844 1.66797 3.75 1.27734C4.60156 0.886719 5.53906 0.691406 6.5625 0.691406C7.71875 0.691406 8.73047 0.878906 9.59766 1.25391C10.4648 1.62109 11.1406 2.16406 11.625 2.88281C12.1094 3.60156 12.3516 4.49219 12.3516 5.55469C12.3516 6.09375 12.2266 6.61719 11.9766 7.125C11.7266 7.625 11.3672 8.07812 10.8984 8.48438C10.4375 8.88281 9.875 9.20312 9.21094 9.44531C8.54688 9.67969 7.80078 9.79688 6.97266 9.79688H4.62891V8.00391ZM4.62891 10.5703V8.82422H6.97266C7.90234 8.82422 8.71875 8.92969 9.42188 9.14062C10.125 9.35156 10.7148 9.65625 11.1914 10.0547C11.668 10.4453 12.0273 10.9102 12.2695 11.4492C12.5117 11.9805 12.6328 12.5703 12.6328 13.2188C12.6328 14.0156 12.4805 14.7266 12.1758 15.3516C11.8711 15.9688 11.4414 16.4922 10.8867 16.9219C10.3398 17.3516 9.69922 17.6797 8.96484 17.9062C8.23047 18.125 7.42969 18.2344 6.5625 18.2344C5.84375 18.2344 5.13672 18.1367 4.44141 17.9414C3.75391 17.7383 3.12891 17.4375 2.56641 17.0391C2.01172 16.6328 1.56641 16.125 1.23047 15.5156C0.902344 14.8984 0.738281 14.168 0.738281 13.3242H4.125C4.125 13.7617 4.23438 14.1523 4.45312 14.4961C4.67188 14.8398 4.97266 15.1094 5.35547 15.3047C5.74609 15.5 6.17969 15.5977 6.65625 15.5977C7.19531 15.5977 7.65625 15.5 8.03906 15.3047C8.42969 15.1016 8.72656 14.8203 8.92969 14.4609C9.14062 14.0938 9.24609 13.668 9.24609 13.1836C9.24609 12.5586 9.13281 12.0586 8.90625 11.6836C8.67969 11.3008 8.35547 11.0195 7.93359 10.8398C7.51172 10.6602 7.01172 10.5703 6.43359 10.5703H4.62891Z"
                          fill="black" />
                      </svg>
                    </div>
                    Изображения
                  </button>
                </div>

                <div class="info">
                  <button type="submit" class="info_button info_button-color" href="">
                    <div class="circle_4">
                      <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.125 11.625V14.2734H0.832031L0.667969 12.2227L7.78125 0.9375H10.4648L7.55859 5.80078L4.01953 11.625H13.125ZM11.1914 0.9375V18H7.81641V0.9375H11.1914Z"
                          fill="black" />
                      </svg>
                    </div>
                    Подробная информация
                  </button>
                </div>
              </div>
              <div class="data_to_add">
                <div class="property_information">
                  <img class="form__add-first" src="@/assets/form__add-first.png" alt="">
                  <h1>Выберите свой тип</h1>
                  <h2>
                    Детали недвижимости, которые появятся у пользователя,
                    что облегчит его поиск
                  </h2>
                  <h1 class="type-of-user">Тип пользователя</h1>
                  <select class="lect" v-model="type_of_user">
                    <option value="Посредник">Посредник</option>
                    <option value="Владелец">Владелец</option>
                  </select>
                  <h1 class="type-of-user">Тип недвижимости</h1>
                  <select class="lect_2" v-model="type_of_property">
                    <option value="Дом">Дом</option>
                    <option value="Квартира">Квартира</option>
                  </select>
                  <div class="next_step">
                    <button class="next_step_button next_step_button-color" href="">
                      Следующий шаг<svg width="31" height="24" viewBox="0 0 31 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 12L29.248 12M29.248 12L20.0615 2M29.248 12L20.0615 22" stroke="white"
                          stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 2 -->
          <div class="swiper-slide">
            <div class="addition">
              <div class="panel_with_buttons">
                <div class="foto_owner">
                  <img src="@/assets/Component36.png" alt="" />
                </div>
                <h1>Данные о недвижимости</h1>
                <h2>
                  Детали надвижимости, которые появятся у пользователя, что
                  облегчит его поиск
                </h2>

                <div class="type_of_1">
                  <button type="submit" class="type_of_1_button type_of_1_button-color" href="">
                    <div class="circle-galozka">
                      <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.2822 0.248347C25.0081 0.714987 25.2183 1.68172 24.7517 2.4076L10.6893 24.2824C10.4414 24.6679 10.0369 24.9252 9.58263 24.9861C9.12841 25.047 8.67034 24.9055 8.32969 24.5989L0.517252 17.5677C-0.124165 16.9904 -0.176162 16.0025 0.401113 15.3611C0.978388 14.7196 1.96633 14.6676 2.60775 15.2449L9.05431 21.0468L22.123 0.717751C22.5896 -0.00813401 23.5564 -0.218293 24.2822 0.248347Z"
                          fill="white" />
                      </svg>
                    </div>
                    Выбери свой тип
                  </button>
                </div>

                <div class="data_add-ramka">
                  <button type="submit" class="data_add-ramka_button data_add-ramka_button-color" href="">
                    <div class="circle_1">
                      <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12.8438 15.3633V18H1.17188V15.75L6.69141 9.83203C7.24609 9.21484 7.68359 8.67188 8.00391 8.20312C8.32422 7.72656 8.55469 7.30078 8.69531 6.92578C8.84375 6.54297 8.91797 6.17969 8.91797 5.83594C8.91797 5.32031 8.83203 4.87891 8.66016 4.51172C8.48828 4.13672 8.23438 3.84766 7.89844 3.64453C7.57031 3.44141 7.16406 3.33984 6.67969 3.33984C6.16406 3.33984 5.71875 3.46484 5.34375 3.71484C4.97656 3.96484 4.69531 4.3125 4.5 4.75781C4.3125 5.20312 4.21875 5.70703 4.21875 6.26953H0.832031C0.832031 5.25391 1.07422 4.32422 1.55859 3.48047C2.04297 2.62891 2.72656 1.95313 3.60938 1.45312C4.49219 0.945313 5.53906 0.691406 6.75 0.691406C7.94531 0.691406 8.95312 0.886719 9.77344 1.27734C10.6016 1.66016 11.2266 2.21484 11.6484 2.94141C12.0781 3.66016 12.293 4.51953 12.293 5.51953C12.293 6.08203 12.2031 6.63281 12.0234 7.17188C11.8438 7.70312 11.5859 8.23438 11.25 8.76562C10.9219 9.28906 10.5234 9.82031 10.0547 10.3594C9.58594 10.8984 9.06641 11.457 8.49609 12.0352L5.53125 15.3633H12.8438Z"
                          fill="white" />
                      </svg>
                    </div>
                    Данные о недвижимости
                  </button>
                </div>

                <div class="image">
                  <button type="submit" class="image_button image_button-color" href="">
                    <div class="circle">
                      <svg width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M4.62891 8.00391H6.43359C7.01172 8.00391 7.48828 7.90625 7.86328 7.71094C8.23828 7.50781 8.51562 7.22656 8.69531 6.86719C8.88281 6.5 8.97656 6.07422 8.97656 5.58984C8.97656 5.15234 8.89062 4.76562 8.71875 4.42969C8.55469 4.08594 8.30078 3.82031 7.95703 3.63281C7.61328 3.4375 7.17969 3.33984 6.65625 3.33984C6.24219 3.33984 5.85938 3.42188 5.50781 3.58594C5.15625 3.75 4.875 3.98047 4.66406 4.27734C4.45312 4.57422 4.34766 4.93359 4.34766 5.35547H0.960938C0.960938 4.41797 1.21094 3.60156 1.71094 2.90625C2.21875 2.21094 2.89844 1.66797 3.75 1.27734C4.60156 0.886719 5.53906 0.691406 6.5625 0.691406C7.71875 0.691406 8.73047 0.878906 9.59766 1.25391C10.4648 1.62109 11.1406 2.16406 11.625 2.88281C12.1094 3.60156 12.3516 4.49219 12.3516 5.55469C12.3516 6.09375 12.2266 6.61719 11.9766 7.125C11.7266 7.625 11.3672 8.07812 10.8984 8.48438C10.4375 8.88281 9.875 9.20312 9.21094 9.44531C8.54688 9.67969 7.80078 9.79688 6.97266 9.79688H4.62891V8.00391ZM4.62891 10.5703V8.82422H6.97266C7.90234 8.82422 8.71875 8.92969 9.42188 9.14062C10.125 9.35156 10.7148 9.65625 11.1914 10.0547C11.668 10.4453 12.0273 10.9102 12.2695 11.4492C12.5117 11.9805 12.6328 12.5703 12.6328 13.2188C12.6328 14.0156 12.4805 14.7266 12.1758 15.3516C11.8711 15.9688 11.4414 16.4922 10.8867 16.9219C10.3398 17.3516 9.69922 17.6797 8.96484 17.9062C8.23047 18.125 7.42969 18.2344 6.5625 18.2344C5.84375 18.2344 5.13672 18.1367 4.44141 17.9414C3.75391 17.7383 3.12891 17.4375 2.56641 17.0391C2.01172 16.6328 1.56641 16.125 1.23047 15.5156C0.902344 14.8984 0.738281 14.168 0.738281 13.3242H4.125C4.125 13.7617 4.23438 14.1523 4.45312 14.4961C4.67188 14.8398 4.97266 15.1094 5.35547 15.3047C5.74609 15.5 6.17969 15.5977 6.65625 15.5977C7.19531 15.5977 7.65625 15.5 8.03906 15.3047C8.42969 15.1016 8.72656 14.8203 8.92969 14.4609C9.14062 14.0938 9.24609 13.668 9.24609 13.1836C9.24609 12.5586 9.13281 12.0586 8.90625 11.6836C8.67969 11.3008 8.35547 11.0195 7.93359 10.8398C7.51172 10.6602 7.01172 10.5703 6.43359 10.5703H4.62891Z"
                          fill="black" />
                      </svg>
                    </div>
                    Изображения
                  </button>
                </div>

                <div class="info">
                  <button type="submit" class="info_button info_button-color" href="">
                    <div class="circle_4">
                      <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.125 11.625V14.2734H0.832031L0.667969 12.2227L7.78125 0.9375H10.4648L7.55859 5.80078L4.01953 11.625H13.125ZM11.1914 0.9375V18H7.81641V0.9375H11.1914Z"
                          fill="black" />
                      </svg>
                    </div>
                    Подробная информация
                  </button>
                </div>
              </div>
              <div class="data_to_add_1">
                <div class="property_information_1">
                  <img src="@/assets/form__add-second.png" alt="" class="form__add-second">
                  <h1>Основные данные о недвижимости</h1>
                  <h2>
                    Детали недвижимости, которые появятся у пользователя,
                    что облегчит его поиск
                  </h2>
                  <h3>Расположение</h3>
                  <div class="location">
                    <input class="input_1" type="text" placeholder="Город" v-model="city" />
                    <input class="input_2" type="text" placeholder="Улица" v-model="street" />
                    <input class="input_3" type="text" placeholder="Дом" v-model="house" />
                  </div>
                  <div class="parameter">
                    <div class="appointment">
                      <p>Этажность</p>
                      <input class="entry_field" type="text" v-model="number_of_storeys" />
                    </div>
                    <div class="appointment">
                      <p>Статус</p>
                      <select class="entry_field" v-model="status">
                        <option value="Продажа">Продажа</option>
                        <option value="Аренда">Аренда</option>
                      </select>
                    </div>
                  </div>
                  <div class="parameter">
                    <div class="appointment">
                      <p>Площадь</p>
                      <input class="entry_field" type="text" v-model="area" />
                    </div>
                    <div class="appointment">
                      <p>Гараж/парковка</p>
                      <select class="entry_field" v-model="place_for_cars">
                        <option value="Гараж">Гараж</option>
                        <option value="Парковка">Парковка</option>
                      </select>
                    </div>
                  </div>
                  <div class="parameter">
                    <div class="appointment">
                      <p>Год постройки</p>
                      <input class="entry_field" type="text" v-model="year_of_construction" />
                    </div>
                    <div class="appointment">
                      <p>Собственность</p>
                      <select class="entry_field-3" v-model="possession">
                        <option value="Владелец">Владелец</option>
                        <option value="Распорядитель">Распорядитель</option>
                      </select>
                    </div>
                  </div>
                  <div class="parameter">
                    <div class="appointment">
                      <p>Заголовок</p>
                      <input class="entry_field_1" type="text" v-model="header" />
                    </div>
                  </div>
                  <div class="form_buttom">
                    <button class="transitions_button_1 transitions_button_1-color prev_step_button">
                      <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.748 12L2.00001 12M2.00001 12L11.1866 22M2.00001 12L11.1866 2" stroke="white"
                          stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>Вернуться назад
                    </button>
                    <button class="transitions_button transitions_button-color next_step_button">
                      Следующий шаг<svg width="31" height="24" viewBox="0 0 31 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 12L29.248 12M29.248 12L20.0615 2M29.248 12L20.0615 22" stroke="white"
                          stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 3 -->
          <div class="swiper-slide" data-slide="3">
            <div class="addition">
              <div class="panel_with_buttons">
                <div class="foto_owner">
                  <img src="@/assets/Component36.png" alt="" />
                </div>
                <h1>Данные о недвижимости</h1>
                <h2>
                  Детали надвижимости, которые появятся у пользователя, что
                  облегчит его поиск
                </h2>

                <div class="type_of_1">
                  <button type="submit" class="type_of_1_button type_of_1_button-color" href="">
                    <div class="circle-galozka">
                      <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.2822 0.248347C25.0081 0.714987 25.2183 1.68172 24.7517 2.4076L10.6893 24.2824C10.4414 24.6679 10.0369 24.9252 9.58263 24.9861C9.12841 25.047 8.67034 24.9055 8.32969 24.5989L0.517252 17.5677C-0.124165 16.9904 -0.176162 16.0025 0.401113 15.3611C0.978388 14.7196 1.96633 14.6676 2.60775 15.2449L9.05431 21.0468L22.123 0.717751C22.5896 -0.00813401 23.5564 -0.218293 24.2822 0.248347Z"
                          fill="white" />
                      </svg>
                    </div>
                    Выбери свой тип
                  </button>
                </div>

                <div class="data_add_1">
                  <button type="submit" class="data_add_1_button data_add_1_button-color" href="">
                    <div class="circle-galozka">
                      <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.2822 0.248347C25.0081 0.714987 25.2183 1.68172 24.7517 2.4076L10.6893 24.2824C10.4414 24.6679 10.0369 24.9252 9.58263 24.9861C9.12841 25.047 8.67034 24.9055 8.32969 24.5989L0.517252 17.5677C-0.124165 16.9904 -0.176162 16.0025 0.401113 15.3611C0.978388 14.7196 1.96633 14.6676 2.60775 15.2449L9.05431 21.0468L22.123 0.717751C22.5896 -0.00813401 23.5564 -0.218293 24.2822 0.248347Z"
                          fill="white" />
                      </svg>
                    </div>
                    Данные о недвижимости
                  </button>
                </div>

                <div class="image-ramka">
                  <button type="submit" class="image-ramka_button image-ramka_button-color" href="">
                    <div class="circle_1">
                      <svg width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M4.62891 8.00391H6.43359C7.01172 8.00391 7.48828 7.90625 7.86328 7.71094C8.23828 7.50781 8.51562 7.22656 8.69531 6.86719C8.88281 6.5 8.97656 6.07422 8.97656 5.58984C8.97656 5.15234 8.89062 4.76562 8.71875 4.42969C8.55469 4.08594 8.30078 3.82031 7.95703 3.63281C7.61328 3.4375 7.17969 3.33984 6.65625 3.33984C6.24219 3.33984 5.85938 3.42188 5.50781 3.58594C5.15625 3.75 4.875 3.98047 4.66406 4.27734C4.45312 4.57422 4.34766 4.93359 4.34766 5.35547H0.960938C0.960938 4.41797 1.21094 3.60156 1.71094 2.90625C2.21875 2.21094 2.89844 1.66797 3.75 1.27734C4.60156 0.886719 5.53906 0.691406 6.5625 0.691406C7.71875 0.691406 8.73047 0.878906 9.59766 1.25391C10.4648 1.62109 11.1406 2.16406 11.625 2.88281C12.1094 3.60156 12.3516 4.49219 12.3516 5.55469C12.3516 6.09375 12.2266 6.61719 11.9766 7.125C11.7266 7.625 11.3672 8.07812 10.8984 8.48438C10.4375 8.88281 9.875 9.20312 9.21094 9.44531C8.54688 9.67969 7.80078 9.79688 6.97266 9.79688H4.62891V8.00391ZM4.62891 10.5703V8.82422H6.97266C7.90234 8.82422 8.71875 8.92969 9.42188 9.14062C10.125 9.35156 10.7148 9.65625 11.1914 10.0547C11.668 10.4453 12.0273 10.9102 12.2695 11.4492C12.5117 11.9805 12.6328 12.5703 12.6328 13.2188C12.6328 14.0156 12.4805 14.7266 12.1758 15.3516C11.8711 15.9688 11.4414 16.4922 10.8867 16.9219C10.3398 17.3516 9.69922 17.6797 8.96484 17.9062C8.23047 18.125 7.42969 18.2344 6.5625 18.2344C5.84375 18.2344 5.13672 18.1367 4.44141 17.9414C3.75391 17.7383 3.12891 17.4375 2.56641 17.0391C2.01172 16.6328 1.56641 16.125 1.23047 15.5156C0.902344 14.8984 0.738281 14.168 0.738281 13.3242H4.125C4.125 13.7617 4.23438 14.1523 4.45312 14.4961C4.67188 14.8398 4.97266 15.1094 5.35547 15.3047C5.74609 15.5 6.17969 15.5977 6.65625 15.5977C7.19531 15.5977 7.65625 15.5 8.03906 15.3047C8.42969 15.1016 8.72656 14.8203 8.92969 14.4609C9.14062 14.0938 9.24609 13.668 9.24609 13.1836C9.24609 12.5586 9.13281 12.0586 8.90625 11.6836C8.67969 11.3008 8.35547 11.0195 7.93359 10.8398C7.51172 10.6602 7.01172 10.5703 6.43359 10.5703H4.62891Z"
                          fill="white" />
                      </svg>
                    </div>
                    Изображения
                  </button>
                </div>

                <div class="info">
                  <button type="submit" class="info_button info_button-color" href="">
                    <div class="circle_4">
                      <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.125 11.625V14.2734H0.832031L0.667969 12.2227L7.78125 0.9375H10.4648L7.55859 5.80078L4.01953 11.625H13.125ZM11.1914 0.9375V18H7.81641V0.9375H11.1914Z"
                          fill="black" />
                      </svg>
                    </div>
                    Подробная информация
                  </button>
                </div>
              </div>
              <div class="data_to_add_2">
                <div class="property_information_1">
                  <img src="@/assets/form__add-third.png" alt="" class="form__add-third">
                  <h1>Изображения недвижимости</h1>
                  <h2>
                    Детали недвижимости, которые появятся у пользователя,
                    что облегчит его поиск
                  </h2>
                  <h4>Фотографии изнутри и снаружи</h4>
                  <h5>
                    Фотографии недвижимости, которые появятся у пользователя
                    (пожалуйста, добавьте достаточное количество фотографий,
                    минимум 3)
                  </h5>
                  <div class="parameter">
                    <div class="appointment">
                      <input class="input-file" type="file" id="file" ref="photos" v-on:change="handlefileUpload()"
                        data-multiple-caption="{count} files selected" multiple />
                      <label class="label-for-input-file" for="file">
                        <div class="wrapper_label-input-file">
                          <div class="content__label-input-file">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M19.9997 25.3333V33.3333M19.9997 25.3333L22.6663 27.9999M19.9997 25.3333L17.333 27.9999"
                                stroke="#00D39C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                d="M33.3337 21.8039C33.3337 24.9278 31.4087 27.6073 28.667 28.7472M23.1749 14.7029C23.9693 14.4255 24.8241 14.2745 25.7146 14.2745C26.5875 14.2745 27.4261 14.4196 28.2071 14.6866M13.4885 18.1452C13.1303 18.0756 12.7601 18.0392 12.3813 18.0392C9.22536 18.0392 6.66699 20.5675 6.66699 23.6863C6.66699 26.2148 8.34865 28.3552 10.667 29.0748M13.4885 18.1452C13.1831 17.3304 13.0162 16.4492 13.0162 15.5294C13.0162 11.371 16.4274 8 20.6352 8C24.5548 8 27.7831 10.9249 28.2071 14.6866M13.4885 18.1452C14.2411 18.2912 14.9407 18.5832 15.5559 18.9901M28.2071 14.6866C29.3931 15.0922 30.4463 15.7791 31.2848 16.6667"
                                stroke="#00D39C" stroke-width="2.5" stroke-linecap="round" />
                            </svg>
                            <span class="wrapper_label-input-file-text">
                              загрузить фотографии
                            </span>
                          </div>
                        </div>
                      </label>
                    </div>
                  </div>
                  <div class="form_buttom">
                    <button type="submit" class="transitions_button_1 transitions_button_1-color prev_step_button"
                      href="">
                      <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.748 12L2.00001 12M2.00001 12L11.1866 22M2.00001 12L11.1866 2" stroke="white"
                          stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>Вернуться назад
                    </button>
                    <button type="submit" class="transitions_button transitions_button-color next_step_button" href="">
                      Следующий шаг<svg width="31" height="24" viewBox="0 0 31 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 12L29.248 12M29.248 12L20.0615 2M29.248 12L20.0615 22" stroke="white"
                          stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 4 -->
          <div class="swiper-slide">
            <div class="addition">
              <div class="panel_with_buttons">
                <div class="foto_owner">
                  <img src="@/assets/Component36.png" alt="" />
                </div>
                <h1>Данные о недвижимости</h1>
                <h2>
                  Детали надвижимости, которые появятся у пользователя, что
                  облегчит его поиск
                </h2>

                <div class="type_of_1">
                  <button type="submit" class="type_of_1_button type_of_1_button-color" href="">
                    <div class="circle-galozka">
                      <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.2822 0.248347C25.0081 0.714987 25.2183 1.68172 24.7517 2.4076L10.6893 24.2824C10.4414 24.6679 10.0369 24.9252 9.58263 24.9861C9.12841 25.047 8.67034 24.9055 8.32969 24.5989L0.517252 17.5677C-0.124165 16.9904 -0.176162 16.0025 0.401113 15.3611C0.978388 14.7196 1.96633 14.6676 2.60775 15.2449L9.05431 21.0468L22.123 0.717751C22.5896 -0.00813401 23.5564 -0.218293 24.2822 0.248347Z"
                          fill="white" />
                      </svg>
                    </div>
                    Выбери свой тип
                  </button>
                </div>

                <div class="data_add_1">
                  <button type="submit" class="data_add_1_button data_add_1_button-color" href="">
                    <div class="circle-galozka">
                      <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.2822 0.248347C25.0081 0.714987 25.2183 1.68172 24.7517 2.4076L10.6893 24.2824C10.4414 24.6679 10.0369 24.9252 9.58263 24.9861C9.12841 25.047 8.67034 24.9055 8.32969 24.5989L0.517252 17.5677C-0.124165 16.9904 -0.176162 16.0025 0.401113 15.3611C0.978388 14.7196 1.96633 14.6676 2.60775 15.2449L9.05431 21.0468L22.123 0.717751C22.5896 -0.00813401 23.5564 -0.218293 24.2822 0.248347Z"
                          fill="white" />
                      </svg>
                    </div>
                    Данные о недвижимости
                  </button>
                </div>

                <div class="image_1">
                  <button type="submit" class="image_1_button image_1_button-color" href="">
                    <div class="circle-galozka">
                      <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M24.2822 0.248347C25.0081 0.714987 25.2183 1.68172 24.7517 2.4076L10.6893 24.2824C10.4414 24.6679 10.0369 24.9252 9.58263 24.9861C9.12841 25.047 8.67034 24.9055 8.32969 24.5989L0.517252 17.5677C-0.124165 16.9904 -0.176162 16.0025 0.401113 15.3611C0.978388 14.7196 1.96633 14.6676 2.60775 15.2449L9.05431 21.0468L22.123 0.717751C22.5896 -0.00813401 23.5564 -0.218293 24.2822 0.248347Z"
                          fill="white" />
                      </svg>
                    </div>
                    Изображения
                  </button>
                </div>

                <div class="info-ramka">
                  <button type="submit" class="info-ramka_button info-ramka_button-color" href="">
                    <div class="circle_5">
                      <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.125 11.625V14.2734H0.832031L0.667969 12.2227L7.78125 0.9375H10.4648L7.55859 5.80078L4.01953 11.625H13.125ZM11.1914 0.9375V18H7.81641V0.9375H11.1914Z"
                          fill="white" />
                      </svg>
                    </div>
                    Подробная информация
                  </button>
                </div>
              </div>
              <div class="data_to_add_1">
                <div class="property_information_1">
                  <img src="@/assets/form__add-fourth.png" alt="" class="form__add-fourth">
                  <h1 class="property_information_1-h1">
                    Основные данные о недвижимости
                  </h1>
                  <h2 class="property_information_1-h2">
                    Детали недвижимости, которые появятся у пользователя,
                    что облегчит его поиск
                  </h2>
                  <h3 class="property_information_1-h3">
                    1 - Основная информация
                  </h3>
                  <div class="appointment_2">
                    <div class="appointment_1">
                      <p>Этаж</p>
                      <input class="floor__input" type="number" min="1" v-model="floor" />
                    </div>
                    <div class="appointment_1">
                      <p>Ванная</p>
                      <input class="bathroom__input" type="number" min="1" v-model="bathroom" />
                    </div>
                    <div class="appointment_1">
                      <p>Спальная</p>
                      <input class="bedroom__input" type="number" min="1" v-model="bedroom" />
                    </div>
                  </div>
                  <div class="parameter_1">
                    <div class="appointment_3">
                      <div class="appointment_1">
                        <p>Гостиная</p>
                        <input class="livingroom__input" type="number" min="1" v-model="living_room" />
                      </div>
                      <div class="appointment_1">
                        <p>Кухня</p>
                        <input class="kitchen__input" type="number" min="1" v-model="kitchen" />
                      </div>
                    </div>
                  </div>
                  <h3 class="property_information_1-h3">2 - Преимущества</h3>
                  <div class="checkboxs">
                    <p>
                      <input type="checkbox" id="household_appliances" v-model="benefits"
                        value="Бытовая техника" />Бытовая техника
                    </p>
                    <p>
                      <input type="checkbox" id="wardrobe" v-model="benefits" value="Гардероб" />Гардероб
                    </p>
                    <p>
                      <input type="checkbox" id="lift" v-model="benefits" value="Лифт" />Лифт
                    </p>
                    <p>
                      <input type="checkbox" id="parking" v-model="benefits" value="Парковка" />Парковка
                    </p>
                  </div>
                  <div class="checkboxs_2">
                    <p>
                      <input type="checkbox" id="closed_area" v-model="benefits" value="Закрытая территория" />Закрытая
                      территория
                    </p>
                    <p>
                      <input type="checkbox" id="childrens_playground" v-model="benefits"
                        value="Детская площадка" />Детская площадка
                    </p>
                  </div>
                  <div class="parameter">
                    <div class="textarea">
                      <h3 class="property_information_1-h3">3 - Описание</h3>
                      <textarea placeholder="" name="" v-model="description"></textarea>
                    </div>
                  </div>
                  <div class="two_button">
                    <input class="input-nomer" type="" placeholder="Номер телефона" v-model="tel" />
                    <div class="sum">
                      <p>Цена</p>
                      <input class="input-size" type="" placeholder="" v-model="cost" />
                    </div>
                  </div>
                  <div class="form_buttom">
                    <button class="transitions_button_1 transitions_button_1-color prev_step_button button-mobile-none"
                      href="">
                      <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.748 12L2.00001 12M2.00001 12L11.1866 22M2.00001 12L11.1866 2" stroke="white"
                          stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      Вернуться назад
                    </button>
                    <button class="transitions_button_1 transitions_button_1-color prev_step_button button-mobile"
                      href="">
                      <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.748 12L2.00001 12M2.00001 12L11.1866 22M2.00001 12L11.1866 2" stroke="white"
                          stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </button>
                    <button class="transitions_button transitions_button-color btn-add" href="">
                      Добавить недвижимость
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!-- <FooterComp /> -->
  </div>
</template>

<script>
import axios from "axios";
import Swiper, {
  Navigation
} from "swiper";

import "swiper/css";
import "swiper/css/navigation";

// import FooterComp from "@/components/FooterComp.vue";
import HeaderComp from "@/components/HeaderComp.vue";

export default {
  components: {
    HeaderComp,
    // FooterComp
  },
  data() {
    return {
      user: [],
      id: localStorage.getItem("id"),
      token: localStorage.getItem("token"),
      type_of_user: "",
      type_of_property: "",
      area: "",
      place_for_cars: "",
      year_of_construction: "",
      possession: "",
      header: "",
      floor: "",
      city: "",
      street: "",
      house: "",
      number_of_storeys: "",
      status: "",
      cost: "",
      bathroom: "",
      living_room: "",
      bedroom: "",
      kitchen: "",
      benefits: [],
      description: "",
      tel: "",
      photos: "",
    };
  },
  mounted() {
    new Swiper(".swiper", {
      modules: [Navigation],
      // Optional parameters
      direction: "horizontal",
      loop: true,
      speed: 1,
      simulateTouch: false,
      // slidesPerView: 3,
      // Navigation arrows
      navigation: {
        nextEl: ".next_step_button",
        prevEl: ".prev_step_button",
      },
    });
    var inputs = document.querySelectorAll(".input-file");
    Array.prototype.forEach.call(inputs, function (input) {
      var label = input.nextElementSibling, labelVal = label.innerHTML;
      input.addEventListener("change", function (e) {
        var fileName = "";
        if (this.files && this.files.length > 1)
          fileName = (this.getAttribute("data-multiple-caption") || "").replace("{count}", this.files.length);
        else
          fileName = e.target.value.split("'").pop();
        if (fileName)
          label.querySelector(".wrapper_label-input-file-text").innerHTML =
            fileName;
        else
          label.innerHTML = labelVal;
      });
    });
  },
  methods: {
    addAdvt(type_of_user, type_of_property, area, place_for_cars, year_of_construction, possession, header, floor, city, street, house, number_of_storeys, status, cost, bathroom, living_room, bedroom, kitchen, benefits, description, tel) {
      // console.log(type_of_user, type_of_property, area, place_for_cars, year_of_constuction, possession, header, floor, city, street, house, number_of_storeys, status, cost, bathroom, living_room, bedroom, kitchen, benefits, description, tel);
      let newBenefits = "";
      benefits.forEach((el, index) => {
        newBenefits += el;
        if (index <= benefits.length - 1)
          newBenefits += ",";
      });
      axios
        .post("http://127.0.0.1:8000/api/addAdvt", {
          user_id: this.id,
          type_of_user: type_of_user,
          type_of_property: type_of_property,
          place_for_cars: place_for_cars,
          year_of_construction: year_of_construction,
          possession: possession,
          floor: floor,
          address: city + ", " + street + ", " + house,
          number_of_storeys: number_of_storeys,
          status: status,
          bathroom: bathroom,
          living_room: living_room,
          bedroom: bedroom,
          kitchen: kitchen,
          benefits: newBenefits,
          tel: tel,
          header: header,
          description: description,
          type: status,
          area: area,
          cost: Number(cost),
        })
        .then((response) => {
          console.log(response.data);
          let formData = new FormData();
          for (let i = 0; i < this.photos.length; i++) {
            formData.append(`photo${i + 1}`, this.photos[i]);
          }
          // formData.append(`photo${i + 1}`, this.photos);
          formData.append("count", this.photos.length);
          formData.append("advt_id", response.data.id);
          axios
            .post("http://127.0.0.1:8000/api/storePhotos", formData, {
              "Content-type": "multipart/form-data",
            })
            .then((response) => {
              console.log(response.data);
            })
            .catch((error) => {
              console.log(error.response);
            });
          // location.reload();
          this.$router.push("/");
        })
        .catch((error) => {
          console.log(error);
        });
    },
    handlefileUpload() {
      this.photos = this.$refs.photos.files;
      console.log(this.photos);
    },
  },
};
</script>

<style scoped>
.kitchen__input,
.bathroom__input,
.floor__input,
.bedroom__input,
.livingroom__input {
  box-sizing: border-box;
  padding: 0px;
  width: 120px;
  height: 34px;
  padding-left: 10px;
  border: 1px solid #cdd1cd;
  border-radius: 5px;
  color: #000;
}

.input-file {
  position: absolute;
  overflow: hidden;
  z-index: -1;
}

.label-for-input-file {
  position: relative;
  display: inline-block;
  width: 763px;
  height: 283px;
  background-color: #fff;
  border: 2px dashed #cdd1cd;
  border-radius: 5px;
  cursor: pointer;
}

.wrapper_label-input-file {
  box-sizing: border-box;
  min-width: 300px;
  position: absolute;
  left: calc(50% - 150px);
  top: calc(50% - 27px);
  background: #e5f9f4;
  border-radius: 5px;
  padding: 7px 19px;
  display: flex;
  justify-content: center;
}

.content__label-input-file {
  display: flex;
  align-items: center;
}

.wrapper_label-input-file-text {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #00d39c;
}

.swiper-slide[data-swiper-slide-index="3"] .form_buttom {
  width: 857px;
}

.swiper-slide[data-swiper-slide-index="3"] .property_information_1 {
  padding-top: 50px;
}

.swiper-slide[data-swiper-slide-index="1"] .property_information_1 {
  max-width: 710px;
}

.swiper-slide[data-swiper-slide-index="2"] .property_information_1 h5 {
  margin-bottom: 27px;
}

.swiper-slide[data-swiper-slide-index="2"] .property_information_1 h2 {
  margin: 0;
  margin-bottom: 50px;
}

.swiper-slide[data-swiper-slide-index="2"] .property_information_1 h4 {
  margin-bottom: 10px;
}

.header-top {
  margin-bottom: 0px !important;
}

.swiper {
  width: 100%;
  height: 873px;
}

input {
  position: relative;
  width: auto;
  height: auto;
  left: auto;
  background: white;
  border: 1px solid black;
}

form {
  width: auto;
  height: auto;
  margin: 0;
}

button {
  position: relative;
  background: white;
  height: auto;
  width: auto;
  cursor: pointer;
}

.cards {
  display: flex;
  flex-direction: column;
  gap: 70px 30px;
}

.addition {
  display: flex;
}

.panel_with_buttons {
  padding-top: 25px;
  background-color: #fff;
  width: 40%;
  height: 873px;
}

.foto_owner {
  display: flex;
  justify-content: center;
}

.foto_owner img {
  width: 400px;
  height: 200px;
}

.panel_with_buttons h1 {
  text-align: center;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  color: #000000;
}

.panel_with_buttons h2 {
  text-align: center;
  padding-left: 116px;
  padding-right: 116px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  text-align: center;
  color: #000000;
  margin-bottom: 60px;
}

.type_of {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.type_of_button {
  display: flex;
  align-items: center;
  padding: 15px 116px 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.type_of_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  border: 2px solid #000000;
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.type_of_button svg {
  margin-right: 10px;
}

.data_add {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.data_add_button {
  display: flex;
  align-items: center;
  padding: 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.data_add_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  border: 2px solid rgba(205, 209, 205, 0.5);
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.data_add_button svg {
  margin-right: 10px;
}

.image {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.image_button {
  display: flex;
  align-items: center;
  padding: 15px 150px 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.image_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  border: 2px solid rgba(205, 209, 205, 0.5);
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.image_button svg {
  margin-right: 10px;
}

.info {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.info_button {
  display: flex;
  align-items: center;
  padding: 15px 30px 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.info_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  border: 2px solid rgba(205, 209, 205, 0.5);
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.info_button svg {
  margin-right: 0px;
  margin-top: 5px;
}

.circle {
  width: 35px;
  height: 35px;
  background: rgba(205, 209, 205, 0.41);
  border-radius: 100%;
  border: none;
  margin-right: 15px;
}

.circle svg {
  padding-top: 7px;
  padding-left: 7px;
}

.circle_1 {
  width: 35px;
  height: 35px;
  background: #000000;
  border-radius: 100%;
  border: none;
  margin-right: 15px;
}

.circle_1 svg {
  padding-top: 7px;
  padding-left: 7px;
}

.circle_4 {
  width: 35px;
  height: 35px;
  background: rgba(205, 209, 205, 0.41);
  border-radius: 100%;
  border: none;
  margin-right: 15px;
}

.circle_4 svg {
  padding-top: 3px;
  padding-left: 0px;
}

/* ВТОРОЙ БЛОК */
.data_to_add {
  padding-top: 50px;
  background-color: #e5f9f4;
  width: 60%;
}

.property_information {
  padding-left: 170px;
  padding-top: 70px;
}

.data_to_add h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  color: #000000;
  margin-bottom: 10px;
}

.data_to_add h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  margin-bottom: 64px;
}

.tip {
  display: flex;
  flex-direction: column;
  gap: 20px 20px;
  width: 500px;
}

.tip h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
  margin-bottom: 5px;
}

.lect {
  width: 705px;
  height: 50px;
  margin-bottom: 40px;
  background-color: #fff;
  border-radius: 5px;
  border: 2px solid #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 28px;
  background-image: url("@/assets/hape.svg");
  background-position: 14px 8px;
  background-repeat: no-repeat;
  padding-left: 55px;
}

.lect_2 {
  width: 705px;
  height: 50px;
  margin-bottom: 70px;
  background-color: #fff;
  border-radius: 5px;
  border: 2px solid #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 28px;
  background-image: url("@/assets/house.svg");
  background-position: 12px 8px;
  background-repeat: no-repeat;
  padding-left: 55px;
}

.next_step {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  width: 705px;
}

.next_step_button {
  display: flex;
  align-items: center;
  padding: 20px 25px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
  margin-top: 20px;
}

.next_step_button-color {
  color: #000000;
  background-color: #00d39c;
  border: none;
  border-radius: 5px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 22px;
  line-height: 28px;
  color: #ffffff;
}

.next_step_button svg {
  margin-left: 20px;
}

/* СТРАНИЦА 2 */

/* БЛОК ПЕРВЫЙ */

.type_of_1 {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.type_of_1_button {
  display: flex;
  align-items: center;
  padding: 15px 116px 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.type_of_1_button-color {
  color: #000000;
  font-family: "Roboto";
  background: linear-gradient(180deg, #9cffe5 0%, rgba(255, 255, 255, 0) 100%);
  border: 2px solid #00d39c;
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.type-of-user {
  font-weight: 700;
  font-size: 24px !important;
  line-height: 28px !important;
}

.type_of_1_button svg {
  margin-right: 10px;
}

.circle-galozka {
  width: 35px;
  height: 35px;
  background: #00d39c;
  border-radius: 100%;
  border: none;
  margin-right: 15px;
}

.circle-galozka svg {
  padding-top: 7px;
  padding-left: 7px;
}

.data_add-ramka {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.data_add-ramka_button {
  display: flex;
  align-items: center;
  padding: 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.data_add-ramka_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  border: 2px solid #000000;
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.data_add-ramka_button svg {
  margin-right: 10px;
}

/* КОНЕЦ ПЕРВОГО БЛОКА  */

.data_to_add_1 {
  background-color: #e5f9f4;
  width: 60%;
}

.data_to_add_1 .form_buttom {
  width: 710px;
}

.property_information_1 {
  padding-top: 20px;
  max-width: 857px;
  margin: 0 auto;
}

.property_information_1-h1 {
  margin: 0;
  margin-bottom: 10px;
}

.property_information_1-h2 {
  margin: 0;
  margin-bottom: 20px;
}

.property_information_1-h3 {
  margin: 0;
  margin-bottom: 15px;
}

.data_to_add_1 h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  color: #000000;
  margin-bottom: 10px;
}

.data_to_add_1 h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  margin-bottom: 14px;
}

.data_to_add_1 h3 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.forms {
  width: 710px;
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

.location {
  display: flex;
  gap: 10px 20px;
}

.input_1 {
  outline: none;
  border: none;
  border-radius: 5px;
  background: #c2efe4;
  display: block;
  padding: 12px 4px 12px 17px;
  margin-bottom: 25px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 23px;
  color: #000000;
}

.input_1::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.input_2 {
  outline: none;
  border: none;
  border-radius: 5px;
  background: #c2efe4;
  display: block;
  padding: 12px 4px 12px 17px;
  margin-bottom: 25px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 23px;
  color: #000000;
}

.input_2::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.input_3 {
  outline: none;
  border: none;
  border-radius: 5px;
  background: #c2efe4;
  display: block;
  padding: 12px 4px 12px 17px;
  margin-bottom: 25px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 23px;
  color: #000000;
}

.input_3::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
}

.input_1,
.input_2,
.input_3 {
  width: 223px;
  padding: 12px 4px 12px 13px;
}

.form_buttom {
  width: 763px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.parameter {
  display: flex;
  justify-content: space-between;
  gap: 10px 30px;
}

.appointment p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
  margin: 0;
  margin-bottom: 5px;
}

.entry_field {
  box-sizing: border-box;
  width: 340px;
  outline: none;
  border: none;
  border-radius: 5px;
  background: #fff;
  border: 1px solid #cdd1cd;
  padding: 12px 113px 12px 22px;
  margin-bottom: 25px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 23px;
  color: #000000;
}

.entry_field_1 {
  outline: none;
  border: none;
  border-radius: 5px;
  background: #fff;
  border: 1px solid #cdd1cd;
  padding: 12px 80px 12px 22px;
  margin-bottom: 25px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 23px;
  color: #000000;
}

.entry_field-3 {
  width: 340px;
  outline: none;
  border: none;
  border-radius: 5px;
  background: #fff;
  border: 1px solid #cdd1cd;
  padding: 12px 180px 12px 22px;
  margin-bottom: 25px;
  /* font-family: 'Roboto'; */
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 23px;
  color: #000000;
}

.transitions_button {
  display: flex;
  align-items: center;
  padding: 20px 25px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
  margin-top: 20px;
}

.transitions_button-color {
  color: #000000;
  background-color: #00d39c;
  border: none;
  border-radius: 5px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 22px;
  line-height: 28px;
  color: #ffffff;
}

.transitions_button svg {
  margin-left: 20px;
}

.transitions_button_1 {
  display: flex;
  align-items: center;
  padding: 20px 25px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
  margin-top: 20px;
}

.transitions_button_1-color {
  color: #000000;
  background-color: #00d39c;
  border: none;
  border-radius: 5px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 22px;
  line-height: 28px;
  color: #ffffff;
}

.transitions_button_1 svg {
  margin-right: 20px;
}

/* СТРАНИЦА 3 */

/* БЛОК ПЕРВЫЙ */
.data_add_1 {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.data_add_1_button {
  display: flex;
  align-items: center;
  padding: 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.data_add_1_button-color {
  color: #000000;

  font-family: "Roboto";
  background: linear-gradient(180deg, #9cffe5 0%, rgba(255, 255, 255, 0) 100%);
  border: 2px solid #00d39c;
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.data_add_1_button svg {
  margin-right: 10px;
}

.image-ramka {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.image-ramka_button {
  display: flex;
  align-items: center;
  padding: 15px 150px 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.image-ramka_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  border: 2px solid #000000;
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.image-ramka_button svg {
  margin-right: 10px;
}

/* КОНЕЦ ПЕРОВОГО БЛОКА */

.property_information_1 h4 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
  margin: 0;
}

.property_information_1 h5 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  margin: 0;
}

.data_to_add_2 {
  padding-top: 50px;
  background-color: #e5f9f4;
  width: 60%;
}

.data_to_add_2 h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 40px;
  line-height: 47px;
  color: #000000;
  margin: 0;
  margin-bottom: 10px;
}

.data_to_add_2 h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  margin-bottom: 14px;
}

/* СТРАНИЦА 4 */

.image_1 {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.image_1_button {
  display: flex;
  align-items: center;
  padding: 15px 150px 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.image_1_button-color {
  color: #000000;
  font-family: "Roboto";
  background: linear-gradient(180deg, #9cffe5 0%, rgba(255, 255, 255, 0) 100%);
  border: 2px solid #00d39c;
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.image_1_button svg {
  margin-right: 10px;
}

.info-ramka {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.info-ramka_button {
  display: flex;
  align-items: center;
  padding: 15px 30px 15px 20px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.info-ramka_button-color {
  color: #000000;
  background-color: #fff;
  font-family: "Roboto";
  border: 2px solid #000000;
  border-radius: 5px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
}

.info-ramka_button svg {
  margin-right: 0px;
  margin-top: 5px;
}

.circle_5 {
  width: 35px;
  height: 35px;
  background: #000000;
  border-radius: 100%;
  border: none;
  margin-right: 15px;
}

.circle_5 svg {
  padding-top: 3px;
  padding-left: 0px;
}

.appointment_2 {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: row;
  margin-bottom: 15px;
}

.appointment_3 {
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  flex-direction: row;
}

.appointment_1 {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 220px;
}

.appointment_1 p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 25px;
  color: #000000;
  margin: 0;
}

.select {
  width: 100px;
  height: 30px;
  background-color: #fff;
  border: none;
  font-family: "Roboto";
}

.appointment_2 {
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
}

.appointment_2 p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 25px;
  color: #000000;
}

.checkboxs {
  display: flex;
  flex-direction: row;
}

.checkboxs p {
  width: 25%;
  display: flex;
  align-items: center;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  gap: 0 5px;
  margin: 0;
}

.checkboxs input {
  width: 20px;
  height: 20px;
  border: 1px solid #cdd1cd;
}

.checkboxs_2 {
  display: flex;
  flex-direction: row;
  gap: 10px 19px;
}

.checkboxs_2 p {
  display: flex;
  align-items: center;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  gap: 0 5px;
}

.checkboxs_2 input {
  width: 20px;
  height: 20px;
  border: 1px solid #cdd1cd;
}

.textarea {
  width: 856px;
}

textarea {
  box-sizing: border-box;
  height: 100px;
  width: 100%;
  border: 1px solid #cdd1cd;
  border-radius: 5px;
  font-size: 16px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  background-color: #fff;
  padding: 15px;
  margin-bottom: 40px;
  resize: none;
  outline: none;
}

.two_button {
  display: flex;
  justify-content: space-between;
}

.sum {
  display: flex;
  align-items: center;
}

.sum p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  color: #000000;
  margin-top: 0;
  margin-right: 13px;
}

.input-nomer {
  outline: none;
  border: none;
  border: 1px solid #cdd1cd;
  border-radius: 5px;
  background-color: #fff;
  padding: 12px 40px;
  margin-bottom: 25px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  font-size: 18px;
  color: #000000;
}

.input-nomer::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  font-size: 18px;
  color: #000000;
  background-image: url("@/assets/telef.svg");
  background-position: 12px 5px;
  background-repeat: no-repeat;
}

.input-size {
  outline: none;
  border: none;
  border: 1px solid #cdd1cd;
  border-radius: 5px;
  background-color: #fff;
  padding: 12px 35px;
  margin-bottom: 25px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  font-size: 18px;
  color: #000000;
}

.input-size::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 23px;
  font-size: 18px;
  color: #000000;
  background-image: url("@/assets/size.svg");
  background-position: 12px 12px;
  background-repeat: no-repeat;
}

.form__add-first {
  display: none;
}

.form__add-second {
  display: none;
}

.form__add-third {
  display: none;
}

.form__add-fourth {
  display: none;
}

.button-mobile {
  display: none;
}

@media (max-width: 375px) {
  .swiper {
    height: auto;
  }

  .panel_with_buttons {
    display: none;
  }

  .data_to_add {
    width: 100%;
    height: 1233px;
    padding-top: 0;
  }

  .form__add-first {
    display: block;
    margin: 0 auto;
    margin-bottom: 75px;
  }

  .property_information {
    padding: 40px 20px 0;
  }

  .data_to_add h1 {
    margin: 0;
    margin-bottom: 5px;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
    color: #000000;
  }

  .data_to_add h2 {
    margin: 0;
    margin-bottom: 18px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .type-of-user {
    font-weight: 600 !important;
    font-size: 16px !important;
    line-height: 19px !important;
    color: #000000 !important;
  }

  .lect,
  .lect_2 {
    width: 100%;
    margin-bottom: 20px;
  }

  .next_step {
    width: 100%;
  }

  .next_step_button-color {
    width: 100%;
    justify-content: center;
    margin-top: 0;
    padding: 10px 0;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    color: #FFFFFF;
  }

  .next_step_button svg {
    width: 16px;
    height: 16px;
  }

  .addition {
    min-height: 90vh;
  }

  .data_to_add_1 {
    width: 100%;
    height: 1233px;
    padding-top: 0;
  }

  .property_information_1 {
    padding: 40px 20px;
  }

  .form__add-second {
    display: block;
    margin: 0 auto;
    margin-bottom: 50px;
  }

  .data_to_add_1 h1 {
    margin: 0;
    margin-bottom: 5px;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
  }

  .data_to_add_1 h2 {
    margin: 0;
    margin-bottom: 18px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
  }

  .data_to_add_1 h3 {
    margin: 0;
    margin-bottom: 10px;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
  }

  .location {
    flex-direction: column;
    gap: 5px 0;
    margin-bottom: 18px;
  }

  .input_1,
  .input_2,
  .input_3 {
    width: auto;
    margin-bottom: 0;
  }

  .parameter {
    flex-direction: column;
  }

  .appointment p {
    margin-bottom: 10px;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
  }

  .entry_field {
    margin-bottom: 18px;
    padding-top: 9px;
    padding-bottom: 9px;
  }

  .entry_field_1 {
    box-sizing: border-box;
    width: 335px;
  }

  .data_to_add_1 .form_buttom {
    width: auto;
    /* flex-direction: column; */
  }

  .transitions_button_1-color,
  .transitions_button-color {
    margin-top: 0;
    padding: 10px 8px;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
  }

  .transitions_button_1 svg {
    width: 16px;
    height: 15px;
    margin-right: 5px;
  }

  .transitions_button svg {
    margin-left: 5px;
  }

  .data_to_add_2 {
    padding-top: 0;
    width: 100%;
    height: 1233px;
  }

  .form__add-third {
    display: block;
    margin: 0 auto;
    margin-bottom: 50px;
  }

  .data_to_add_2 h1,
  .property_information_1 h4 {
    margin-bottom: 5px;
    font-weight: 700;
    font-size: 20px;
    line-height: 23px;
  }

  .data_to_add_2 h2,
  .property_information_1 h5 {
    margin: 0;
    margin-bottom: 18px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
  }

  .label-for-input-file {
    width: 335px;
    height: 122px;
  }

  .wrapper_label-input-file {
    min-width: auto;
    left: calc(50% - 119px);
    top: calc(50% - 22px);
  }

  .content__label-input-file svg {
    width: 30px;
    height: 30px;
  }

  .wrapper_label-input-file-text {
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #00D39C;
  }

  .swiper-slide[data-slide='3'].appointment {
    margin-bottom: 39px;
  }

  .form_buttom {
    width: 335px;
  }

  .form__add-fourth {
    display: block;
    margin: 0 auto;
    margin-bottom: 50px;
  }

  .appointment_1 {
    max-width: 160px;
    /* justify-content: start; */
  }

  .appointment_1:not(:last-child) {
    margin-bottom: 10px;
  }

  .appointment_2 {
    display: inline-flex;
    flex-direction: column;
    margin-right: 15px;
  }

  .appointment_3 {
    display: inline-flex;
    flex-direction: column;
  }

  .kitchen__input,
  .bathroom__input,
  .floor__input,
  .bedroom__input,
  .livingroom__input {
    width: 75px;
    height: 40px;
  }

  .appointment_1 p {
    font-weight: 400;
    font-size: 16px;
    line-height: 25px;
  }

  .appointment_2 p {
    font-weight: 400;
    font-size: 16px;
    line-height: 25px;
  }

  .parameter_1 {
    display: inline-block;
  }

  .checkboxs,
  .checkboxs_2 {
    flex-direction: column;
    gap: 0 0;
  }

  .checkboxs_2 {
    margin-bottom: 18px;
  }

  .checkboxs p {
    width: auto;
    margin-bottom: 5px;
  }

  .checkboxs_2 p {
    margin: 0;
    margin-bottom: 5px;
  }

  textarea {
    width: 335px;
  }

  .two_button {
    flex-direction: column;
  }

  .button-mobile {
    display: block;
  }

  .button-mobile-none {
    display: none;
  }

  .button-mobile {
    width: 83px;
    height: 40px;
    padding: 12px 33px;
  }

  .btn-add {
    padding: 10px 24px;
  }

  .swiper-slide[data-swiper-slide-index="3"] .form_buttom {
    width: auto;
  }
}
</style>
