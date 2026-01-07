import {createFileRoute, Outlet, redirect, useRouteContext} from '@tanstack/react-router'
import {type JSX, useEffect} from "react";
import {AdminHeader} from "@/features/tenant/admin/components/adminHeader.tsx";
import {AdminSidebarMenu} from "@/features/tenant/admin/components/adminSidebarMenu.tsx";
import {SidebarProvider} from "@/components/ui/sidebar.tsx";
import {AdminSidebarTrigger} from "@/features/tenant/admin/components/adminSidebarTrigger.tsx";
import {authUserQueryOptions, useGetAuthUser} from "@/features/auth/login/hooks/useGetAuthUser.ts";
import {useRestaurantStore} from "@/stores/restaurantStore.ts";

export const Route = createFileRoute('/_tenant/admin')({
  beforeLoad: async ({context}) => {
    const queryClient = context.queryClient;
    const user = await queryClient.ensureQueryData(authUserQueryOptions);

    if (!user) {
      throw redirect({to: '/login'})
    }

    return {user};
  },
  component: AdminLayout,
})

function AdminLayout(): JSX.Element {
  const {user} = useGetAuthUser();
  const {activeRestaurantId, setRestaurantId}= useRestaurantStore();

  useEffect(() => {
    if (!activeRestaurantId && user?.restaurants && user.restaurants.length > 0) {
      setRestaurantId(user.restaurants[0].id);
    }
  }, [user, activeRestaurantId, setRestaurantId])

  return (
    <SidebarProvider>
      <div className="flex flex-col min-h-screen w-full">
        <div className="z-50">
          <AdminHeader/>
        </div>

        <div className="flex flex-1 overflow-hidden">
          <AdminSidebarMenu/>

          <div className="flex flex-col w-full overflow-hidden">
            <AdminSidebarTrigger/>

            <div className="flex-1 overflow-y-auto p-6">
              <Outlet/>
            </div>
          </div>
        </div>
      </div>
    </SidebarProvider>
  )
}
