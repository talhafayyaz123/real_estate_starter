<script setup>
import { useGenerateImageVariant } from '@core/composable/useGenerateImageVariant'
import { VNodeRenderer } from '@layouts/components/VNodeRenderer'
import { themeConfig } from '@themeConfig'
import authV2ForgotPasswordIllustrationDark from '@images/pages/auth-v2-forgot-password-illustration-dark.png'
import authV2ForgotPasswordIllustrationLight from '@images/pages/auth-v2-forgot-password-illustration-light.png'
import authV2MaskDark from '@images/pages/misc-mask-dark.png'
import authV2MaskLight from '@images/pages/misc-mask-light.png'
import axios from '@axios'
import {
  emailValidator,
  requiredValidator,
} from '@validators'
import { useToast } from "vue-toastification";

const route = useRoute()
const router = useRouter()
const toast = useToast();

const email = ref('')
const refVForm = ref()

const authThemeImg = useGenerateImageVariant(authV2ForgotPasswordIllustrationLight, authV2ForgotPasswordIllustrationDark)
const authThemeMask = useGenerateImageVariant(authV2MaskLight, authV2MaskDark)

const errors = ref({
  email: undefined,
})

const forgotPassword = () => {
  axios.post('/api/forgot-password', {
    email: email.value,
  }).then(response => {
    // const { data: { data } } = response
    // Redirect to `to` query if exist or redirect to index route
    // router.replace(route.query.to ? String(route.query.to) : '/')
    toast.success("A Password Reset link has been sent!", {
      timeout: 3000
    });
    return null
  }).catch(e => {
    const { errors: formErrors } = e.response.data

    errors.value = formErrors
    console.error(e.response.data)
  })

}
const onSubmit = () => {
  refVForm.value?.validate().then(({ valid: isValid }) => {
    if (isValid)
      forgotPassword()
  })
}
</script>

<template>
  <div class="realestate_auth">
    <img class="bottomimage" src="@images/img/auth_bottom.png" alt="" />
    <div class="realestate_form">
      <div class="realestate_form_box">
        <div class="text-center"><img src="@images/img/logo/logo.png" alt="" /></div>
        <h2>Forgot Password?</h2>
        <VForm ref="refVForm" @submit.prevent="onSubmit">
          <VRow>
            <!-- email -->
            <VCol cols="12">
              <label for=""  class="input_label">Email Address</label>
              <VTextField single-line v-model="email" :rules="[requiredValidator, emailValidator]" :error-messages="errors.email"
                label="Email" type="email" />
            </VCol>

            <!-- Reset link -->
            <VCol cols="12" class="mt-2">
              <VBtn block type="submit">
                Send Reset Link
              </VBtn>
            </VCol>

            <!-- back to login -->
            <VCol cols="12">
              <RouterLink class="d-flex align-center justify-center" :to="{ name: 'login' }">
                <VIcon icon="tabler-chevron-left" class="flip-in-rtl" />
                <span>Back to login</span>
              </RouterLink>
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
