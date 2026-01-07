import type {ColumnDef} from "@tanstack/react-table";
import type {Restaurant} from "@/feautres/tenant/restaurants/schemas/types.ts";

export const columns: ColumnDef<Restaurant>[] = [
    {
        accessorKey: "name",
        header: "Name"
    },
    {
        accessorKey: "description",
        header: "Description"
    },
    {
        accessorKey: "phone",
        header: "Phone"
    },
];
