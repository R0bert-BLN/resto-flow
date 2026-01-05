import { createFileRoute } from '@tanstack/react-router'

export const Route = createFileRoute('/_tenant/admin/restaurants')({
  component: RestaurantsPage,
})

function RestaurantsPage() {
  return <div className="font-semibold text-lg">Restaurants Page</div>
}
