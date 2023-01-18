<template>
  <div class="single_page contact_page">
    <!--====================================================================-->
    <HeaderComp />
    <!--====================================================================-->
    <div class="singlepage contact">
      <div class="container">
        <div class="single_heading">
          <h2>Contact Us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <VRow>
          <VCol lg="7">
            <VForm class="mt-10">
              <VRow>
                <VCol cols="6">
                  <VTextField label="Your Name" placeholder="Enter Name" />
                </VCol>

                <VCol cols="6">
                  <VTextField
                    label="Phone Number"
                    type="number"
                    placeholder="Enter Phone Nnmber"
                  />
                </VCol>

                <VCol cols="6">
                  <VTextField
                    label="Email"
                    type="email"
                    placeholder="Enter Email"
                  />
                </VCol>

                <VCol cols="12">
                  <VTextarea label="Message" placeholder="Enter Message" />
                </VCol>

                <VCol cols="12" class="mt-10">
                  <VBtn class="primary-btn" type="submit"> Submit </VBtn>
                </VCol>
              </VRow>
            </VForm>
          </VCol>
          <VCol lg="5">
            <img src="@images/img/contact.png" alt="" />
          </VCol>
        </VRow>
      </div>
    </div>
    <!--====================================================================-->
    <FooterComp />
    <!--====================================================================-->
  </div>
</template>

<script setup>
import HeaderComp from "../components/header.vue";
import FooterComp from "../components/footer.vue";
</script>
