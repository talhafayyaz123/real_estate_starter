<template>
  <header class="header">
    <div class="upper_header">
      <v-container>
        <div class="up_head">
          <ul class="upper_nav">
          <li>
            <a href="">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
              </svg>
            </a>
          </li>
          <li>
            <a href=""> Properties </a>
          </li>
          <li>
            <a href=""> Plot Finder </a>
          </li>
          <li>
            <a href=""> Area Guides </a>
          </li>
          <li>
            <a href=""> Blog </a>
          </li>
          <li>
            <a href=""> Maps </a>
          </li>
          </ul>
          <div class="right_upper_side">
            <a href="">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
              </svg>
            </a>
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
              <div class="nav-link">Home</div>
            </li>
            <li class="nav-items">
              <div class="nav-link">About</div>
            </li>
            <li class="nav-items">
              <div class="nav-link">List Property</div>
            </li>
            <li class="nav-items">
              <div class="nav-link">
                <RouterLink
                  class="text-primary ms-2 mb-1"
                  :to="{ name: 'login' }"
                >
                  Login
                </RouterLink>
              </div>
            </li>
            <li class="nav-items">
              <div class="nav-link auth-nav-btn">Signup</div>
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
