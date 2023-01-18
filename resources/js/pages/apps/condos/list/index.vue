<script setup>
import AddNewCondo from "@/views/apps/condo/add/AddNewCondo.vue";
import { CondosListStore } from "@/views/apps/condo/useCondosListStore";
import { avatarText } from "@core/utils/formatters";

const condosListStore = CondosListStore();
const searchQuery = ref("");
const selectedRole = ref();
const selectedPlan = ref();
const selectedStatus = ref();
const rowPerPage = ref(10);
const currentPage = ref(1);
const totalPage = ref(1);
const totalUsers = ref(0);
const condos = ref([]);

// 👉 Fetching condos
const fetchCondos = () => {
  condosListStore
    .fetchCondos({
      q: searchQuery.value,
      status: selectedStatus.value,
      plan: selectedPlan.value,
      role: selectedRole.value,
      perPage: rowPerPage.value,
      currentPage: currentPage.value,
    })
    .then((response) => {
      condos.value = response.data.data.condos.data;
      totalPage.value = response.data.totalPage;
      totalUsers.value = response.data.totalUsers;
    })
    .catch((error) => {
      console.error(error);
    });
};

watchEffect(fetchCondos);

// 👉 watching current page
watchEffect(() => {
  if (currentPage.value > totalPage.value) currentPage.value = totalPage.value;
});

const resolveUserStatusVariant = (stat) => {
  if (stat === "pending") return "warning";
  if (stat === 1) return "success";
  if (stat === 0) return "secondary";

  return "success";
};

const resolveStatusText = (val) => {
  if (val === 1) return "Active";
  if (val === 0) return "Inactive";

  return "Active";
};

const isAddNewCondoPopupVisible = ref(false);

// 👉 watching current page
watchEffect(() => {
  if (currentPage.value > totalPage.value) currentPage.value = totalPage.value;
});

// 👉 Computing pagination data
const paginationData = computed(() => {
  const firstIndex = condos.value.length
    ? (currentPage.value - 1) * rowPerPage.value + 1
    : 0;
  const lastIndex =
    condos.value.length + (currentPage.value - 1) * rowPerPage.value;

  return `Showing ${firstIndex} to ${lastIndex} of ${totalUsers.value} entries`;
});

const addNewCondo = (condoData) => {
  condosListStore.addCondo(condoData);
  // refetch Condos
  fetchCondos();
};

const deleteCondo = (uuid) => {
  condosListStore.deleteCondo(uuid);
  fetchCondos();
};

const CondoStatusChange = (uuid, status) => {
  condosListStore.CondoStatusChange({
    condo_uuid: uuid,
    status: status,
  });
  fetchCondos();
};
</script>

<template>
  <section>
    <VRow>
      <VCol cols="12">
        <VCard title="Condos List">
          <!-- 👉 Filters -->
          <VDivider />

          <VCardText class="d-flex flex-wrap py-4 gap-4">
            <div class="me-3" style="width: 80px">
              <VSelect
                v-model="rowPerPage"
                density="compact"
                variant="outlined"
                :items="[10, 20, 30, 50]"
              />
            </div>

            <VSpacer />

            <div
              class="app-user-search-filter d-flex align-center flex-wrap gap-4"
            >
              <!-- 👉 Search  -->
              <div style="width: 10rem">
                <VTextField
                  v-model="searchQuery"
                  placeholder="Search"
                  density="compact"
                />
              </div>

              <!-- 👉 Export button -->
              <VBtn
                variant="tonal"
                color="secondary"
                prepend-icon="tabler-screen-share"
              >
                Export
              </VBtn>

              <!-- 👉 Add user button -->
              <VBtn
                prepend-icon="tabler-plus"
                @click="isAddNewCondoPopupVisible = true"
              >
                Add Condo
              </VBtn>
            </div>
          </VCardText>

          <VDivider />

          <VTable class="text-no-wrap">
            <!-- 👉 table head -->
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Address</th>
                <th scope="col">Location</th>
                <th scope="col">Category</th>
                <th scope="col">Occupency</th>
                <th scope="col">Area (Sq.ft)</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <!-- 👉 table body -->
            <tbody>
              <tr
                v-for="condo in condos"
                :key="condo.id"
                style="height: 3.75rem"
              >
                <!-- 👉 User -->
                <td>
                  <div class="d-flex align-center">
                    <VAvatar variant="tonal" class="me-3" size="38">
                      <VImg
                        v-if="condo.condos_image"
                        :src="condo.condos_image"
                      />
                    </VAvatar>
                  </div>
                </td>

                <!-- 👉 Role -->
                <td>
                  <span class="text-capitalize text-base">
                    {{ condo.title }}</span
                  >
                </td>

                <!-- 👉 Plan -->
                <td>
                  <span
                    class="text-capitalize text-base font-weight-semibold"
                    >{{ condo.address }}</span
                  >
                </td>

                <!-- 👉 Billing -->
                <td>
                  <span class="text-base">{{ condo.location }}</span>
                </td>
                <td>
                  <span class="text-base">{{ condo.category }}</span>
                </td>
                <td>
                  <span class="text-base">{{ condo.occupency }}</span>
                </td>
                <td>
                  <span class="text-base">{{ condo.area_size }}</span>
                </td>
                <td>
                  <span class="text-base">{{ condo.price }}</span>
                </td>
                <!-- 👉 Status -->
                <td>
                  <VChip
                    label
                    :color="resolveUserStatusVariant(condo.status)"
                    size="small"
                    class="text-capitalize"
                  >
                    {{ resolveStatusText(condo.status) }}
                  </VChip>
                </td>

                <!-- 👉 Actions -->
                <td class="text-center" style="width: 5rem">
                  <VBtn icon size="x-small" color="default" variant="text">
                    <VIcon size="22" icon="tabler-edit" />
                  </VBtn>

                  <VBtn
                    icon
                    size="x-small"
                    color="default"
                    variant="text"
                    @click="deleteCondo(condo.uuid)"
                  >
                    <VIcon size="22" icon="tabler-trash" />
                  </VBtn>

                  <VBtn icon size="x-small" color="default" variant="text">
                    <VIcon size="22" icon="tabler-dots-vertical" />

                    <VMenu activator="parent">
                      <VList>
                        <VListItem
                          :title="condo.status == 1 ? 'Inactive' : 'Active'"
                          @click="CondoStatusChange(condo.uuid, condo.status)"
                        />
                      </VList>
                    </VMenu>
                  </VBtn>
                </td>
              </tr>
            </tbody>

            <!-- 👉 table footer  -->
            <tfoot v-show="!condos.length">
              <tr>
                <td colspan="7" class="text-center">No data available</td>
              </tr>
            </tfoot>
          </VTable>

          <VDivider />

          <VCardText
            class="d-flex align-center flex-wrap justify-space-between gap-4 py-3 px-5"
          >
            <span class="text-sm text-disabled">
              {{ paginationData }}
            </span>

            <VPagination
              v-model="currentPage"
              size="small"
              :total-visible="5"
              :length="totalPage"
            />
          </VCardText>
        </VCard>
      </VCol>
    </VRow>

    <!-- 👉 Add New User -->
    <AddNewCondo
      v-model:isCondoOpen="isAddNewCondoPopupVisible"
      @condo-data="addNewCondo"
    />
  </section>
</template>

<style lang="scss">
.app-user-search-filter {
  inline-size: 31.6rem;
}

.text-capitalize {
  text-transform: capitalize;
}

.user-list-name:not(:hover) {
  color: rgba(var(--v-theme-on-background), var(--v-high-emphasis-opacity));
}
</style>
