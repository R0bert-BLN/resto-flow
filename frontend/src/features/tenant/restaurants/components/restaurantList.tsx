import type {JSX} from "react";
import {DataTable} from "@/components/elements/dataTable.tsx";
import {columns} from "@/features/tenant/restaurants/components/columns.tsx";
import type {Restaurant} from "@/features/tenant/restaurants/schemas/types.ts";

interface RestaurantListProps {
  restaurants: Restaurant[];
}

export default function RestaurantList({restaurants}: RestaurantListProps): JSX.Element {
  return (
    <div className="container mx-auto py-10 px-5">
      <DataTable columns={columns} data={restaurants} onRowClick={(row) => alert(row.name)}/>
    </div>
  )
}
