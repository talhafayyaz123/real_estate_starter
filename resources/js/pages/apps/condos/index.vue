<template>
  <VRow>
    <VCol cols="12">
      <VCard title="Add Condos">
        <VDivider />
        <VCardText class="d-flex flex-wrap py-4 gap-4">
          <VRow>
            <VCol md="6">
              <VTextField label="Tilte" />
            </VCol>
            <VCol md="6">
              <VTextField label="Developer" />
            </VCol>
            <VCol md="6">
              <VTextField label="Occupancy" />
            </VCol>
            <VCol md="6">
              <VTextField label="Address" />
            </VCol>
            <VCol md="6">
              <VSelect label="Location" :items="['All Market', 'UAE', 'Canada', 'USA', 'KSA']" />
            </VCol>
            <VCol md="6">
              <VSelect label="Categroy" :items="['New Listing', 'Hot', 'Featured', 'Coming Soon', 'Sold Out']" />
            </VCol>
            <VCol md="6">
              <VTextField label="Price" prepend-inner-icon="mdi-currency-usd" />
            </VCol>
            <VCol md="6">
              <VTextField label="1 Bed Starting Price" prepend-inner-icon="mdi-currency-usd" />
            </VCol>
            <VCol md="6">
              <VTextField label="2 Bed Starting Price" prepend-inner-icon="mdi-currency-usd" />
            </VCol>
            <VCol md="6">
              <VFileInput chips label="Thumbnail Image" prepend-icon="" prepend-inner-icon="mdi-camera" accept="image/png, image/jpeg, image/bmp"/>
            </VCol>
            <VCol md="12">
              <VTextarea label="Short Description" />
            </VCol>
            
            <VCol md="12">
              <VBtn>Add Condos</VBtn>
            </VCol>
          </VRow>

        </VCardText>
      </VCard>
    </VCol>
  </VRow>
</template>

