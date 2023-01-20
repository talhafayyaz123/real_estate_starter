<template>
  <VRow>
    <VCol cols="12">
      <VCard :title="`${type} Condo`">
        <VDivider />
        <VCardText class="d-flex flex-wrap py-4 gap-4">
          <VForm ref="refForm" v-model="isFormValid" @submit.prevent="onSubmit">
            <VRow>
              <VCol md="6">
                <VTextField
                  v-model="condoTitle"
                  :rules="[requiredValidator]"
                  label="Title"
                />
              </VCol>
              <VCol md="6">
                <VSelect
                  v-model="condoLocation"
                  label="Market"
                  :rules="[requiredValidator]"
                  :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                />
              </VCol>
              <VCol md="6">
                <VTextField
                  v-model="condoAreaSize"
                  :rules="[requiredValidator]"
                  label="Area Size (sq.ft)"
                  type="number"
                />
              </VCol>
              <VCol md="6">
                <VSelect
                  v-model="condoCategory"
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
                  v-model="condoPrice"
                  :rules="[requiredValidator]"
                  label="Price"
                />
              </VCol>
              <VCol md="6">
                <VTextField
                  v-model="condoOccupency"
                  label="Occupency"
                  type="number"
                />
              </VCol>
              <VCol md="6">
                <VTextarea
                  v-model="condoDescription"
                  rows="3"
                  cols="33"
                  label="Description"
                  placeholder="Description"
                />
              </VCol>
              <VCol md="6">
                <VSelect
                  v-model="condoStatus"
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
const condoLocation = ref("");
const condoPrice = ref("");
const condoAreaSize = ref("");
const condoCategory = ref("");
const condoOccupency = ref("");
const condoDescription = ref("");
const condoTitle = ref("");
const condoStatus = ref();
const condosListStore = CondosListStore();
const router = useRouter();
const condoData = ref();
const condoUuid = ref();
const type = ref();

type.value = "Add";

if (route.params.id != 0) {
  type.value = "Update";
  condosListStore.fetchCondo(route.params.id).then((response) => {
    condoData.value = response.data.data.condo;
    const {
      price,
      location,
      category,
      occupency,
      description,
      title,
      status,
      area_size,
      uuid,
    } = condoData.value;

    condoLocation.value = location;
    condoPrice.value = price;
    condoAreaSize.value = area_size;
    condoCategory.value = category;
    condoOccupency.value = occupency;
    condoDescription.value = description;
    condoTitle.value = title;
    condoStatus.value = resolveStatusText(status);
    condoUuid.value = uuid;
  });
}

const onSubmit = () => {
  refForm.value?.validate().then(({ valid }) => {
    if (valid) {
      const uuid = route.params.id;
      let condoData = {
        price: condoPrice.value,
        location: condoLocation.value,
        category: condoCategory.value,
        area_size: condoAreaSize.value,
        status: condoStatus.value,
        occupency: condoOccupency.value,
        title: condoTitle.value,
        description: condoDescription.value,
      };
      if (uuid == 0) {
        condosListStore.addCondo(condoData);
      } else {
        let newObj = { ...condoData, uuid: condoUuid.value };
        condosListStore.updateCondo(newObj);
      }
      nextTick(() => {
        refForm.value?.reset();
        refForm.value?.resetValidation();
      });
      router.push({ path: "/apps/condos/list" });
    }
  });
};

const resolveStatusText = (val) => {
  if (val == 1) return "Active";
  if (val == 0) return "Inactive";
  return "Active";
};
</script>
