<template>
  <header class="header">
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
  </header>
</template>

<script>
export default {
  components: {},
};
</script>
