export default [
  { heading: 'Property' },
  {
    title: 'Property',
    icon: { icon: 'tabler-user' },
    children: [
      { title: 'List', to: 'apps-property-list' },
      { title: 'Condos', to: 'apps-condos-list' },
    ],
  },
  {
    title: 'Condos',
    icon: { icon: 'tabler-user' },
    children: [
      { title: 'Add Condos', to: 'apps-condos' },
      { title: 'Listing', to: 'apps-condos-list' },
    ],
  },
]
