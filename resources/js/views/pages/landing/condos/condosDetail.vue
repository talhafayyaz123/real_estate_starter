<template>
  <!--====================================================================-->
  <HeaderComp />
  <!--====================================================================-->
  <div class="condos_detail">
    <div class="container">
      <VRow>
        <VCol md="6">
          <div class="condos_det">
            <h2>Centricity Condos</h2>
            <VDivider />
            <ul>
              <li>
                <h5>Address</h5>
                <span>241 Church St Toronto, ON</span>
              </li>
              <li>
                <h5>Prices</h5>
                <h4>$ 595,990+</h4>
              </li>
              <li>
                <h5>Occupancy</h5>
                <span>2027</span>
              </li>
              <li>
                <h5>Developer</h5>
                <span><a href="">Graywood Developments</a></span>
              </li>
              <li>
                <h5>2 Bed Starting</h5>
                <span>$999,990</span>
              </li>
              <li>
                <h5>1 Bed Starting</h5>
                <span>$624,990</span>
              </li>
            </ul>
          </div>
        </VCol>
        <VCol md="6">
          <div class="condos_images">
            <swiper :navigation="true" :pagination="true" :autoplay="{ delay: 5000, disableOnInteraction: false, }"
              :modules="modules" class="property_img_slider">
              <swiper-slide>
                <img src="@images/img/condos/condo2.jpg" alt="">
              </swiper-slide>
              <swiper-slide>
                <img src="@images/img/condos/condo3.jpg" alt="">
              </swiper-slide>
              <swiper-slide>
                <img src="@images/img/condos/condo4.jpg" alt="">
              </swiper-slide>
            </swiper>
          </div>
        </VCol>
      </VRow>
      <VRow class="mt-10">
        <VCol cols="12">
          <div class="condos_detail_tab">
            <div class="condos_tab_header">
              <VTabs v-model="CondosTab" class="v-tabs-pill">
                <VTab>Floor Plans</VTab>
                <VTab>About</VTab>
                <VTab>Appointment</VTab>
                <VTab>Reviews</VTab>
                <VTab>Sales Info</VTab>
                <VTab>Location</VTab>
              </VTabs>
            </div>
            <div class="condos_tab_body condos_tab_detail">
              <VWindow v-model="CondosTab">
                <VWindowItem>
                  <h2>Centricity Condos Condominiums For Sale</h2>
                </VWindowItem>
                <VWindowItem>

                </VWindowItem>
                <VWindowItem>

                </VWindowItem>
                <VWindowItem>

                </VWindowItem>
                <VWindowItem>

                </VWindowItem>
                <VWindowItem>

                </VWindowItem>
              </VWindow>
            </div>
          </div>
        </VCol>
        <VCol md="8">
          <div class="condos_reviews">
            <h2>Leave Your Reviews Here</h2>
            <p>Your email address will not be published. Required fields are marked *</p>
            <VForm>
              <VRow>
                <VCol cols="12">
                  <VTextarea label="Review" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Review Title" />
                </VCol>

                <VCol md="12">
                  <label for="">Select Rating*</label>
                </VCol>

                <VCol md="4" class="text-center">
                  <label for="">Pricing</label>
                  <VRating hover />
                </VCol>
                <VCol md="4" class="text-center">
                  <label for="">Location</label>
                  <VRating hover />
                </VCol>
                <VCol md="4" class="text-center">
                  <label for="">Builder</label>
                  <VRating hover />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Name" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Email" type="email" />
                </VCol>

                <VCol cols="12" class="d-flex gap-4">
                  <VBtn type="submit">
                    Submit
                  </VBtn>
                </VCol>
              </VRow>
            </VForm>
          </div>
        </VCol>
        <VCol md="4">
          <div class="request_info">
            <h2>Request More Information</h2>
            <p>Instant Price List & Sales Info Package</p>
            <VForm class="mt-5">
              <VRow>
                <VCol cols="12">
                  <VTextField label="First Name" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Last Name" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Email" type="email" />
                </VCol>

                <VCol cols="12">
                  <VTextField label="Phone" type="number" />
                </VCol>

                <VCol cols="12">
                  <VSelect :items="items" :rules="[requiredValidator]" label="Are you a Realtor?" name="select"/>
                </VCol>

                <VCol cols="12" class="text-center">
                  <VBtn type="submit">
                    Send
                  </VBtn>
                </VCol>
              </VRow>
            </VForm>
          </div>
        </VCol>
      </VRow>
    </div>
  </div>
  <!--====================================================================-->
  <FooterComp />
  <!--====================================================================-->
</template>

<script setup>
/////////////////////////////////////////////////////////////////////
import HeaderComp from '../components/header.vue';
import FooterComp from '../components/footer.vue';
import breadcrumpHeader from '../components/breadcrumpHeader.vue';
/////////////////////////////////////////////////////////////////////
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Pagination, Navigation, Autoplay } from "swiper";
const modules = [Pagination, Navigation, Autoplay];
/////////////////////////////////////////////////////////////////////
const CondosTab = ref(0);
const items = ['Yes', 'No']
/////////////////////////////////////////////////////////////////////

</script>
