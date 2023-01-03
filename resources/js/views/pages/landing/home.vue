<template>
  <div>
    <!-- ========================================== -->

    <HeaderComponent />
    <!-- ========================================== -->
    <section class="fut_banner">
      <div class="overlay" />
      <VContainer>
        <div class="fut_filters">
          <div class="mb-5">
            <VTabs>
              <VTab title="Buy" />
              <VTab title="Rent" />
              <!-- <v-tab></v-tab> -->
            </VTabs>
          </div>
          <div class="filter">
            <VRow>
              <VCol sm="4">
                <VSelect placeholder="City" />
              </VCol>
              <VCol sm="6">
                <input class="input" placeholder="Location" />
              </VCol>
              <VCol sm="2">
                <VBtn>Search</VBtn>
              </VCol>
            </VRow>
          </div>
        </div>
      </VContainer>
    </section>
    <!-- ========================================== -->
    <section class="listing-property">
      <VContainer>
        <VRow>
          <VCol md="4">
            <div class="card-property">
              <div class="prop-img">
                <img src="@images/img/1.webp" alt="" />
              </div>
              <div class="content">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="bott">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </VCol>
          <VCol md="4">
            <div class="card-property">
              <div class="prop-img">
                <img src="@images/img/1.webp" alt="" />
              </div>
              <div class="content">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="bott">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </VCol>
          <VCol md="4">
            <div class="card-property">
              <div class="prop-img">
                <img src="@images/img/1.webp" alt="" />
              </div>
              <div class="content">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="bott">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </VCol>
          <VCol md="4">
            <div class="card-property">
              <div class="prop-img">
                <img src="@images/img/1.webp" alt="" />
              </div>
              <div class="content">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="bott">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </VCol>
          <VCol md="4">
            <div class="card-property">
              <div class="prop-img">
                <img src="@images/img/1.webp" alt="" />
              </div>
              <div class="content">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="bott">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </VCol>
          <VCol md="4">
            <div class="card-property">
              <div class="prop-img">
                <img src="@images/img/1.webp" alt="" />
              </div>
              <div class="content">
                <div>
                  <h2>1339 E 115th St</h2>
                  <p>Cleveland, OH 44106</p>
                </div>
                <div>
                  <span>8.8% IRR</span>
                  <h2>8.8% CoC</h2>
                </div>
              </div>
              <div class="bott">
                <span>Available: 1,998 tokens at $50</span>
              </div>
            </div>
          </VCol>
        </VRow>
      </VContainer>
    </section>
  </div>
</template>

<script>
import HeaderComponent from "./components/header.vue";

export default {
  components: {
    HeaderComponent,
  },
};
</script>

<route lang="yaml">
meta:
  layout: blank
  action: read
  subject: Auth
  redirectIfLoggedIn: false
</route>
