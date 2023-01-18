<script setup>
import { requiredValidator } from "@validators";
import { PerfectScrollbar } from "vue3-perfect-scrollbar";

const props = defineProps({
  isCondoOpen: {
    type: Boolean,
    required: true,
  },
});

const emit = defineEmits(["update:isCondoOpen", "condoData"]);

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

// 👉 drawer close
const closeNavigationDrawer = () => {
  emit("update:isCondoOpen", false);
  nextTick(() => {
    refForm.value?.reset();
    refForm.value?.resetValidation();
  });
};

const onSubmit = () => {
  refForm.value?.validate().then(({ valid }) => {
    if (valid) {
      emit("condoData", {
        price: price.value,
        location: location.value,
        category: category.value,
        area_size: area_size.value,
        status: status.value,
        occupency: occupency.value,
        title: title.value,
        description: description.value,
      });
      emit("update:isCondoOpen", false);
      nextTick(() => {
        refForm.value?.reset();
        refForm.value?.resetValidation();
      });
    }
  });
};

const handleDrawerModelValueUpdate = (val) => {
  emit("update:isCondoOpen", val);
};
</script>

<template>
  <VNavigationDrawer
    temporary
    :width="400"
    location="end"
    class="scrollable-content"
    :model-value="props.isCondoOpen"
    @update:model-value="handleDrawerModelValueUpdate"
  >
    <!-- 👉 Title -->
    <div class="d-flex align-center pa-6 pb-1">
      <h6 class="text-h6">Add Condo</h6>

      <VSpacer />

      <!-- 👉 Close btn -->
      <VBtn
        variant="tonal"
        color="default"
        icon
        size="32"
        class="rounded"
        @click="closeNavigationDrawer"
      >
        <VIcon size="18" icon="tabler-x" />
      </VBtn>
    </div>

    <PerfectScrollbar :options="{ wheelPropagation: false }">
      <VCard flat>
        <VCardText>
          <!-- 👉 Form -->
          <VForm ref="refForm" v-model="isFormValid" @submit.prevent="onSubmit">
            <VRow>
              <VCol cols="12">
                <VTextField
                  v-model="title"
                  :rules="[requiredValidator]"
                  label="Title"
                />
              </VCol>

              <VCol cols="12">
                <VSelect
                  v-model="location"
                  label="Market"
                  :rules="[requiredValidator]"
                  :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']"
                />
              </VCol>

              <!-- 👉 Email -->
              <VCol cols="12">
                <VTextField
                  v-model="area_size"
                  :rules="[requiredValidator]"
                  label="Area Size (sq.ft)"
                  type="number"
                />
              </VCol>

              <VCol cols="12">
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

              <!-- 👉 company -->
              <VCol cols="12">
                <VTextField
                  v-model="price"
                  :rules="[requiredValidator]"
                  label="Price"
                />
              </VCol>

              <!-- 👉 Country -->

              <!-- 👉 Plan -->

              <VCol cols="12">
                <VTextField
                  v-model="occupency"
                  label="Occupency"
                  type="number"
                />
              </VCol>

              <Vcol cols="12" class="pl-4">
                <VTextarea
                  v-model="descrption"
                  rows="3"
                  cols="33"
                  label="Description"
                  placeholder="Description"
                />
              </Vcol>

              <!-- 👉 Status -->
              <VCol cols="12">
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

              <!-- 👉 Submit and Cancel -->
              <VCol cols="12">
                <VBtn type="submit" class="me-3"> Submit </VBtn>
                <VBtn
                  type="reset"
                  variant="tonal"
                  color="secondary"
                  @click="closeNavigationDrawer"
                >
                  Cancel
                </VBtn>
              </VCol>
            </VRow>
          </VForm>
        </VCardText>
      </VCard>
    </PerfectScrollbar>
  </VNavigationDrawer>
</template>
