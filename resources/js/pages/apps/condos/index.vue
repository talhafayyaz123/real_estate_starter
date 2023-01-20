<template>
  <VRow>
    <VCol cols="12">
      <VCard title="Add Condo">
        <VDivider />
        <VCardText class="d-flex flex-wrap py-4 gap-4">
          <VForm ref="refForm" v-model="isFormValid" @submit.prevent="onSubmit">
            <VRow>
              <VCol md="6">
                <VTextField
                  v-model="title"
                  :rules="[requiredValidator]"
                  label="Title"
                />
              </VCol>
              <VCol md="6">
                <VSelect
                  v-model="location"
                  label="Market"
                  :rules="[requiredValidator]"
                  :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                />
              </VCol>
              <VCol md="6">
                <VTextField
                  v-model="area_size"
                  :rules="[requiredValidator]"
                  label="Area Size (sq.ft)"
                  type="number"
                />
              </VCol>
              <VCol md="6">
                <VSelect
                  v-model="category"
                  label="Category"
                  :rules="[requiredValidator]"
                  :items="[
                    'New Listing',
                    'Hot',
                    'Featured',
                    'Coming Soon',
                    'Sold Out',
                  ]"
                />
              </VCol>
              <VCol md="6">
                <VTextField
                  v-model="price"
                  :rules="[requiredValidator]"
                  label="Price"
                />
              </VCol>
              <VCol md="6">
                <VTextField
                  v-model="occupency"
                  label="Occupency"
                  type="number"
                />
              </VCol>
              <VCol md="6">
                <VTextarea
                  v-model="description"
                  rows="3"
                  cols="33"
                  label="Description"
                  placeholder="Description"
                />
              </VCol>
              <VCol md="6">
                <VSelect
                  v-model="status"
                  label="Select Status"
                  :rules="[requiredValidator]"
                  :items="[
                    { title: 'Active', value: 'true' },
                    { title: 'Inactive', value: 'false' },
                  ]"
                />
              </VCol>

              <VCol md="12">
                <VBtn type="submit">
                  {{ route.params.id == 0 ? "Add" : "Update" }} Condo
                </VBtn>
              </VCol>
            </VRow>
          </VForm>
        </VCardText>
      </VCard>
    </VCol>
  </VRow>
</template>

<script setup>
import { useRoute } from "vue-router";
import { requiredValidator } from "@validators";
import { CondosListStore } from "@/views/apps/condo/useCondosListStore";
const route = useRoute();
const isFormValid = ref(false);
const refForm = ref();
const location = ref("");
const price = ref("");
const area_size = ref("");
const category = ref("");
const occupency = ref("");
const description = ref("");
const title = ref("");
const status = ref();
const condosListStore = CondosListStore();
const router = useRouter();

const onSubmit = () => {
  refForm.value?.validate().then(({ valid }) => {
    if (valid) {
      const uuid = route.params.id;
      let condoData = {
        price: price.value,
        location: location.value,
        category: category.value,
        area_size: area_size.value,
        status: status.value,
        occupency: occupency.value,
        title: title.value,
        description: description.value,
      };
      if (uuid == 0) {
         condosListStore.addCondo(condoData);
        nextTick(() => {
          refForm.value?.reset();
          refForm.value?.resetValidation();
        });
        router.push({ path: "/apps/condos/list" });
      }
    }
  });
};
</script>
