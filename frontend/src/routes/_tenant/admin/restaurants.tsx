import { createFileRoute } from '@tanstack/react-router'
import RestaurantList from "@/feautres/tenant/restaurants/components/restaurantList.tsx";

export const Route = createFileRoute('/_tenant/admin/restaurants')({
  component: RestaurantsPage,
})

function RestaurantsPage() {
  return (
    <>
      <div className="font-semibold text-lg">Restaurants Page</div>
      <RestaurantList/>
    </>
  )
}
