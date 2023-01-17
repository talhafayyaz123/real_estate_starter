<script setup>
import HeaderComp from '../components/header.vue';
import breadcrumpHeader from '../components/breadcrumpHeader.vue';
import FooterComp from '../components/footer.vue';
import DetailTab from './components/detailTab.vue';
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
const isDialogVisible = ref(false)
const isDialogTwoShow = ref(false)
const currentTab = ref(0)
</script>
<template>
  <!--==================================-->
  <HeaderComp/>
  <!--==================================-->
  <div class="property_deal_page">
      <section class="property_image_sec">
        <div class="container-fluid">
          <VRow class="">
            <VCol md="6" sm="12" cols="12">
              <div class="image_section_left">
                  <div class="overlay"></div>
                  <img src="@images/img/22.png" alt="">
                  <VBtn class="view_all_btn" @click="isDialogVisible = true">View all photos</VBtn>
              </div>
            </VCol>
            <VCol md="6" sm="12" cols="12">
              <div class="card">
                <VRow>
                  <VCol md="6" sm="6" cols="6">
                    <div class="propimage">
                      <img src="@images/img/property/slide3.png" alt="">
                    </div>
                  </VCol>
                  <VCol md="6" sm="6" cols="6">
                    <div class="propimage">
                      <img src="@images/img/property/slide2.png" alt="">
                    </div>
                  </VCol>
                  <VCol md="6" sm="6" cols="6">
                    <div class="propimage">
                      <img src="@images/img/property/slide2.png" alt="">
                    </div>
                  </VCol>
                  <VCol md="6" sm="6" cols="6">
                    <div class="propimage">
                      <img src="@images/img/property/slide1.png" alt="">
                    </div>
                  </VCol>
                </VRow>
              </div>
            </VCol>
          </VRow>
        </div>
      </section>
      <div class="container mt-10 mb-10 property_deal_cont">
        <VRow>
          <VCol lg="8" md="8" cols="12" class="col-left">
            <div class="property_detail">
              <div class="">
                <div class="property_det_tags mb-3">
                  <div class="tag activeTag">Active</div>
                  <!-- <div class="tag inactiveTag">Inactive</div> -->
                  <div class="tag">Featured</div>
                  <div class="tag locationtag"><v-icon size="16" class=""> mdi-location  </v-icon> Canada</div>
                </div>
                <div class="property_detail_heading">
                  <h1>18474 Glenmore St Redford, MI 48240</h1>
                  <p>St Louis, MO 63116</p>
                </div>
              </div>
              <!-- <VDivider/> -->
              <div class="property_tab mt-16">
                <VTabs v-model="currentTab">
                  <VTab>Details</VTab>
                  <VTab>Financials</VTab>
                  <!-- <VTab>Documents</VTab> -->
                  <VTab>Buying Process</VTab>
                  <VTab>Market</VTab>
                </VTabs>
                <VDivider />

                <VWindow  v-model="currentTab"  class="mt-5" >
                  <VWindowItem>
                    <DetailTab/>
                  </VWindowItem>
                  <VWindowItem>
                    <div class="prop_heading mb-5">
      <h2>Financials</h2>
      <VDivider />
    </div>
    <div class="property_about">
      <p>Single Family Home located in Cleveland, Ohio.</p>
      <h2>Details</h2>
      <ul>
        <li>Fully rehabbed in 2019 and recently refreshed. View recent renovations <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=Renovations+%26+Updates+-+1339+E+115th+St%2C+Cleveland%2C+OH+44106+.pdf">here</a></li>
        <li>Under contract for $125.8k and the <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=HouseCanary+Agile+Evaluation+-+1339+E+155th+St%2C+Cleveland+OH+44106-compressed.pdf">HouseCanary Agile Valuation</a> is $132,500</li>
        <li>The Closing Costs have been increased to account for repairs which will be made post-close. The seller is providing the DAO LLC with a $5,000 repair credit. View the <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=Inspection+Report+Repairs+-+1339+E+115th+St%2C+Cleveland%2C+OH+44106+.pdf">Inspection Report Repairs</a> document for more details.</li>
        <li>Colonial style house with front porch</li>
        <li>Interior includes living room, dining room, modern kitchen with newer appliances</li>
        <li>Three bedrooms and one bathroom on second floor, two bedrooms and one bathroom on third floor</li>
        <li>Backyard is completely fenced in</li>
        <li>Closely located to University Circle, Cleveland Clinic, and downtown</li>
      </ul>
      <h2>Property Management and Insurance</h2>
      <p>Managed by FYVE Property Management</p>
      <p>Insurance Policy will come from Shelter Mutual Insurance Company once the property closes</p>
      <h2>Occupancy Status</h2>
      <p>Owners will begin receiving daily rent starting on the same day an investment is made. Rental income is paid via a two-month rent credit provided by the seller at the Property Manager's projected rental rate of $1,550/month.</p>
      <h2>Location Data</h2>
      <p>1/5 Neighborhood Rating on <a href="">Roofstock</a></p>
    </div>
                  </VWindowItem>
                  <VWindowItem>
                    <div class="prop_heading mb-5">
      <h2>Buying proccess</h2>
      <VDivider />
    </div>
    <div class="property_about">
      <p>Single Family Home located in Cleveland, Ohio.</p>
      <h2>Details</h2>
      <ul>
        <li>Fully rehabbed in 2019 and recently refreshed. View recent renovations <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=Renovations+%26+Updates+-+1339+E+115th+St%2C+Cleveland%2C+OH+44106+.pdf">here</a></li>
        <li>Under contract for $125.8k and the <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=HouseCanary+Agile+Evaluation+-+1339+E+155th+St%2C+Cleveland+OH+44106-compressed.pdf">HouseCanary Agile Valuation</a> is $132,500</li>
        <li>The Closing Costs have been increased to account for repairs which will be made post-close. The seller is providing the DAO LLC with a $5,000 repair credit. View the <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=Inspection+Report+Repairs+-+1339+E+115th+St%2C+Cleveland%2C+OH+44106+.pdf">Inspection Report Repairs</a> document for more details.</li>
        <li>Colonial style house with front porch</li>
        <li>Interior includes living room, dining room, modern kitchen with newer appliances</li>
        <li>Three bedrooms and one bathroom on second floor, two bedrooms and one bathroom on third floor</li>
        <li>Backyard is completely fenced in</li>
        <li>Closely located to University Circle, Cleveland Clinic, and downtown</li>
      </ul>
      <h2>Property Management and Insurance</h2>
      <p>Managed by FYVE Property Management</p>
      <p>Insurance Policy will come from Shelter Mutual Insurance Company once the property closes</p>
      <h2>Occupancy Status</h2>
      <p>Owners will begin receiving daily rent starting on the same day an investment is made. Rental income is paid via a two-month rent credit provided by the seller at the Property Manager's projected rental rate of $1,550/month.</p>
      <h2>Location Data</h2>
      <p>1/5 Neighborhood Rating on <a href="">Roofstock</a></p>
    </div>
                  </VWindowItem>
                  <VWindowItem>
                    <div class="prop_heading mb-5">
      <h2>Market</h2>
      <VDivider />
    </div>
    <div class="property_about">
      <p>Single Family Home located in Cleveland, Ohio.</p>
      <h2>Details</h2>
      <ul>
        <li>Fully rehabbed in 2019 and recently refreshed. View recent renovations <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=Renovations+%26+Updates+-+1339+E+115th+St%2C+Cleveland%2C+OH+44106+.pdf">here</a></li>
        <li>Under contract for $125.8k and the <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=HouseCanary+Agile+Evaluation+-+1339+E+155th+St%2C+Cleveland+OH+44106-compressed.pdf">HouseCanary Agile Valuation</a> is $132,500</li>
        <li>The Closing Costs have been increased to account for repairs which will be made post-close. The seller is providing the DAO LLC with a $5,000 repair credit. View the <a href="https://www.dropbox.com/sh/qduhl1kurewwt6t/AABp9wQPsZp1W45cCiKl0GUKa?dl=0&amp;preview=Inspection+Report+Repairs+-+1339+E+115th+St%2C+Cleveland%2C+OH+44106+.pdf">Inspection Report Repairs</a> document for more details.</li>
        <li>Colonial style house with front porch</li>
        <li>Interior includes living room, dining room, modern kitchen with newer appliances</li>
        <li>Three bedrooms and one bathroom on second floor, two bedrooms and one bathroom on third floor</li>
        <li>Backyard is completely fenced in</li>
        <li>Closely located to University Circle, Cleveland Clinic, and downtown</li>
      </ul>
      <h2>Property Management and Insurance</h2>
      <p>Managed by FYVE Property Management</p>
      <p>Insurance Policy will come from Shelter Mutual Insurance Company once the property closes</p>
      <h2>Occupancy Status</h2>
      <p>Owners will begin receiving daily rent starting on the same day an investment is made. Rental income is paid via a two-month rent credit provided by the seller at the Property Manager's projected rental rate of $1,550/month.</p>
      <h2>Location Data</h2>
      <p>1/5 Neighborhood Rating on <a href="">Roofstock</a></p>
    </div>
                  </VWindowItem>
                </VWindow>
              </div>
            </div>
          </VCol> 
          <VCol lg="4" md="4" cols="12" class="col-right">
            <div class="projected_card card mb-2">
                <div class="projected_card_header property_detail_heading">
                  <h2>Starting Price</h2>
                  <span class="price_starting">$ 35.00/Token</span>
                </div>
                <div class="projected_card_body mt-2 mb-5">
                  <ul> 
                    <li>
                      <h3>Projected IRR</h3>
                      <span>13.81%</span>
                    </li>
                    <li>
                      <h3>CoC return</h3>
                      <span>10.81%</span>
                    </li>
                    <li class="">
                        <h3>Valuation</h3>
                        <span>$81,000</span>
                      </li>
                      <li class="">
                        <h3>Asset Type</h3>
                        <span>Residential</span>
                      </li>
                      <li class="">
                        <h3>Year Built</h3>
                        <span>2012</span>
                      </li>
                      <li class="">
                        <h3>Project Developer</h3>
                        <span>Freeman Development</span>
                      </li>
                      <li class="">
                        <h3>Total Area</h3>
                        <span>2432 Sq.ft</span>
                      </li>
                      <li class="">
                        <h3>Token Left <span>(1 Token = 1 Sq.ft)</span></h3>
                        <span>476</span>
                      </li>
                  </ul>
                </div>
                <div class="projected_card_footer">
                  <VBtn size="large" block class="primary-btn">Invest</VBtn>
                </div>
            </div>
          </VCol>
        </VRow>
      </div>
  </div>

  <!--===================================-->
  <FooterComp/>
  <!--===================================-->
  <VDialog v-model="isDialogVisible" class="v-dialog-xl">
      <!-- Dialog close btn -->
      <VBtn icon class="v-dialog-close-btn" @click="isDialogVisible = !isDialogVisible" >
        <VIcon icon="tabler-x" />
      </VBtn>
      <div class="image_modal">
        <swiper :navigation="true" :pagination="{ dynamicBullets: true, }" :modules="modules" class="mySwiper">
          <swiper-slide>
            <div class="prop-img">
              <img src="@images/img/11.png" alt="">
            </div>
          </swiper-slide>
          <swiper-slide>
              <img src="@images/img/22.png" alt="">
          </swiper-slide>
          <swiper-slide>
              <img src="@images/img/33.png" alt="">
          </swiper-slide>
        </swiper>
      </div>
  </VDialog>
</template>


