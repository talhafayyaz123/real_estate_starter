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
      { title: 'Condos Listing', to: 'apps-condos-list' },
    ],
  },
  {
    title: 'Blogs',
    icon: { icon: 'tabler-address-book' },
    children: [
      { title: 'Add Blog', to: 'apps-blogs' },
      { title: 'Blogs Listing', to: 'apps-blogs-list' },
    ],
  },
]
