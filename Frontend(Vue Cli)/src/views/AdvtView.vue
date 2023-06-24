<template>
  <div class="advtView">
    <HeaderComp />

    <section>
      <div class="wrapper advt-wrapper">
        <div>
          <swiper
            :modules="modules"
            :slides-per-view="1"
            :space-between="50"
            :navigation="{
              nextEl: '.next-slide',
              prevEl: '.prev-slide',
            }"
            :pagination="{
              el: '.pagination',
              type: 'progressbar',
            }"
            @swiper="onSwiper"
            @slideChange="onSlideChange"
          >
            <swiper-slide v-for="(photo, index) in advt.photos" :key="index">
              <img :src="'http://127.0.0.1:8000/photos/' + photo.file_name" />
            </swiper-slide>
          </swiper>
          <div class="next-slide">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="25" cy="25" r="25" fill="white" fill-opacity="0.5" />
              <circle cx="25" cy="25" r="24.5" stroke="#CDD1CD" stroke-opacity="0.5" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3904 15.3905C18.8697 15.9112 18.8697 16.7554 19.3904 17.2761L27.1143 25L19.3904 32.7239C18.8697 33.2446 18.8697 34.0888 19.3904 34.6095C19.9111 35.1302 20.7554 35.1302 21.2761 34.6095L29.9427 25.9428C30.4634 25.4221 30.4634 24.5779 29.9427 24.0572L21.2761 15.3905C20.7554 14.8698 19.9111 14.8698 19.3904 15.3905Z" fill="black" />
            </svg>
          </div>
          <div class="prev-slide">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="25" cy="25" r="25" fill="white" fill-opacity="0.5" />
              <circle cx="25" cy="25" r="24.5" stroke="#CDD1CD" stroke-opacity="0.5" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M29.9428 34.6095C30.4635 34.0888 30.4635 33.2446 29.9428 32.7239L22.219 25L29.9428 17.2761C30.4635 16.7554 30.4635 15.9112 29.9428 15.3905C29.4221 14.8698 28.5779 14.8698 28.0572 15.3905L19.3905 24.0572C18.8698 24.5779 18.8698 25.4221 19.3905 25.9428L28.0572 34.6095C28.5779 35.1302 29.4221 35.1302 29.9428 34.6095Z" fill="black" />
            </svg>
          </div>
          <div class="pagination"></div>
        </div>
        <div class="info_ads">
          <div class="title_ads">
            <h1>
              {{ advt.header }}
            </h1>
            <h2>
              Цена <span>{{ advt.cost }}</span>
            </h2>
            <button class="btn-checkbox-1" type="button">
              <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.25 2C1.25 1.58579 1.58579 1.25 2 1.25H23C23.4142 1.25 23.75 1.58579 23.75 2V23.8074C23.75 24.4233 23.0486 24.7767 22.5536 24.41L14.4345 18.3959C13.2853 17.5446 11.7147 17.5446 10.5655 18.3959L2.44642 24.41C1.95145 24.7767 1.25 24.4233 1.25 23.8074V2Z" stroke="white" stroke-width="2.5" />
              </svg>
            </button>
            <button class="btn-checkbox-2" @click="copyThis(this.idAdvt)" type="button">
              <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.99984 16.9999C9.99984 19.3011 8.13436 21.1666 5.83317 21.1666C3.53198 21.1666 1.6665 19.3011 1.6665 16.9999C1.6665 14.6987 3.53198 12.8333 5.83317 12.8333C8.13436 12.8333 9.99984 14.6987 9.99984 16.9999Z" stroke="white" stroke-width="2.5" />
                <path d="M18.3333 7.83325L10 13.6666" stroke="white" stroke-width="2.5" stroke-linecap="round" />
                <path d="M18.3333 26.1667L10 20.3334" stroke="white" stroke-width="2.5" stroke-linecap="round" />
                <path d="M26.6668 27.8334C26.6668 30.1346 24.8013 32.0001 22.5002 32.0001C20.199 32.0001 18.3335 30.1346 18.3335 27.8334C18.3335 25.5322 20.199 23.6667 22.5002 23.6667C24.8013 23.6667 26.6668 25.5322 26.6668 27.8334Z" stroke="white" stroke-width="2.5" />
                <path d="M26.6668 6.16667C26.6668 8.46785 24.8013 10.3333 22.5002 10.3333C20.199 10.3333 18.3335 8.46785 18.3335 6.16667C18.3335 3.86548 20.199 2 22.5002 2C24.8013 2 26.6668 3.86548 26.6668 6.16667Z" stroke="white" stroke-width="2.5" />
              </svg>
            </button>
            <div class="button_flex">
              <button v-if="advt.type === 'Аренда'" type="submit" class="button_1 button_1-color" href="">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.01648 18.3263C3.21336 16.5232 2.3118 15.6216 1.97633 14.4519C1.64086 13.2822 1.92756 12.0398 2.50095 9.55513L2.83161 8.12225C3.31401 6.03186 3.55521 4.98666 4.27094 4.27094C4.98666 3.55521 6.03186 3.31401 8.12225 2.83162L9.55513 2.50095C12.0398 1.92756 13.2822 1.64086 14.4519 1.97633C15.6216 2.3118 16.5232 3.21336 18.3263 5.01648L20.4609 7.15106C23.598 10.2882 25.1666 11.8568 25.1666 13.806C25.1666 15.7551 23.598 17.3237 20.4609 20.4609C17.3237 23.598 15.7551 25.1666 13.806 25.1666C11.8568 25.1666 10.2882 23.598 7.15106 20.4609L5.01648 18.3263Z" stroke="#1C274C" stroke-width="2.5" />
                  <path d="M17.4543 17.4543C18.1377 16.7708 18.23 15.7551 17.6605 15.1856C17.091 14.6161 16.0753 14.7084 15.3919 15.3919C14.7085 16.0753 13.6928 16.1676 13.1233 15.5981C12.5537 15.0286 12.6461 14.0129 13.3295 13.3295M17.4543 17.4543L17.8668 17.8667M17.4543 17.4543C16.9865 17.9221 16.3629 18.1129 15.8334 18.0041M12.917 12.917L13.3295 13.3295M13.3295 13.3295C13.7159 12.943 14.2086 12.7456 14.6667 12.7499" stroke="#1C274C" stroke-width="2" stroke-linecap="round" />
                  <circle cx="9.29983" cy="9.2998" r="2.33333" transform="rotate(-45 9.29983 9.2998)" stroke="#1C274C" stroke-width="2" />
                </svg>
                Аренда
              </button>
              <button v-if="advt.type === 'Продажа'" type="submit" class="button_1 button_1-color" href="">
                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.01648 18.3263C3.21336 16.5232 2.3118 15.6216 1.97633 14.4519C1.64086 13.2822 1.92756 12.0398 2.50095 9.55513L2.83161 8.12225C3.31401 6.03186 3.55521 4.98666 4.27094 4.27094C4.98666 3.55521 6.03186 3.31401 8.12225 2.83162L9.55513 2.50095C12.0398 1.92756 13.2822 1.64086 14.4519 1.97633C15.6216 2.3118 16.5232 3.21336 18.3263 5.01648L20.4609 7.15106C23.598 10.2882 25.1666 11.8568 25.1666 13.806C25.1666 15.7551 23.598 17.3237 20.4609 20.4609C17.3237 23.598 15.7551 25.1666 13.806 25.1666C11.8568 25.1666 10.2882 23.598 7.15106 20.4609L5.01648 18.3263Z" stroke="#1C274C" stroke-width="2.5" />
                  <path d="M17.4543 17.4543C18.1377 16.7708 18.23 15.7551 17.6605 15.1856C17.091 14.6161 16.0753 14.7084 15.3919 15.3919C14.7085 16.0753 13.6928 16.1676 13.1233 15.5981C12.5537 15.0286 12.6461 14.0129 13.3295 13.3295M17.4543 17.4543L17.8668 17.8667M17.4543 17.4543C16.9865 17.9221 16.3629 18.1129 15.8334 18.0041M12.917 12.917L13.3295 13.3295M13.3295 13.3295C13.7159 12.943 14.2086 12.7456 14.6667 12.7499" stroke="#1C274C" stroke-width="2" stroke-linecap="round" />
                  <circle cx="9.29983" cy="9.2998" r="2.33333" transform="rotate(-45 9.29983 9.2998)" stroke="#1C274C" stroke-width="2" />
                </svg>
                Продажа
              </button>
            </div>
            <div class="statys_ads">
              <h1>Статус недвижимости</h1>
              <button type="submit" class="indicator indicator-color" href="">
                {{ advt.status }}
              </button>
            </div>
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
      </div>
    </section>

    <section>
      <div class="wrapper">
        <div class="owner_information">
          <div class="ads_owner">
            <div class="foto_owner">
              <img src="@/assets/foto_owner.jpg" alt="" />
            </div>
            <div class="owner__information-wrapper">
              <h1>Владелец</h1>
              <div class="nomer_owner">
                <button type="submit" class="nomer_button nomer_button-color" href="">
                  <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M13.1007 12.359L12.5719 11.8272H12.5719L13.1007 12.359ZM13.5562 11.9062L14.085 12.438H14.085L13.5562 11.9062ZM15.9728 11.5894L15.6146 12.2483L15.9728 11.5894ZM17.8833 12.628L17.5251 13.2869L17.8833 12.628ZM18.4217 15.883L18.9505 16.4148L18.4217 15.883ZM17.0011 17.2954L16.4723 16.7636L17.0011 17.2954ZM15.6763 17.9651L15.7459 18.7119H15.7459L15.6763 17.9651ZM5.81536 13.7266L6.34418 13.1947L5.81536 13.7266ZM1.00289 4.74561L0.254096 4.78816L0.254096 4.78816L1.00289 4.74561ZM7.47752 6.19738L8.00634 6.72922H8.00634L7.47752 6.19738ZM7.63424 3.54348L8.23464 3.09401L7.63424 3.54348ZM6.37326 1.85908L5.77286 2.30855V2.30855L6.37326 1.85908ZM3.26145 1.57483L3.79027 2.10667H3.79027L3.26145 1.57483ZM1.69185 3.13552L1.16303 2.60368H1.16303L1.69185 3.13552ZM9.06312 10.4972L9.59194 9.9654L9.06312 10.4972ZM13.6295 12.8909L14.085 12.438L13.0273 11.3743L12.5719 11.8272L13.6295 12.8909ZM15.6146 12.2483L17.5251 13.2869L18.2415 11.9691L16.331 10.9305L15.6146 12.2483ZM17.8929 15.3511L16.4723 16.7636L17.5299 17.8273L18.9505 16.4148L17.8929 15.3511ZM15.6067 17.2184C14.1568 17.3535 10.4056 17.2331 6.34418 13.1947L5.28654 14.2584C9.71865 18.6653 13.9369 18.8805 15.7459 18.7119L15.6067 17.2184ZM6.34418 13.1947C2.4728 9.34533 1.83151 6.10765 1.75168 4.70305L0.254096 4.78816C0.354565 6.55599 1.14863 10.144 5.28654 14.2584L6.34418 13.1947ZM7.71952 7.01441L8.00634 6.72922L6.9487 5.66555L6.66189 5.95073L7.71952 7.01441ZM8.23464 3.09401L6.97365 1.40961L5.77286 2.30855L7.03385 3.99296L8.23464 3.09401ZM2.73263 1.04299L1.16303 2.60368L2.22067 3.66736L3.79027 2.10667L2.73263 1.04299ZM7.1907 6.48257C6.66189 5.95073 6.66117 5.95144 6.66045 5.95216C6.66021 5.9524 6.65949 5.95313 6.659 5.95362C6.65802 5.95461 6.65702 5.95561 6.65601 5.95664C6.65398 5.95871 6.65188 5.96086 6.64972 5.9631C6.64539 5.96759 6.64081 5.97245 6.63599 5.97769C6.62634 5.98816 6.61575 6.00014 6.60441 6.01367C6.58174 6.04072 6.55605 6.07403 6.52905 6.11388C6.47492 6.19377 6.41594 6.2994 6.36589 6.43224C6.26376 6.70329 6.20901 7.0606 6.27765 7.50305C6.41189 8.36833 7.00782 9.51126 8.5343 11.0291L9.59194 9.9654C8.16342 8.54499 7.82314 7.68059 7.75992 7.27309C7.72983 7.07916 7.76104 6.98371 7.76956 6.96111C7.77483 6.94713 7.77733 6.9457 7.77087 6.95525C7.7677 6.95992 7.76238 6.96723 7.75412 6.97708C7.74999 6.98201 7.74512 6.98759 7.73939 6.99381C7.73653 6.99692 7.73345 7.00019 7.73014 7.00362C7.72849 7.00534 7.72678 7.00709 7.72501 7.00889C7.72413 7.00979 7.72323 7.0107 7.72231 7.01162C7.72185 7.01208 7.72116 7.01278 7.72093 7.01301C7.72023 7.01371 7.71952 7.01441 7.1907 6.48257ZM8.5343 11.0291C10.0613 12.5474 11.2096 13.1383 12.0763 13.2713C12.5192 13.3392 12.8763 13.285 13.1472 13.1841C13.28 13.1346 13.3858 13.0763 13.4658 13.0227C13.5058 12.9959 13.5392 12.9704 13.5663 12.9479C13.5799 12.9367 13.5919 12.9262 13.6024 12.9166C13.6077 12.9118 13.6126 12.9073 13.6171 12.903C13.6194 12.9008 13.6215 12.8987 13.6236 12.8967C13.6246 12.8957 13.6256 12.8947 13.6266 12.8937C13.6271 12.8932 13.6279 12.8925 13.6281 12.8923C13.6288 12.8916 13.6295 12.8909 13.1007 12.359C12.5719 11.8272 12.5726 11.8265 12.5733 11.8258C12.5735 11.8256 12.5742 11.8249 12.5747 11.8244C12.5756 11.8235 12.5765 11.8226 12.5774 11.8217C12.5793 11.82 12.581 11.8183 12.5827 11.8166C12.5862 11.8133 12.5895 11.8103 12.5926 11.8074C12.5988 11.8018 12.6044 11.7969 12.6094 11.7929C12.6192 11.7847 12.6265 11.7795 12.631 11.7764C12.6403 11.7702 12.6384 11.773 12.6236 11.7785C12.5991 11.7876 12.501 11.8189 12.3038 11.7886C11.8905 11.7253 11.02 11.3853 9.59194 9.9654L8.5343 11.0291ZM6.97365 1.40961C5.95434 0.0480248 3.94996 -0.16743 2.73263 1.04299L3.79027 2.10667C4.32195 1.578 5.26623 1.63181 5.77286 2.30855L6.97365 1.40961ZM1.75168 4.70305C1.73201 4.35694 1.89075 3.9954 2.22067 3.66736L1.16303 2.60368C0.625711 3.13795 0.203294 3.89425 0.254096 4.78816L1.75168 4.70305ZM16.4723 16.7636C16.1975 17.0369 15.9029 17.1908 15.6067 17.2184L15.7459 18.7119C16.4805 18.6434 17.0824 18.2723 17.5299 17.8273L16.4723 16.7636ZM8.00634 6.72922C8.99084 5.7503 9.06403 4.2019 8.23464 3.09401L7.03385 3.99295C7.43734 4.53193 7.3773 5.23938 6.9487 5.66555L8.00634 6.72922ZM17.5251 13.2869C18.3429 13.7315 18.4703 14.7769 17.8929 15.3511L18.9505 16.4148C20.2908 15.0821 19.8775 12.8584 18.2415 11.9691L17.5251 13.2869ZM14.085 12.438C14.469 12.0562 15.0871 11.9616 15.6146 12.2483L16.331 10.9305C15.2474 10.3414 13.9026 10.5041 13.0273 11.3743L14.085 12.438Z"
                      fill="#00D39C"
                    />
                  </svg>
                  Показать номер
                </button>
              </div>
              <div class="connection_ads">
                <button type="submit" class="connection_button connection_button-color" href="">
                  <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.37508 5.29183C5.37508 3.56594 6.77419 2.16683 8.50008 2.16683C10.226 2.16683 11.6251 3.56594 11.6251 5.29183C11.6251 7.01772 10.226 8.41683 8.50008 8.41683C6.77419 8.41683 5.37508 7.01772 5.37508 5.29183ZM8.50008 0.0834961C5.6236 0.0834961 3.29175 2.41535 3.29175 5.29183C3.29175 8.16831 5.6236 10.5002 8.50008 10.5002C11.3766 10.5002 13.7084 8.16831 13.7084 5.29183C13.7084 2.41535 11.3766 0.0834961 8.50008 0.0834961ZM2.25008 19.8752C2.25008 16.4234 5.0483 13.6252 8.50008 13.6252C11.9519 13.6252 14.7501 16.4234 14.7501 19.8752C14.7501 20.4505 15.2165 20.9168 15.7917 20.9168C16.367 20.9168 16.8334 20.4505 16.8334 19.8752C16.8334 15.2728 13.1025 11.5418 8.50008 11.5418C3.89771 11.5418 0.166748 15.2728 0.166748 19.8752C0.166748 20.4505 0.633118 20.9168 1.20841 20.9168C1.78371 20.9168 2.25008 20.4505 2.25008 19.8752Z" fill="black" />
                  </svg>
                  Связаться с владельцем
                </button>
              </div>
              <div class="reliability_ads">
                <button type="submit" class="reliability_button reliability_button-color" href="">
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 18.2597L8.73713 20.4292C8.41306 20.7399 8.25102 20.8952 8.1138 20.949C7.80111 21.0715 7.45425 20.9666 7.28977 20.6999C7.21758 20.5829 7.19509 20.3718 7.1501 19.9495C7.1247 19.7111 7.112 19.5919 7.07345 19.4921C6.98715 19.2686 6.80579 19.0947 6.57266 19.012C6.46853 18.975 6.3442 18.9629 6.09553 18.9385C5.65512 18.8954 5.43491 18.8738 5.31283 18.8046C5.03463 18.6469 4.92529 18.3144 5.05306 18.0146C5.10913 17.883 5.27116 17.7277 5.59523 17.417L7.07345 15.9998L8.1138 14.9595" stroke="#D6C8B5" stroke-width="1.5" />
                    <path d="M11 18.2597L13.2629 20.4291C13.5869 20.7398 13.749 20.8952 13.8862 20.9489C14.1989 21.0714 14.5457 20.9666 14.7102 20.6999C14.7824 20.5828 14.8049 20.3717 14.8499 19.9495C14.8753 19.7111 14.888 19.5919 14.9265 19.4921C15.0129 19.2686 15.1942 19.0947 15.4273 19.012C15.5315 18.975 15.6558 18.9628 15.9045 18.9385C16.3449 18.8953 16.5651 18.8738 16.6872 18.8046C16.9654 18.6469 17.0747 18.3143 16.9469 18.0146C16.8909 17.883 16.7288 17.7277 16.4048 17.417L14.9265 15.9998L14 15.0732" stroke="#D6C8B5" stroke-width="1.5" />
                    <path d="M16.3197 16.9957C18.2921 16.9748 19.3915 16.8512 20.1213 16.1213C21 15.2426 21 13.8284 21 11V7C21 4.17157 21 2.75736 20.1213 1.87868C19.2426 1 17.8284 1 15 1L7 1C4.17157 1 2.75736 1 1.87868 1.87868C1 2.75736 1 4.17157 1 7L1 11C1 13.8284 1 15.2426 1.87868 16.1213C2.64706 16.8897 3.82497 16.9862 6 16.9983" stroke="#D6C8B5" stroke-width="1.5" />
                    <path d="M8 5L14 5" stroke="#D6C8B5" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M6 8.5H16" stroke="#D6C8B5" stroke-width="1.5" stroke-linecap="round" />
                  </svg>
                  Проверенный профиль
                </button>
              </div>
            </div>
          </div>
          <div class="information_ads">
            <div class="Description">
              <div class="zagolovok">
                <h1>Описание</h1>
              </div>
              <div class="block_table">
                <ul class="table_1">
                  <li class="row">Тип</li>
                  <li class="row">Этажность</li>
                  <li class="row">Статус</li>
                  <li class="row">Площадь</li>
                </ul>
                <ul class="table_2">
                  <li class="row">{{ advt.type_of_property }}</li>
                  <li class="row">{{ advt.number_of_storeys }}</li>
                  <li class="row">{{ advt.status }}</li>
                  <li class="row">{{ advt.area }} м²</li>
                </ul>
                <ul class="table_3">
                  <li class="row">Дата добавления</li>
                  <li class="row">Гараж/парковка</li>
                  <li class="row">Год постройки</li>
                  <li class="row">Собственность</li>
                </ul>
                <ul class="table_4">
                  <li class="row">{{ advt.created_at }}</li>
                  <li class="row">{{ advt.place_for_cars }}</li>
                  <li class="row">{{ advt.year_of_construction }}</li>
                  <li class="row">{{ advt.type_of_user }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="wrapper">
        <div class="More">
          <h1>Подробнее</h1>
          <h2>{{ advt.address }}</h2>
          <p>
            {{ advt.description }}
          </p>

          <div class="options">
            <div class="elements_1">
              <svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.29797 11.1416C2.98816 9.81771 1.33325 9.15575 1.33325 8.33317C1.33325 7.51059 2.98816 6.84863 6.29797 5.5247L10.9787 3.65239C14.2886 2.32847 15.9435 1.6665 17.9999 1.6665C20.0564 1.6665 21.7113 2.32847 25.0211 3.65239L29.7019 5.5247C33.0117 6.84863 34.6666 7.51059 34.6666 8.33317C34.6666 9.15575 33.0117 9.81771 29.7019 11.1416L25.0211 13.014C21.7113 14.3379 20.0564 14.9998 17.9999 14.9998C15.9435 14.9998 14.2886 14.3379 10.9787 13.014L6.29797 11.1416Z" stroke="black" stroke-width="2.5" />
                <path d="M34.6666 15C34.6666 15 33.0117 16.4845 29.7019 17.8085L25.0211 19.6808C21.7113 21.0047 20.0564 21.6667 17.9999 21.6667C15.9435 21.6667 14.2886 21.0047 10.9787 19.6808L6.29797 17.8085C2.98816 16.4845 1.33325 15 1.33325 15" stroke="black" stroke-width="2.5" stroke-linecap="round" />
                <path d="M34.6666 21.6665C34.6666 21.6665 33.0117 23.151 29.7019 24.475L25.0211 26.3473C21.7113 27.6712 20.0564 28.3332 17.9999 28.3332C15.9435 28.3332 14.2886 27.6712 10.9787 26.3473L6.29797 24.475C2.98816 23.151 1.33325 21.6665 1.33325 21.6665" stroke="black" stroke-width="2.5" stroke-linecap="round" />
              </svg>
              <h1>этаж {{ advt.floor }}</h1>
            </div>
            <div class="elements_1">
              <svg width="36" height="26" viewBox="0 0 36 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.25918 22.9998H28.7407C32.0135 22.9998 34.6666 20.3467 34.6666 17.0739V12.9998C34.6666 11.1589 33.1742 9.6665 31.3333 9.6665C29.4923 9.6665 27.9999 11.1589 27.9999 12.9998V14.9998C27.9999 15.7362 27.403 16.3332 26.6666 16.3332H9.33325C8.59687 16.3332 7.99992 15.7362 7.99992 14.9998V12.9998C7.99992 11.1589 6.50753 9.6665 4.66659 9.6665C2.82564 9.6665 1.33325 11.1589 1.33325 12.9998V17.0739C1.33325 20.3467 3.98638 22.9998 7.25918 22.9998Z" stroke="black" stroke-width="2.5" />
                <path d="M31.3334 9.66683C31.3334 8.11798 31.3334 7.34355 31.2053 6.69956C30.6793 4.05496 28.612 1.98764 25.9673 1.46159C25.3234 1.3335 24.5489 1.3335 23.0001 1.3335H13.0001C11.4512 1.3335 10.6768 1.3335 10.0328 1.46159C7.38821 1.98764 5.32089 4.05496 4.79485 6.69956C4.66675 7.34355 4.66675 8.11798 4.66675 9.66683" stroke="black" stroke-width="2.5" />
                <path d="M31.3334 24.6667V23M4.66675 24.6667V23" stroke="black" stroke-width="2.5" stroke-linecap="round" />
              </svg>
              <h1>гостиная {{ advt.living_room }}</h1>
            </div>
            <div class="elements_1">
              <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 19.8045C3 19.6765 3 19.6125 3.00351 19.5585C3.05783 18.7232 3.72324 18.0578 4.55852 18.0035C4.61254 18 4.67651 18 4.80446 18H31.1955C31.3235 18 31.3875 18 31.4415 18.0035C32.2768 18.0578 32.9422 18.7232 32.9965 19.5585C33 19.6125 33 19.6765 33 19.8045C33 20.4639 33 20.7936 32.9766 21.1628C32.6288 26.6424 27.9716 31.4778 22.5089 32.0311C22.1409 32.0683 21.9263 32.0764 21.4969 32.0925C20.2734 32.1385 19.0822 32.1667 18 32.1667C16.9178 32.1667 15.7266 32.1385 14.5031 32.0925C14.0737 32.0764 13.8591 32.0683 13.4911 32.0311C8.02841 31.4778 3.3712 26.6424 3.02343 21.1628C3 20.7936 3 20.4639 3 19.8045Z" stroke="black" stroke-width="2.5" />
                <path d="M7.99992 31.3335L6.33325 34.6668" stroke="black" stroke-width="2.5" stroke-linecap="round" />
                <path d="M28.0001 31.3335L29.6667 34.6668" stroke="black" stroke-width="2.5" stroke-linecap="round" />
                <path d="M1.33325 18H34.6666" stroke="black" stroke-width="2.5" stroke-linecap="round" />
                <path
                  d="M1.75 19.6668C1.75 20.3572 2.30964 20.9168 3 20.9168C3.69036 20.9168 4.25 20.3572 4.25 19.6668H1.75ZM10.6662 3.83239L11.8268 3.36815V3.36815L10.6662 3.83239ZM11.2981 5.41205L11.8452 6.53595L11.2981 5.41205ZM8.60353 8.3207L9.76168 8.79102L8.60353 8.3207ZM15.6283 5.29655L15.1373 6.44604L15.6283 5.29655ZM8.57598 12.5694L7.41301 13.0277C7.53702 13.3424 7.78329 13.5934 8.09559 13.7234C8.40788 13.8534 8.75954 13.8513 9.07025 13.7176L8.57598 12.5694ZM18.5106 8.29263L19.0048 9.44076C19.625 9.17378 19.9211 8.46257 19.6735 7.83438L18.5106 8.29263ZM4.25 19.6668V5.30877H1.75V19.6668H4.25ZM6.97527 2.5835C8.08965 2.5835 9.09176 3.26196 9.50563 4.29663L11.8268 3.36815C11.0333 1.38433 9.11191 0.0834961 6.97527 0.0834961V2.5835ZM4.25 5.30877C4.25 3.80364 5.47015 2.5835 6.97527 2.5835V0.0834961C4.08944 0.0834961 1.75 2.42293 1.75 5.30877H4.25ZM9.50563 4.29663L10.1375 5.87629L12.4587 4.94782L11.8268 3.36815L9.50563 4.29663ZM9.73896 12.1112C9.33612 11.0889 9.31064 9.9017 9.76168 8.79102L7.44538 7.85039C6.74487 9.57541 6.78265 11.4279 7.41301 13.0277L9.73896 12.1112ZM18.0163 7.1445L8.08172 11.4213L9.07025 13.7176L19.0048 9.44076L18.0163 7.1445ZM15.1373 6.44604C16.1732 6.88862 16.945 7.72918 17.3476 8.75088L19.6735 7.83438C19.0429 6.23398 17.8116 4.86998 16.1194 4.14705L15.1373 6.44604ZM9.76168 8.79102C10.1853 7.74783 10.9471 6.97316 11.8452 6.53595L10.751 4.28815C9.30562 4.99176 8.10421 6.22801 7.44538 7.85039L9.76168 8.79102ZM11.8452 6.53595C12.8575 6.04315 14.0418 5.97803 15.1373 6.44604L16.1194 4.14705C14.3231 3.37964 12.3812 3.49452 10.751 4.28815L11.8452 6.53595Z"
                  fill="black"
                />
              </svg>
              <h1>ванная {{ advt.bathroom }}</h1>
            </div>
            <div class="elements_1">
              <svg width="30" height="36" viewBox="0 0 30 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.66675 14.6668C1.66675 8.38144 1.66675 5.23874 3.61937 3.28612C5.57199 1.3335 8.71469 1.3335 15.0001 1.3335C21.2855 1.3335 24.4282 1.3335 26.3808 3.28612C28.3334 5.23874 28.3334 8.38144 28.3334 14.6668V19.6668C28.3334 25.9522 28.3334 29.0949 26.3808 31.0475C24.4282 33.0002 21.2855 33.0002 15.0001 33.0002C8.71469 33.0002 5.57199 33.0002 3.61937 31.0475C1.66675 29.0949 1.66675 25.9522 1.66675 19.6668V14.6668Z" stroke="black" stroke-width="2.5" />
                <path d="M23.3334 33V34.6667H21.6667V33M8.33341 33V34.6667H6.66675V33" stroke="black" stroke-width="2.5" stroke-linejoin="round" />
                <path d="M28.3334 17.1665H1.66675" stroke="black" stroke-width="2.5" />
                <path d="M23.3333 9.66667L23.3333 13" stroke="black" stroke-width="2.5" stroke-linecap="round" />
                <path d="M23.3333 21.3332L23.3333 24.6665" stroke="black" stroke-width="2.5" stroke-linecap="round" />
              </svg>
              <h1>кухня {{ advt.kitchen }}</h1>
            </div>
            <div class="elements_1">
              <svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.6668 28.3335V25.8335M6.3335 28.3335V25.8335" stroke="black" stroke-width="2.5" stroke-linecap="round" />
                <path d="M1.3335 20C1.3335 18.4469 1.3335 17.6703 1.58723 17.0577C1.92554 16.241 2.57446 15.592 3.39122 15.2537C4.00379 15 4.78036 15 6.3335 15H29.6668C31.22 15 31.9965 15 32.6091 15.2537C33.4259 15.592 34.0748 16.241 34.4131 17.0577C34.6668 17.6703 34.6668 18.4469 34.6668 20C34.6668 21.5531 34.6668 22.3297 34.4131 22.9423C34.0748 23.759 33.4259 24.408 32.6091 24.7463C31.9965 25 31.22 25 29.6668 25H6.3335C4.78036 25 4.00379 25 3.39122 24.7463C2.57446 24.408 1.92554 23.759 1.58723 22.9423C1.3335 22.3297 1.3335 21.5531 1.3335 20Z" stroke="black" stroke-width="2.5" />
                <path d="M33 14.9998C33 8.71444 33 5.57175 31.0474 3.61913C29.0948 1.6665 25.9521 1.6665 19.6667 1.6665H16.3333C10.0479 1.6665 6.90524 1.6665 4.95262 3.61913C3 5.57175 3 8.71444 3 14.9998" stroke="black" stroke-width="2.5" />
                <path d="M28.8332 15.0002V12.5002C28.8332 9.35747 28.8332 7.78612 27.8569 6.80981C26.8805 5.8335 25.3092 5.8335 22.1665 5.8335H13.8332C10.6905 5.8335 9.11913 5.8335 8.14281 6.80981C7.1665 7.78612 7.1665 9.35747 7.1665 12.5002V15.0002" stroke="black" stroke-width="2.5" />
                <path d="M18 6.6665V14.9998" stroke="black" stroke-width="2.5" />
              </svg>
              <h1>спальная {{ advt.bedroom }}</h1>
            </div>
          </div>
          <div class="categories">
            <div v-for="(benefit, index) in advt.benefits" :key="index" class="technique">
              <button v-if="benefit" type="submit" class="technique_button technique_button-color" href="">
                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="18.6667" cy="18.6667" r="16.6667" stroke="#00D39C" stroke-width="2.5" />
                  <path d="M12.8333 19.5L16.1666 22.8333L24.4999 14.5" stroke="#00D39C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                {{ benefit }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="wrapper">
        <div class="recommendations">
          <h1>Рекомендуем</h1>
          <div class="flex">
            <div v-for="(advt, index) in advtForRec" :key="index" class="item-01">
              <div class="bg-white_1">
                <div class="thumb">
                  <img v-if="advt.photos[0]" :src="'http://127.0.0.1:8000/photos/' + advt.photos[0].file_name" alt="" />
                  <img v-else :src="'http://127.0.0.1:8000/photos/' + advt.photos[0]" alt="" />
                  <button class="btn-checkbox" type="button">
                    <svg width="20" height="22" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2 1H16C16.5523 1 17 1.44772 17 2V16.0296C17 16.8509 16.0647 17.322 15.4048 16.8331L10.7857 13.4116C9.72489 12.6258 8.27511 12.6258 7.21432 13.4116L2.59523 16.8331C1.93526 17.322 1 16.8509 1 16.0296V2C1 1.44772 1.44772 1 2 1Z" stroke="#464A54" stroke-width="2" />
                    </svg>
                  </button>
                </div>
                <p class="flex-title">{{ advt.header }}</p>
                <p class="flex-price">{{ advt.cost }} ₽</p>
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

    <FooterComp />
  </div>
</template>

<script>
import axios from "axios";
import { Navigation, Pagination } from "swiper";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/scrollbar";
import HeaderComp from "@/components/HeaderComp.vue";
import FooterComp from "@/components/FooterComp.vue";
export default {
  components: {
    Swiper,
    SwiperSlide,
    HeaderComp,
    FooterComp,
  },
  data() {
    return {
      idAdvt: 0,
      advt: [],
      advtForRec: [],
    };
  },
  setup() {
    const onSwiper = () => {
      // console.log(swiper);
    };
    const onSlideChange = () => {
      console.log("slide change");
    };
    return {
      onSwiper,
      onSlideChange,
      modules: [Navigation, Pagination],
    };
  },
  mounted() {
    this.idAdvt = new URLSearchParams(window.location.search).get("id");
    this.getAdvt(this.idAdvt);
    this.getAllAdvt();
  },
  methods: {
    getAdvt(id) {
      axios
        .post("http://127.0.0.1:8000/api/getOneAdvt", {
          id: id,
        })
        .then((response) => {
          this.advt = response.data[0];
          this.date = new Date(Date.parse(this.advt.created_at));
          this.dateTime = this.date.toLocaleTimeString().slice(0, -3);
          this.dateDay = this.date.toLocaleDateString();
          this.advt.created_at = this.dateDay + " " + this.dateTime;
          this.advt.benefits = this.advt.benefits.split(",");
          console.log(this.advt.benefits);
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
    copyThis(id) {
      console.log(id);
      let text = `http://localhost:8080/advt?id=${id}`;
      navigator.clipboard
        .writeText(text)
        .then((confirm) => {
          console.log(confirm);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    getAllAdvt() {
      axios
        .post("http://127.0.0.1:8000/api/indexAdvt")
        .then((response) => {
          this.advtForRec = [response.data[4], response.data[3], response.data[5]];
          // console.log(this.advtForRec);
        })
        .catch((error) => {
          console.log(error.data);
        });
    },
  },
};
</script>

<style>
.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  background: #00d39c;
}

.swiper-pagination-progressbar {
  background: #fff;
}
</style>

<style scoped>
.pagination {
  position: absolute;
  left: 574px;
  top: 551px;
  width: 200px;
}

.next-slide,
.prev-slide {
  position: absolute;
  z-index: 10;
  top: 315px;
  width: 50px;
  height: 50px;
  cursor: pointer;
}

.next-slide {
  left: 945px;
}

.prev-slide {
  left: 345px;
}

.advtView {
  /* padding-top: 50px; */
}

.swiper-slide img {
  width: 600px;
  height: 400px;
}

.advt-wrapper {
  max-width: 1160px;
  display: flex;
  justify-content: space-between;
  padding-right: 10px;
  padding-left: 10px;
  padding-top: 50px;
}

.swiper {
  width: 600px;
  height: 400px;
  margin-right: 0;
  margin-left: 0;
}

.info_ads {
  display: flex;
  flex-wrap: wrap;
  gap: 20px 60px;
}

.title_ads {
  position: relative;
}

.title_ads h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 36px;
  line-height: 42px;
  color: #000000;
  margin-top: 0px;
}

.title_ads h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
  line-height: 38px;
  color: #000000;
}

.title_ads span {
  color: #00d39c;
}

.btn-checkbox-1 {
  position: absolute;
  z-index: 1;
  left: 415px;
  top: 17px;
  width: 50px;
  height: 50px;
  background-color: #d6c8b5;
  border-radius: 100%;
  border: none;
  padding: 13px;
}

.btn-checkbox-1:hover {
  cursor: pointer;
}

.btn-checkbox-1:hover svg {
  fill: white;
}

.btn-checkbox-2 {
  position: absolute;
  z-index: 1;
  top: 78px;
  left: 415px;
  width: 50px;
  height: 50px;
  background-color: #00d39c;
  border-radius: 100%;
  border: none;
  padding: 8px;
}

.btn-checkbox-2:hover {
  cursor: pointer;
}

.button_flex {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
}

.button_1 {
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

.button_1-color {
  color: #000000;
  background-color: transparent;
  border: 1px solid #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
}

.button_1 svg {
  margin-right: 10px;
}

.button_2 {
  display: flex;
  align-items: center;
  padding: 10px 15px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.button_2-color {
  color: #000000;
  background-color: transparent;
  border: 1px solid #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
}

.button_2 svg {
  margin-right: 10px;
}

.statys_ads {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
}

.statys_ads h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
  color: #000000;
  margin-right: 13px;
  margin-bottom: 0;
}

.indicator {
  display: flex;
  align-items: center;
  padding: 10px 15px;
  border-radius: 25px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
}

.indicator-color {
  color: #fff;
  background-color: #d6c8b5;
  border: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 28px;
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
  border: 1px solid #cdd1cd;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 28px;
}

.data_change_button svg {
  margin-right: 10px;
}

.owner_information {
  display: flex;
  gap: 30px 60px;
  margin-top: 90px;
  margin-bottom: 40px;
  width: 1334px;
}

.ads_owner {
  width: 30%;
  height: 385px;
  border: 2px solid #cdd1cd;
  border-radius: 5px;
}

.ads_owner {
}

.foto_owner {
  display: flex;
  justify-content: center;
  margin-top: 37px;
}

.ads_owner h1 {
  text-align: center;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
  color: #999999;
}

.nomer_owner {
  display: flex;
  align-items: center;
  justify-content: center;
}

.nomer_button {
  display: flex;
  align-items: center;
  padding: 13px 52px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.nomer_button-color {
  background-color: #def5ee;
  border: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
  color: #00d39c;
}

.nomer_button svg {
  margin-right: 10px;
}

.connection_ads {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
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

.reliability_ads {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
}

.reliability_button {
  display: flex;
  align-items: center;
  padding: 13px 22px;
  border: 1px solid #def5ee;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.reliability_button-color {
  color: #d6c8b5;
  background-color: #fff;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
}

.reliability_button svg {
  margin-right: 10px;
}

.information_ads {
  width: 70%;
  height: 385px;
  border: 2px solid #cdd1cd;
  border-radius: 5px;
}

.Description {
  display: flex;
  flex-direction: column;
  padding-left: 54px;
  padding-top: 55px;
}

.zagolovok {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  line-height: 42px;
  color: #000000;
}

.block_table {
  display: flex;
  flex-direction: row;
}

.table_1 {
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
  width: 20%;
}

.table_1 .row {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 19px;
  color: #000000;
}

.table_2 {
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
  width: 30%;
}

.table_2 .row {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
  color: #999999;
}

.table_3 {
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
  width: 25%;
}

.table_3 .row {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  line-height: 19px;
  color: #000000;
}

.table_4 {
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
  width: 20%;
}

.table_4 .row {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 19px;
  color: #999999;
}

.row {
  list-style: none;
  border: 1px solid rgba(205, 209, 205, 0.5);
  padding: 10px;
  margin: 0;
}

.More {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 430px;
  margin-top: 71px;
  padding-left: 50px;
  margin-bottom: 37px;
  border: 2px solid #cdd1cd;
  border-radius: 5px;
}

.More h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 36px;
  line-height: 42px;
  color: #000000;
  margin-top: 62px;
  margin-bottom: 0;
}

.More h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  margin-top: 15px;
  font-size: 20px;
  line-height: 23px;
  color: #000000;
  margin-bottom: 0;
}

.More p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 25px;
  margin-top: 15px;
  color: #000000;
}

.options {
  display: flex;
  gap: 20px 80px;
}

.elements_1 {
  display: flex;
  flex-direction: row;
  align-items: center;
}

.elements_1 h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 25px;
  color: #000000;
  margin-top: 0;
}

.elements_1 svg {
  margin-right: 10px;
}

.categories {
  display: flex;
  flex-direction: row;
  margin-top: 27px;
  gap: 20px 20px;
}

.technique {
  display: flex;
  align-items: center;
  justify-content: center;
}

.technique_button {
  display: flex;
  align-items: center;
  padding: 13px 15px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.technique_button-color {
  background-color: #def5ee;
  border: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 25px;
  color: #000;
}

.technique_button svg {
  margin-right: 10px;
}

.wardrobe {
  display: flex;
  align-items: center;
  justify-content: center;
}

.wardrobe_button {
  display: flex;
  align-items: center;
  padding: 13px 12px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.wardrobe_button-color {
  background-color: #def5ee;
  border: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 25px;
  color: #000;
}

.wardrobe_button svg {
  margin-right: 10px;
}

.elevator {
  display: flex;
  align-items: center;
  justify-content: center;
}

.elevator_button {
  display: flex;
  align-items: center;
  padding: 13px 12px;
  border-radius: 5px;
  user-select: none;
  line-height: 1.5;
  font-size: 15px;
  cursor: pointer;
}

.elevator_button-color {
  background-color: #def5ee;
  border: none;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 25px;
  color: #000;
}

.elevator_button svg {
  margin-right: 10px;
}

.recommendations {
  display: flex;
  flex-direction: column;
  width: 1334px;
  margin-bottom: 65px;
}

.recommendations h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 36px;
  line-height: 42px;
  color: #000000;
  margin-bottom: 55px;
}

.bg-white_1 {
  background-color: #fff;
  border: 1px solid #cdd1cd;
  width: 398px;
  height: 100%;
  border-radius: 5px;
  line-height: 10px;
  color: #737373;
}

.flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-flow: wrap;
  gap: 30px 19px;
}

.thumb {
  position: relative;
}

.thumb img {
  width: 100%;
  height: 220px;
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

.btn-checkbox {
  position: absolute;
  z-index: 1;
  left: 330px;
  top: 17px;
  height: 50px;
  background-color: #fff;
  border-radius: 100%;
  border: none;
  padding: 15px;
}

.btn-checkbox:hover {
  cursor: pointer;
}

.btn-checkbox:hover svg {
  fill: #464a54;
}

.item-01,
.item-02,
.item-03 {
  flex-grow: 1;
}

button {
  position: relative;
  width: auto;
}

@media (max-width: 375px) {
  .advt-wrapper {
    flex-direction: column;
    padding: 20px 20px 0 20px;
  }

  .swiper {
    width: 330px;
    height: 200px;
    margin-bottom: 40px;
    border-radius: 5px;
  }

  .swiper-slide img {
    width: 100%;
    height: 100%;
  }

  .prev-slide svg,
  .next-slide svg {
    width: 30px;
    height: 30px;
  }

  .prev-slide,
  .next-slide {
    width: 30px;
    height: 30px;
    top: 174px;
  }

  .prev-slide {
    left: 8px;
  }

  .next-slide {
    left: 332px;
  }

  .pagination {
    top: 299px;
    left: 87px;
  }

  .title_ads h1 {
    margin-bottom: 10px;
    font-weight: 700;
    font-size: 24px;
    line-height: 28px;
  }

  .btn-checkbox-1,
  .btn-checkbox-2 {
    height: 40px;
    width: 40px;
    padding: 8px 10px;
    left: 291px;
  }

  .btn-checkbox-1 svg {
    width: 20px;
    height: 22px;
  }

  .btn-checkbox-2 svg {
    width: 20px;
    height: 24px;
  }

  .btn-checkbox-1 {
    top: 0;
  }

  .btn-checkbox-2 {
    top: 51px;
  }

  .title_ads h2 {
    margin: 0;
    margin-bottom: 15px;
    font-weight: 500;
    font-size: 24px;
    line-height: 28px;
  }

  .title_ads span {
    font-weight: 600;
  }

  .button_1-color {
    height: auto;
    width: auto;
    padding: 5px 19px;
    font-weight: 500;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .button_1-color svg {
    width: 15px;
    height: 15px;
  }

  .button_flex {
    margin-bottom: 17px;
  }

  .statys_ads h1 {
    margin-bottom: 0;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
  }

  .indicator-color {
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
  }

  .statys_ads {
    margin-bottom: 15px;
  }

  .data_change_button-color {
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
  }

  .data_change_button {
    height: auto;
    padding: 5px 25px;
  }

  .data_change_button svg {
    width: 15px;
    height: 18px;
  }

  .data_change {
    padding-bottom: 0;
    margin-bottom: 35px;
  }

  .owner_information {
    width: auto;
    flex-direction: column;
    margin-top: 0;
    margin-bottom: 20px;
  }

  .ads_owner {
    display: flex;
    justify-content: space-between;
    width: 335px;
    height: auto;
    border: 0;
  }

  .foto_owner {
    display: inline-block;
    margin-top: 0;
    justify-content: start;
  }

  .foto_owner img {
    width: 80px;
    height: 80px;
  }

  .nomer_owner {
    display: none;
  }

  .ads_owner h1 {
    margin: 0;
    margin-bottom: 15px;
    text-align: right;
    font-weight: 700;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .connection_ads {
    margin: 0;
  }

  .connection_button {
    height: auto;
    width: auto;
    padding: 0;
    border: 0;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #00d39c;
  }

  .connection_button svg {
    display: none;
  }

  .reliability_ads {
    margin: 0;
    justify-content: end;
    align-items: start;
  }

  .reliability_button {
    height: auto;
    width: auto;
    padding: 0;
    border: 0;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #d6c8b5;
  }

  .reliability_button svg {
    display: none;
  }

  .owner__information-wrapper {
    display: flex;
    flex-direction: column;
  }

  .Description {
    box-sizing: border-box;
    padding: 27px 20px;
  }

  .information_ads {
    width: 323px;
    height: auto;
  }

  .block_table {
    flex-wrap: wrap;
  }

  .table_1,
  .table_2,
  .table_3,
  .table_4 {
    width: auto;
  }

  .zagolovok h1 {
    margin: 0;
  }

  .zagolovok {
    margin-bottom: 9px;
    font-weight: 700;
    font-size: 24px;
    line-height: 28px;
    color: #000000;
  }

  .table_2 .row,
  .table_4 .row,
  .table_1 .row,
  .table_3 .row {
    font-size: 14px;
  }

  .table_1 {
    width: 50.8%;
  }

  .table_2,
  .table_4 {
    width: 49.1%;
  }

  .More {
    width: auto;
    height: auto;
    margin-top: 0;
    padding: 20px;
  }

  .More h1 {
    margin: 0;
    margin-bottom: 10px;
    font-weight: 700;
    font-size: 24px;
    line-height: 28px;
    color: #000000;
  }

  .More h2 {
    margin: 0;
    margin-bottom: 10px;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
  }

  .More p {
    margin: 0;
    margin-bottom: 25px;
    font-weight: 400;
    font-size: 16px;
    line-height: 25px;
    color: #000000;
  }

  .options {
    gap: 10px 0;
    margin-bottom: 15px;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .categories {
    margin-top: 0;
    gap: 10px 0;
    flex-wrap: wrap;
  }

  .elements_1 h1 {
    margin: 0;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    color: #000000;
  }

  .technique {
    margin-right: 10px;
  }

  .elements_1 svg {
    width: 26px;
  }

  .technique_button-color {
    height: auto;
    padding: 5px 8px;
    font-weight: 400;
    font-size: 16px;
    line-height: 25px;
    color: #000000;
  }

  .technique_button-color svg {
    width: 25px;
    height: 25px;
  }

  .recommendations {
    width: auto;
  }
  .recommendations h1 {
    margin: 0;
    margin-bottom: 15px;
    font-weight: 700;
    font-size: 24px;
    line-height: 28px;
    color: #000000;
  }

  .bg-white_1 {
    width: 325px;
  }

  .btn-checkbox {
    left: 269px;
  }
}
</style>
