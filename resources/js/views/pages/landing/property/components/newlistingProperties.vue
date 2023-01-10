<template>
  <div class="property_list real_Section">
    <div class="container">
      <VRow>
        <VCol lg="4">
          <div class="property-card">
              <div class="prop-img">
                <div class="property_tags">
                  <div class="tag_prop">New Listing</div>
                  <!-- <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div> -->
                </div>
                <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>

                <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3500, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                  <swiper-slide>
                    <div class="prop-img">
                      <img src="@images/img/22.png" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/33.png" alt="">
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/55.png" alt="">
                  </swiper-slide>
                </swiper>
              </div>
              <div class="property_body">
                <h2>18474 Glenmore St Redford, MI 48240</h2>
                <div class="property_price">
                  <h3><span>$</span> 1,853,219</h3>
                  <p>315 investors</p>
                </div>
                <ul class="property_det">
                  <li>
                    <p>Available Unit</p><span>188</span>
                  </li>
                  <li>
                    <p>Rating </p><span>4.5</span>
                  </li>
                  <li>
                    <p>Capital ROI :</p><span>+11.84 %</span>
                  </li>
                </ul>
              </div>
            </div>
        </VCol>
        <VCol lg="4">
          <div class="property-card">
              <div class="prop-img">
                <div class="property_tags">
                  <div class="tag_prop">New Listing</div>
                  <!-- <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div> -->
                </div>
                <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>

                <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 4000, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                  <swiper-slide>
                    <div class="prop-img">
                      <img src="@images/img/22.png" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/33.png" alt="">
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/55.png" alt="">
                  </swiper-slide>
                </swiper>
              </div>
              <div class="property_body">
                <h2>18474 Glenmore St Redford, MI 48240</h2>
                <div class="property_price">
                  <h3><span>$</span> 1,853,219</h3>
                  <p>315 investors</p>
                </div>
                <ul class="property_det">
                  <li>
                    <p>Available Unit</p><span>188</span>
                  </li>
                  <li>
                    <p>Rating </p><span>4.5</span>
                  </li>
                  <li>
                    <p>Capital ROI :</p><span>+11.84 %</span>
                  </li>
                </ul>
              </div>
            </div>
        </VCol>
        <VCol lg="4">
          <div class="property-card">
              <div class="prop-img">
                <div class="property_tags">
                  <div class="tag_prop">New Listing</div>
                  <!-- <div class="hot_tag"><v-icon size="24" class=""> mdi-fire</v-icon></div> -->
                </div>
                <div class="wishlist"><v-icon size="24"> mdi-heart-outline  </v-icon></div>
                <span class="loction_tag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</span>

                <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 3000, disableOnInteraction: false, }" :modules="modules" class="property_img_slider">
                  <swiper-slide>
                    <div class="prop-img">
                      <img src="@images/img/22.png" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/33.png" alt="">
                  </swiper-slide>
                  <swiper-slide>
                  <img src="@images/img/55.png" alt="">
                  </swiper-slide>
                </swiper>
              </div>
              <div class="property_body">
                <h2>18474 Glenmore St Redford, MI 48240</h2>
                <div class="property_price">
                  <h3><span>$</span> 1,853,219</h3>
                  <p>315 investors</p>
                </div>
                <ul class="property_det">
                  <li>
                    <p>Available Unit</p><span>188</span>
                  </li>
                  <li>
                    <p>Rating </p><span>4.5</span>
                  </li>
                  <li>
                    <p>Capital ROI :</p><span>+11.84 %</span>
                  </li>
                </ul>
              </div>
            </div>
        </VCol>
      </VRow>
    </div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination , Navigation ,Autoplay} from "swiper";
const modules = [
  Pagination,
  Navigation,
  Autoplay
];
</script>

<style>

</style>
