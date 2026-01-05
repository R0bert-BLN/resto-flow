import * as React from 'react'
import {Outlet, createRootRouteWithContext} from '@tanstack/react-router'
import {TanStackRouterDevtools} from "@tanstack/router-devtools";
import {Toaster} from "sonner";
import type {QueryClient} from "@tanstack/react-query";
import type {User} from "@/feautres/users/schemas/types.ts";

interface RouterContext {
  queryClient: QueryClient;
  auth: {
    user: User | null | undefined;
    isAuthenticated: boolean;
    isLoading: boolean;
  }
}

export const Route = createRootRouteWithContext<RouterContext>()({
  component: RootComponent,
})

// TODO: Add guards
// TODO: Add global loading and errors
// TODO: Fix refresh redirect auth

function RootComponent() {
  return (
    <React.Fragment>
      <Outlet/>
      <Toaster position="top-right" richColors/>
      <TanStackRouterDevtools/>
    </React.Fragment>
  )
}
