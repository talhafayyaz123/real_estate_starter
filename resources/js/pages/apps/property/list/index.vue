<script setup>
import AddNewUserDrawer from "@/views/apps/user/list/AddNewUserDrawer.vue";
import { useUserListStore } from "@/views/apps/user/useUserListStore";
import { avatarText } from "@core/utils/formatters";

const userListStore = useUserListStore();
const searchQuery = ref("");
const selectedRole = ref();
const selectedPlan = ref();
const selectedStatus = ref();
const rowPerPage = ref(10);
const currentPage = ref(1);
const totalPage = ref(1);
const totalUsers = ref(0);
const users = ref([]);

// 👉 Fetching users
const fetchUsers = () => {
  userListStore
    .fetchProperty({
      q: searchQuery.value,
      status: selectedStatus.value,
      plan: selectedPlan.value,
      role: selectedRole.value,
      perPage: rowPerPage.value,
      currentPage: currentPage.value,
    })
    .then((response) => {
      users.value = response.data.data.properties.data;
      totalPage.value = response.data.totalPage;
      totalUsers.value = response.data.totalUsers;
    })
    .catch((error) => {
      console.error(error);
    });
};

watchEffect(fetchUsers);

// 👉 watching current page
watchEffect(() => {
  if (currentPage.value > totalPage.value) currentPage.value = totalPage.value;
});

const resolveUserRoleVariant = (role) => {
  if (role === "subscriber")
    return {
      color: "warning",
      icon: "tabler-user",
    };
  if (role === "author")
    return {
      color: "success",
      icon: "tabler-circle-check",
    };
  if (role === "maintainer")
    return {
      color: "primary",
      icon: "tabler-chart-pie-2",
    };
  if (role === "editor")
    return {
      color: "info",
      icon: "tabler-pencil",
    };
  if (role === "admin")
    return {
      color: "secondary",
      icon: "tabler-device-laptop",
    };

  return {
    color: "primary",
    icon: "tabler-user",
  };
};

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

const isAddNewUserDrawerVisible = ref(false);

// 👉 watching current page
watchEffect(() => {
  if (currentPage.value > totalPage.value) currentPage.value = totalPage.value;
});

// 👉 Computing pagination data
const paginationData = computed(() => {
  const firstIndex = users.value.length
    ? (currentPage.value - 1) * rowPerPage.value + 1
    : 0;
  const lastIndex =
    users.value.length + (currentPage.value - 1) * rowPerPage.value;

  return `Showing ${firstIndex} to ${lastIndex} of ${totalUsers.value} entries`;
});

const addNewUser = (userData) => {
  userListStore.addProperty(userData);
  // refetch User
  fetchUsers();
};

const deleteProperty = (uuid) => {
  userListStore.deleteProperty(uuid);
  fetchUsers();
};

const updatePropertyStatus = (uuid, status) => {
  userListStore.propertyStatusChange({
    property_uuid: uuid,
    status: status,
  });
  fetchUsers();
};
</script>

<template>
  <section>
    <VRow>
      <VCol cols="12">
        <VCard title="Property List">
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
                @click="isAddNewUserDrawerVisible = true"
              >
                Add Property
              </VBtn>
            </div>
          </VCardText>

          <VDivider />

          <VTable class="text-no-wrap">
            <!-- 👉 table head -->
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Property ID</th>
                <th scope="col">Market</th>
                <th scope="col">Land</th>
                <th scope="col">Type</th>
                <th scope="col">Area (Sq.ft)</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <!-- 👉 table body -->
            <tbody>
              <tr v-for="user in users" :key="user.id" style="height: 3.75rem">
                <!-- 👉 User -->
                <td>
                  <div class="d-flex align-center">
                    <VAvatar
                      variant="tonal"
                      :color="resolveUserRoleVariant(user.role).color"
                      class="me-3"
                      size="38"
                    >
                      <VImg
                        v-if="user.property_image"
                        :src="user.property_image"
                      />
                    </VAvatar>
                  </div>
                </td>

                <!-- 👉 Role -->
                <td>
                  <span class="text-capitalize text-base">
                    {{ user.property_id }}</span
                  >
                </td>

                <!-- 👉 Plan -->
                <td>
                  <span
                    class="text-capitalize text-base font-weight-semibold"
                    >{{ user.market }}</span
                  >
                </td>

                <!-- 👉 Billing -->
                <td>
                  <span class="text-base">{{ user.land }}</span>
                </td>
                <td>
                  <span class="text-base">{{ user.type }}</span>
                </td>
                <td>
                  <span class="text-base">{{ user.area_size }}</span>
                </td>
                <td>
                  <span class="text-base">{{ user.price }}</span>
                </td>

                <!-- 👉 Status -->
                <td>
                  <VChip
                    label
                    :color="resolveUserStatusVariant(user.status)"
                    size="small"
                    class="text-capitalize"
                  >
                    {{ resolveStatusText(user.status) }}
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
                    @click="deleteProperty(user.uuid)"
                  >
                    <VIcon size="22" icon="tabler-trash" />
                  </VBtn>

                  <VBtn icon size="x-small" color="default" variant="text">
                    <VIcon size="22" icon="tabler-dots-vertical" />

                    <VMenu activator="parent">
                      <VList>
                        <VListItem
                          :title="user.status == 1 ? 'Inactive' : 'Active'"
                          @click="updatePropertyStatus(user.uuid, user.status)"
                        />
                      </VList>
                    </VMenu>
                  </VBtn>
                </td>
              </tr>
            </tbody>

            <!-- 👉 table footer  -->
            <tfoot v-show="!users.length">
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
    <AddNewUserDrawer
      v-model:isDrawerOpen="isAddNewUserDrawerVisible"
      @user-data="addNewUser"
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
