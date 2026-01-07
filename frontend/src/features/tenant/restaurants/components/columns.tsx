import type {ColumnDef} from "@tanstack/react-table";
import type {Restaurant} from "@/features/tenant/restaurants/schemas/types.ts";
import {Phone, Trash2} from "lucide-react";

export const columns: ColumnDef<Restaurant>[] = [
  {
    accessorKey: "name",
    header: "Name",
  },
  {
    accessorKey: "description",
    header: "Description",
  },
  {
    accessorKey: "phone",
    header: "Phone",
    cell: ({row}) => {
      if (!row.original.phone) {
        return <span>-</span>
      }

      return (
        <div className="flex items-center gap-2">
          <Phone className="h-4 w-4 text-gray-500"/>
          <span>{row.original.phone}</span>
        </div>
      );
    }
  },
  {
    id: "actions",
    header: () => <div className="text-center">Actions</div>,

    cell: ({row}) => {
      const restaurant = row.original;

      return (
        <div className="flex items-center justify-center w-full">
          <button
            onClick={(event) => {
              event.preventDefault();
              event.stopPropagation();
              alert("Delete " + restaurant.id);
            }}
            className="p-x rounded-full hover:bg-red-50 transition-colors"
          >
            <Trash2 className="h-5 w-5 text-red-500 hover:text-red-600 cursor-pointer"/>
          </button>
        </div>
      );
    }
  }
];
