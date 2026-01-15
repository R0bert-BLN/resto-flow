import { createFileRoute } from '@tanstack/react-router'
import {useGetMenus} from "@/features/tenant/menus/hooks/menuQuery.ts";
import MenuHeader from "@/features/tenant/menus/components/menuHeader.tsx";
import MenuList from "@/features/tenant/menus/components/menuList.tsx";

export const Route = createFileRoute('/_tenant/admin/menu/')({
  component: MenuPage,
})

function MenuPage() {
  const {data: menus, filters} = useGetMenus({});

  return (
    <div>
      <MenuHeader setFilter={filters.setFilter}/>
      <MenuList menus={menus}/>
    </div>
  )
}
