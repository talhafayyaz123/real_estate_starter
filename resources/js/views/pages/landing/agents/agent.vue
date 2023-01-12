<template>
  <div class="single-page broker-page">
      <!--====================================================================-->
      <HeaderComp/>
      <!--====================================================================-->
      <div class="singlepage brokers">
        <div class="container">
          <div class="single_heading">
            <h2>Our Trusted Brokers</h2>
            <p>A fully-compliant, fractional, tokenized ownership model allows investors from around the world to buy into the US real estate market for the first time. Blockchain-based.</p>
          </div>
          <VRow class="mt-10">
            <VCol md="4">
              <div class="brokers_card">
                <div class="brokers_card_header">
                  <img src="@images/img/broker-1.png" alt="">
                </div>
                <div class="brokers_card_body">
                  <h2>Wade Warren</h2>
                  <ul class="brokers_detail">
                    <li>
                      <div>Unit Sold :</div>
                      <div>188</div>
                    </li>
                    <li>
                      <div>Rating :</div>
                      <div>4.5</div>
                    </li>
                    <li>
                      <div>Reviews :</div>
                      <div>184</div>
                    </li>
                  </ul>
                </div>
                <div class="brokers_card_footer">
                  <VBtn>Book a Call</VBtn>
                </div>
              </div>
            </VCol>
            <VCol md="4">
              <div class="brokers_card">
                <div class="brokers_card_header">
                  <img src="@images/img/broker-2.png" alt="">
                </div>
                <div class="brokers_card_body">
                  <h2>Wade Warren</h2>
                  <ul class="brokers_detail">
                    <li>
                      <div>Unit Sold :</div>
                      <div>188</div>
                    </li>
                    <li>
                      <div>Rating :</div>
                      <div>4.5</div>
                    </li>
                    <li>
                      <div>Reviews :</div>
                      <div>184</div>
                    </li>
                  </ul>
                </div>
                <div class="brokers_card_footer">
                  <VBtn>Book a Call</VBtn>
                </div>
              </div>
            </VCol>
            <VCol md="4">
              <div class="brokers_card">
                <div class="brokers_card_header">
                  <img src="@images/img/broker-3.png" alt="">
                </div>
                <div class="brokers_card_body">
                  <h2>Wade Warren</h2>
                  <ul class="brokers_detail">
                    <li>
                      <div>Unit Sold :</div>
                      <div>188</div>
                    </li>
                    <li>
                      <div>Rating :</div>
                      <div>4.5</div>
                    </li>
                    <li>
                      <div>Reviews :</div>
                      <div>184</div>
                    </li>
                  </ul>
                </div>
                <div class="brokers_card_footer">
                  <VBtn>Book a Call</VBtn>
                </div>
              </div>
            </VCol>
          </VRow>
        </div>
      </div>
      <!--====================================================================-->
      <FooterComp/>
      <!--====================================================================-->
  </div>
</template>

<script setup>
import HeaderComp from '../components/header.vue';
import FooterComp from '../components/footer.vue';
</script>
