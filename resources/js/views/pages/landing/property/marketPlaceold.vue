<template>
  <div class="property-listing">
    <HeaderComp/>
    <breadcrumpHeader/>
    <v-container>
      <div class="property_filter mt-5 mb-5">
        <v-row class="align-end">
            <v-col md="3">
              <label for="">Location</label>
              <v-select placeholder="Location"></v-select>
            </v-col>
            <v-col md="2">
              <label for="">Property Type</label>
              <v-select placeholder="Property Type"></v-select>
            </v-col>
            <v-col md="2">
              <label for="">Current Cash on Cash Return</label>
              <div class="range-input">
                <input type="range"/>
              </div>
            </v-col>
            <v-col md="2">
              <label for="">Current Projected IRR</label>
              <div class="range-input">
                <input type="range"/>
              </div>
            </v-col>
            <v-col md="3">
              <v-btn-toggle borderless class="w-100 justify-center">
                <v-btn value="left">
                  <span class="hidden-sm-and-down">All</span>
                </v-btn>

                <v-btn value="center">
                  <span class="hidden-sm-and-down">New</span>
                </v-btn>

                <v-btn value="right">
                  <span class="hidden-sm-and-down">Upcoming</span>
                </v-btn>
              </v-btn-toggle>
            </v-col>
        </v-row>
      </div>
      <div class="pt-5 pb-5">
        <v-row>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/11.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/22.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/33.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/55.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/55.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/55.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/55.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
          <v-col xl="3" lg="4" md="4">
            <div class="property_card">
              <div class="propCard_header">
                <img src="@images/img/55.png" alt="">
                <div class="overlay"></div>
                <div class="featured_tag">
                  <span>Featured</span>
                </div>
                <div class="newListing_tag">
                  <span>New Listing</span>
                </div>
              </div>
              <div class="propCard_body">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="propCard_footer">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </v-col>
        </v-row>
      </div>
    </v-container>
  </div>
</template>

<script>
import HeaderComp from '../components/header.vue';
import breadcrumpHeader from '../components/breadcrumpHeader.vue';
export default {
  components:{
    HeaderComp,
    breadcrumpHeader
  }
}
</script>

<style>

</style>
