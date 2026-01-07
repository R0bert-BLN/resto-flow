import type {JSX} from "react";
import {useGetRestaurants} from "@/feautres/tenant/restaurants/hooks/restaurantQuery.ts";
import {DataTable} from "@/components/elements/dataTable.tsx";
import {columns} from "@/feautres/tenant/restaurants/components/columns.tsx";

export default function RestaurantList(): JSX.Element {
    const {data: restaurants} = useGetRestaurants();

    return (
        <div className="container mx-auto py-10 px-5">
            {restaurants && <DataTable columns={columns} data={restaurants}/>}
        </div>
    )
}
