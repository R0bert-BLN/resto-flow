import {
  Sidebar,
  SidebarContent,
  SidebarGroup,
  SidebarGroupContent,
  SidebarMenu,
  SidebarMenuItem,
  SidebarMenuButton
} from "@/components/ui/sidebar";
import type {JSX} from "react";
import {CircleGauge, House, Salad, Settings, SquareMenu, Users, UtensilsCrossed} from "lucide-react";
import {Link} from "@tanstack/react-router";

export function AdminSidebarMenu(): JSX.Element {
  const items = [
    {
      title: "Dashboard",
      url: "/admin/dashboard",
      icon: CircleGauge,
    },
    {
      title: "Menu",
      url: "/admin/menu",
      icon: UtensilsCrossed,
    },
    {
      title: "Staff",
      url: "/admin/staff",
      icon: Users,
    },
    {
      title: "Tables",
      url: "/admin/tables",
      icon: Salad,
    },
    {
      title: "Orders",
      url: "/admin/orders",
      icon: SquareMenu,
    },
    {
      title: "Restaurants",
      url: "/admin/restaurants",
      icon: House,
    },
    {
      title: "Settings",
      url: "/admin/settings",
      icon: Settings,
    },
  ]

  return (
    <Sidebar className="mt-17">
      <SidebarContent className="bg-zinc-900 text-white pt-16">
        <SidebarGroup>
          <SidebarGroupContent>
            <SidebarMenu className="gap-1.5">
              {items.map((item) => (
                <SidebarMenuItem key={item.title}>
                  <SidebarMenuButton
                    asChild
                    className="hover:bg-zinc-800 hover:text-white active:bg-zinc-800 active:text-white"
                  >
                    <Link to={item.url} activeProps={{className: "!bg-red-700 !text-white"}}>
                      <item.icon className="!h-5 !w-5"/>
                      <span className="text-base pl-2">{item.title}</span>
                    </Link>
                  </SidebarMenuButton>
                </SidebarMenuItem>
              ))}
            </SidebarMenu>
          </SidebarGroupContent>
        </SidebarGroup>
      </SidebarContent>
    </Sidebar>
  )
}
