import { createFileRoute } from '@tanstack/react-router'
import RestaurantList from "@/features/tenant/restaurants/components/restaurantList.tsx";
import {useGetRestaurants} from "@/features/tenant/restaurants/hooks/restaurantQuery.ts";

export const Route = createFileRoute('/_tenant/admin/restaurants')({
  component: RestaurantsPage,
})

// TODO: Finish restaurants logic
function RestaurantsPage() {
  const {data: restaurants} = useGetRestaurants({});

  return (
    <div>
      <RestaurantList restaurants={restaurants}/>
    </div>
  )
}
