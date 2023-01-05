<template>
  <header class="header">
    <div class="upper_header">
      <v-container>
        <div class="up_head">
          <ul class="upper_nav">
            <li  class="upper_nav_item">
              <RouterLink :to="{ name: 'login' }" class="upper_nav_link home_icon"> 
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
                </svg>
              </RouterLink>
            </li>
            <li  class="upper_nav_item">
              <RouterLink :to="{ name: 'login' }" class="upper_nav_link"> Properties </RouterLink>
            </li>
            <li  class="upper_nav_item">
              <RouterLink :to="{ name: 'login' }"  class="upper_nav_link"> Plot Finder </RouterLink>
            </li>
            <li  class="upper_nav_item">
              <RouterLink :to="{ name: 'login' }" class="upper_nav_link"> Area Guides </RouterLink>
            </li>
            <li  class="upper_nav_item">
              <RouterLink :to="{ name: 'login' }" class="upper_nav_link"> Blog </RouterLink>
            </li>
            <li  class="upper_nav_item">
              <RouterLink :to="{ name: 'login' }" class="upper_nav_link"> Maps </RouterLink>
            </li>
          </ul>
          <div class="right_upper_side">
            <div class="search_field">
              <VTextField append-inner-icon="mdi-magnify" placeholder="Property ID"  />
            </div>
            <div class="add_btn_prop">
              <v-btn add_btn_prop>+ Add Property</v-btn>
            </div>
            <div class="user_auth_nav">
              <RouterLink :to="{ name: 'login' }">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
                </svg>
              </RouterLink>
              <RouterLink :to="{ name: 'login' }" class="sign_btn"> Signup </RouterLink>
            </div>
            
          </div>
        </div>
      </v-container>
    </div>
    <div class="bottom_header">
      <VContainer>
        <div class="fut_header">
          <div class="fut_brand">
            <img src="@images/img/logo1.png" />
          </div>
          <div class="fut_nav">
            <ul class="fut_navigation">
              <li class="nav-items">
                <RouterLink class="nav-link" :to="{ name: 'marketplace' }">Marketplace</RouterLink>
              </li>
              <li class="nav-items">|</li>
              <li class="nav-items">
                <RouterLink class="nav-link" :to="{ name: 'login' }">About</RouterLink>
              </li>
              <li class="nav-items">|</li>
              <li class="nav-items">
                <RouterLink class="nav-link" :to="{ name: 'login' }">List Property</RouterLink>
              </li>
            </ul>
          </div>
        </div>
      </VContainer>
    </div>
  </header>
</template>

<script>
export default {
  components: {},
};
</script>
