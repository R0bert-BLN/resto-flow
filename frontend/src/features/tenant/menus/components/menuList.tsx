import type {JSX} from "react";
import {DataTable} from "@/components/elements/dataTable.tsx";
import type {Menu} from "@/features/tenant/menus/schemas/types.ts";
import {columns} from "@/features/tenant/menus/components/table/columns.tsx";

interface MenuListProps {
  menus: Menu[];
}

export default function MenuList({menus}: MenuListProps): JSX.Element {
  return (
    <div className="container mx-auto py-10 px-5">
      <DataTable columns={columns} data={menus} onRowClick={(row) => alert(row.name)}/>
    </div>
  )
}
