import {useQuery} from "@tanstack/react-query";
import {restaurantService} from "@/feautres/tenant/restaurants/services/restaurantService.ts";

export const useGetRestaurants = () => {
    const query = useQuery({
        queryKey: ["restaurants"],
        queryFn: restaurantService.getRestaurants,
    });

    return {
        ...query,
        data: query.data?.data,
        meta: query.data?.meta,
        links: query.data?.links
    }
}

export const useGetRestaurant = (id: string) => {
    return useQuery({
        queryKey: ["restaurants", id],
        queryFn: () => restaurantService.getRestaurant(id),
        enabled: !!id,
    })
}
