<template>
  <div class="single-page blogs-page">
    <!--====================================================================-->
    <HeaderComp/>
    <!--====================================================================-->
    <div class="singlepage blogs">
      <div class="container">
        <div class="single_heading">
          <h2>Blog Posts</h2>
          <p>A fully-compliant, fractional, tokenized ownership model allows investors from around the world to buy into the US real estate market for the first time. Blockchain-based.</p>
        </div>
        <VRow class="mt-10">
          <VCol md="6">
            <div class="show_list">
              <h2>Showing 3 results</h2>
            </div>
          </VCol>
          <VCol md="6">
            <div class="Grid_View">
              <VTabs v-model="GridTab">
                <VTab><v-icon size="24" class=""> mdi-view-grid-outline</v-icon></VTab>
                <VTab><v-icon size="24" class=""> mdi-format-list-bulleted-square</v-icon></VTab>
              </VTabs>
            </div>
          </VCol>
        </VRow>
        <VWindow v-model="GridTab">
          <VWindowItem>
            <VRow class="mt-5">
              <VCol lg="4">
                <div class="blog_card">
                  <div class="blog_card_header">
                    <img src="@images/img/blog1.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                  </div>
                  <div class="blog_card_footer">
                    <RouterLink :to="{name:'blogs-detail'}">View Post</RouterLink>
                  </div>
                </div>
              </VCol>
              <VCol lg="4">
                <div class="blog_card">
                  <div class="blog_card_header">
                    <img src="@images/img/blog2.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                  </div>
                  <div class="blog_card_footer">
                    <a href="">View Post</a>
                  </div>
                </div>
              </VCol>
              <VCol lg="4">
                <div class="blog_card">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 4.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                  </div>
                  <div class="blog_card_footer">
                    <a href="">View Post</a>
                  </div>
                </div>
              </VCol>
              <VCol lg="4">
                <div class="blog_card">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 5.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                  </div>
                  <div class="blog_card_footer">
                    <a href="">View Post</a>
                  </div>
                </div>
              </VCol>
              <VCol lg="4">
                <div class="blog_card">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 6.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                  </div>
                  <div class="blog_card_footer">
                    <a href="">View Post</a>
                  </div>
                </div>
              </VCol>
              <VCol lg="4">
                <div class="blog_card">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 3.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                  </div>
                  <div class="blog_card_footer">
                    <a href="">View Post</a>
                  </div>
                </div>
              </VCol>
            </VRow>
          </VWindowItem>
          <VWindowItem>
            <VRow class="mt-5">
              <VCol lg="12">
                <div class="blog_card_list">
                  <div class="blog_card_header">
                    <img src="@images/img/blog1.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                    <div class="view_post">
                      <a href="" class="">View Post</a>
                    </div>
                  </div>
                </div>
              </VCol>
              <VCol lg="12">
                <div class="blog_card_list">
                  <div class="blog_card_header">
                    <img src="@images/img/blog2.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                    <div class="view_post">
                      <a href="" class="">View Post</a>
                    </div>
                  </div>
                </div>
              </VCol>
              <VCol lg="12">
                <div class="blog_card_list">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 4.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                    <div class="view_post">
                      <a href="" class="">View Post</a>
                    </div>
                  </div>
                </div>
              </VCol>
              <VCol lg="12">
                <div class="blog_card_list">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 5.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                    <div class="view_post">
                      <a href="" class="">View Post</a>
                    </div>
                  </div>
                </div>
              </VCol>
              <VCol lg="12">
                <div class="blog_card_list">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 6.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                    <div class="view_post">
                      <a href="" class="">View Post</a>
                    </div>
                  </div>
                </div>
              </VCol>
              <VCol lg="12">
                <div class="blog_card_list">
                  <div class="blog_card_header">
                    <img src="@images/img/slide 3.png" alt="">
                  </div>
                  <div class="blog_card_body">
                    <h2><a href="">Integer Maecenas Eget Viverra</a></h2>
                    <p>Aenean eleifend ante maecenas pulvinar montes lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim. Venenatis eget adipiscing luctus lorem.</p>
                    <div class="blog_meta">
                      <div class="blog_auther">
                        <a href="">
                          <img src="@images/img/broker 1.png" alt="">
                          <span>Joanna Wellick</span>
                        </a>
                      </div>
                      <div class="blog_date">
                        <p>June 28, 2018</p>
                      </div>
                    </div>
                    <div class="view_post">
                      <a href="" class="">View Post</a>
                    </div>
                  </div>
                </div>
              </VCol>
            </VRow>
          </VWindowItem>
        </VWindow>
        
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
import { Grid } from 'swiper';


const GridTab = ref(0);
</script>
