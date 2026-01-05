import {createFileRoute, Outlet, redirect} from '@tanstack/react-router'
import type {JSX} from "react";
import {AdminHeader} from "@/feautres/tenant/admin/components/adminHeader.tsx";
import {AdminSidebarMenu} from "@/feautres/tenant/admin/components/adminSidebarMenu.tsx";
import {SidebarProvider} from "@/components/ui/sidebar.tsx";
import {AdminSidebarTrigger} from "@/feautres/tenant/admin/components/adminSidebarTrigger.tsx";
import {authUserQueryOptions} from "@/feautres/auth/login/hooks/useGetAuthUser.ts";

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
