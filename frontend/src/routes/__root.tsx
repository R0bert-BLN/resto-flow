import * as React from 'react'
import {Outlet, createRootRouteWithContext} from '@tanstack/react-router'
import type {QueryClient} from "@tanstack/react-query";
import type {User} from "@/features/users/schemas/types.ts";
import {Spinner} from "@/components/ui/spinner.tsx";

interface RouterContext {
  queryClient: QueryClient;
  auth: {
    user: User | null | undefined;
  }
}

export const Route = createRootRouteWithContext<RouterContext>()({
  component: RootComponent,
  pendingComponent: () => (
    <div className="h-screen w-full flex items-center justify-center bg-gray-50">
      <div className="flex flex-col items-center gap-4">
        <Spinner className="h-10 w-10 text-red-600"/>
      </div>
    </div>
  )
})

// TODO: Add guards
// TODO: Add global errors page
// TODO: change redirect with error page for unauthorized access

function RootComponent() {
  return (
    <React.Fragment>
      <Outlet/>
    </React.Fragment>
  )
}
