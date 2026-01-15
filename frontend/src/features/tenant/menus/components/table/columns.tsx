import type {ColumnDef} from "@tanstack/react-table";
import {Trash2} from "lucide-react";
import type {Menu} from "@/features/tenant/menus/schemas/types.ts";
import Actions from "@/features/tenant/menus/components/table/actions.tsx";

export const columns: ColumnDef<Menu>[] = [
  {
    accessorKey: "name",
    header: "Name",
  },
  {
    accessorKey: "description",
    header: "Description",
  },
  {
    accessorKey: "items",
    header: "Items",
    cell: ({row}) => {
      return (
        <div className="flex items-center gap-2">
          <span className="pl-3">{row.original.categories?.length ?? 0}</span>
        </div>
      );
    }
  },
  {
    id: "actions",
    header: () => <div className="text-center">Actions</div>,
    cell: ({row}) => <Actions menu={row.original}/>
  }
];
