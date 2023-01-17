<script setup>
import { useAppAbility } from '@/plugins/casl/useAppAbility'
import AuthProvider from '@/views/pages/authentication/AuthProvider.vue'
import axios from '@axios'

import { useGenerateImageVariant } from '@core/composable/useGenerateImageVariant'
import authV2LoginIllustrationBorderedDark from '@images/pages/auth-v2-login-illustration-bordered-dark.png'
import authV2LoginIllustrationBorderedLight from '@images/pages/auth-v2-login-illustration-bordered-light.png'
import authV2LoginIllustrationDark from '@images/pages/auth-v2-login-illustration-dark.png'
import authV2LoginIllustrationLight from '@images/pages/auth-v2-login-illustration-light.png'
import authV2MaskDark from '@images/pages/misc-mask-dark.png'
import authV2MaskLight from '@images/pages/misc-mask-light.png'
import { VNodeRenderer } from '@layouts/components/VNodeRenderer'
import { themeConfig } from '@themeConfig'
import {
  emailValidator,
  requiredValidator,
} from '@validators'
import { VForm } from 'vuetify/components';
import { useToast } from "vue-toastification";


const authThemeImg = useGenerateImageVariant(authV2LoginIllustrationLight, authV2LoginIllustrationDark, authV2LoginIllustrationBorderedLight, authV2LoginIllustrationBorderedDark, true)
const authThemeMask = useGenerateImageVariant(authV2MaskLight, authV2MaskDark)
const isPasswordVisible = ref(false)
const route = useRoute()
const router = useRouter()
const toast = useToast();
// const email = ref('admin@demo.com')
const email = ref()
// const password = ref('admin')
const password = ref()
const rememberMe = ref()
const loginFormRef = ref()

const ability = useAppAbility()

const errors = ref({
  email: undefined,
  password: undefined,
})



const onSubmit = () => {
  loginFormRef.value?.validate().then(({ valid: isValid }) => {
    if (isValid)
      login()
  })
}

const login = () => {
  axios.post('/api/login', {
    email: email.value,
    password: password.value,
    rememberMe: rememberMe.value
  }).then(response => {
    const { data: { data } } = response
    const { accessToken, userData } = data
    // localStorage.setItem('userAbilities', JSON.stringify(userData.ability))

    // ability.update(userAbilities)
    ability.update(userData.ability)
    localStorage.setItem('userData', JSON.stringify(userData))
    localStorage.setItem('accessToken', accessToken)

    // Redirect to `to` query if exist or redirect to index route
    router.replace(route.query.to ? String(route.query.to) : '/')
    toast.success("User has been login successfully!", {
      timeout: 3000
    });

  }).catch(e => {
    // const { errors: formErrors } = e.response.data
    // errors.value = formErrors
    toast.error("The provided credentials are incorrect!", {
      timeout: 3000
    });
  })
}
</script>

<template>
  <div class="realestate_auth">
    <img class="bottomimage" src="@images/img/auth_bottom.png" alt=""/>
    <div class="realestate_form">
      <div class="realestate_form_box">
        <!-- <h2>Login</h2> -->
        <div class="text-center"><img src="@images/img/logo/logo.png" alt=""/></div>
        <VForm ref="loginFormRef" @submit.prevent="onSubmit">
          <VRow>
            <!-- email -->
            <VCol cols="12">
              <label for="" class="input_label">Email Address</label>
              <VTextField single-line v-model="email" label="E.g. yourname@company.com" type="email" :rules="[requiredValidator, emailValidator]"
                :error-messages="errors.email" />
            </VCol>

            <!-- password -->
            <VCol cols="12">
              <label for="" class="input_label">Password</label>
              <VTextField single-line v-model="password" label="Enter your password" :rules="[requiredValidator]"
                :type="isPasswordVisible ? 'text' : 'password'" :error-messages="errors.password"
                :append-inner-icon="isPasswordVisible ? 'tabler-eye-off' : 'tabler-eye'"
                @click:append-inner="isPasswordVisible = !isPasswordVisible" />
            </VCol>
            <VCol cols="12" class="mt-3">
              <VBtn block type="submit">
                Login
              </VBtn>
            </VCol>
            <VCol cols="12">
              <div class="text-center mt-1">
                <!-- <VCheckbox v-model="rememberMe" label="Remember me" /> -->
                <RouterLink class="text-primary ms-2 mb-1" :to="{ name: 'forgot-password' }">
                  Forgot Password?
                </RouterLink>
              </div>
            </VCol>
            <VCol cols="12">
              <div class="join_us">
                <p>Don’t have an account <RouterLink :to="{name:'register'}">Join us today</RouterLink></p>
                <span>Regulated by the DFSA</span>
              </div>
            </VCol>
          </VRow>
        </VForm>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
@use "@core-scss/template/pages/page-auth.scss";
</style>

<route lang="yaml">
meta:
  layout: blank
  action: read
  subject: Auth
  redirectIfLoggedIn: true
</route>
