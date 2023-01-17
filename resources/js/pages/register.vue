<script setup>
import { VForm } from 'vuetify/components'
import authV2RegisterIllustrationBorderedDark from '@images/pages/auth-v2-register-illustration-bordered-dark.png'
import authV2RegisterIllustrationBorderedLight from '@images/pages/auth-v2-register-illustration-bordered-light.png'
import authV2RegisterIllustrationDark from '@images/pages/auth-v2-register-illustration-dark.png'
import authV2RegisterIllustrationLight from '@images/pages/auth-v2-register-illustration-light.png'
import authV2MaskDark from '@images/pages/misc-mask-dark.png'
import authV2MaskLight from '@images/pages/misc-mask-light.png'
import { useAppAbility } from '@/plugins/casl/useAppAbility'
import AuthProvider from '@/views/pages/authentication/AuthProvider.vue'
import axios from '@axios'
import { useGenerateImageVariant } from '@core/composable/useGenerateImageVariant'
import { VNodeRenderer } from '@layouts/components/VNodeRenderer'
import { themeConfig } from '@themeConfig'
import {
  alphaDashValidator,
  emailValidator,
  requiredValidator,
  confirmedValidator
} from '@validators'
import { useToast } from "vue-toastification";

const refVForm = ref()
const name = ref('')
const email = ref('')
const password = ref('')
const c_password = ref('')
const privacyPolicies = ref(true)

// Router
const route = useRoute()
const router = useRouter()
const toast = useToast();

// Ability
const ability = useAppAbility()

// Form Errors
const errors = ref({
  name: undefined,
  email: undefined,
  password: undefined,
  c_password: undefined,
})

const register = () => {
  axios.post('/api/register', {
    name: name.value,
    email: email.value,
    password: password.value,
    c_password: c_password.value,
    role: 'admin'
  }).then(response => {
    const { data: { data } } = response
    const { accessToken, userData } = data

    // localStorage.setItem('userAbilities', JSON.stringify(userAbilities))
    ability.update(userData.ability)
    localStorage.setItem('userData', JSON.stringify(userData))
    localStorage.setItem('accessToken', accessToken)

    // Redirect to `to` query if exist or redirect to index route
    router.replace(route.query.to ? String(route.query.to) : '/')
    toast.success("User has been registered successfully!", {
      timeout: 5000
    });
    return null
  }).catch(e => {
    const { errors: formErrors } = e.response.data

    errors.value = formErrors
    console.error(e.response.data)
  })
}

const imageVariant = useGenerateImageVariant(authV2RegisterIllustrationLight, authV2RegisterIllustrationDark, authV2RegisterIllustrationBorderedLight, authV2RegisterIllustrationBorderedDark, true)
const authThemeMask = useGenerateImageVariant(authV2MaskLight, authV2MaskDark)
const isPasswordVisible = ref(false)
const isConfirmPasswordVisible = ref(false)


const onSubmit = () => {
  refVForm.value?.validate().then(({ valid: isValid }) => {
    if (isValid)
      register()
  })
}
</script>

<template>
  <div class="realestate_auth">
    <img class="bottomimage" src="@images/img/auth_bottom.png" alt="" />
    <div class="realestate_form">
      <div class="realestate_form_box">
        <div class="text-center">
          <RouterLink :to="{ name: 'home' }"><img src="@images/img/logo/logo.png" alt="" /></RouterLink>
        </div>
        <h2>Register</h2>
        <VForm ref="refVForm" @submit.prevent="onSubmit">
          <VRow>
            <!-- Username -->
            <VCol cols="12">
              <label for="" class="input_label">Username</label>
              <VTextField single-line v-model="name" :rules="[requiredValidator, alphaDashValidator]"
                :error-messages="errors.name" label="Username" />
            </VCol>

            <!-- email -->
            <VCol cols="12">
              <label for="" class="input_label">Email Address</label>
              <VTextField single-line v-model="email" :rules="[requiredValidator, emailValidator]"
                :error-messages="errors.email" label="Email" type="email" />
            </VCol>

            <!-- password -->
            <VCol cols="12">
              <label for="" class="input_label">Password</label>
              <VTextField single-line v-model="password" :rules="[requiredValidator]" label="Password"
                :type="isPasswordVisible ? 'text' : 'password'" :error-messages="errors.password"
                :append-inner-icon="isPasswordVisible ? 'tabler-eye-off' : 'tabler-eye'"
                @click:append-inner="isPasswordVisible = !isPasswordVisible" />
            </VCol>

            <!-- Confirm password -->
            <VCol cols="12">
              <label for="" class="input_label">Confirm Password</label>
              <VTextField single-line v-model="c_password"
                :rules="[requiredValidator, confirmedValidator(password, c_password)]" label="Confirm Password"
                :error-messages="errors.c_password" :type="isConfirmPasswordVisible ? 'text' : 'password'"
                :append-inner-icon="isConfirmPasswordVisible ? 'tabler-eye-off' : 'tabler-eye'"
                @click:append-inner="isConfirmPasswordVisible = !isConfirmPasswordVisible" />
            </VCol>

            <VCol cols="12">
              <div class="d-flex align-center">
                <VCheckbox id="privacy-policy" v-model="privacyPolicies" inline />
                <VLabel for="privacy-policy" class="pb-1" style="opacity: 1;">
                  <span class="me-1">I agree to</span>
                  <a href="javascript:void(0)" class="text-primary">privacy policy & terms</a>
                </VLabel>
              </div>
            </VCol>

            <VCol cols="12">
              <VBtn block type="submit">
                Sign up
              </VBtn>
            </VCol>
            <VCol cols="12">
              <div class="join_us">
                <p>Already have an account?&nbsp; <RouterLink :to="{ name: 'login' }">Sign in</RouterLink>
                </p>
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
